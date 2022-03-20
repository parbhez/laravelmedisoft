<?php

namespace App\Http\Controllers\HR;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Settings\Designation;
use DB;
use App\Http\Requests\EmployeeRequest;
use App\User;
use Session;
use App\Models\HR\Employee;

class HRController extends Controller
{
    public function index()
    {
    	return "HR";
    }

    public $view_page_url;
    public function __construct()
    {
    	$this->view_page_url = 'hr.employee.';
    }

    public function employeeList()
    {

    	$designations = ['' => 'Please Select Designation'] + 
    			Designation::where('status',1)
    			->where('designation_type',1)
    			->pluck('designation_name','designation_id')
    			->all();
    			// echo '<pre>';
    			// print_r($designations);
    			// exit();
    	return view($this->view_page_url.'employee',compact('designations'));
    }

    public function saveEmployeeInfo(EmployeeRequest $request)
    {
    	//return $request->all();
    	DB::beginTransaction();
        try{
           $saveUser = User::insertGetId([
                'branch_id' => 1,
                'full_name' => $request->full_name,
                'user_name' => $request->user_name,
                'father_name' => $request->father_name,
                'mother_name' => $request->mother_name,
                'mobile_no' => $request->mobile_no,
                'dob' =>date('Y-m-d', strtotime($request->dob)),
                'gender' => $request->gender,
                'present_address' => $request->present_address,
                'permanent_address' => $request->permanent_address,
                'email' => $request->email,
                'password' => bcrypt($request->password),
                'remember_token' => $request->_token,
                'created_by' => 1,
                'user_type' => 1
            ]);
           if($saveUser){
            $saveEmployee = Employee::insertGetId([
                'user_id' => $saveUser,
                'designation_id' => $request->designation,
                'created_by' => 1
            ]);

            Session::flash('success','User Created Successfull');
                DB::commit();
           }else {
            Session::flash('error','Something went Wrong');
            DB::rollback();
           } 
        }catch(\Exception $e){
            DB::rollback();
            //return $e;
            Session::flash('error',$e->errorInfo[2]);
        }
       return redirect()->route('hr.employee'); 
    }

}

