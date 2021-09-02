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
        $data=[];
        if($this->request->getMethod()=='post')
        {
             $rules = [
                 'email'=>'required|valid_email',
               //  'password'=>'required|min_length[5]|max_length[]16]',
             ];
            if( $this->validate($rules))
            {

            }
            else
            {
                $data['validation']=$this->validator;
            }
        }
		return view('login/view',$data);
	}
}
