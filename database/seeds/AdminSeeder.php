<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Carbon\Carbon;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insertGetId([
            'name' => 'Admin',
            'email' => 'admin@mail.com',
            'password' => bcrypt('12345'),
            'is_active' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('user_details')->insertGetId([
            'user_id' => 2,
            'biodata' => Str::random(40),
            'rekomendasi_murobbi' => Str::random(40),
            'izin_nikah' => Str::random(40),
            'keterangan_sehat' => Str::random(40),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
