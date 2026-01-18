<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Page;

class PagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Page::create([
            'title'     => 'Mission Statement',
            'slug'      => 'statement',
            'tags'      => 'mission, statement',
            'excerpt'   => "The Mirror Theatre Company {MTC Group} through its Language Programme hosted by MTC Language Institute is a successful growing non-profit organization that offers hands-on, career focused educational programs gratis. Our primary goal is to prepare you and make you fit for your professional development.",
            'last_updated_by' => 1
        ]);
    }
}
