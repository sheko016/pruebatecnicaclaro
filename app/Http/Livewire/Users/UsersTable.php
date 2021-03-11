<?php

namespace App\Http\Livewire\Users;

use Carbon\Carbon;
use App\Models\User;
use App\Models\States;
use Livewire\Component;
use App\Models\Parishes;
use Livewire\WithPagination;
use App\Models\Municipalitys;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\UserStoreRequest;

class UsersTable extends Component
{
	use WithPagination;

	public $firstname, $lastname, $identificationDocument, $birthDate, $telephone, $email, $idState, $idMunicipality, $idParishes;
	public $delete_user_id, $estado, $municipio, $parroquia, $update_user_id;
	public $deleteUserIsOpemModal = false;
	public $updateUserIsOpemModal = false;
	public $createUserIsOpemModal = false;
	public $messageSatisfactory = "";
	public $messageError = "";
	public $search;
    public $sortField;
    public $sortAsc = true;

	public function openModalCreateUser()
	{
		$this->createUserIsOpemModal = true;
	}

	public function storeUser()
	{
		$this->messageError = "";
		$this->validate([
            'firstname'   => 'required|max:100',
            'lastname'    => 'required|max:100',
            'identificationDocument'    => 'required|max:11|unique:users,identification_document',
            'birthDate'    => 'required',
            'telephone'    => 'required|min:8|max:14',
            'email'    => 'required|email|unique:users,email',
            'idState'    => 'required', 
            'idMunicipality'    => 'required', 
            'idParishes'    => 'required', 
        ]);

        if (Carbon::parse($this->birthDate)->age <= 15) {
        	return $this->messageError = "Para poder registrarse debe ser mayor a 15 años";
        }

        User::create([
			'firstname' => $this->firstname,
			'lastname' => $this->lastname,
			'email' => $this->email,
			'password' => Hash::make('user'),
			'telephone' => $this->telephone,
			'identification_document' => $this->identificationDocument,
			'birthdate' => $this->birthDate,
			'id_estate' => $this->idState,
			'id_municipality' => $this->idMunicipality,
			'id_parishes' => $this->idParishes,
		]);

		$this->messageSatisfactory = "El Usuario se ha creado correctamente";
		$this->resetInput();
	}

	public function openModalDeleteUser($id)
	{
		$user = User::findOrFail($id);
		$this->delete_user_id = $user->id;
		$this->firstname = $user->firstname;
		$this->lastname = $user->lastname;
		$this->email = $user->email;
		$this->identificationDocument = $user->identification_document;
		$this->estado  = $user->state->name;
		$this->municipio = $user->municipality->name;
		$this->parroquia = $user->parishe->name;
		$this->deleteUserIsOpemModal = true;
	}

	public function daleteUser()
	{
		if($this->delete_user_id){
            User::where('id',$this->delete_user_id)->delete();
            $this->messageSatisfactory = "El usuario fue eliminado correctamente";
        }

        $this->resetInput();
	}

	public function openModalUpdateUser($id)
	{
		$user = User::findOrFail($id);
		$this->update_user_id = $user->id;
		$this->firstname = $user->firstname;
		$this->lastname = $user->lastname;
		$this->email = $user->email;
		$this->telephone = $user->telephone;
		$this->identificationDocument = $user->identification_document;
		$this->birthDate = $user->birthdate;
		$this->password = $user->password;
		$this->idState = $user->id_estate;
		$this->idMunicipality = $user->id_municipality;
		$this->idParishes = $user->id_parishes;
		$this->updateUserIsOpemModal = true;
	}

	public function updateUser()
	{
		$this->validate([
            'firstname'   => 'required|max:100',
            'lastname'    => 'required|max:100',
            //'identificationDocument'    => 'required|max:11|unique:users,identification_document',
            'birthDate'    => 'required',
            'telephone'    => 'required|min:8|max:14',
            //'email'    => 'required|email|unique:users,email',
            'idState'    => 'required', 
            'idMunicipality'    => 'required', 
            'idParishes'    => 'required', 
        ]);

        if (Carbon::parse($this->birthDate)->age <= 15) {
        	return $this->messageError = "Para poder registrarse debe ser mayor a 15 años";
        }

        $user = User::findOrFail($this->update_user_id);
		$user->firstname = $this->firstname;
		$user->lastname = $this->lastname;
		//$user->email = $this->email;
		$user->telephone = $this->telephone;
		//$user->identification_document = $this->identificationDocument;
		$user->birthdate = $this->birthDate;
		//$user->password = Hash::make($this->password);
		$user->id_estate = $this->idState;
		$user->id_municipality = $this->idMunicipality;
		$user->id_parishes = $this->idParishes;
		$user->save();

		$this->messageSatisfactory = "El usuario fue actualizado correctamente";

	}

	public function resetInput()
	{
		$this->delete_user_id = null;
		$this->update_user_id = null;
		$this->firstname = null;
		$this->lastname = null;
		$this->identificationDocument = null;
		$this->birthDate = null;
		$this->telephone = null;
		$this->email = null;
		$this->idState = null;
		$this->idMunicipality = null;
		$this->idParishes = null;
		$this->estado  = null;
		$this->municipio = null;
		$this->parroquia = null;
	} 

	public function closedModals()
	{
		$this->deleteUserIsOpemModal = false;
		$this->updateUserIsOpemModal = false;
		$this->createUserIsOpemModal = false;
		$this->error = "";
		$this->messageSatisfactory = "";
		$this->messageError = "";
		$this->resetErrorBag();
    	$this->resetValidation();
    	$this->resetInput();
	}

	public function sortBy($field)
    {
        if ($this->sortField === $field) {
            $this->sortAsc = !$this->sortAsc;
        } else {
            $this->sortAsc = true;
        }

        $this->sortField = $field;
    }

    public function render()
    {
        return view('livewire.users.users-table', [
        	'users' => User::paginate(10),
        	'SelectState' => States::all(),
            'SelectMunicipality' => Municipalitys::select('id','name')->where('id_estate', $this->idState)->get(),
            'SelectParishe' => Parishes::select('id','name')->where('id_municipality', $this->idMunicipality)->get(),
            'users' => User::where(function ($query) {
                $query->where('firstname', 'like', '%' . $this->search . '%')
                    ->orWhere('lastname', 'like', '%' . $this->search . '%')
                    ->orWhere('email', 'like', '%' . $this->search . '%')
                    ->orWhere('Identification_document', 'like', '%' . $this->search . '%')
                    ->orWhere('telephone', 'like', '%' . $this->search . '%');
            })
            ->when($this->sortField, function ($query) {
                $query->orderBy($this->sortField, $this->sortAsc ? 'asc' : 'desc');
            })->paginate(10),
        ]);
    }
}
