<?php

namespace App\Providers;

// use Facade\FlareClient\View;
use App\Http\View\Composers\SiteNameComposer;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider {
	/**
	 * Register any application services.
	 *
	 * @return void
	 */
	public function register() {
	}

	/**
	 * Bootstrap any application services.
	 *
	 * @return void
	 */
	public function boot() {
		View::share( 'siteTitle', 'Quang Tuyên 94' );
		// View::composer( 'home', SiteNameComposer::class );
		Blade::withoutDoubleEncoding();
	}
}
