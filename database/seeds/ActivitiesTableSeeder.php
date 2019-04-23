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
              'name' => 'Kris Bijnens (VARONIS) | 15:00 - 16:00',
              'maxUsers' => '100',
              'description' => '',
              'activityGroupID' => '1'
          ],
          [
              'name' => 'Kenny Van de Maele (INUITS) | 15:00 - 16:00',
              'maxUsers' => '100',
              'description' => '',
              'activityGroupID' => '1'
          ],
          [
              'name' => 'Rutger Truyers (PALO ALTO) | 16:00 - 17:00',
              'maxUsers' => '100',
              'description' => '',
              'activityGroupID' => '1'
          ],
          [
              'name' => 'Jordy Blommaert (DELAWARE) | 16:00 - 17:00',
              'maxUsers' => '100',
              'description' => '',
              'activityGroupID' => '1'
          ],
          [
              'name' => 'Matts Devriendt (DELAWARE) | 17:00 - 18:00',
              'maxUsers' => '100',
              'description' => '',
              'activityGroupID' => '1'
          ],
          [
              'name' => 'Flavius Bura | 17:00 - 18:00',
              'maxUsers' => '100',
              'description' => '',
              'activityGroupID' => '1'
          ],
          [
              'name' => 'Inti De Ceukelaire (INTIGRITI)  | 18:00 - 19:00',
              'maxUsers' => '100',
              'description' => '',
              'activityGroupID' => '1'
          ],
          [
              'name' => 'Erik Vanderhasselt | 19:00 - 20:00',
              'maxUsers' => '100',
              'description' => '',
              'activityGroupID' => '1'
          ],

      ]);
    }
}
