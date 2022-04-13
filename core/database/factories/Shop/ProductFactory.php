<?php

    namespace Database\Factories\Shop;

    use Illuminate\Database\Eloquent\Factories\Factory;

    /**
     * @extends Factory
     */
    class ProductFactory extends Factory {
        /**
         * Define the model's default state.
         *
         * @return array<string, mixed>
         */
        public function definition() {
            return [
                'title'       => $this->faker->paragraph(1),
                'description' => $this->faker->paragraphs( 2, true ),
                'price'       => rand( 100000, 999999 ),
                'quantity'    => rand( 0, 10 ),
            ];
        }
    }
