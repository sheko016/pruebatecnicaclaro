
	<form id="formUsers" class="w-full">
    <div id="formUsers2">
      <div class="flex flex-wrap -mx-3 mb-6">
        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
            Asunto
          </label>
          <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-asunto" wire:model.lazy="asunto" type="text" placeholder="Asunto del correo">
          @error('asunto') <p class="text-red-500 text-xs italic"> {{ $message }} </p> @enderror
        </div>
        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
            Destinatarios
          </label>
          <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-search" wire:model="search" type="text" placeholder="Nombre, Apellido, Correo, Minimo 3 carcteres">
          @error('destinatarios') <p class="text-red-500 text-xs italic"> {{ $message }} </p> @enderror

          @if(strlen($search) >= 3)
            @if(count($users) >= 1)
            <table>
              @foreach($users as $user)
                <tr>
                  <td>{{ $user->email }}</td>
                  <td><button wire:click="selectDestinatarios({{ $user->id}})" type="button" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-blue-600 text-base font-medium text-white hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 sm:ml-3 sm:w-auto sm:text-sm">Selecionar</button> </td>
                </tr>
              @endforeach
              </table>
            @else
              <p>Usuario no encontrado</p>
            @endif

          @endif
        </div>

      </div>

      <div class="w-full">
        @if($destinatarios)
          @foreach($destinatarios as $userDes)
            {{ $userDes['email'] }}, 
          @endforeach
        @endif
      </div>

      <div class="w-full">
        <div class="w-full px-3">
          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
            Mensaje
          </label>
          <textarea class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-mensaje" wire:model.lazy="mensaje" type="textarea" placeholder="Mensaje del correo"></textarea>
          @error('mensaje') <p class="text-red-500 text-xs italic"> {{ $message }} </p> @enderror
        </div>
      </div>
<br>
      <div class="flex flex-wrap -mx-3 mb-6">
        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
            Enviar
          </label>
          <input class="" id="grid-enviar" wire:model.lazy="enviar" type="checkbox" placeholder="Jane">
          @error('enviar') <p class="text-red-500 text-xs italic"> {{ $message }} </p> @enderror
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