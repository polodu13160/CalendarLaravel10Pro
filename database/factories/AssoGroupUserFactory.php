<?php

namespace Database\Factories;

use App\Models\Group;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\AssoGroupUser>
 */
class AssoGroupUserFactory extends Factory
{

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $groupIds = Group::all('id')->toArray();
        $groupId = $groupIds[array_rand($groupIds)];


        return [

                'user_id' => User::factory(),
                'group_id' => $groupId['id'],
                'Resp_Group' => $this->faker->boolean,


        ];
    }
}
