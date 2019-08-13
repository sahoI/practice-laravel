<?php

use Illuminate\Database\Seeder;
use App\Store;
use App\Item;

class StoresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Store::class, 10)
          ->create()
          ->each(function ($store)
          {
            $items = factory(App\Item::class,2)->make();
            $store->items()->saveMany($items);
          });
    }
}
