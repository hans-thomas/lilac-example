<?php

    namespace Database\Seeders\Shop;

    use App\Models\Shop\Product;
    use App\Models\Shop\Set;
    use Illuminate\Database\Seeder;

    class SetSeeder extends Seeder {
        /**
         * Run the database seeds.
         *
         * @return void
         */
        public function run() {
            Set::factory()->count( 200 )->create()->each( function( Set $set ) {
                $set->products()->sync( Product::query()
                                               ->select( 'id' )
                                               ->inRandomOrder()
                                               ->limit( rand( 2, 4 ) )
                                               ->pluck( 'id' ) );
            } );
        }
    }
