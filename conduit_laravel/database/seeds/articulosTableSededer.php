<?php

use Illuminate\Database\Seeder;
use App\Articulos;

class articulosTableSededer extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    protected $totalArticulos = 7;
    
    
    public function run(\Faker\Generator $faker)
    {
        $articulos = factory(\App\Articulos::class)->times($this->totalArticulos)->create();
       
    }
}
