<?php
namespace App\Controllers;
use \CodeIgniter\Controller;
class TestMail extends Controller 
{
    public function index()
    {
        $to = 'shahriarmehedi94@gmail.com';
        $subject ='Account activation - shahriar';
        $message = 'Hi! shahriar, <br><br>Thanks your account created.successfully. please click the below link to activate your account <br><br> '
                      .'<a href= "'.base_url().'/testmail/verify/" target="_blank">Activate Now</a><br><br>Thanks<br>Shahriar';





        $email = \Config\Services::email();
        $email->setTo($to);
        $email->setFrom('info@shahriar.in','Info');
        $email->setSubject($subject);
        $email->setMessage($message);
        $filepath='';
        $email->attach($filepath);
        if($email->send())
        {
            echo "Account Create Successfully. Please activate your account";
        }
        else
        {
            $data = $email->printDebugger(['headers']);
            print_r($data);
        }
    }
}