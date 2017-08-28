<?php
use Illuminate\Database\Seeder;
use App\User;
class UserTableSeeder extends Seeder
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
				'name' 		=> 'Jesus', 
				'last_name' => 'Rafael', 
				'email' 	=> 'jesusrafael.urdaneta@hotmail.com', 
				'user' 		=> 'jesusrafael97',
				'password' 	=> \Hash::make('jesusrafael1997'),
				'type' 		=> 'admin',
				'active' 	=> 1,
				'address' 	=> 'Irama',
				'created_at'=> new DateTime,
				'updated_at'=> new DateTime
			],
			[
				'name' 		=> 'Elibeth', 
				'last_name' => 'Castellanos', 
				'email' 	=> 'elibeth1998@hotmail.com', 
				'user' 		=> 'Eliicaste',
				'password' 	=> \Hash::make('123456'),
				'type' 		=> 'user',
				'active' 	=> 1,
				'address' 	=> 'bellozo',
				'created_at'=> new DateTime,
				'updated_at'=> new DateTime
			],
		);
		User::insert($data);
    }
}