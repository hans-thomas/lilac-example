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
            Schema::create( 'category_product', function( Blueprint $table ) {
                $table->foreignIdFor( \App\Models\Shop\Product::class )->constrained();
                $table->foreignIdFor( \App\Models\Shop\Category::class )->constrained();
            } );
        }

        /**
         * Reverse the migrations.
         *
         * @return void
         */
        public function down() {
            Schema::dropIfExists( 'category_product' );
        }
    };
