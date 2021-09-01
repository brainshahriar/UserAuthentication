<?php

namespace App\Controllers;

use App\Models\StudentModel;

class StudentController extends BaseController
{
	public function index()
	{
		$student= new StudentModel();
        $data['students']=$student->findAll();
        return view ('students/index.php',$data);
	}
	public function create()
	{
		return view ('students/create');
	}
	public function store()
	{
		$students = new StudentModel();
		$data=[
          'Name'=>$this->request->getPost('Name'),
		  'email'=>$this->request->getPost('email'),
		  'phone'=>$this->request->getPost('phone'),
		  'course'=>$this->request->getPost('course')
		  
		];
		$students->save($data);
		session()->setFlashdata('status_text','Your Student Data has Inserted');
		return redirect('students')
		->with('status_icon','success')
		->with('status','Student Inserted Successfully');
	}
	public function edit( $Id = null)
    {
        $student = new StudentModel();
        $data['students']=$student->find($Id);
        return view('students/edit',$data);
    }
	public function update($Id = null)
    {
        $student = new StudentModel();
        $data = [
            'Name'=>$this->request->getPost('Name'),
            'email'=>$this->request-> getPost('email'),
            'phone'=>$this-> request-> getPost('phone'),
            'course'=>$this-> request-> getPost('course')
        ];
        $student->update($Id,$data);
		session()->setFlashdata('status_text','Your Student Data has been Updated');
        return redirect()->to(base_url('students'))
		->with('status_icon','success')
		->with('status','Student Updated Successfully');
	}
	public function delete($Id = null)
	{
		$students = new StudentModel();
		$students->delete($Id);
		session()->setFlashdata('status_text','Your Student Data has been Deleted');
		return redirect()->back()
		->with('status_icon','success')
		->with('status','Student Deleted Successfully');
	}


}
?>