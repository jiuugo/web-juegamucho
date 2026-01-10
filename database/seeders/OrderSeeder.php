<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Order;

use App\Models\OrderItem;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Order::factory(10)->create()->each(function ($order) {
            $numItems = rand(1, 5);
            for ($i = 0; $i < $numItems; $i++) {
                $orderItem = OrderItem::factory()->make();
                $order->items()->save($orderItem);
            }
        });
    }
}
