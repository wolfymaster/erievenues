<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home', [
			'venues' => [
				[
					'name' => 'Awesome Place',
					'description' => 'This is a cool place'
				],
				[
					'name' => 'Bob\'s Place',
					'description' => ''
				],
				[
					'name' => 'Bob\'s Place',
					'description' => ''
				],
				[
					'name' => 'Bob\'s Place',
					'description' => ''
				]
			]
		]);
    }
}
