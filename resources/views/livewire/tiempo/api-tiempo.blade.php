<div>
	<div class="relative">
		<select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-idParishes" wire:model.lazy="pais">
				<option>Selecione un país</option>
				<option value="venezuela">Venezuela</option>
				<option value="Colombia">Colombia</option>
				<option value="Bogotá">Bogotá</option>
				<option value="Medellín">Medellín</option>
				<option value="Cali">Cali</option>
				<option value="Miami">Miami</option>
		</select>
		<div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
          <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
        </div>
     </div>

	@if($tiempo)
	    @if($tiempo['cod'] == 200)
	    <div class="bg-white shadow overflow-hidden sm:rounded-lg">
                <div class="px-4 py-5 sm:px-6">
                  <h3 class="text-lg leading-6 font-medium text-gray-900">
                    Datos del Tiempo en {{ $tiempo['name'] }}
                  </h3>
                  <p class="mt-1 max-w-2xl text-sm text-gray-500">
                    Aquí podra Los datos del tiempo
                  </p>
                </div>
                <div class="border-t border-gray-200">
                  <dl>
                    <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                      <dt class="text-sm font-medium text-gray-500">
                        Coordenadas
                      </dt>
                      <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                      	Lon: {{ $tiempo['coord']['lon'] }} <br>
                      	LAT: {{ $tiempo['coord']['lat'] }}
                      </dd>
                    </div>
                    <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                      <dt class="text-sm font-medium text-gray-500">
                        Tiempo
                      </dt>
                      <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                       <table border="2px">
                       	<th>id</th>
                       	<th>main</th>
                       	<th>description</th>
                       	<th>icon</th>
                      	@foreach($tiempo['weather'] as $weather)
                      		<tr>
                      			<td>{{ $weather['id'] }}</td>
                      			<td>{{ $weather['main'] }}</td>
                  				<td>{{ $weather['description'] }}</td>
                  				<td>{{ $weather['icon'] }}</td>
                      		</tr>
                      	@endforeach
                      	</table>
                      </dd>
                    </div>
                    <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                      <dt class="text-sm font-medium text-gray-500">
                        Main Principal
                      </dt>
                      <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                        <table border="2px">
	                       	<th>temp</th>
	                       	<th>feels_like</th>
	                       	<th>temp_min</th>
	                       	<th>temp_max</th>
	                       	<th>pressure</th>
	                       	<th>humidity</th>
	                  		<tr>
	                  			<td>{{ $tiempo['main']['temp'] }}</td>
	                  			<td>{{ $tiempo['main']['feels_like'] }}</td>
	              				<td>{{ $tiempo['main']['temp_min'] }}</td>
	              				<td>{{ $tiempo['main']['temp_max'] }}</td>
	              				<td>{{ $tiempo['main']['pressure'] }}</td>
	              				<td>{{ $tiempo['main']['humidity'] }}</td>
	                  		</tr>
                      	</table>


                      </dd>
                    </div>
                    <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                      <dt class="text-sm font-medium text-gray-500">
                        visibility
                      </dt>
                      <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                        {{ $tiempo['visibility'] }}


                      </dd>
                    </div>

                    <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                      <dt class="text-sm font-medium text-gray-500">
                        Wind
                      </dt>
                      <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                        
                      	<table border="2px">
	                       	<th>speed</th>
	                       	<th>deg</th>
	                  		<tr>
	                  			<td>{{ $tiempo['wind']['speed'] }}</td>
	                  			<td>{{ $tiempo['wind']['deg'] }}</td>
	              				
	                  		</tr>
                      	</table>

                      </dd>
                    </div>
                    <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                      <dt class="text-sm font-medium text-gray-500">
                        clouds
                      </dt>
                      <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                        
                      	<table border="2px">
	                       	<th>all</th>
	                  		<tr>
	                  			<td>{{ $tiempo['clouds']['all'] }}</td>
	              				
	                  		</tr>
                      	</table>

                      </dd>
                    </div>

                    @if(array_key_exists('sys', $tiempo))
                    <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                      <dt class="text-sm font-medium text-gray-500">
                        sys
                      </dt>
                      <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">

                        <table border="2px">
                        	@if(array_key_exists('type', $tiempo['sys']))
	                       		<th>type</th>
	                       	@endif

	                       	@if(array_key_exists('type', $tiempo['sys']))
	                       		<th>id</th>
	                       	@endif
	                       	<th>country</th>
	                       	<th>sunrise</th>
	                       	<th>sunset</th>
	                  		<tr>
	                  			@if(array_key_exists('type', $tiempo['sys']))
	                  				<td>{{ $tiempo['sys']['type'] }}</td>
	                  			@endif
	                  			@if(array_key_exists('type', $tiempo['sys']))
	                  				<td>{{ $tiempo['sys']['id'] }}</td>
	                  			@endif
	              				<td>{{ $tiempo['sys']['country'] }}</td>
	              				<td>{{ $tiempo['sys']['sunrise'] }}</td>
	              				<td>{{ $tiempo['sys']['sunset'] }}</td>
	                  		</tr>
                      	</table>
                      </dd>
                    </div>
                    @endif

                  </dl>
                </div>
              </div> 
            @endif
    @endif
</div>
