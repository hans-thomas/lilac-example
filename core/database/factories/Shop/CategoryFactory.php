<?php

    namespace Database\Factories\Shop;

    use Illuminate\Database\Eloquent\Factories\Factory;

    /**
     * @extends Factory
     */
    class CategoryFactory extends Factory {
        /**
         * Define the model's default state.
         *
         * @return array<string, mixed>
         */
        public function definition() {
            return [
                'name' => $this->faker->colorName()
            ];
        }
    }
