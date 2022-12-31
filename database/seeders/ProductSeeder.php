<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\Category;


class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name'=>"Ever Pure Renewing Argan Oil Of Morocco For Women",
            'price'=>150,
            'quantity'=>30,
            'brand'=>"Ever Pure",
            'image'=> asset("/storage/haircare/EverPureArganOil.jpg"),
            'size'=>"300 Ml",
            'expires_at'=> now(),
            'desc'=>"sulfate and paraben free. It softens the hair and doubles its length and density.

            Argan oil works to treat damaged hair as it contains many antioxidants that work to strengthen hair and restore health to it.

            Helps soften hair and treats frizz.

            Argan oil is used to permanently eliminate dandruff.",
            "category_id"=> 2
        ]);


    }
}
