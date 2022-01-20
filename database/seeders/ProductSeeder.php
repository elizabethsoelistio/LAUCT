<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datetime = Carbon::now();
        DB::table('product')->insert([
            ['product_name' => 'CHANEL Classic Handbag', 'category_id' => 1, 'product_description' => 'Lambskin and Gold Metal', 'intial_bid' => 8800, 'dateTime' => $datetime->setDateTime(2022, 4, 21, 23, 59, 0), 'highest_bid' => 8800, 'highest_bid_id' => 1, 'product_image' => 'images/product/1.jpeg']
        ]);
        
        DB::table('product')->insert([   
            ['product_name' => 'CHANEL Mini Flap Bag', 'category_id' => 1, 'product_description' => 'Lambskin and Gold Metal', 'intial_bid' => 4400, 'dateTime' => $datetime->setDateTime(2022, 2, 2, 14, 00, 0), 'highest_bid' => 4400, 'highest_bid_id' => 1, 'product_image' => 'images/product/2.jpeg']
        ]);
        
        DB::table('product')->insert([
            ['product_name' => 'CHANEL Mini Evening Bag', 'category_id' => 1, 'product_description' => 'Gold Tone Hammered Metal and Gold Tone Metal', 'dateTime' => $datetime->setDateTime(2022, 1, 20, 12, 00, 00), 'intial_bid' => 10000, 'highest_bid' => 10000, 'highest_bid_id' => 1, 'product_image' => 'images/product/3.jpeg']
        ]);
        
        DB::table('product')->insert([
            ['product_name' => 'CHANEL Small Flap Bag', 'category_id' => 1, 'product_description' => 'Lambskin, Glass Pearls, Imitation Pearls, Strass, Gold, Silver & Ruthenium Finish Metal',  'intial_bid' => 7000, 'dateTime' => $datetime->setDateTime(2022, 3, 20, 15, 30, 00), 'highest_bid' => 7000,'highest_bid_id' => 1,'product_image' => 'images/product/4.jpeg']
        ]);
            
        DB::table('product')->insert([
            ['product_name' => 'CHANEL Open Shoes', 'category_id' => 2, 'product_description' => 'Laminated Calfskin and Grosgrain Light Gold and Black', 'intial_bid' => 1075, 'dateTime' => $datetime->setDateTime(2022, 7, 30, 12, 45, 00), 'highest_bid' => 1075, 'highest_bid_id' => 1, 'product_image' => 'images/product/5.jpeg']
        ]);
            
        DB::table('product')->insert([
            ['product_name' => 'CHANEL Ankle Boots', 'category_id' => 2, 'product_description' => 'Grosgrain, Knit and Laminated Calfskin Black and Gold', 'intial_bid' => 1550,'dateTime' => $datetime->setDateTime(2022, 6, 29, 16, 50, 00), 'highest_bid' => 1550, 'highest_bid_id' => 1, 'product_image' => 'images/product/6.jpeg']
        ]);
            
        DB::table('product')->insert([
            ['product_name' => 'CHANEL Ankle Boots', 'category_id' => 2, 'product_description' => 'Black Lambskin, Knit and Patent Calfskin', 'intial_bid' => 1650, 'dateTime' => $datetime->setDateTime(2022, 8, 06, 20, 30, 00),'highest_bid' => 1650, 'highest_bid_id' => 1,'product_image' => 'images/product/7.jpeg']
        ]);
            
        DB::table('product')->insert([
            ['product_name' => 'Louis Vuitton Sirius Briefcase', 'category_id' => 1, 'product_description' => 'Inspired by the Sirius Messenger bag from 1985, the Sirius Briefcase is made from leather with a Damier checkerboard pattern that looks as if it were drawn on the leather with a pencil. The finished with leather corners and side bands. This slim bag has rolled-leather top handles and a detachable and adjustable shoulder strap', 'intial_bid' => 15000, 'dateTime' => $datetime->setDateTime(2022, 9, 18, 15, 30, 00), 'highest_bid' => 15000,'highest_bid_id' => 1, 'product_image' => 'images/product/8.png']
        ]);
            
        DB::table('product')->insert([
            ['product_name' => 'Louis Vuitton Neo Porte Documents Voyage', 'category_id' => 1, 'product_description' => 'Part of the LV Mirror Mirror capsule launched for Fall Winter 2021 2022, the Neo Porte Documents Voyage is made from Monogram Mirror canvas, Virgil Abloh homage to the House history of reflective materials and specifically Marc Jacob Mirror Monogram from 2006. It is trimmed in natural leather. Top handles and a detachable strap translate into carry options.', 'intial_bid' => 20000, 'dateTime' => $datetime->setDateTime(2023, 1, 1, 12, 30, 00), 'highest_bid' => 20000,'highest_bid_id' => 1,'product_image' => 'images/product/9.png']
        ]);
            
        DB::table('product')->insert([    
            ['product_name' => 'Louis Vuitton Porte Documents Voyage PM', 'category_id' => 1, 'product_description' => 'The Porte Documents Voyage PM looks effortlessly stylish in masculine Taiga leather. With smooth leather trimmings and a spacious interior, it combines luxury and practicality', 'intial_bid' => 14000, 'dateTime' => $datetime->setDateTime(2023, 02, 29, 16, 30, 00),'highest_bid' => 14000, 'highest_bid_id' => 1, 'product_image' => 'images/product/10.png']
        ]);
            
        DB::table('product')->insert([    
            ['product_name' => 'Shanghai Tang Leather Dress with Floral Embroidery', 'category_id' => 3, 'product_description' => 'Mixing the lines of a qipao with westernized elements, this leather dress features a chic western collar and short sleeves. The flattering Aline fit is made in beautifully soft and supple leather and features a vibrant and colourful floral embroidery pattern along the edges.', 'intial_bid' => 1475, 'dateTime' => $datetime->setDateTime(2023, 3, 10, 14, 30, 00), 'highest_bid' => 1475, 'highest_bid_id' => 1,'product_image' => 'images/product/11.jpeg']
        ]);
            
        DB::table('product')->insert([    
            ['product_name' => 'Shanghai Tang Velvet Tang Jacket with Dragon Silk Lining', 'category_id' => 3, 'product_description' => 'One of Shanghai Tang most iconic styles, this Tang jacket is crafted from deluxe velvet with a plush touch. Beautiful details are abound, the signature frog buttons are made from glossy silk, and the jacquard lining showcases a majestic dragon pattern that shifts colours at different angles.', 'intial_bid' => 1255, 'dateTime' => $datetime->setDateTime(2022, 1, 14, 15, 30, 00), 'highest_bid' => 1255, 'highest_bid_id' => 1, 'product_image' => 'images/product/12.jpeg']
            ]);
            
        DB::table('product')->insert([    
            ['product_name' => 'EVERYDAY BACCARAT CLASSIC', 'category_id' => 4, 'product_description' => 'Perfect at any time of day to savor your drink of choice from the morning juice to the afternoon soft drink to the pre dinner spritz.', 'intial_bid' => 500, 'dateTime' => $datetime->setDateTime(2022, 04, 11, 22, 36, 00), 'highest_bid' => 500, 'highest_bid_id' => 1, 'product_image' => 'images/product/23.jpeg']
        ]);
            
        DB::table('product')->insert([    
            ['product_name' => 'FAUNACRYSTOPOLIS HARCOURT TEA SET', 'category_id' => 4, 'product_description' => 'Jaime Hayon joy of living comes to tea! Composed of a teapot and two glasses, the Faunacrystopolis box twists Harcourt codes with humor and originality',  'intial_bid' => 1100, 'dateTime' => $datetime->setDateTime(2022, 2, 28, 15, 30, 00), 'highest_bid' => 1100, 'highest_bid_id' => 1, 'product_image' => 'images/product/13.jpeg']
        ]);
            
        DB::table('product')->insert([
            ['product_name' => 'HARCOURT CAFE BACCARAT', 'category_id' => 4, 'product_description' => 'For the most refined espresso moment Baccarat proposes the finest crystal cup in the historical "king" Harcourt cut, for the chicest coffee break.', 'intial_bid' => 390, 'dateTime' => $datetime->setDateTime(2022, 6, 20, 15, 30, 00),'highest_bid' => 390, 'highest_bid_id' => 1, 'product_image' => 'images/product/14.jpeg']
        ]);
        
        DB::table('product')->insert([
            ['product_name' => 'HARCOURT SET IN STONE BY MARCEL WANDERS STUDIO', 'category_id' => 4, 'product_description' => 'Set in stone, literally. In order to forever capture the legend of the Harcourt glass, Marcel Wanders studio transforms the Baccarat icon into a marble sculpture. A set of two decorative glasses', 'intial_bid' => 590, 'dateTime' => $datetime->setDateTime(2022, 3, 20, 10, 30, 00), 'highest_bid' => 590, 'highest_bid_id' => 1,'product_image' => 'images/product/15.jpeg']
        ]);
            
        DB::table('product')->insert([
            ['product_name' => 'CHATEAU BACCARAT DECANTER', 'category_id' => 4, 'product_description' => 'The Chateau Baccarat decanter has a sharp aesthetic and contemporary design that expertly melds form and function.', 'intial_bid' => 590, 'dateTime' => $datetime->setDateTime(2022, 8, 13, 24, 30, 00), 'highest_bid' => 590, 'highest_bid_id' => 1,'product_image' => 'images/product/21.jpeg']
        ]);
        
        DB::table('product')->insert([
            ['product_name' => 'BELUGA HIGHBALL', 'category_id' => 4, 'product_description' => 'The Beluga highball, designed for Baccarat by Savinel and Rozé, is the perfect glass in which to sip and enjoy your whiskey.', 'intial_bid' => 175, 'dateTime' => $datetime->setDateTime(2023, 7, 24, 15, 30, 00), 'highest_bid' => 175, 'highest_bid_id' => 1,'product_image' => 'images/product/20.jpeg']
        ]);
    }
}
