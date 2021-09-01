<?php

namespace App\Controllers;

use App\Models\Products; 

class ProductController extends BaseController
{
	public function index()
	{
		$products= new Products();
		$data['products']=$products->findAll();
		return view('products/index',$data);
	}

	public function create()
	{
		return view('products/create');
	}
	public function store()
	{
		$products = new Products();
		$file = $this->request->getFile('image');
		if ($file->isValid() && ! $file->hasMoved())
{


	           $imageName = $file->getRandomName();
              $file->move('uploads/', $imageName);
       
}

$data = [

	'name'=>$this->request->getPost('name'),
	'description'=>$this->request->getPost('description'),
	'price'=>$this->request->getPost('price'),
	'image'=>$imageName,

];
$products->save($data);
session()->setFlashdata('status_text','Your Image has been Inserted');
return redirect('products')
->with('status_icon','success')
->with('status','Image Inserted Successfully');

	}
	public function edit($Id)
    {
        $products = new Products();
        $data['products']=$products->find($Id);
        return view('products/edit',$data);
    }
	public function update($Id)
    {
        $products = new Products();
		$prod_item=$products->find($Id);
		$old_img_name =$prod_item['image'];

		$file=$this->request->getFile('image');
		if($file->isValid() && !$file->hasMoved())
		{
		
			if(file_exists("uploads/".$old_img_name)){
				unlink("uploads/".$old_img_name);
			}
			
			$imageName = $file->getRandomName();
			$file->move('uploads/', $imageName);
		}
		else{
			$imageName =$old_img_name;
		}
        $data = [
			'name'=>$this->request->getPost('name'),
	'description'=>$this->request->getPost('description'),
	'price'=>$this->request->getPost('price'),
	'image'=>$imageName,
        ];
        $products->update($Id,$data);
		session()->setFlashdata('status_text','Your Product  has been Updated');
        return redirect()->to(base_url('/products'))
		->with('status_icon','success')
		->with('status','Product Updated Successfully');
	}
	public function delete($Id)
	{
		$products = new Products();


	
        $data = $products->find($Id);
        $imagefile = $data['image'];
		if(file_exists("uploads/".$imagefile)){
			unlink("uploads/".$imagefile);
		}



		$products->delete($Id);

		session()->setFlashdata('status_text','Your Student Data has been Deleted');
		return redirect()->back()
		->with('status_icon','success')
		->with('status','Student Deleted Successfully');
	}
}
?>