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
            'desc'=>"sulfate and paraben free. It softens the hair and doubles its length and density. Argan oil works to treat damaged hair as it contains many antioxidants that work to strengthen hair and restore health to it.
             Helps soften hair and treats frizz. Argan oil is used to permanently eliminate dandruff.",
            "category_id"=> 2
        ]);

        Product::create([
            'name'=>"Olaplex No.7 Bonding Oil",
            'price'=>600,
            'quantity'=>20,
            'brand'=>"Olaplex",
            'image'=> asset("/storage/haircare/olaplexNo7.jpg"),
            'size'=>"30 Ml",
            'expires_at'=> now(),
            'desc'=>"Repairs damaged and compromised hair.Strengthens and protects hair structure.Restores healthy appearance and texture.
            Olaplex No.7 is a highly-concentrated, weightless restorative styling oil designed for all hair type.
            It instantly delivers incredible shine, softness and adds color vibrancy to any hair, natural or color treated.",
            "category_id"=> 2
        ]);



        Product::create([
            'name'=>"Lilium Argan Oil Hair Care Set",
            'price'=>370,
            'quantity'=>250,
            'brand'=>"Lilium",
            'image'=> asset("/storage/haircare/lilium.jpg"),
            'size'=>"300 Ml",
            'expires_at'=> now(),
            'desc'=>"Lilium Argan Oil Hair Care Set with Wild Flowers.It includes: Shampoo, Conditioner, Bath Cream, Serum and Perfume.
             For All Hair Types and After Protein.",
            "category_id"=> 2
        ]);

        Product::create([
            'name'=>"Scalp Massager",
            'price'=>60,
            'quantity'=>50,
            'brand'=>"Self the brand",
            'image'=> asset("/storage/haircare/scalpMassager.jpg"),
            'size'=>"300 Ml",
            'expires_at'=> now(),
            'desc'=>"Shampoo Brush with Soft & Flexible Silicone Bristles for Hair Care and Head Relaxation.Ergonomic Scalp Scrubber/Exfoliator for Dandruff Removal and Hair Growth.
            In daily hair washing, it thoroughly removes the flakes and build-up from the scalp and spreads hair care products deeply,
            leaving your hair cleaner and fresher.",
            "category_id"=> 2
        ]);

        Product::create([
            'name'=>"Zero Frizz Triple Butter Corrective Hair Serum",
            'price'=>220,
            'quantity'=>30,
            'brand'=>"ZeroFizz",
            'image'=> asset("/storage/haircare/zeroFizz.jpg"),
            'size'=>"148 Ml",
            'expires_at'=> now(),
            'desc'=>"Contains Triple butter complex of shea, mango and cupuacu butters.Provides intense for nourished, Frizz free hair.
            Smooth, Tame frizz.",
            "category_id"=> 2
        ]);

        Product::create([
            'name'=>"Hair Burst Hair Growth Shampoo & Conditioner Set",
            'price'=>660,
            'quantity'=>35,
            'brand'=>"Hair Brust",
            'image'=> asset("/storage/haircare/hairBurst.jpg"),
            'size'=>"350 Ml",
            'expires_at'=> now(),
            'desc'=>"For Women - Best Vegan Shampoo for Anti Hair Loss & Thinning Hair.Healthy Hair Growth Boost.Grow Gorgeous Longer Hair.
             Natural Ingredients: Hairburst hair growth shampoo and conditioner contains over 95% natural ingredients.
             Suitable for all Hair Types: Whether you have fine, thin, medium, coarse, dry, sleek, straight, or wavy hair,
             Hairburst is suitable for you.",
            "category_id"=> 2
        ]);

        Product::create([
            'name'=>"Olaplex No. 6 Bond Smoother",
            'price'=>600,
            'quantity'=>30,
            'brand'=>"Olaplex",
            'image'=> asset("/storage/haircare/olaplexNo6.jpg"),
            'size'=>"100 Ml",
            'expires_at'=> now(),
            'desc'=>"Concentrated leave-in smoothing cream strengthens, hydrates, moisturizes. Rejuvenate and renew weak fragile hair.
             Helps to protect your hair from future damages.
             Regulates metabolism and balances scalp condition, making hair silky and smooth.",
            "category_id"=> 2
        ]);

        Product::create([
            'name'=>"Tresemme Botanix Natural Shampoo",
            'price'=>75,
            'quantity'=>40,
            'brand'=>"Tresemme",
            'image'=> asset("/storage/haircare/TresemmeShampoo.jpg"),
            'size'=>"400 Ml",
            'expires_at'=> now(),
            'desc'=>"or Curl Hydration with Shea Butter & Hibiscus. Delivers professional-quality hair look. Gently cleanses and gives your curls the hydration they need.
             Suitable for men and women.",
            "category_id"=> 2
        ]);

        Product::create([
            'name'=>"Tresemme Keratin Smooth Infusing Smoothing Serum",
            'price'=>230,
            'quantity'=>30,
            'brand'=>"Tresemme",
            'image'=> asset("/storage/haircare/TRESemmeKeratinSmooth.jpg"),
            'size'=>"97 Ml",
            'expires_at'=> now(),
            'desc'=>"For Smooth Easy to Style Hair.Helps Eliminate Frizz.Helps create the glossy look of a professional blow-dry style.
            5 benefits in 1 system helps fight frizz, detangle knots, boost shine, add softness and tame flyaways.",
            "category_id"=> 2
        ]);

        Product::create([
            'name'=>"L’Oréal Professionnel Hair Mask, With Protein And Gold Quinoa",
            'price'=>430,
            'quantity'=>30,
            'brand'=>"L'oréal",
            'image'=> asset("/storage/haircare/LOréalHairMask.jpg"),
            'size'=>"250 Ml",
            'expires_at'=> now(),
            'desc'=>"Professional resurfacing shampoo which helps to reduce surface damage by up to 77%.Enriched with Wheat Protein and Gold Quinoa extract. Optimal resurfacing but with a lightweight touch.
            After Absolut Repair Shampoo, apply to towel-dried hair. Leave in for 3 to 5 minutes. Rinse thoroughly. For Medium-Thick Dry And Damaged Hair, Serie Expert Absolut Repair.",
            "category_id"=> 2
        ]);


        Product::create([
            'name'=>"Hair Brush Eco-Friendly Natural Wooden Bamboo",
            'price'=>45,
            'quantity'=>60,
            'brand'=>"self the brand",
            'image'=> asset("/storage/haircare/HairBrush.jpg"),
            'size'=>"one size",
            'expires_at'=> now(),
            'desc'=>"Detangle Hairbrush. Massage Scalp. For Long, Curly, Short, Thick and Thin Hair. For Women, Kids and Men.",
            "category_id"=> 2
        ]);

        Product::create([
            'name'=>"Vichy Dercos Densi-Solutions Hair Mass Recreating Concentrate",
            'price'=>850,
            'quantity'=>40,
            'brand'=>"Vichy",
            'image'=> asset("/storage/haircare/vichyHairMass.jpg"),
            'size'=>"100 Ml",
            'expires_at'=> now(),
            'desc'=>"It removes any tangles and makes hair manageable.The product intensively nourishes the hair and adds moisture to the hair.
            Vichy leave in treatment cares for your hair, giving it volume without weighing it down.Packaging of the product may vary.
            No parabens. No silicone. No colorants.",
            "category_id"=> 2
        ]);


    }
}
