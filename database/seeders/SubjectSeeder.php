<?php

namespace Database\Seeders;

use App\Models\Course;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class SubjectSeeder extends Seeder
{
    public function run(): void
    {
        $bsit = Course::create(['name' => 'BSIT']);
        $ged  = Course::create(['name' => 'GED']);

        $subjects = [
            ['code' => 'ITRACKB4', 'title' => 'Web Systems and Technologies', 'units' => 3, 'course' => $bsit],
            ['code' => 'ITEC101',  'title' => 'Introduction to Computing',   'units' => 3, 'course' => $bsit],
            ['code' => 'ITTI202',  'title' => 'Database Management Systems', 'units' => 3, 'course' => $bsit],
            ['code' => 'ITPRO3',   'title' => 'Computer Programming',        'units' => 3, 'course' => $bsit],
            ['code' => 'ITNET01',  'title' => 'Networking Fundamentals',     'units' => 3, 'course' => $bsit],
            ['code' => 'GE101',    'title' => 'Understanding the Self',      'units' => 3, 'course' => $ged],
            ['code' => 'ITEL03',   'title' => 'Platform Technologies',       'units' => 3, 'course' => $bsit],
            ['code' => 'TEST101',  'title' => 'My Test Subject',             'units' => 3, 'course' => $bsit],
            ['code' => 'TEST102',  'title' => 'Second Test Subject',         'units' => 3, 'course' => $bsit],
        ];

        foreach ($subjects as $s) {
            Subject::create([
                'code'      => $s['code'],
                'title'     => $s['title'],
                'units'     => $s['units'],
                'course_id' => $s['course']->id,
            ]);
        }
    }
}