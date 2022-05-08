<?php

    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;

    return new class extends Migration {
        /**
         * Run the migrations.
         *
         * @return void
         */
        public function up() {
            Schema::create( 'product_set', function( Blueprint $table ) {
                $table->foreignIdFor( \App\Models\Shop\Set::class )->constrained();
                $table->foreignIdFor( \App\Models\Shop\Product::class )->constrained();

                $table->primary( [ 'set_id', 'product_id' ] );
            } );
        }

        /**
         * Reverse the migrations.
         *
         * @return void
         */
        public function down() {
            Schema::dropIfExists( 'product_set' );
        }
    };
