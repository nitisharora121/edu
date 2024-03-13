<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Abroad_studies extends Model
{
    use HasFactory;

    protected $table = 'abroad_studies';

    protected $fillable = [
        // List all fillable fields here
        'intake',
        'percentage_in_12th',
        'subject_of_12th',
        'Board_in_12th',
        'IBDP_point',
        'Graduation_completed_Pursuing',
        'backlogs',
        'education_gap',
        'work_experience',
        'overall_IELTS_score',
        'individual_score',
        'SAT_score',
        'budget',
        'country_preference',
        'previous_visa',
        'travel_history',
        'course_preference',
        'university_college',
        'undergraduate_degree',
        'expectations',
        'emergency_contact_number',
        // Add other fields as needed
    ];
}
