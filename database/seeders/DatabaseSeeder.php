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
        $cat=Category::factory(5)->create();

         //$user=User::factory(2)->create();
         
        //  CaseTable::factory()->create(
        //  [
        //     'user_id' => $user->id,
        //     'category_id' => $cat->id,
        // ]);
    }
}
