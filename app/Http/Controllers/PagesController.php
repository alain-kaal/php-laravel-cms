<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
   public function index() { 
   	$title = "Bon debut avec Laravel";
   	// return view('pages.index', compact('title'));
   	return view('pages.index')->with('title', $title);

   }

   public function about() { 
   	$title = 'About Us';
   	return view('pages.about')->with('apropos', $title);
   }

    public function services() { 
    	$data = [
    		'title' => 'Services',
    		'services' => ['Web Design', 'Programming', 'SEO'],
    		'krimis' => ['Soko Leipzig', 'Der Staatsanwalt', 'Der Alte']
    	];
   		return view('pages.services')->with($data);
   }


}
