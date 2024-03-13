<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Abroad_studies; // Ensure correct namespace
use Illuminate\Validation\Rules;
use Auth;

class UserController extends Controller
{
    public function view_detail()
    {
        if (Auth::check()) {
            $id = Auth::id();
            $user = User::find($id); 
            if ($user) {
                return view('userdata', compact('user'));
            } else {
                return redirect()->route('login')->with('error', 'User not found');
            }
        } else {
            return redirect()->route('login');
        }
    }

    public function insert_abroad(Request $request)
    {
        return view('front.form_type');
    }

    public function abroad_send(Request $request)
    {
        $user_id = Auth::id();

        $data = new Abroad_studies;

        $data->user_id = $user_id;
        $data->intake = $request->intake;
        $data->percentage_in_12th = $request->percentage_in_12th;
        $data->subject_of_12th = $request->subject_of_12th;
        $data->Board_in_12th = $request->Board_in_12th;
        $data->IBDP_point = $request->IBDP_point;
        $data->Graduation_completed_Pursuing = $request->Graduation_completed_Pursuing;
        $data->backlogs = $request->backlogs;
        $data->education_gap = $request->education_gap;
        $data->work_experience = $request->work_experience;
        $data->overall_IELTS_score = $request->overall_IELTS_score;
        $data->individual_score = $request->individual_score;
        $data->SAT_score = $request->SAT_score;
        $data->budget = $request->budget;
        $data->country_preference = $request->country_preference;
        $data->previous_visa = $request->previous_visa;
        $data->travel_history = $request->travel_history;
        $data->course_preference = $request->course_preference;
        $data->university_college = $request->university_college;
        $data->undergraduate_degree = $request->undergraduate_degree;
        $data->expectations = $request->expectations;
        $data->emergency_contact_number = $request->emergency_contact_number;
        // dd($data);
        $data->save();
        
        return view('dashboard');
    }
    
    
}
