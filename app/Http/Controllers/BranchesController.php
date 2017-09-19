<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BranchesController extends Controller
{
    public function branch_list()
    {
    	return view('Admin.Branches.manage_branches');
    }
}
