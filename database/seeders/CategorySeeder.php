<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       Category::create([
            'description' => 'Theft Case',
            
        ]);

       Category::create([
            'description' => 'Rubbery Case',
            
        ]);

       Category::create([
            'description' => 'Domestic Violence',
            
        ]);
    }
}
