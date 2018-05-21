<?php

namespace App\Http\Controllers;
use App;
use Illuminate\Http\Request;
use \App\Services\FooService;

class PageController extends Controller
{
   public function index()
	 {
     // $fooService = new \App\Services\FooService();
     // $fooService->doSomething();
     $this->app->bind('FooService', \App\Services\FooService::class);
     //echo $environment = App::environment();
	 }
}

?>
