<?php

    namespace Database\Seeders\Shop;

    use App\Models\Shop\Category;
    use Illuminate\Database\Seeder;

    class CategorySeeder extends Seeder {
        /**
         * Run the database seeds.
         *
         * @return void
         */
        public function run() {
            Category::factory()->count( 100 )->create();
        }
    }
