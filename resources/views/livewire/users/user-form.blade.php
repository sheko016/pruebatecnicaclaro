
	<form id="formUsers" class="w-full">
    <div id="formUsers2">
  <div class="flex flex-wrap -mx-3 mb-6">
    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
        Nombre
      </label>
      <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-firstname" wire:model.lazy="firstname" type="text" placeholder="Jane">
      @error('firstname') <p class="text-red-500 text-xs italic"> {{ $message }} </p> @enderror
    </div>
    <div class="w-full md:w-1/2 px-3">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
        Apellido
      </label>
      <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-lastname" wire:model.lazy="lastname" type="text" placeholder="Doe">
      @error('lastname') <p class="text-red-500 text-xs italic"> {{ $message }} </p> @enderror
    </div>
  </div>

  <div class="flex flex-wrap -mx-3 mb-6">
    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
        Cedula
      </label>
      <input @if($updateUserIsOpemModal) readonly="" @endif class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-IdentificationDocument " wire:model.lazy="identificationDocument" type="text" placeholder="Jane">
      @error('identificationDocument') <p class="text-red-500 text-xs italic"> {{ $message }} </p> @enderror
    </div>
    <div class="w-full md:w-1/2 px-3">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
        Fecha de Nacimiento
      </label>
      <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-BirthDate" wire:model.lazy="birthDate" type="date" placeholder="Doe">
      @error('birthDate') <p class="text-red-500 text-xs italic"> {{ $message }} </p> @enderror
    </div>
  </div>

  <div class="flex flex-wrap -mx-3 mb-6">
    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
        Telefono
      </label>
      <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-telephone" wire:model.lazy="telephone" type="text" placeholder="Jane">
      @error('telephone') <p class="text-red-500 text-xs italic"> {{ $message }} </p> @enderror
    </div>
    <div class="w-full md:w-1/2 px-3">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
        Correo
      </label>
      <input @if($updateUserIsOpemModal) readonly="" @endif class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-email " wire:model.lazy="email" type="text" placeholder="Doe">
      @error('email') <p class="text-red-500 text-xs italic"> {{ $message }} </p> @enderror
    </div>
  </div>

  <div class="flex flex-wrap -mx-3 mb-2">
    <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-city">
        Estado
      </label>
      <div class="relative">
        <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-idState" wire:model.lazy="idState">
          <option selected>Seleccione el estado</option>
          @foreach($SelectState as $estado)
            <option value="{{ $estado->id }}">{{ $estado->name }}</option>
          @endforeach
        </select>
        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
          <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
        </div>
      </div>
      @error('idState') <p class="text-red-500 text-xs italic"> {{ $message }} </p> @enderror
    </div>
    <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
        Municipio
      </label>
      <div class="relative">
        <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-idMunicipality" wire:model.lazy="idMunicipality">
          <option selected>Seleccione el municipio</option>
          @foreach($SelectMunicipality as $municipio)
            <option value="{{ $municipio->id }}">{{ $municipio->name }}</option>
          @endforeach
        </select>
        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
          <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
        </div>
      </div>
      @error('idMunicipality') <p class="text-red-500 text-xs italic"> {{ $message }} </p> @enderror
    </div>
    <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-zip">
        Parroquia
      </label>
      <div class="relative">
        <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-idParishes" wire:model.lazy="idParishes">
          <option selected>Seleccione la parroquia</option>
          @foreach($SelectParishe as $parroquia)
            <option value="{{ $parroquia->id }}">{{ $parroquia->name }}</option>
          @endforeach
        </select>
        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
          <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
        </div>
      </div>
      @error('idParishes') <p class="text-red-500 text-xs italic"> {{ $message }} </p> @enderror
    </div>
  </div>
  </div>
</form>

@if($messageError)
  <div role="alert">
    <div class="bg-red-500 text-white font-bold rounded-t px-4 py-2">
      Error
    </div>
    <div class="border border-t-0 border-red-400 rounded-b bg-red-100 px-4 py-3 text-red-700">
      <p>{{ $messageError }}</p>
    </div>
  </div>
  
@endif

<script type="text/javascript">
    let errorForm = document.getElementsByClassName('text-red-500');
    if (errorForm.length > 1) {
      console.log(errorForm)
      Array.prototype.filter.call(errorForm, function(hiddenErrorMsj){
        hiddenErrorMsj.style.display = 'none';
      });  
    }
  </script>