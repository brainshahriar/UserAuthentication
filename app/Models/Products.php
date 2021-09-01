<?php namespace App\Models;
use CodeIgniter\Model;
class Products extends Model
{
    protected $table = 'products';
    protected $primaryKey='Id';
    protected $allowedFields = [

           'name','description','price','image'



    ];
}
?>