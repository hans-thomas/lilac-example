<?php

    namespace Database\Seeders\Shop;

    use App\Models\Shop\Category;
    use App\Models\Shop\Product;
    use Illuminate\Database\Seeder;

    class ProductSeeder extends Seeder {
        /**
         * Run the database seeds.
         *
         * @return void
         */
        public function run() {
            Product::factory()->count( 500 )->create()->each( fn( Product $product ) => $product->categories()
                                                                                                ->sync( Category::query()
                                                                                                                ->inRandomOrder()
                                                                                                                ->take( rand( 2,
                                                                                                                    5 ) )
                                                                                                                ->pluck( 'id' ) ) );
        }
    }
