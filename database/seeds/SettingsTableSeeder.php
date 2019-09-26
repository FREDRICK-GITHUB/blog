<?php

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Setting::create([
            'site_name' => "Laravel's Blog",
            'address' => 'Nairobi,Kenya',
            'contact_number' => '07xxxxxxxx',
            'contact_email' => 'kamaufredm@gmail.com'
        ]);
    }
}
