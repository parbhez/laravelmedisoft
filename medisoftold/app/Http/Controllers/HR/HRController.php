<?php

namespace App\Http\Controllers\HR;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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
    	return view($this->view_page_url.'employee');
    }

}

