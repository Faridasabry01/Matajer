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
            'name' => "Ever Pure Renewing Argan Oil Of Morocco For Women",
            'price' => 150,
            'quantity' => 30,
            'brand' => "Ever Pure",
            'image' => asset("/storage/haircare/EverPureArganOil.jpg"),
            'size' => "300 Ml",
            'expires_at' => now(),
            'desc' => "sulfate and paraben free.  It softens the hair and doubles its length and density.
Argan oil works to treat damaged hair as it contains many antioxidants that work to strengthen hair and restore health to it.
Helps soften hair and treats frizz. Argan oil is used to permanently eliminate dandruff.",
            "category_id" => 2
        ]);

        Product::create([
            'name' => "Olaplex No.7 Bonding Oil",
            'price' => 600,
            'quantity' => 20,
            'brand' => "Olaplex",
            'image' => asset("/storage/haircare/olaplexNo7.jpg"),
            'size' => "30 Ml",
            'expires_at' => now(),
            'desc' => "Repairs damaged and compromised hair.Strengthens and protects hair structure.Restores healthy appearance and texture.
 Olaplex No.7 is a highly-concentrated, weightless restorative styling oil designed for all hair type.
It instantly delivers incredible shine, softness and adds color vibrancy to any hair, natural or color treated.",
            "category_id" => 2
        ]);



        Product::create([
            'name' => "Lilium Argan Oil Hair Care Set",
            'price' => 370,
            'quantity' => 250,
            'brand' => "Lilium",
            'image' => asset("/storage/haircare/lilium.jpg"),
            'size' => "300 Ml",
            'expires_at' => now(),
            'desc' => "Lilium Argan Oil Hair Care Set with Wild Flowers.It includes: Shampoo, Conditioner, Bath Cream, Serum and Perfume.
             For All Hair Types and After Protein.",
            "category_id" => 2
        ]);

        Product::create([
            'name' => "Scalp Massager",
            'price' => 60,
            'quantity' => 50,
            'brand' => "Self the brand",
            'image' => asset("/storage/haircare/scalpMassager.jpg"),
            'size' => "300 Ml",
            'expires_at' => now(),
            'desc' => "Shampoo Brush with Soft & Flexible Silicone Bristles for Hair Care and Head Relaxation.Ergonomic Scalp Scrubber/Exfoliator for Dandruff Removal and Hair Growth.
            In daily hair washing, it thoroughly removes the flakes and build-up from the scalp and spreads hair care products deeply,
            leaving your hair cleaner and fresher.",
            "category_id" => 2
        ]);

        Product::create([
            'name' => "Zero Frizz Triple Butter Corrective Hair Serum",
            'price' => 220,
            'quantity' => 30,
            'brand' => "ZeroFizz",
            'image' => asset("/storage/haircare/zeroFizz.jpg"),
            'size' => "148 Ml",
            'expires_at' => now(),
            'desc' => "Contains Triple butter complex of shea, mango and cupuacu butters.Provides intense for nourished, Frizz free hair.
            Smooth, Tame frizz.",
            "category_id" => 2
        ]);

        Product::create([
            'name' => "Hair Burst Hair Growth Shampoo & Conditioner Set",
            'price' => 660,
            'quantity' => 35,
            'brand' => "Hair Brust",
            'image' => asset("/storage/haircare/hairBurst.jpg"),
            'size' => "350 Ml",
            'expires_at' => now(),
            'desc' => "For Women - Best Vegan Shampoo for Anti Hair Loss & Thinning Hair.Healthy Hair Growth Boost.Grow Gorgeous Longer Hair.
             Natural Ingredients: Hairburst hair growth shampoo and conditioner contains over 95% natural ingredients.
             Suitable for all Hair Types: Whether you have fine, thin, medium, coarse, dry, sleek, straight, or wavy hair,
             Hairburst is suitable for you.",
            "category_id" => 2
        ]);

        Product::create([
            'name' => "Olaplex No. 6 Bond Smoother",
            'price' => 600,
            'quantity' => 30,
            'brand' => "Olaplex",
            'image' => asset("/storage/haircare/olaplexNo6.jpg"),
            'size' => "100 Ml",
            'expires_at' => now(),
            'desc' => "Concentrated leave-in smoothing cream strengthens, hydrates, moisturizes. Rejuvenate and renew weak fragile hair.
             Helps to protect your hair from future damages.
             Regulates metabolism and balances scalp condition, making hair silky and smooth.",
            "category_id" => 2
        ]);

        Product::create([
            'name' => "Tresemme Botanix Natural Shampoo",
            'price' => 75,
            'quantity' => 40,
            'brand' => "Tresemme",
            'image' => asset("/storage/haircare/TresemmeShampoo.jpg"),
            'size' => "400 Ml",
            'expires_at' => now(),
            'desc' => "or Curl Hydration with Shea Butter & Hibiscus. Delivers professional-quality hair look. Gently cleanses and gives your curls the hydration they need.
             Suitable for men and women.",
            "category_id" => 2
        ]);

        Product::create([
            'name' => "Tresemme Keratin Smooth Infusing Smoothing Serum",
            'price' => 230,
            'quantity' => 30,
            'brand' => "Tresemme",
            'image' => asset("/storage/haircare/TRESemmeKeratinSmooth.jpg"),
            'size' => "97 Ml",
            'expires_at' => now(),
            'desc' => "For Smooth Easy to Style Hair.Helps Eliminate Frizz.Helps create the glossy look of a professional blow-dry style.
            5 benefits in 1 system helps fight frizz, detangle knots, boost shine, add softness and tame flyaways.",
            "category_id" => 2
        ]);

        Product::create([
            'name' => "L’Oréal Professionnel Hair Mask, With Protein And Gold Quinoa",
            'price' => 430,
            'quantity' => 30,
            'brand' => "L'oréal",
            'image' => asset("/storage/haircare/LOréalHairMask.jpg"),
            'size' => "250 Ml",
            'expires_at' => now(),
            'desc' => "Professional resurfacing shampoo which helps to reduce surface damage by up to 77%.Enriched with Wheat Protein and Gold Quinoa extract. Optimal resurfacing but with a lightweight touch.
            After Absolut Repair Shampoo, apply to towel-dried hair. Leave in for 3 to 5 minutes. Rinse thoroughly. For Medium-Thick Dry And Damaged Hair, Serie Expert Absolut Repair.",
            "category_id" => 2
        ]);


        Product::create([
            'name' => "Hair Brush Eco-Friendly Natural Wooden Bamboo",
            'price' => 45,
            'quantity' => 60,
            'brand' => "self the brand",
            'image' => asset("/storage/haircare/HairBrush.jpg"),
            'size' => "one size",
            'expires_at' => now(),
            'desc' => "Detangle Hairbrush. Massage Scalp. For Long, Curly, Short, Thick and Thin Hair. For Women, Kids and Men.",
            "category_id" => 2
        ]);

        Product::create([
            'name' => "Vichy Dercos Densi-Solutions Hair Mass Recreating Concentrate",
            'price' => 850,
            'quantity' => 40,
            'brand' => "Vichy",
            'image' => asset("/storage/haircare/vichyHairMass.jpg"),
            'size' => "100 Ml",
            'expires_at' => now(),
            'desc' => "It removes any tangles and makes hair manageable.The product intensively nourishes the hair and adds moisture to the hair.
            Vichy leave in treatment cares for your hair, giving it volume without weighing it down.Packaging of the product may vary.
            No parabens. No silicone. No colorants.",
            "category_id" => 2
        ]);


        Product::create([
            'name' => "ANASTASIA BEVERLY HILLS Waterproof Creme Liner Jet Black",
            'price' => 500,
            'quantity' => 40,
            'brand' => "ANASTASIA BEVERLY HILLS",
            'image' => asset("/storage/cosmetics/ANASTASIACremeLiner.jpg"),
            'size' => "30 ML",
            'expires_at' => now(),
            'desc' => "Matches all skin tones
            Made Of High Qaulity Materials",
            "category_id" => 3
        ]);



        Product::create([
            'name' => "Benefit Cosmetics Love Lip Tint Red",
            'price' => 700,
            'quantity' => 30,
            'brand' => "Benefit Cosmetics",
            'image' => asset("/storage/cosmetics/BenefitLipTint.jpg"),
            'size' => "15 ML",
            'expires_at' => now(),
            'desc' => "Perfect for all types of ocassion
          .Looks great with any kind of attire
           . Makes you look super glamorous
           .The precise lip applicator glides right on for a gorgeous look in seconds
           .Apply on lips and cheeks for kiss-proof, long-lasting vibrant color you're sure to love",
            "category_id" => 3
        ]);


        Product::create([
            'name' => "essence The Blush Befitting",
            'price' => 300,
            'quantity' => 15,
            'brand' => "essence",
            'image' => asset("/storage/cosmetics/essenceTheBlushBefitting.jpeg"),
            'size' => "20 ML",
            'expires_at' => now(),
            'desc' => "Highly pigmented glittering particles ensure even colour pay-off
            .Powdery texture blends effortlessly to impart a natural glow to your cheeks
            .Carefully composed to feel light and remain crease-free
            .This product is vegan, paraben free and cruelty free",
            "category_id" => 3
        ]);


        Product::create([
            'name' => "Blossom Essentials 15 Brushes Set",
            'price' => 800,
            'quantity' => 10,
            'brand' => "essence",
            'image' => asset("/storage/cosmetics/EssentialsBrushes.jpg"),
            'size' => "14 Brushes",
            'expires_at' => now(),
            'desc' => "Powder Brush, Sculpt Brush, Blend Brush, Pencil Brush, Base Shadow Brush,
            Crease Brush, Nose Contour Brush, Shade Brush, Angle Shader Brush, Lip Liner Brush,
            Smokey Eye Brush, Corrector Brush, Micro Glow Brush, Concealer Brush, Eyeliner (new)",
            "category_id" => 3
        ]);


        Product::create([
            'name' => "HUDA BEAUTY The New Eyeshadow Palette Multicolour",
            'price' => 2500,
            'quantity' => 10,
            'brand' => "HUDA BEAUTY",
            'image' => asset("/storage/cosmetics/HUDABEAUTYEyeshadow.jpeg"),
            'size' => "15 ML",
            'expires_at' => now(),
            'desc' => "18 insanely pigmented shades for infinite possibilities to flatter any skin tone</li>
            <li>Apply on top of matte formulas for a high shimmer finish</li>
            <li>Highly pigmented and crease resistant</li>
            <li>Can be applied wet or dry</li>
            <li>Includes is bare, crave, play, fantasy, love bite, spanked, lace, daydream, tickle, excite,
            infatuated, kinky, concealed, secret, tease, raw, charmed, teddy",
            "category_id" => 3
        ]);


        Product::create([
            'name' => "L'Oréal Paris False Lash Superstar X Fiber Mascara – Black",
            'price' => 300,
            'quantity' => 16,
            'brand' => "LOréal",
            'image' => asset("/storage/cosmetics/LOréalMascara.jpg"),
            'size' => "30 ML",
            'expires_at' => now(),
            'desc' => "Extreme length, extreme volume, extreme buildability
            .Lashes appear lifted and longer
            .For our most dramatic false lash look
           .20x more fibers for extreme length
            .Without the hassle of False lashes or eyelash extensions",
            "category_id" => 3
        ]);



        Product::create([
            'name' => "M.A.C Studio Fix Conceal & Correct Palette Multicolour",
            'price' => 1900,
            'quantity' => 10,
            'brand' => "M.A.C",
            'image' => asset("/storage/cosmetics/MACConcealAndCorrect.jpeg"),
            'size' => "4 COLORS",
            'expires_at' => now(),
            'desc' => "Gives a more defined look to your Look
            .Offers perfect coverage for imperfections and blemishes
            .Unique formulation keeps your Face comfortable and coloured up all day",
            "category_id" => 3
        ]);






        Product::create([
            'name' => "MAYBELLINE NEW YORK Master Precise Liquid Eyeliner Black 110",
            'price' => 600,
            'quantity' => 10,
            'brand' => "MAYBELLINE",
            'image' => asset("/storage/cosmetics/MAYBELLINEEyeliner.jpg"),
            'size' => "25 ML",
            'expires_at' => now(),
            'desc' => "Long-wearing, water and smudge-proof eyeliner delivers precise definition in just one stroke
            .Waterproof eyeliner features an ultra-fine tip that delivers the most defined, precise line
           .Empowered with Ink-pigment technology providing stunning, defining lines as well as intense colour
           .Creates endless eyeliner looks from natural daytime allure to ultimate smoky glamour
            .Delivers an immediate impact of intense color",
            "category_id" => 3
        ]);




        Product::create([
            'name' => "MAYBELLINE NEW YORK Lash Sensational Sky High Mascara Black",
            'price' => 300,
            'quantity' => 15,
            'brand' => "MAYBELLINE",
            'image' => asset("/storage/cosmetics/MAYBELLINESkyHighMascara.jpg"),
            'size' => "20 ML",
            'expires_at' => now(),
            'desc' => "Sky High lash impact from every angle
          .Exclusive Flex Tower mascara brush reaches every lash
           .Formula infused with Bamboo extract and fibers
            .Mascara volume and long
            .Long lasting mascara delivers full volume and limitless length",
            "category_id" => 3
        ]);




        Product::create([
            'name' => "NYX PROFESSIONAL MAKEUP Ultimate Shadow Palette 16 color",
            'price' => 1000,
            'quantity' => 10,
            'brand' => "NYX",
            'image' => asset("/storage/cosmetics/NYXShadow.jpg"),
            'size' => "25 ML",
            'expires_at' => now(),
            'desc' => "16 Shades, Matte, Satin, Metallic
           .Shade: Warm Neutrals",
            "category_id" => 3
        ]);


        Product::create([
            'name' => "RIMMEL LONDON Stay Matte Pressed Powder Transparent ",
            'price' => 300,
            'quantity' => 10,
            'brand' => "RIMMEL LONDON",
            'image' => asset("/storage/cosmetics/RIMMELLONDONPressedPowder.jpeg"),
            'size' => "50 g",
            'expires_at' => now(),
            'desc' => "Broad spectrum SPF effectively protects skin from the harmful UVA and UVB rays
           .Reduces skin blemishes and signs of early aging
            .Delivers flawless coverage for a radiant and perfected-looking complexion
          .Infused with moisturising agents that make your skin smooth and supple",
            "category_id" => 3
        ]);



        Product::create([
            'name' => "SEPHORA COLLECTION Enchanted Mountains 3 Eye Shadow Palette Multicolor",
            'price' => 700,
            'quantity' => 10,
            'brand' => "SEPHORA COLLECTION",
            'image' => asset("/storage/cosmetics/SEPHORAEyeshadow.png"),
            'size' => "3 shadows",
            'expires_at' => now(),
            'desc' => "Highly pigmented eyeshadow shades
           .Palettes are made up of super-soft, ultra-creamy powder
            .eyeshadows with a velvety texture that blends like a dream",
            "category_id" => 3
        ]);

        // ---------------skin care-------------------
        Product::create([
            'name' => "Cerave Hydrating Cleanser For Normal To Dry Skin With Hyaluronic Acid",
            'price' => 250,
            'quantity' => 20,
            'brand' => "CeraVe",
            'image' => asset("/storage/skincare/CeraveHydratingCleanserForNormalToDrySkin.jpg"),
            'size' => "236 Ml",
            'expires_at' => now(),
            'desc' => "Contains 3 Essential Ceramides to respect the skin's natural barrier.
            With Hyaluronic Acid, this gentle non-foaming cleanser works to effectively cleanse the face and body.
            Formulated with MVE Technology to lock in moisture, providing 24-hour hydration.
            Gentle on skin. Fragrance-free and non-comedogenic. ",
            "category_id" => 1
        ]);

        Product::create([
            'name' => "Garnier Hydra Bomb Eye Anti Dark-Circles Tissue Mask With Orange Juice",
            'price' => 30,
            'quantity' => 20,
            'brand' => "Garnier",
            'image' => asset("/storage/skincare/GarnierEyeTissueMask.jpg"),
            'size' => "1 pair",
            'expires_at' => now(),
            'desc' => "Visibly REDUCES DARK CIRCLES & EYE-BAGS
            Ultra-light MOISTURIZING formula
            Under eyes are visibly depuffed, eye-bags and dark circles are less visible
            Enriched with orange juice and hyaluronic acid
            Dermatologically tested ",
            "category_id" => 1
        ]);
        Product::create([
            'name' => "CeraVe Foaming Cleanser for Normal to Oily Skin",
            'price' => 250,
            'quantity' => 20,
            'brand' => "CeraVe",
            'image' => asset("/storage/skincare/CeraVeFoamingCleanserforNormaltoOilySkin.jpg"),
            'size' => "236ml",
            'expires_at' => now(),
            'desc' => "Formulated with care
            Category Type: Body and Face
            Suitable Skin Type: Combination
            Texture: Foam
            Type: Cleansers",
            "category_id" => 1
        ]);
        Product::create([
            'name' => "Garnier Pores Refining Face Tissue Mask With Pure Charcoal & Seaweed",
            'price' => 17,
            'quantity' => 20,
            'brand' => "Garnier",
            'image' => asset("/storage/skincare/GarnierFaceTissueMask.jpg"),
            'size' => "1 sheet",
            'expires_at' => now(),
            'desc' => "Purifying + hydrating + pores visibly reduced​
            1 mask = 1 week of hydrating serum for your skin​
            With natural Charcoal, Black Seaweed extract, LHA & Hyaluronic Acid
            Dermatologically tested",
            "category_id" => 1
        ]);
        Product::create([
            'name' => "Garnier Fast Bright Vitamin C Purifying Gel Wash Skin Care",
            'price' => 100,
            'quantity' => 20,
            'brand' => "Garnier",
            'image' => asset("/storage/skincare/GarnierVitaminCWash.jpg"),
            'size' => "400 ml",
            'expires_at' => now(),
            'desc' => "Boosted by Vitamin C and Lemon Extract
            Oil control and removes 99.9% of bacteria from the face
            Instantly Cleanses and Purifies Skin, revealing a brighter complexion
            Light gel texture dermatologically tested to remove excess oil and impurities residues with no dry out
            Dermatologically tested ",
            "category_id" => 1
        ]);

        Product::create([
            'name' => "La Roche-Posay Effaclar Purifying Foaming Gel Cleanser for Oily Skin",
            'price' => 250,
            'quantity' => 20,
            'brand' => "La Roche-Posay",
            'image' => asset("/storage/skincare/LaRochePosayEffaclarPurifyingFoamingGelCleanserforOilySkin.jpg"),
            'size' => "250 ml",
            'expires_at' => now(),
            'desc' => "Suitable Skin Type: All Skin Type
            Recommended Use: Hydrating, Repairing, Anti-aging, Reducing Wrinkles, Fine Lines and Pimples
            Gently cleanses impurities while respecting skin's pH balance.
            Oil-free, soap free formula with Zinc Pidolate to purify skin. ",
            "category_id" => 1
        ]);
        Product::create([
            'name' => "LA ROCHE POSAY Effclar Micro Peeling Purifying Gel ",
            'price' => 300,
            'quantity' => 20,
            'brand' => "La Roche-Posay",
            'image' => asset("/storage/skincare/LAROCHEPOSAYEffclarMicroPeelingPurifyingGel.jpg"),
            'size' => "200 ML",
            'expires_at' => now(),
            'desc' => "Helps eliminate dead skin cells
            Deeply unclogs pores and reduces excess sebum
            Visibly reduces pimples and marks
            Helps reduce breakout reccurence ",
            "category_id" => 1
        ]);
        Product::create([
            'name' => "Jade Roller Gua Sha Massage Set",
            'price' => 110,
            'quantity' => 20,
            'brand' => "generic",
            'image' => asset("/storage/skincare/JadeRoller.jpg"),
            'size' => "3 pieces",
            'expires_at' => now(),
            'desc' => "3-in-1 Natural Jade Stone Roller, Skin Care Face Massager Face Roller Eye Treatments Tool Kit
            The double-ended face roller to apply to different parts of your face; Ridged Roller,
            Same as the big roller, it can be used at forehead, cheek, neck and even arms, legs.
            The Potholes and humps on the surface of the ridged roller can help promote blood circulation
            and improve the health of your skin. The smaller roller is designed for around the lips, eyes.
            The Gua Sha massage tool is ideal to reduce wrinkles and puffiness and can be used on the face,
            neck, chin, back, arm, scalp, and waist as well as on the feet, back to improves blood circulation
            so as to relax and relieve.",
            "category_id" => 1
        ]);
        Product::create([
            'name' => " Nivea Body Cream Cocoa Butter -White",
            'price' => 40,
            'quantity' => 20,
            'brand' => "Nivea",
            'image' => asset("/storage/skincare/NiveaBodyCream.jpg"),
            'size' => "200 Ml",
            'expires_at' => now(),
            'desc' => "Formulated with deep moisture serum
            Enriched with cocoa butter and vitamin E
            Provides indulging moisture care for 48hours
            Suitable for dry skin
            Skin compatibility dermatologically approved",
            "category_id" => 1
        ]);

        Product::create([
            'name' => "VICHY MINERAL 89 SERUM",
            'price' => 600,
            'quantity' => 20,
            'brand' => "VICHY",
            'image' => asset("/storage/skincare/VICHYMINERALSERUM.jpg"),
            'size' => "50ML",
            'expires_at' => now(),
            'desc' => "Minéral 89 is a non greasy gel formula combining all the power of high dose Vichy Mineralizing
            Thermal Water with natural origin hyaluronic acid to strengthen skin’s barrier function
            Apply 2 drops on your skin after cleansing morning and evening
            Use as the first step of your skincare routine,Spread with outward movements
            from the middle of the face, without applying too much pressure. ",
            "category_id" => 1
        ]);
        Product::create([
            'name' => "THE ORDINARY Hyaluronic Acid 2% + B5 Hydrator",
            'price' => 400,
            'quantity' => 20,
            'brand' => "THE ORDINARY",
            'image' => asset("/storage/skincare/THEORDINARYHyaluronicAcid.jpg"),
            'size' => "30 ml",
            'expires_at' => now(),
            'desc' => "a hydration support formula with ultra-pure, vegan hyaluronic acid
            this system is supported with the addition of vitamin b5 which also enhances surface hydration",
            "category_id" => 1
        ]);
        Product::create([
            'name' => "VICHY NORMADERM CORRECTION DAILY CARE ",
            'price' => 500,
            'quantity' => 20,
            'brand' => "VICHY",
            'image' => asset("/storage/skincare/VICHYNORMADERMCORRECTION.jpg"),
            'size' => "50ML",
            'expires_at' => now(),
            'desc' => "Skincare-beauty: face treatment
            Weight: 50 milliliters
            for females ",
            "category_id" => 1
        ]);
        // ---------------------------------------
        Product::create([
            'name' => "Air Cam Walker Fracture Boot",
            'price' => 4000,
            'quantity' => 40,
            'brand' => "Uniteo Ortho",
            'image' => asset("/storage/imagesMedicalCare/AirCamWalker.jpg"),
            'size' => "L",
            'expires_at' => now(),
            'desc' => "The fracture boot for treatment and recovering sprain and fracture in the ankle or foot and for broken ankle,
            can also be used for acute ankle sprains, soft tissue injuries, achilles tendon rupture, stable lower leg,
            foot and ankle fractures and post-operative use.The air bladders can offer customize compression for further immobilization which provide maximum support and comfort.
            And adjustable ROM Aluminum uprights allow for the flexion limit, allows you to lock in almost any specific ankle angle
            or set parameters for a specific ankle range of motion, which fit comfortably foot and ankle flexion, limit foot
            and ankle range of motion.Orthopedic boot lower profile and rocker-bottom design would effectively help gait natural when walking
            to allow continuation of daily activities.The contoured strut of air cam boot provides increased durability and stability.",
            "category_id" => 4
        ]);
        Product::create([
            'name' => "Bepanthen Moisturizing Cream ",
            'price' => 90,
            'quantity' => 40,
            'brand' => "Bepanthen",
            'image' => asset("/storage/imagesMedicalCare/Bepanthen.jpg"),
            'size' => "30 G",
            'expires_at' => now(),
            'desc' => "The active substance dexpanthenol converts into vitamin pantothenic acid when applied onto the skin
            It supports the development and regeneration of the skin from within
            The cream has a soothing and cooling effect, because of its high moisture content",
            "category_id" => 4
        ]);
        Product::create([
            'name' => "Beurer Upper Arm Blood Pressure Scale ",
            'price' => 2000,
            'quantity' => 40,
            'brand' => "Beurer ",
            'image' => asset("/storage/imagesMedicalCare/BloodPressureScale.jpg"),
            'size' => "30 G",
            'expires_at' => now(),
            'desc' => "Large lcd display delivers the readings that help to clearly understand emergencies
            Features large memory space that allows you to monitor your health growth
            Premium material ensures prolonged usage
            Date and time/automatic switch-off",
            "category_id" => 4
        ]);
        Product::create([
            'name' => "Close Up Toothpaste White Now Gold ",
            'price' => 30,
            'quantity' => 40,
            'brand' => "Close Up ",
            'image' => asset("/storage/imagesMedicalCare/CloseUpToothpaste.jpg"),
            'size' => "75ML",
            'expires_at' => now(),
            'desc' => "Close Up White Now Gold Toothpaste boosts the whiteness of your teeth, making it up to 3X whiter instantly
            .A Toothpaste with advanced colour science technology- White-Correct Technology with blue-sapphire pigments
            works like colour correcting cosmetics to remove stains and create a unique shade of white.
            With zero-abrasive instant whitening ingredients, Close Up Whitening toothpaste is safe on enamel.
            High-quality ingredients combined with this whitening toothpaste help fight cavities and keep your breath fresh",
            "category_id" => 4
        ]);
        Product::create([
            'name' => "LISTERINE Mouthwash ",
            'price' => 50,
            'quantity' => 40,
            'brand' => "LISTERINE ",
            'image' => asset("/storage/imagesMedicalCare/LISTERINEMouthwash.jpg"),
            'size' => "250ml",
            'expires_at' => now(),
            'desc' => "Helps prevent & reduce plaque, a major cause of gum disease.Helps fight bacteria between teeth",
            "category_id" => 4
        ]);

        Product::create([
            'name' => "Moov Rapid Pain Relief Spray ",
            'price' => 250,
            'quantity' => 40,
            'brand' => "Moov ",
            'image' => asset("/storage/imagesMedicalCare/moov.jpg"),
            'size' => "250ml",
            'expires_at' => now(),
            'desc' => "Ayurvedic topical application pain reliever
            Helps in relieving pain and inflammation",
            "category_id" => 4
        ]);

        Product::create([
            'name' => "Oral-B Pro 3 Electric ToothBrush -Black Edition",
            'price' => 2000,
            'quantity' => 40,
            'brand' => "Moov ",
            'image' => asset("/storage/imagesMedicalCare/OralBElectricToothBrush.jpg"),
            'size' => "standard",
            'expires_at' => now(),
            'desc' => "DEEP CLEANING AND HEALTHIER GUMS with 360 ̊ GUM PRESSURE CONTROL that visibly alerts you if you brush too hard
            3 BRUSHING MODES: daily clean, whitening and sensitive
            Battery lasts more than 2 weeks with 1 charge with the Lithium-ION battery",
            "category_id" => 4
        ]);

        Product::create([
            'name' => "Oral-B Satin Tape Floss Mint",
            'price' => 50,
            'quantity' => 40,
            'brand' => "Oral-B ",
            'image' => asset("/storage/imagesMedicalCare/OralBFloss.jpg"),
            'size' => "standard",
            'expires_at' => now(),
            'desc' => "Flossing action for a fresh clean feeling.
            Single-strand floss designed to resist shredding and breakage
            Smooth, oval design for easy insertion between teeth, easy to grip even when wet.",
            "category_id" => 4
        ]);

        Product::create([
            'name' => "Pill Pro Weekly Pill Organizer",
            'price' => 100,
            'quantity' => 40,
            'brand' => "pill pro ",
            'image' => asset("/storage/imagesMedicalCare/PillOrganizer.jpg"),
            'size' => "standard",
            'expires_at' => now(),
            'desc' => "Declutter your counter. Pill Pro is the size of a coffee mug
            7 Day pill organizer
            7 Portable trays conveniently stack on top of each other
            4 Compartments in each tray
            Never miss a dosage again",
            "category_id" => 4
        ]);
        Product::create([
            'name' => "Sensodyne Gum Care Toothbrush for Sensitive Teeth - Soft",
            'price' => 25,
            'quantity' => 40,
            'brand' => "Sensodyne ",
            'image' => asset("/storage/imagesMedicalCare/SensodyneToothbrush.jpg"),
            'size' => "standard",
            'expires_at' => now(),
            'desc' => "Soft silk filamentsSoft circular endings designed to be gentle on the gumsDome-shaped head
            and fine filaments designed for easily adaptation to the sensitive areas (gum line)",
            "category_id" => 4
        ]);
        Product::create([
            'name' => "Sensodyne Multi Care and Whitening Toothpaste for Sensitive Teeth",
            'price' => 50,
            'quantity' => 40,
            'brand' => "Sensodyne ",
            'image' => asset("/storage/imagesMedicalCare/SensodyneToothpaste.jpg"),
            'size' => "100 ml",
            'expires_at' => now(),
            'desc' => "Sensitivity relief.
            Lasting sensitivity protection
            With fluoride for cavity protection
            Its minty taste keeps mouth feeling clean and fresh
            Helps remove plaque",
            "category_id" => 4
        ]);
        Product::create([
            'name' => "Digital Thick Glass Weighing Scale",
            'price' => 300,
            'quantity' => 40,
            'brand' => "genaric ",
            'image' => asset("/storage/imagesMedicalCare/SensodyneToothpaste.jpg"),
            'size' => "standard",
            'expires_at' => now(),
            'desc' => "weight measuring machine.
            weight digital machine",
            "category_id" => 4
        ]);
    }
}
