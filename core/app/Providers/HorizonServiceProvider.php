<?php

    namespace App\Providers;

    use Illuminate\Support\Facades\Gate;
    use Laravel\Horizon\Horizon;
    use Laravel\Horizon\HorizonApplicationServiceProvider;

    class HorizonServiceProvider extends HorizonApplicationServiceProvider {
        /**
         * Bootstrap any application services.
         *
         * @return void
         */
        public function boot() {
            parent::boot();

            // Horizon::routeSmsNotificationsTo('15556667777');
            // Horizon::routeMailNotificationsTo('example@example.com');
            // Horizon::routeSlackNotificationsTo('slack-webhook-url', '#channel');

            env( 'HORIZON_DARK_THEME' ) ? Horizon::night() : null;
        }

        /**
         * Register the Horizon gate.
         *
         * This gate determines who can access Horizon in non-local environments.
         *
         * @return void
         */
        protected function gate() {
            Gate::define( 'viewHorizon', function( $user ) {
                return $user->can( 'user-viewHorizon' );
            } );
        }
    }
