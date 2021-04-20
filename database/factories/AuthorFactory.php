<?php
/**
 * @author Mamaev Yuriy (eXeCUT)
 * @link https://github.com/execut
 * @copyright Copyright (c) 2020 Mamaev Yuriy (eXeCUT)
 * @license http://www.apache.org/licenses/LICENSE-2.0
 */

namespace Database\Factories;

use App\Models\Author;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * Author Factory for tests
 * @package Database\Factories
 * @property \App\Faker\Provider\Author|\Faker\Generator $faker
 */
class AuthorFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Author::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition():array
    {
        $this->faker->addProvider(new \App\Faker\Provider\Author($this->faker));
        return [
            'name' => $this->faker->authorName(),
        ];
    }
}
