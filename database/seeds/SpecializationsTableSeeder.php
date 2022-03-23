<?php

use App\Models\Specialization;
use Illuminate\Database\Seeder;

class SpecializationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('specializations')->delete();

        $specializations = [
            ['en'=>'Arabic','ar'=>'عربي'],
            ['en'=>'English','ar'=>'انكليزي'],
            ['en'=>'Computer','ar'=>'معلوماتية'],
        ];

        foreach($specializations as  $specialization){
            Specialization::create(['Name' => $specialization]);
        }
    }
}
