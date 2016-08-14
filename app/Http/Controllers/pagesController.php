<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class pagesController extends Controller {
	public function index() {

		return view('index');
	}

	public function info() {
		return view('info');
	}

	public function collages() {
		return view('collages');
	}

}
