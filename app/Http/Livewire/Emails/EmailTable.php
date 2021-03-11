<?php

namespace App\Http\Livewire\Emails;

use App\Models\User;
use App\Models\Emails;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\DB;

class EmailTable extends Component
{
	use WithPagination;

	public $correo, $asunto, $mensaje, $enviar, $correoDelete, $email_id, $blockButtonUpdate;

	public $search;
	public $search2;
	public $sortField;
    public $sortAsc = true;

	public $destinatarios = [];
	public $messageSatisfactory = "";
	public $messageError = "";

	public $showEmailIsOpemModal = false;
	public $createEmailIsOpemModal = false;
	public $updateEmailIsOpemModal = false;
	public $deleteEmailIsOpemModal = false;

	public function showEmail($id)
	{
		$this->correo = Emails::findOrFail($id);
		$this->showEmailIsOpemModal = true;
	}

	public function openModalCreateEmail()
	{
		$this->createEmailIsOpemModal = true;
	}

	public function selectDestinatarios($id)
	{
		$userDesti = User::findOrFail($id);
		$this->destinatarios[] = [
				'id' 			=> $userDesti->id,
				'firstname'		=> $userDesti->firstname,
				'lastname'		=> $userDesti->lastname,
				'email'			=> $userDesti->email
			];
		$this->search = "";
	}

	public function storeEmail()
	{
		$this->messageError = "";
		$this->validate([
            'asunto'   => 'required|max:100',
            'mensaje'    => 'required|max:500',
            'destinatarios'    => 'required',
        ]);

		if ($this->enviar) {
        	$this->enviar = 1;
        }else{
        	$this->enviar = 0;
        }

        $emailCreate = Emails::create([
        	'asunto'	=> $this->asunto,
        	'mensaje'	=> $this->mensaje,
        	'status'	=> $this->enviar,
        	'id_user'	=> auth()->user()->id,
        ]);



        $arrayDesEma = [];
        foreach ($this->destinatarios as $key => $destinoEmail) {
        	$arrayDesEma[] = [
        			'id_email' => $emailCreate->id,
    				'id_destinatario' => $destinoEmail['id']
        		];
        }

        DB::table('destinationsemails')->insert($arrayDesEma);
        $this->resetInput();
	}

	public function sendEmail($id)
	{
		$sendEmail = Emails::findOrFail($id);
		$sendEmail->status = 1;
		$sendEmail->save();

	}

	public function openModalDeleteEmail($id)
	{
		$this->correoDelete = Emails::findOrFail($id);
		$this->deleteEmailIsOpemModal = true;
	}

	public function daleteEmail()
	{
		if($this->correoDelete){
			$this->correoDelete->destinoEmail()->detach();
			$this->correoDelete->delete();
            $this->messageSatisfactory = "El correo fue eliminado correctamente";
        }

        $this->resetInput();
	}

	public function openModalUpdateEmail($id)
	{
		$correoUpdate = Emails::findOrFail($id);
		$this->email_id = $correoUpdate->id;
		$this->asunto = $correoUpdate->asunto;
		$this->mensaje = $correoUpdate->mensaje;

		foreach ($correoUpdate->destinoEmail as $key => $destion) {
			$this->destinatarios[] = [
				'id' 			=> $destion->id,
				'firstname'		=> $destion->firstname,
				'lastname'		=> $destion->lastname,
				'email'			=> $destion->email
			];
		}

		$this->updateEmailIsOpemModal = true;
	}

	public function updateEmail()
	{
		$this->messageError = "";
		$this->validate([
            'asunto'   => 'required|max:100',
            'mensaje'    => 'required|max:500',
            'destinatarios'    => 'required',
        ]);

		if ($this->enviar) {
        	$this->enviar = 1;
        }else{
        	$this->enviar = 0;
        }

		$emailUpdate = Emails::findOrFail($this->email_id);
		$emailUpdate->asunto = $this->asunto;
		$emailUpdate->mensaje = $this->mensaje;
		$emailUpdate->status = $this->enviar;
		$emailUpdate->save();

		$emailUpdate->destinoEmail()->detach();

		$arrayDesEma = [];
        foreach ($this->destinatarios as $key => $destinoEmail) {
        	$arrayDesEma[] = [
        			'id_email' => $emailUpdate->id,
    				'id_destinatario' => $destinoEmail['id']
        		];
        }

        DB::table('destinationsemails')->insert($arrayDesEma);

        $this->blockButtonUpdate = $this->enviar;

		$this->messageSatisfactory = "El usuario fue actualizado correctamente";
	}

	public function resetInput()
	{
		$this->correo = null;
		$this->asunto = null;
		$this->mensaje = null;
		$this->enviar = null;
		$this->search = null;
		$this->destinatarios = [];
		$this->correoDelete = [];
	}

	public function closedModals()
	{
		$this->showEmailIsOpemModal = false;
		$this->createEmailIsOpemModal = false;
		$this->deleteEmailIsOpemModal = false;
		$this->updateEmailIsOpemModal = false;
		$this->correo = "";
		$this->messageSatisfactory = "";
		$this->messageError = "";
		$this->resetErrorBag();
    	$this->resetValidation();
		$this->resetInput();
	}
    public function render()
    {
        return view('livewire.emails.email-table', [
        	'emails' => Emails::paginate(10),
        	'users' => User::where(function ($query) {
                $query->where('firstname', 'like', '%' . $this->search . '%')
                    ->orWhere('lastname', 'like', '%' . $this->search . '%')
                    ->orWhere('email', 'like', '%' . $this->search . '%');
            })
            ->get(),

            'emails' => Emails::where(function ($query) {
                $query->where('asunto', 'like', '%' . $this->search2 . '%')
                    ->orWhere('mensaje', 'like', '%' . $this->search2 . '%');
                    //->orWhere('email', 'like', '%' . $this->search . '%');
            })
            ->paginate(10),
        ]);
    }
}
