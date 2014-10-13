<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$this->call('UserTableSeeder');
	}

}

class UserTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->delete();

        $user = new User();
        $user->email = 'frank.aaron.rodriguez@gmail.com';
        $user->password = '.9%80)uDkb%tr|4J(04m';
        $user->first_name = 'Frank';
        $user->last_name = 'Rodriguez';
        $user->save();
    }

}