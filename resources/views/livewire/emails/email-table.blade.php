<div>
	<button wire:click="openModalCreateEmail()" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
	  Crear Correo
	</button>

	<input wire:model="search2" id="search2" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"  type="text" placeholder="Buscar">
	<br> 
	<div class="flex flex-col">
	  <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
	    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
	      <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
	        <table class="min-w-full divide-y divide-gray-200">
	          <thead class="bg-gray-50">
	            <tr>
	            	<th scope="col" class="relative px-6 py-3">
	                <span class="sr-only">Edit</span>
	              </th>
	            	<th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
	                <button wire:click="sortBy('id')" class="btn btn-light">ID </button>
	              </th>
	              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
	                <button wire:click="sortBy('firstname')" class="btn btn-light">Asunto </button>
	              </th>
	              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
	                <button wire:click="sortBy('email')" class="btn btn-light">Destinararios </button>
	              </th>
	              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
	                <button wire:click="sortBy('identification_document')" class="btn btn-light">Estado </button>
	              </th>
	              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
	                <button wire:click="sortBy('telephone')" class="btn btn-light">Mensaje </button>
	              </th>

	              
	            </tr>
	          </thead>
	          <tbody class="bg-white divide-y divide-gray-200">
	          	@foreach($emails as $email)
	            <tr>
	            	<td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
	            		@if($email->status)
			                <button wire:click="showEmail({{ $email->id }})">
			                	<i class="fas fa-eye"></i>
			                </button>
			            @else
			            	<button wire:click="openModalUpdateEmail({{ $email->id }})">
			                	<i class="fas fa-user-edit"></i>
			                </button>
			                <button wire:click="sendEmail({{ $email->id }})">
			                	<i class="fas fa-paper-plane"></i>
			                </button>
			                <button wire:click="openModalDeleteEmail({{ $email->id }})">
			                	<i class="fas fa-trash-alt"></i>
			                </button>      			                
			            @endif
	              </td>


	            	<td class="px-6 py-4 whitespace-nowrap">
	                  {{ $email->id }}
	              	</td>
	              <td class="px-6 py-4 whitespace-nowrap">
	                <div class="flex items-center">
	                  
	                  <div class="ml-4">
	                    <div class="text-sm font-medium text-gray-900">
	                      {{ $email->asunto }} 
	                    </div>
	                    
	                  </div>
	                </div>
	              </td>

	              <td class="px-6 py-4 whitespace-nowrap">
	                <div class="text-sm text-gray-900">
	                	@foreach($email->destinoEmail as $destino)
	                	{{ $destino->email }} <br>
	                	@endforeach
	                </div>
	              </td>  

	              <td class="px-6 py-4 whitespace-nowrap">
	              	@if($email->status)
	                	<div class="bg-green-100 border border-green-400 text-green-700  rounded relative" role="alert">
						  <strong class="font-bold">Enviado</strong>
						</div>
	                @else
	                	<div class="bg-red-100 border border-red-400 text-red-700  rounded relative" role="alert">
						  <strong class="font-bold">No enviado</strong>
						</div>
	                @endif
	              </td> 

	              <td class="px-6 py-4 whitespace-nowrap">
	                <div class="text-sm text-gray-900">{{ $email->mensaje }}</div>
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
	
	{{ $emails->links() }}

	@if($showEmailIsOpemModal)
		@include('livewire.emails.email-show-modal')
	@endif

	@if($createEmailIsOpemModal)
		@include('livewire.emails.email-modal')
	@endif

	@if($deleteEmailIsOpemModal)
		@include('livewire.emails.email-delete-modal')
	@endif

	@if($updateEmailIsOpemModal)
		@include('livewire.emails.email-modal')
	@endif

{{--  
	@if($createUserIsOpemModal)
		@include('livewire.users.user-modal')
	@endif

	@if($updateUserIsOpemModal)
		@include('livewire.users.user-modal')
	@endif

	@if($deleteUserIsOpemModal)
		@include('livewire.users.user-delete-modal')
	@endif
--}}
	
</div>
