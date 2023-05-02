<?php

namespace Database\Seeders;
use App\Models\User;
use App\Models\CaseTable;
use App\Models\Category;


use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {     
        $this->call(LaratrustSeeder::class);
        $this->call(SuperUserSeeder::class);
        $this->call(CategorySeeder::class);
        
    }
}
