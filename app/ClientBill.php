<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Jobs\ClientBillJob;

class ClientBill extends Model
{
    public function processBill($payload)
    {
    	$bills = ClientBill::all();
        foreach ($bills as $bill) {
            
            $job = (new ClientBillJob($bill->id))->delay(now());
            dispatch($job);
        }

        $data = [
            'status'    => 'success',
            'message'   => count($bills).' sent to api via queue.'
        ];

    	// return
    	return $data;
    }


    public function sendBillToApi($payload)
    {
    	# code...
    	$endpoint = '';

        return true;
    }
}
