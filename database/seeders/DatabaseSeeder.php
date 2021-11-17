<?php

namespace Database\Seeders;

use App\Models\Student;
use App\Models\Course;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        Student::create(['student_name'=>'Sunil Mahato','address'=>'Jalda Para, Barrackpore','contact1'=>'934449949']);
        Student::create(['student_name'=>'Rajib Karmakar','address'=>'Jalda Para, Barrackpore','contact1'=>'45645646']);
        Student::create(['student_name'=>'Aniket Kundu','address'=>'Jalda Para, Barrackpore','contact1'=>'45667564']);
        Student::create(['student_name'=>'Aniket Shaw','address'=>'Jalda Para, Barrackpore','contact1'=>'46564564']);
        Student::create(['student_name'=>'Mounita Bhandari','address'=>'Jalda Para, Barrackpore','contact1'=>'6446546']);
        Student::create(['student_name'=>'Ritaja Ghosh','address'=>'Jalda Para, Barrackpore','contact1'=>'46346356']);
        Student::create(['student_name'=>'Sumit Barua','address'=>'Jalda Para, Barrackpore','contact1'=>'4567556867']);
        Student::create(['student_name'=>'Sumana Das','address'=>'Jalda Para, Barrackpore','contact1'=>'687896868']);
        Student::create(['student_name'=>'Sujit Bose','address'=>'Jalda Para, Barrackpore','contact1'=>'56878978687']);
        Student::create(['student_name'=>'Shubhra Khatun','address'=>'Jalda Para, Barrackpore','contact1'=>'69780786778']);
        Student::create(['student_name'=>'Anil Majhi','address'=>'Jalda Para, Barrackpore','contact1'=>'680878978']);
        Course::create(['course_name'=>"Operating System",'fees'=>2000]) ;
        Course::create(['course_name'=>"DBMS",'fees'=>1000]);
        Course::create(['course_name'=>"Computer Architecture",'fees'=>1700]) ;
    }
}
