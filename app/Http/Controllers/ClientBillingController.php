<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ClientBill;

class ClientBillingController extends Controller
{
    public function processBill(Request $request)
    {
    	# code...
    	$new_bill = new ClientBill();
    	$data     = $new_bill->processBill($request);

    	// return response
    	return response()->json($data);
    }

    public function fetchAllBills(Request $request)
    {
    	# code...
    	$new_bill = new ClientBill();
    	$data     = $new_bill->fetchBills($request);

    	// return response
    	return response()->json($data);
    }
}
