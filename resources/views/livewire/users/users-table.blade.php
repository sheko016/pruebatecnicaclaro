<div>
	<button wire:click="openModalCreateUser()" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
	  Crear Usuario
	</button>

	<input wire:model="search" id="search" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"  type="text" placeholder="Buscar">
	<br> 
	<div class="flex flex-col">
	  <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
	    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
	      <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
	        <table class="min-w-full divide-y divide-gray-200">
	          <thead class="bg-gray-50">
	            <tr>
	            	<th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
	                <button wire:click="sortBy('id')" class="btn btn-light">ID </button>
	              </th>
	              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
	                <button wire:click="sortBy('firstname')" class="btn btn-light">Nombre Completo </button>
	              </th>
	              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
	                <button wire:click="sortBy('email')" class="btn btn-light">Correo </button>
	              </th>
	              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
	                <button wire:click="sortBy('identification_document')" class="btn btn-light">Cedula </button>
	              </th>
	              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
	                <button wire:click="sortBy('telephone')" class="btn btn-light">Telefono </button>
	              </th>

	              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
	                <button wire:click="sortBy('birthdate')" class="btn btn-light">Fecha de Nacimiento </button>
	              </th>

	              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
	                Estado
	              </th>

	              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
	                Municipio
	              </th>

	              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
	                Parroquia
	              </th>

	              <th scope="col" class="relative px-6 py-3">
	                <span class="sr-only">Edit</span>
	              </th>
	            </tr>
	          </thead>
	          <tbody class="bg-white divide-y divide-gray-200">
	          	@foreach($users as $user)
	            <tr>
	            	<td class="px-6 py-4 whitespace-nowrap">
	                  {{ $user->id }}
	              	</td>
	              <td class="px-6 py-4 whitespace-nowrap">
	                <div class="flex items-center">
	                  
	                  <div class="ml-4">
	                    <div class="text-sm font-medium text-gray-900">
	                      {{ $user->firstname }} {{ $user->lastname }}
	                    </div>
	                    <div class="text-sm text-gray-500">
	                      {{ $user->email }}
	                    </div>
	                  </div>
	                </div>
	              </td>
	              <td class="px-6 py-4 whitespace-nowrap">
	                <div class="text-sm text-gray-900">{{ $user->email }}</div>
	              </td>
	              <td class="px-6 py-4 whitespace-nowrap">
	                
	                  {{ $user->identification_document }}
	                
	              </td>
	              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
	                {{ $user->telephone }}
	              </td>
	              <td class="px-6 py-4 whitespace-nowrap">
	                <div class="text-sm text-gray-900">{{ $user->birthdate }}</div>
	                <div class="text-sm text-gray-500"> {{ \Carbon\Carbon::parse($user->birthdate)->age }}</div>
	              </td>
	              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
	                {{ $user->state->name  }}
	              </td>
	              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
	                {{ $user->municipality->name  }}
	              </td>
	              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
	                {{ $user->parishe->name  }}
	              </td>
	              <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
	                <button wire:click="openModalUpdateUser({{ $user->id }})">
	                	<i class="fas fa-user-edit"></i>
	                </button>
	                <button wire:click="openModalDeleteUser({{ $user->id }})">
	                	<i class="fas fa-trash-alt"></i>
	                </button>
	              </td>
	            </tr>
	            @endforeach
	            <!-- More items... -->
	          </tbody>
	        </table>
	      </div>
	    </div>
	  </div>
	</div>	
	
	{{ $users->links() }}

	@if($createUserIsOpemModal)
		@include('livewire.users.user-modal')
	@endif

	@if($updateUserIsOpemModal)
		@include('livewire.users.user-modal')
	@endif

	@if($deleteUserIsOpemModal)
		@include('livewire.users.user-delete-modal')
	@endif

	
</div>
