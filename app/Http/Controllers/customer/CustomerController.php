<?php

namespace App\Http\Controllers\customer;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CustomerController extends Controller
{
    public function index(){
        $cus = User::all();
        return view('admin.backend.index', compact('cus'));
    }
    public function orders(){
        return view('admin.backend.orders');
    }
}
