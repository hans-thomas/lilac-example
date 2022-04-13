<?php

    namespace Database\Seeders;

    use Database\Seeders\Core\PreferenceSeeder;
    use Database\Seeders\Core\RoleAndPermissionSeeder;
    use Database\Seeders\Core\UserSeeder;
    use Database\Seeders\Shop\CategorySeeder;
    use Database\Seeders\Shop\ProductSeeder;
    use Illuminate\Database\Seeder;

    class DatabaseSeeder extends Seeder {
        /**
         * Seed the application's database.
         *
         * @return void
         */
        public function run() {
            $this->call( [
                RoleAndPermissionSeeder::class,
                UserSeeder::class,
                PreferenceSeeder::class,

                CategorySeeder::class,
                ProductSeeder::class
            ] );
        }
    }
