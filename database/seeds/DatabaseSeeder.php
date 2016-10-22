<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('mahasiswa')->truncate();
      $this->call(MahasiswaTableSeeder::class);

      // $daftar_mahasiswa = [
      //   ['nim'=>'1234', 'nama'=>'Akmal'],
      //   ['nim'=>'5678', 'nama'=>'Budi'],
      //   ['nim'=>'4311', 'nama'=>'Rasyid'],
      //   ['nim'=>'1234', 'nama'=>'Razak']
      // ];
      // DB::table('mahasiswa')->insert($daftar_mahasiswa);
        // $this->call(UsersTableSeeder::class);
    }
}
