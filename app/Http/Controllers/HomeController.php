<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\RestRequest;
class HomeController extends Controller
{
    public function index()
    {    	

		// try {
		//     $url = '159.65.133.167:9200/product/_search?pretty';
		//     #$requestBody = '{ "query": { "match_all": {} } }';
		//     $requestBody = array('query' => array('match_all' =>  (object) null));
		//     $elasticsClient = new RestRequest($url, 'POST', $requestBody);		    
		//     $elasticsClient->execute();       
		//     var_dump($elasticsClient->getResponseBody());
		// }
		// catch (Throwable $e) {		 
		//   print_r($e);
		// }
	    return view('home/home');
	    
  	}
}