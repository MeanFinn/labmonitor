<?php

use App\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		$user = new User;

		$user->username = "mcperry";
		$user->first_name = "mack perry";
		$user->middle_name = "l";
		$user->last_name = "co";
		$user->email = "nani";
		$user->password = "1234";

		$user->save();
	}
}
