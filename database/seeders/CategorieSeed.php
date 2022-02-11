<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorieSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
           'name' => 'Restaurant',
           'slug' => Str::slug('Restaurant'),
           'created_at' => Carbon::now(),
           'updated_at' => Carbon::now(),
       ]);

        DB::table('categories')->insert([
           'name' => 'Cafe',
           'slug' => Str::slug('Cafe'),
           'created_at' => Carbon::now(),
           'updated_at' => Carbon::now(),
       ]);

        DB::table('categories')->insert([
           'name' => 'Hotel',
           'slug' => Str::slug('Hotel'),
           'created_at' => Carbon::now(),
           'updated_at' => Carbon::now(),
       ]);

        DB::table('categories')->insert([
           'name' => 'Bar',
           'slug' => Str::slug('Bar'),
           'created_at' => Carbon::now(),
           'updated_at' => Carbon::now(),
       ]);

        DB::table('categories')->insert([
           'name' => 'Hospital',
           'slug' => Str::slug('Hospital'),
           'created_at' => Carbon::now(),
           'updated_at' => Carbon::now(),
       ]);

        DB::table('categories')->insert([
           'name' => 'Gimnasio',
           'slug' => Str::slug('Gimnasio'),
           'created_at' => Carbon::now(),
           'updated_at' => Carbon::now(),
       ]);

        DB::table('categories')->insert([
           'name' => 'Doctor',
           'slug' => Str::slug('Doctor'),
           'created_at' => Carbon::now(),
           'updated_at' => Carbon::now(),
       ]);
    }
}
