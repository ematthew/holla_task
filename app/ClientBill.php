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
        // $query = [
        //     'id' => $payload->id,
        //     'username' => $payload->username,
        //     'mobile_number' => $payload->mobile_number,
        //     'amount' => $payload->amount,
        // ];

        // $headers = array('Content-Type: application/json');

        // try {
        //     // send bill to api
        //     $ch = curl_init();
        //     curl_setopt($ch, CURLOPT_URL, $endpoint);
        //     curl_setopt($ch, CURLOPT_POST, 1);
        //     curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($query));
        //     curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        //     curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 200);
        //     curl_setopt($ch, CURLOPT_TIMEOUT, 200);
        //     curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        //     $res = curl_exec($ch);
            
        //     return $res;
        // } catch (Exception $e) {
        //     return $e->getMessage();
        // }
    }
}
