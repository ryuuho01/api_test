<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Exercise;

class ExerciseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'name' => 'test1',
            'email' => 'test1@example.com',
            'profile' => 'aaaa'
        ];
        $rest = new Exercise;
        $rest->fill($param)->save();

        $param = [
            'name' => 'test2',
            'email' => 'test2@example.com',
            'profile' => 'bbbb'
        ];
        $rest = new Exercise;
        $rest->fill($param)->save();

        $param = [
            'name' => 'test3',
            'email' => 'test3@example.com',
            'profile' => 'cccc'
        ];
        $rest = new Exercise;
        $rest->fill($param)->save();
    }
}