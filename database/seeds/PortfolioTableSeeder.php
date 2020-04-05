<?php

use App\Models\Portfolio;
use Illuminate\Database\Seeder;

class PortfolioTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Portfolio::class, 20)->create();
    }
}
