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
            'site_name' => "Laravel's blog",
            'address' => 'egypt, Ismailia',
            'contact_number' => '01200902377',
            'contact_email' => 'info@laravel_blog.com'
        ]);
    }
}
