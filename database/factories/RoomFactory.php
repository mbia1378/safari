<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;
use App\Models\Room;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

/*$factory->define(Room::class, function (Faker $faker) {
    static $number = 1;
    return [
        'room_number' => $number++,
        'description' => $faker->text,
        'available' => TRUE,
        'status' => TRUE,
        'room_type_id' => $faker->numberBetween($min = 1, $max = 6),
    ];
});*/


class RoomFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Room::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        static $number = 1;

        return [
            'room_number' => $number++,
            'description' => $this->faker->text,
            'available' => TRUE,
            'status' => TRUE,
            'room_type_id' => $this->faker->numberBetween($min = 1, $max = 6),
        ];
    }
}