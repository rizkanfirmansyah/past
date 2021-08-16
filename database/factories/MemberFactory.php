<?php

namespace Database\Factories;

use App\Models\Member;
use App\Models\Position;
use App\Models\Rank;
use Illuminate\Database\Eloquent\Factories\Factory;

class MemberFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Member::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        // $rank = Rank::factory()->count(50)->create();
        // $position = Position::factory()->count(20)->create();

        return [
            'nrp' => $this->faker->name(),
            'name' => $this->faker->name(),
            'rankId' => Rank::factory(),
            'positionId' => Position::factory(),
            // 'rankId' => Rank::factory(),
            // 'positionId' => Position::factory(),
        ];
    }
}
