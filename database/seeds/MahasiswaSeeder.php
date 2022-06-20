<?php

use Illuminate\Database\Seeder;

use Faker\Factory as Faker;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        $gender = $faker->randomElement(['male', 'female']);

        for($i=1; $i<=100; $i++)
        {
            DB::table('mahasiswa')->insert([
                'nim' => $faker->nik(),
                'nama' => $faker->name($gender),
                'gender' => $gender,
                'jurusan' => $faker->title(),
                'minat' => $faker->jobTitle()

            ]);
        }
        /*DB::table('mahasiswa')->insert([
            'nim' => '72200415',
            'nama' => 'Naftalia Keisya',
            'gender' => 'Perempuan',
            'jurusan' => 'Sistem Informasi',
            'minat' => 'Membaca'
        ]);*/

    }
}
