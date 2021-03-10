<?php

namespace App\Http\Livewire\Users;

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

	public $deleteUserIsOpemModal = false;
	public $updateUserIsOpemModal = false;
	public $createUserIsOpemModal = false;
	public $messageSatisfactory = "";

	public function openModalCreateUser()
	{
		$this->createUserIsOpemModal = true;
	}

	public function storeUser()
	{

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
//dd($this->identificationDocument);

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

	public function resetInput()
	{
		$this->firstname = null;
		$this->lastname = null;
		$this->identificationDocument = null;
		$this->birthDate = null;
		$this->telephone = null;
		$this->email = null;
		$this->idState = null;
		$this->idMunicipality = null;
		$this->idParishes = null;
	} 

	public function closedModals()
	{
		 $this->resetErrorBag();
    	$this->resetValidation();
		$this->deleteUserIsOpemModal = false;
		$this->updateUserIsOpemModal = false;
		$this->createUserIsOpemModal = false;
		$this->resetInput();
		$this->error = "";
		$this->messageSatisfactory = "";
	}



    public function render()
    {
        return view('livewire.users.users-table', [
        	'users' => User::paginate(10),
        	'SelectState' => States::all(),
            'SelectMunicipality' => Municipalitys::select('id','name')->where('id_estate', $this->idState)->get(),
            'SelectParishe' => Parishes::select('id','name')->where('id_municipality', $this->idMunicipality)->get(),
        ]);
    }
}
