<?php

namespace Database\Seeders;

use App\Models\Brand;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Brand::create(["name" => "Apple", 'image' => '/fake/brand/apple.png']);
        Brand::create(["name" => "Dell", 'image' => '/fake/brand/dell.png']);
        Brand::create(["name" => "HP", 'image' => '/fake/brand/hp.png']);
        Brand::create(["name" => "Lenovo", 'image' => '/fake/brand/lenovo.png']);
        Brand::create(["name" => "Samsung", 'image' => '/fake/brand/samsung.png']);
        Brand::create(["name" => "Huawei", 'image' => '/fake/brand/huawei.png']);

        // Brand::create(["name" => "OnePlus", 'image' => '/fake/brand/OnePlus.png']);
        // Brand::create(["name" => "Oppo", 'image' => '/fake/brand/Oppo.png']);
        // Brand::create(["name" => "Sony", 'image' => '/fake/brand/Sony.png']);
        // Brand::create(["name" => "Vivo", 'image' => '/fake/brand/Vivo.png']);
        // Brand::create(["name" => "Realme", 'image' => '/fake/brand/Realme.png']);
    }
}
