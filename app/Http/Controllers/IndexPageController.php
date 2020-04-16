<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ClientBill;

class IndexPageController extends Controller
{
    public function index()
    {
    	$bills = ClientBill::orderBy('created_at', 'ASC')->paginate(15);

    	return view('welcome', compact('bills'));
    }
}
