<?php

use Illuminate\Database\Seeder;
use App\ClientBill;

class ClientBillTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(ClientBill::class, 10000)->create();
    }
}
