<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\ClientBill;

class ClientBillJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public $bill_id;
    public $tries = 3;
    public $timeout = 30;

    public function __construct($bill_id)
    {
        $this->bill_id = $bill_id;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $bill = ClientBill::find($this->bill_id);

        $handle_bill = new ClientBill();
        $handle_bill->sendBillToApi($bill);
    }
}
