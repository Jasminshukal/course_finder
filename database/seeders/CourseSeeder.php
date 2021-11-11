<?php

namespace Database\Seeders;

use App\Models\Course;
use App\Models\University;
use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;


class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();
        //lavel list
        $laval=array(
            "a_level" => 'A Level',
            "english_language_preparation" => 'English Language Preparation',
            "foundation" => 'Foundation',
            "high_school" => 'High School',
            "international_year_one" => 'International year one',
            "postgraduate" => 'Postgraduate',
            "postgraduate_research" => 'Postgraduate Research',
            "pre-dba" => 'Pre-DBA',
            "pre-master" => 'Pre-Masters',
            "undergraduate" => 'Undergraduate',
            "certificate" => 'Certificate',
            "diploma" => 'Diploma'
        );
        //Destination list
        $destination=array(
            "united_kingdom"=> 'United Kingdom ',
            "new_zealand"=> 'New Zealand ',
            "united_state_of_america"=> 'United State of America ',
            "europe"=> 'Europe',
            "australia"=> 'Australia ',
            "malaysia"=> 'Malaysia ',
            "china"=> 'China ',
            "germany"=> 'Germany ',
            "canada"=> 'Canada ',
            "ireland"=> 'Ireland ',
            "france"=> 'France ',
            "hungary"=> 'Hungary ',
            "cyprus"=> 'Cyprus ',
            "united_arab_emirates"=> 'United Arab Emirates ',
            "grenada"=> 'Grenada '
        );
        //Subject list
        $subject=array(
        "accounting"=>'Accounting',
        "art_and_design"=>'Art and Design',
        "business"=>'Business',
        "computing_and_it"=>'Computing and IT',
        "economics"=>'Economics',
        "engineering"=>'Engineering',
        "english_language"=>'English Language',
        "exam_preparation_english_course"=>'Exam Preparation English Course',
        "humanities-and-social-science"=>'Humanities and Social Science',
        "law"=>'Law',
        "life-science"=>'Life Science',
        "management"=>'Management',
        "marketing"=>'Marketing',
        "mathematics-and-statistics"=>'Mathematics and Statistics',
        "media"=>'Media',
        "medical"=>'Medical',
        "other-courses"=>'Other Courses',
        "science"=>'Science',
        "senior-secondary-high-school"=>'Senior Secondary High School',
        "social-science"=>'Social Science',
        "education"=>'Education',
        "cultural-studies"=>'Cultural Studies',
        "sports-and-nutrition"=>'Sports and Nutrition',
        "applied-science"=>'Applied Science'
        );

        University::create([
            'name' => $faker->name(),
            'description' => $faker->paragraph,
            'image' => $faker->imageUrl($width = 300, $height = 300),
            'address' => $faker->address,
        ]);

        for($i = 0; $i < 1000; $i++) {
            $name=$faker->name();
            Course::create([
                'slug' => Str::of($name)->slug('-'),
                'name' => $name,
                'banner' => $faker->imageUrl($width = 1200, $height = 676),
                'overview' => 'OVERVIEW - TEXT',
                'requirement' => 'REQUIREMENT - TEXT',
                'fees' => 'FEES - TEXT',
                'subject' => array_rand($subject),
                'laval' => array_rand($laval),
                'destination' => array_rand($destination),
                'university_id' => 1,
                'description'=>$faker->paragraph,
                'fee'=>$faker->numberBetween($min = 1000, $max = 9000),
                'currency_sym'=>'$'
            ]);
            // $random_keys
        }
        //
    }
}
