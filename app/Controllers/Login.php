<?php

namespace App\Controllers;
use \CodeIgniter\Controller;

class Login extends BaseController
{
    public function __construct()
    {
        helper('form');
    }
	public function index()
	{
		return view('login/view');
	}
}
