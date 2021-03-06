<?php

use Illuminate\Database\Seeder;

class product extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product')->delete();
        DB::table('product')->insert([
            // ['id'=>1,'product_code'=>'SP01','name'=>'Áo nam da thật MX105','price'=>500000,'featured'=>1,'state'=>1,'img'=>'no-img.jpg','category_id'=>2],
            // ['id'=>2,'product_code'=>'SP02','name'=>' Áo Thun Có Cổ','price'=>500000,'featured'=>1,'state'=>0,'img'=>'no-img.jpg','category_id'=>2],
            // ['id'=>3,'product_code'=>'SP03','name'=>'Quần âu nam Prazenta I-QAM61','price'=>500000,'featured'=>0,'state'=>1,'img'=>'no-img.jpg','category_id'=>3],
            // ['id'=>4,'product_code'=>'SP04','name'=>'Áo nữ cổ V viền tay xinh xắn','price'=>500000,'featured'=>1,'state'=>1,'img'=>'no-img.jpg','category_id'=>6],
            // ['id'=>5,'product_code'=>'SP05','name'=>'Quần Nữ Suông Ống Rộng','price'=>500000,'featured'=>1,'state'=>1,'img'=>'no-img.jpg','category_id'=>7],
            ['id'=>1,'product_code'=>'SP01','name'=>'Máy lọc Sakumin','price'=>500000,'featured'=>1,'state'=>1,'img'=>'no-img.jpg','category_id'=>1,'quantity'=>50],
            ['id'=>2,'product_code'=>'SP02','name'=>'Máy lọc Lucifer','price'=>1000000,'featured'=>1,'state'=>1,'img'=>'no-img.jpg','category_id'=>2,'quantity'=>50],
            ['id'=>3,'product_code'=>'SP03','name'=>'Máy nóng lạnh ','price'=>600000,'featured'=>1,'state'=>1,'img'=>'no-img.jpg','category_id'=>3,'quantity'=>50],
            ['id'=>4,'product_code'=>'SP04','name'=>'Máy nóng nguội ','price'=>700000,'featured'=>1,'state'=>1,'img'=>'no-img.jpg','category_id'=>3,'quantity'=>50],
            ['id'=>5,'product_code'=>'SP05','name'=>'Linh kiện ','price'=>20000,'featured'=>1,'state'=>1,'img'=>'no-img.jpg','category_id'=>4,'quantity'=>50],
        ]);
    }
}
  