<?php

use Illuminate\Database\Seeder;
use App\Providers\RouteServiceProvider;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Route::prefix('seeds')
        ->middleware('seeds')
        ->namespace('Database\Seeds') // <---------
        ->group(base_path('Database\seeds\Category.php'));
       $this->call(Category::class);

       Route::prefix('seeds')
        ->middleware('seeds')
        ->namespace('Database\Seeds') // <---------
        ->group(base_path('Database\seeds\AdminSeeder.php'));
       $this->call(AdminSeeder::class);
    }
}
