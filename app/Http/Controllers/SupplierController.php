<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\supplier;

class SupplierController extends Controller
{
    public function index()
    {
        $data = supplier::all();
        return view('supplier', ['active'=>'active', 'title'=>'Supplier'], compact('data'));
    }
}
