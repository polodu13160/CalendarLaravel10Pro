<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Group;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
//         \App\Models\User::factory(10)->create();
//        \App\Models\Group::factory(10)->create();


         \App\Models\User::factory()->create([
             'name' => 'Admin',
             'email' => 'admin@test.com',
         ]);

        $groupNames=['GROUP1','GROUP2','GROUP3'];
        foreach ($groupNames as $groupName) {
            \App\Models\Group::factory(1)->create
            (   [
                'name'=>$groupName,
                'description'=>fake()->text
                ],
            );
        }


         \App\Models\AssoGroupUser::factory(10)
             ->create();
    }
}
