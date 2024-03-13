<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('abroad_studies', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->nullable();
            $table->string('intake');
            $table->string('percentage_in_12th');
            $table->string('subject_of_12th');
            $table->string('Board_in_12th');
            $table->string('IBDP_point');
            $table->string('Graduation_completed_Pursuing');
            $table->string('backlogs');
            $table->string('education_gap');
            $table->string('work_experience'); 
            $table->string('overall_IELTS_score');
            $table->string('individual_score');
            $table->string('SAT_score');
            $table->string('budget');
            $table->string('country_preference');
            $table->string('previous_visa');
            $table->string('travel_history');
            $table->string('course_preference');
            $table->string('university_college');
            $table->string('undergraduate_degree');
            $table->string('expectations');
            $table->string('emergency_contact_number');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('abroad_studies');
    }
};
?>