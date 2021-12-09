<?php

namespace App\Http\Controllers\customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index(){
        return view('admin.backend.index');
    }
    public function orders(){
        return view('admin.backend.orders');
    }
}
