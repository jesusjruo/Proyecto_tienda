<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

use App\Product;

class ProductTableSeeder extends Seeder {

    /**
     * Run the Products table seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array(
            [
                'name'          => 'Playera 1',
                'slug'          => 'playera-1',
                'description'   => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus repellendus doloribus molestias odio nisi! Aspernatur eos saepe veniam quibusdam totam.',
                'extract'       => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
                'price'         => 275.00,
                'image'         => 'http://www.truffleshuffle.co.uk/store/images_high_res/Mens_Red_Batman_Graffiti_Logo_T_Shirt_hi_res.jpg',
                'visible'       => 1,
                'created_at'    => new DateTime,
                'updated_at'    => new DateTime,
                'category_id'   => 1
            ],
            [
                'name'          => 'Playera 2',
                'slug'          => 'playera-2',
                'description'   => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus repellendus doloribus molestias odio nisi! Aspernatur eos saepe veniam quibusdam totam.',
                'extract'       => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
                'price'         => 255.00,
                'image'         => 'http://www.truffleshuffle.co.uk/store/images_high_res/Mens_Blue_Distressed_Superman_Logo_T_Shirt_hi_res.jpg',
                'visible'       => 1,
                'created_at'    => new DateTime,
                'updated_at'    => new DateTime,
                'category_id'   => 1
            ],
            [
                'name'          => 'Playera 3',
                'slug'          => 'playera-3',
                'description'   => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus repellendus doloribus molestias odio nisi! Aspernatur eos saepe veniam quibusdam totam.',
                'extract'       => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
                'price'         => 300.00,
                'image'         => 'http://img5a.flixcart.com/image/t-shirt/f/g/q/fsbk-bruce-lee-sayitloud-xl-700x700-imadtkffxfhgsday.jpeg',
                'visible'       => 1,
                'created_at'    => new DateTime,
                'updated_at'    => new DateTime,
                'category_id'   => 1
            ],
            [
                'name'          => 'Playera 4',
                'slug'          => 'playera-4',
                'description'   => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus repellendus doloribus molestias odio nisi! Aspernatur eos saepe veniam quibusdam totam.',
                'extract'       => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
                'price'         => 475.00,
                'image'         => 'http://rlv.zcache.com/funny_computer_geek_t_shirt_tshirt-r537052a6a7b94b028e47b274c099fe24_804g5_324.jpg',
                'visible'       => 1,
                'created_at'    => new DateTime,
                'updated_at'    => new DateTime,
                'category_id'   => 2
            ],
            [
                'name'          => 'Playera 5',
                'slug'          => 'playera-5',
                'description'   => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus repellendus doloribus molestias odio nisi! Aspernatur eos saepe veniam quibusdam totam.',
                'extract'       => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
                'price'         => 280.00,
                'image'         => 'https://http2.mlstatic.com/D_Q_NP_163905-MLV25093374965_102016-Q.jpg',
                'visible'       => 1,
                'created_at'    => new DateTime,
                'updated_at'    => new DateTime,
                'category_id'   => 2
            ],
            [
                'name'          => 'Playera 6',
                'slug'          => 'playera-6',
                'description'   => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus repellendus doloribus molestias odio nisi! Aspernatur eos saepe veniam quibusdam totam.',
                'extract'       => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
                'price'         => 275.00,
                'image'         => 'https://http2.mlstatic.com/D_Q_NP_649115-MLV25194560335_112016-Q.jpg',
                'visible'       => 1,
                'created_at'    => new DateTime,
                'updated_at'    => new DateTime,
                'category_id'   => 2
            ],
            [
                'name'          => 'Playera 7',
                'slug'          => 'playera-7',
                'description'   => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus repellendus doloribus molestias odio nisi! Aspernatur eos saepe veniam quibusdam totam.',
                'extract'       => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
                'price'         => 275.00,
                'image'         => 'https://i.pinimg.com/originals/0e/45/20/0e452021c5a03a10d6e504276880d23a.jpg',
                'visible'       => 1,
                'created_at'    => new DateTime,
                'updated_at'    => new DateTime,
                'category_id'   => 1
            ],
            [
                'name'          => 'Playera 8',
                'slug'          => 'playera-8',
                'description'   => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus repellendus doloribus molestias odio nisi! Aspernatur eos saepe veniam quibusdam totam.',
                'extract'       => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
                'price'         => 275.00,
                'image'         => 'https://i.pinimg.com/564x/b2/46/66/b24666519f967d563c22383ef1a693e8.jpg',
                'visible'       => 1,
                'created_at'    => new DateTime,
                'updated_at'    => new DateTime,
                'category_id'   => 2
            ],
            
        );

        Product::insert($data);

    }

}