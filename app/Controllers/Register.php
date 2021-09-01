<?php

namespace App\Controllers;
use \CodeIgniter\Controller;

class Register extends BaseController
{
    public function __construct()
    {
        helper('form');
    }
	public function index()
	{
        $data=[];
        $data['validation']=null;
        if($this->request->getMethod()=='post')
      {
          $rules = [
            'username'=>'trim|required|min_length[4]|max_length[10]',
            'email'=>'required|valid_email|is_unique[users.email,id,4]',
			'password'=>'trim|required|min_length[5]|max_length[15]',
			'cpassword'=>'trim|required|matches[password]',
			'mobile'=>'required|exact_length[11]|numeric',
          ];
   
          if($this->validate($rules))
          {
            $uniid = md5(str_shuffle('abcdefghijklmnopqrstuvwxyz'.time()));
              $userdata = [
                  
                  'username' => $this->request->getVar('username',FILTER_SANITIZE_STRING),
                   'email'=>$this->request->getVar('email'),
                   'password'=>password_hash($this->request->getVar('password'),PASSWORD_DEFAULT),
                   'mobile'=>$this->request->getVar('mobile'),
                   'uniid'=>$uniid,
                   'activation_date'=>date("Y-m-d h:i:s")
                ];
          }
          else
          {
              $data['validation'] = $this->validator;
          }
        }


		return view('registration/view',$data);
	}
}
