<?php

use Illuminate\Database\Seeder;

class GamesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('games')->insert([
            [
            'name'=>'League of Legends 5vs5',
            'isSinglePlayer'=>false,
            'maxPlayers'=>5,
            'MaxTeams'=>16
            ],
            [
            'name'=>'Counter Strike Global Offensive',
            'isSinglePlayer'=>false,
            'maxPlayers'=>5,
            'MaxTeams'=>16
            ],
            [
            'name'=>'Hearthstone',
            'isSinglePlayer'=>true,
            'maxPlayers'=>1,
            'MaxTeams'=>12
            ],
            [
                'name'=>'FIFA 2019',
                'isSinglePlayer'=>true,
                'maxPlayers'=>1,
                'MaxTeams'=>16
            ],
            [
                'name'=>'Rocket League 2vs2',
                'isSinglePlayer'=>false,
                'maxPlayers'=>2,
                'MaxTeams'=>16
            ],
            [
                'name'=>'Old School Runescape',
                'isSinglePlayer'=>true,
                'maxPlayers'=>1,
                'MaxTeams'=>20
            ],
            [
                'name'=>'Fortnite 2vs2',
                'isSinglePlayer'=>false,
                'maxPlayers'=>2,
                'MaxTeams'=>16
            ]
        ]);
    }
}
