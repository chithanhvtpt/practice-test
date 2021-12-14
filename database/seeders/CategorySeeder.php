<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = new Category();
        $category->name = "Quản trị hệ thống";
        $category->save();

        $category = new Category();
        $category->name = "Quản lý nhân sự";
        $category->save();

        $category = new Category();
        $category->name = "Lễ tân";
        $category->save();

        $category = new Category();
        $category->name = "Quản lý phòng";
        $category->save();

        $category = new Category();
        $category->name = "Quản lý Dịch vụ";
        $category->save();
    }
}
