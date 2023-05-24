<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Language;
use App\Models\Contact;
use App\Models\MetaTag;
use App\Models\Common;
use App\Models\Brand;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $all_languages = Language::get();
        $contact = Contact::firstOrFail();
        $meta = MetaTag::firstOrFail();
        $common = Common::firstOrFail();
        $all_brands = Brand::where('category_id',0)->get();
        view()->share([
            'all_languages' => $all_languages,
            'contact' => $contact,
            'meta' => $meta,
            'common' => $common,
            'all_brands' => $all_brands
        ]);

    }
}
