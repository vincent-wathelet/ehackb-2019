<?php

use Illuminate\Database\Seeder;

class ActivitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('activities')->insert([
          [
              'name' => 'Activiteit 1',
              'maxUsers' => '5',
              'description' => 'beschrijving',
              'activityGroupID' => '1',
          ]
      ]);
    }
}
