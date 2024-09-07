<?php

namespace App\Providers;
use App\Providers\FakerImageProvider;
use Faker\Factory;
use Faker\Generator;
use Illuminate\Support\Facades\Vite;
use Illuminate\Support\ServiceProvider;

class TestingServicesProvider extends ServiceProvider
{
    public function register():void
    {
        $this->app->singleton(Generator::class, function (){
            $faker = Factory::create();
            $faker->addProvider(new FakerImageProvider($faker));

            return $faker;
        });
    }

    public function boot():void
    {
        //
    }
}
