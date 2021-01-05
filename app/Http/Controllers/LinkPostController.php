<?php
  
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
 
class LinkPostController extends Controller
{
    public function index()
    {
    	$response = Http::get('http://jsonplaceholder.typicode.com/posts');
  
    	$jsonData = $response->json();
    	  
    	echo "<pre> status:";
    	print_r($response->status());
    	echo "<br/> ok:";
    	print_r($response->ok());
        echo "<br/> successful:";
        print_r($response->successful());
        echo "<br/> serverError:";
        print_r($response->serverError());
        echo "<br/> clientError:";
        print_r($response->clientError());
        echo "<br/> headers:";
        print_r($response->headers());
    }

    public function store()
    {
    	$response = Http::post('http://jsonplaceholder.typicode.com/posts', [
    				'title' => 'This is test from ItSolutionStuff.com',
    				'body' => 'This is test from ItSolutionStuff.com as body',
    			]);
  
    	dd($response->successful());
    }
}