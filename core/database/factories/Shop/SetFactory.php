<?php

    namespace Database\Factories\Shop;

    use App\Models\Shop\Set;
    use Illuminate\Database\Eloquent\Factories\Factory;

    /**
     * @extends Factory<Set>
     */
    class SetFactory extends Factory {
        /**
         * Define the model's default state.
         *
         * @return array<string, mixed>
         */
        public function definition() {
            return [
                'name'        => $this->faker->colorName() . ' sets',
                'description' => $this->faker->sentence()
            ];
        }
    }
