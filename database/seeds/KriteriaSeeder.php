<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KriteriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('keterampilans')->insert([
            ['keterampilan' => 'memasak', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['keterampilan' => 'menjahit', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['keterampilan' => 'menulis', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        ]);

        DB::table('sukus')->insert([
            ['suku' => 'Bugis', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['suku' => 'Dayak', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['suku' => 'Betawi', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        ]);

        DB::table('tinggis')->insert([
            ['tinggi' => 'pendek', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['tinggi' => 'sedang', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['tinggi' => 'tinggi', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        ]);

        DB::table('tubuhs')->insert([
            ['tubuh' => 'kurus', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['tubuh' => 'normal', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['tubuh' => 'gemuk', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        ]);

        DB::table('organisasis')->insert([
            ['organisasi' => 'tidak suka organisasi', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['organisasi' => 'ketua lembaga dakwah kampus', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['organisasi' => 'anggota lembaga dakwah kampus', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['organisasi' => 'pasif', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        ]);

        DB::table('pendidikans')->insert(
            [['pendidikan' => 'SD', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['pendidikan' => 'SLTP', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['pendidikan' => 'SLTA', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['pendidikan' => 'D3', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['pendidikan' => 'S1', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['pendidikan' => 'S2', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['pendidikan' => 'S3', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],]
        );

        DB::table('rambuts')->insert(
            [['rambut' => 'lurus', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['rambut' => 'tebal', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['rambut' => 'keriting ringan', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['rambut' => 'kribo', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['rambut' => 'panjang', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['rambut' => 'pendek', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],]
        );

        DB::table('pekerjaans')->insert(
            [['pekerjaan' => 'perawat', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['pekerjaan' => 'PNS', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['pekerjaan' => 'wiraswasta', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['pekerjaan' => 'penulis', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['pekerjaan' => 'karyawan swasta', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['pekerjaan' => '    honorer', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],]
        );

        DB::table('kulits')->insert(
            [['kulit' => 'putih bersih', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['kulit' => 'kuning langsat', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['kulit' => 'sawo matang', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['kulit' => 'hitam', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],]
        );

        DB::table('darahs')->insert(
            [['darah' => 'A', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['darah' => 'B', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['darah' => 'AB', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['darah' => 'O', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],]
        );

        DB::table('wajahs')->insert(
            [['wajah' => 'hati', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['wajah' => 'persegi', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['wajah' => 'bulat', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['wajah' => 'berlian', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['wajah' => 'oval', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['wajah' => 'persegi panjang', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],]
        );

        DB::table('nikahs')->insert(
           [['usia' => 'ideal', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['usia' => 'cukup', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['usia' => 'waspada', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],]
        );
    }
}
