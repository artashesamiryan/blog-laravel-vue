<?php

use Illuminate\Database\Seeder;
// use DB;

class CreateRolesTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
          [
              'id' => 1,
              'name' => 'admin'
          ],
          [
              'id' => 2,
              'name' => 'user'
          ]
        ];


        $seeder = DB::table('roles')->insert($data);
    }
}
