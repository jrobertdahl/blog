<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home(){

	    $tasks = [
			'go to the store',
			'go the market',
			'go to work',
			'go to the arboretuuuuuuuuum'
		];

	    return view('welcome', [
	    	'tasks' => $tasks
	    ]);

    }

    public function about(){
	    return view('about');
    }

    public function contact(){
	    return view('contact');
    }

}
