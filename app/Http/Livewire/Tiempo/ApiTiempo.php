<?php

namespace App\Http\Livewire\Tiempo;

use GuzzleHttp\Client;
use Livewire\Component;
use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Http;

class ApiTiempo extends Component
{
	public $tiempo, $pais;

    public function render()
    {
    	$url = "http://api.openweathermap.org/data/2.5/weather?q=" . $this->pais . "&appid=86723fd6d8b585f6ec7ab1a329dc6622&units=metric";
		//dd($url);
		$ch = curl_init();
	   	curl_setopt($ch, CURLOPT_URL, 'http://api.openweathermap.org/data/2.5/weather?q=' . $this->pais . '&appid=86723fd6d8b585f6ec7ab1a329dc6622&units=metric'); 
	   	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
	   	curl_setopt($ch, CURLOPT_HEADER, 0); 
	   	$data = curl_exec($ch); 
	   	curl_close($ch);
	   	$this->tiempo = json_decode($data, true);
	   	//dd($this->tiempo);
	   	
        return view('livewire.tiempo.api-tiempo');
    }
}
