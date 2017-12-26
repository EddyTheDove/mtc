<?php

use Illuminate\Database\Seeder;
use App\Models\Settings;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Settings::create([
            'app_name'      => 'GIC MTC',
            'app_motto'     => 'Language is Power',
            'admin_email'   => 'admin@email.com',
            'business_to_name'  => 'GIC MTC',
            'business_to_email' => 'info@gicmtc.com',
            'phone'             => '+237 2 2231 0383',
            'phone2'            => '2 4214 4848',
            'phone3'            => '6 7753 4247',
            'phone4'            => '6 9920 9877',
            'addresse_street'   => 'Rue Des Cafeiers, 4eme Immeuble a Gauche',
            'addresse_suburb'   => 'Biyem-Assi Stade Market'
        ]);
    }
}
