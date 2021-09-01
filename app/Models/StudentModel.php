<?php namespace App\Models;
use CodeIgniter\Model;
class StudentModel extends Model
{
    protected $table = 'students';
    protected $primaryKey='Id';
    protected $allowedFields = [

           'Name','email','phone','course'



    ];
}