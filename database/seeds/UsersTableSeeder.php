<?php

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Default password
        $defaultPassword = 'secret';
        $this->command->getOutput()->writeln("<info>Default password:</info> $defaultPassword");

        // Create super admin user
        $user = new User();
        $role = new Role();

        $user->create([
            'name'              => 'Super admin',
            'email'             => 'jandarylgalbo@gmail.com',
            'email_verified_at' => now(),
            'password'          => bcrypt($defaultPassword),
            'active'            => true,
            'locale'            => app()->getLocale(),
            'timezone'          => config('app.timezone'),
        ]);
}
