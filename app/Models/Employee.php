<?php namespace App\Models;
use CodeIgniter\Model;
class Employee extends Model
{
    protected $table = 'emplyess';
    protected $primaryKey='Id';
    protected $allowedFields = [

           'first_name','last_name','phone','email','designation'



    ];
}