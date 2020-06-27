<?php

use Illuminate\Database\Seeder;

class BlockSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*
        [
            { position: 1, text: "", active: false },
            { position: 2, text: "petotum.com", active: true },
            { position: 3, text: "", active: false },
            { position: 4, text: "Build Trust", active: true },
            { position: 5, text: "", active: false },
            { position: 6, text: "", active: false },
            { position: 7, text: "Pet care dashboard", active: true },
            { position: 8, text: "", active: false },
            { position: 9, text: "Pet Parent Dashboard", active: true },
            { position: 10, text: "", active: false },
            { position: 11, text: "", active: false },
            { position: 12, text: "", active: false },
            { position: 13, text: "", active: false },
            { position: 14, text: "", active: false },
            { position: 15, text: "", active: false },
            { position: 16, text: "Provide Transparency", active: true }
          ] */
        DB::table('blocks')->insert([
            'position' => 1,
            'text' => "",
            'active' => false,
            'bg_color' => "#ffffff"
        ]);
        DB::table('blocks')->insert([
            'position' => 2,
            'text' => "petotum.com",
            'active' => true,
            'bg_color' => "#ffffff"
        ]);
        DB::table('blocks')->insert([
            'position' => 3,
            'text' => "",
            'active' => false,
            'bg_color' => "#ffffff"
        ]);
        DB::table('blocks')->insert([
            'position' => 4,
            'text' => "Build Trust",
            'active' => true,
            'bg_color' => "#ffffff"
        ]);
        DB::table('blocks')->insert([
            'position' => 5,
            'text' => "",
            'active' => false,
            'bg_color' => "#ffffff"
        ]);
        DB::table('blocks')->insert([
            'position' => 6,
            'text' => "",
            'active' => false,
            'bg_color' => "#ffffff"
        ]);
        DB::table('blocks')->insert([
            'position' => 7,
            'text' => "Pet care dashboard",
            'active' => true,
            'bg_color' => "#ffffff"
        ]);
        DB::table('blocks')->insert([
            'position' => 8,
            'text' => "",
            'active' => false,
            'bg_color' => "#ffffff"
        ]);
        DB::table('blocks')->insert([
            'position' => 9,
            'text' => "Pet Parent Dashboard",
            'active' => true,
            'bg_color' => "#ffffff"
        ]);
        DB::table('blocks')->insert([
            'position' => 10,
            'text' => "",
            'active' => false,
            'bg_color' => "#ffffff"
        ]);
        DB::table('blocks')->insert([
            'position' => 11,
            'text' => "",
            'active' => false,
            'bg_color' => "#ffffff"
        ]);
        DB::table('blocks')->insert([
            'position' => 12,
            'text' => "",
            'active' => false,
            'bg_color' => "#ffffff"
        ]);
        DB::table('blocks')->insert([
            'position' => 13,
            'text' => "",
            'active' => false,
            'bg_color' => "#ffffff"
        ]);
        DB::table('blocks')->insert([
            'position' => 14,
            'text' => "",
            'active' => false,
            'bg_color' => "#ffffff"
        ]);
        DB::table('blocks')->insert([
            'position' => 15,
            'text' => "",
            'active' => false,
            'bg_color' => "#ffffff"
        ]);
        DB::table('blocks')->insert([
            'position' => 16,
            'text' =>  "Provide Transparency",
            'active' => true,
            'bg_color' => "#ffffff"
        ]);
    }
}
