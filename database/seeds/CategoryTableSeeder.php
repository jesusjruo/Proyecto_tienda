<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Category;


class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array(

            [   
                'name' => 'Super Heroes',
                'slug' => 'super heroes',
                'description' => 'Franela simple con tema de heroes de accion',
                'color' => '#448622'
            ],
            [
                'name' => 'Geeks',
                'slug' => 'geeks',
                'description' => 'Franela simple con tema de geeks expertos Devs',
                'color' => '#445500'
            ]

        );

        Category::insert($data);

            
}
}