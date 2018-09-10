<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker; 
use App\Models\OrderDetail;

class OrderDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for ($j=0; $j <6 ; $j++) { 
            for ($i =1; $i < 31 ; $i++) { 
            $orderdetail = OrderDetail::create(
            [
            'product_id' => $i,
            'order_id' => $faker->numberBetween($min = 2, $max = 40),
            'quantity' => $faker->numberBetween($min = 1, $max = 6),
            'total' => '0',        
            ]);
        };

        }
       



        // DB::table('order_details')->insert(
        //     [
        //         [
        //             'order_id'   => '1',
        //             'product_id' => '1',
        //             'quantity'   => '2',
        //             'total'      => '0',
        //         ],
        //         // [
        //         //     'order_id'   => '1',
        //         //     'product_id' => '2',
        //         //     'quantity'   => '3',
        //         //     'total'      => '0',
        //         // ],
        //         // [
        //         //     'order_id'   => '2',
        //         //     'product_id' => '10',
        //         //     'quantity'   => '5',
        //         //     'total'      => '0',
        //         // ],
        //         // [
        //         //     'order_id'   => '2',
        //         //     'product_id' => '11',
        //         //     'quantity'   => '4',
        //         //     'total'      => '0',
        //         // ],
        //         // [
        //         //     'order_id'   => '3',
        //         //     'product_id' => '6',
        //         //     'quantity'   => '4',
        //         //     'total'      => '0',
        //         // ],
        //         // [
        //         //     'order_id'   => '3',
        //         //     'product_id' => '16',
        //         //     'quantity'   => '2',
        //         //     'total'      => '0',
        //         // ],
        //         // [
        //         //     'order_id'   => '4',
        //         //     'product_id' => '4',
        //         //     'quantity'   => '2',
        //         //     'total'      => '0',
        //         // ],
        //         // [
        //         //     'order_id'   => '4',
        //         //     'product_id' => '9',
        //         //     'quantity'   => '1',
        //         //     'total'      => '0',

        //         // ],
        //         // [
        //         //     'order_id'   => '4',
        //         //     'product_id' => '20',
        //         //     'quantity'   => '5',
        //         //     'total'      => '0',
        //         // ],
        //         // [
        //         //     'order_id'   => '5',
        //         //     'product_id' => '12',
        //         //     'quantity'   => '2',
        //         //     'total'      => '0',
        //         // ],
        //         // [
        //         //     'order_id'   => '5',
        //         //     'product_id' => '13',
        //         //     'quantity'   => '3',
        //         //     'total'      => '0',
        //         // ],
        //         // [
        //         //     'order_id'   => '6',
        //         //     'product_id' => '14',
        //         //     'quantity'   => '4',
        //         //     'total'      => '0',
        //         // ],
        //         // [
        //         //     'order_id'   => '6',
        //         //     'product_id' => '15',
        //         //     'quantity'   => '5',
        //         //     'total'      => '0',
        //         // ],
        //         // [
        //         //     'order_id'   => '7',
        //         //     'product_id' => '14',
        //         //     'quantity'   => '4',
        //         //     'total'      => '0',
        //         // ],
        //         // [
        //         //     'order_id'   => '7',
        //         //     'product_id' => '15',
        //         //     'quantity'   => '5',
        //         //     'total'      => '0',
        //         // ],
        //         // [
        //         //     'order_id'   => '7',
        //         //     'product_id' => '16',
        //         //     'quantity'   => '6',
        //         //     'total'      => '0',
        //         // ],
        //         // [
        //         //     'order_id'   => '8',
        //         //     'product_id' => '17',
        //         //     'quantity'   => '2',
        //         //     'total'      => '0',

        //         // ],
        //         // [
        //         //     'order_id'   => '8',
        //         //     'product_id' => '7',
        //         //     'quantity'   => '3',
        //         //     'total'      => '0',
        //         // ],
        //         // [
        //         //     'order_id'   => '9',
        //         //     'product_id' => '4',
        //         //     'quantity'   => '3',
        //         //     'total'      => '0',
        //         // ],
        //         // [
        //         //     'order_id'   => '9',
        //         //     'product_id' => '5',
        //         //     'quantity'   => '2',
        //         //     'total'      => '0',
        //         // ],
        //         // [
        //         //     'order_id'   => '10',
        //         //     'product_id' => '1',
        //         //     'quantity'   => '2',
        //         //     'total'      => '0',
        //         // ],
        //         // [
        //         //     'order_id'   => '10',
        //         //     'product_id' => '2',
        //         //     'quantity'   => '3',
        //         //     'total'      => '0',
        //         // ],
        //     ]

        // );
    }
}
