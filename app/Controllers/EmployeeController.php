<?php

namespace App\Controllers;

use App\Models\Employee;

class EmployeeController extends BaseController
{
	public function index()
	{
        $employee = new Employee();
        $data['employee']=$employee->findAll();

		return view('employee/index',$data);
	}
    public function create1()
	{
		return view ('employee/create1');
	}
	public function store1()
	{
		$employee = new Employee();  
		$data=[
          'first_name'=>$this->request->getPost('first_name'),
		  'last_name'=>$this->request->getPost('last_name'),
		  'phone'=>$this->request->getPost('phone'),
		  'email'=>$this->request->getPost('email'),
		  'designation'=>$this->request->getPost('designation')
	
		  
		];
		$employee->save($data);
		session()->setFlashdata('status_text','Your Employee Data has Inserted');
		return redirect('employee')
		->with('status_icon','success')
		->with('status','Employee Inserted Successfully');
	}
	public function edit1( $Id = null)
    {
        $employee = new Employee();
        $data['employee']=$employee->find($Id);
        return view('employee/edit1',$data);
    }
	public function update1($Id = null)
    {
        $employee = new Employee();
        $data = [
			'first_name'=>$this->request->getPost('first_name'),
			'last_name'=>$this->request->getPost('last_name'),
			'phone'=>$this->request->getPost('phone'),
			'email'=>$this->request->getPost('email'),
			'designation'=>$this->request->getPost('designation')
        ];
        $employee->update($Id,$data);
		session()->setFlashdata('status_text','Your Employee Data has been Updated');
        return redirect()->to(base_url('employee'))
		->with('status_icon','success')
		->with('status','Employee Updated Successfully');
	}
	public function delete($Id = null)
	{
		$employee = new Employee();
		$employee->delete($Id);
		session()->setFlashdata('status_text','Your Employee Data has been Deleted');
		return redirect()->back()
		->with('status_icon','success')
		->with('status','Employee Deleted Successfully');
	}

}
?>
