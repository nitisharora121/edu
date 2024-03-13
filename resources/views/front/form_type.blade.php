<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{-- {{ __('Dashboard') }} --}}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{-- {{ __("You're logged in!") }} --}}
                    <ul>
                        <a href="{{ url('/view_detail') }}" class="btn btn-primary">Profile</a>
                        <a href="{{ url('/study_abroad') }}" class="btn btn-primary">career Assessment</a>
                        <a href="#" class="btn btn-primary">Abroad Study Profiling</a>
                        <a href="#" class="btn btn-primary">College Recommendation</a>
                        <a href="#" class="btn btn-primary">Document</a>
                        <a href="#" class="btn btn-primary">College Application</a>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <title>Edumilestones</title>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>

        <style>
            .selection-box ul {
                list-style: none;
                margin: 50px auto 30px auto;
                padding: 0;
                display: flex;
                flex: 1;
                width: 65%;
            }

            .selection-box ul li {
                flex: 1;
                text-align: center;
            }

            .selection-box ul li span.opt {
                width: 100px;
                height: 100px;
                display: inline-block;
                display: inline-flex;
                justify-content: center;
                align-items: center;
                border-radius: 50%;
                border: 3px solid #999999;
                position: relative;
            }

            .fa-circle-dot:before,
            .fa-dot-circle:before {
                content: '';
                position: absolute;
                width: 50px;
                height: 50px;
                background: #999999;
                border-radius: 50px;
                top: 22px;
                right: 22px;
            }

            .selection-box ul li span.opt-name {
                display: block;
                font-size: 18px;
                margin: 10px 0;
            }

            .selection-box ul li span.opt:hover i,
            .selection-box ul li span.opt.selected i {
                color: #1e3f9a;
            }

            .selection-box ul li span.opt {
                width: 100px;
                height: 100px;
                display: inline-block;
                display: inline-flex;
                justify-content: center;
                align-items: center;
                border-radius: 50%;
                border: 3px solid #999999;
            }

            .selection-box ul li i {
                font-size: 50px;
                color: #999999;
            }

            .selection-box {
                margin-top: 50px;
            }
        </style>
    </head>

    
    <body>
        <section class="main-section">
            <div class="container">
                <div class="row" style="margin: 0;">
                    <div class="col-md-12">
                        <div class="selection-box" style="text-align: center;">>
                            <h5>Give us A Chance</h5>
                            <h1>To build your journey</h1>
                            <h4>Choose, What do you want to study Abroad?</h4>
                            <ul id="selectDegree">
                                <li>
                                    <span class="opt" data-level="1" data-value="bachelors">
                                        <i class="fa-solid fa-circle-dot"></i>
                                    </span>
                                    <span class="opt-name">Bachelors</span>
                                </li>
                                <li>
                                    <span class="opt" data-level="2" data-value="masters">
                                        <i class="fa-solid fa-circle-dot"></i>
                                    </span>
                                    <span class="opt-name">Masters</span>
                                </li>
                                <li>
                                    <span class="opt" data-level="3" data-value="doctoral">
                                        <i class="fa-solid fa-circle-dot"></i>
                                    </span>
                                    <span class="opt-name">Doctorial</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="container">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-10">
                    {{-- bachelors form code --}}
                    <form action="{{url('abroad_send')}}" method="post" data-form="bachelors">
                        <h1 style="text-align: center;">Bachelors</h1>
                        @csrf
                        <div class="mb-3">
                            <label for="formGroupExampleInput" class="form-label">Preferred Intake</label>
                            <input type="text" name="intake" class="form-control form-control-lg" id="formGroupExampleInput" placeholder="Enter Your Answer" required>
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput2" class="form-label">Your overall percentage in 12th Class. If pursuing then expected percentage
                                <span style="color:red">(* Mandatory)</span></label>
                            <input type="text" name="percentage_in_12th" class="form-control form-control-lg" id="formGroupExampleInput2" placeholder="Enter Your Answer" required>
                        </div>

                        <div class="mb-3">
                            <label for="formGroupExampleInput" class="form-label">Subject Combinations in 12th class or IBDP <span style="color:red">(* Mandatory)</span></label>
                            <input type="text" name="subject_of_12th" class="form-control form-control-lg" id="formGroupExampleInput" placeholder="Enter Your Answer">
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput2" class="form-label">Your Board in 12th Class</label>
                            <input type="text" name="Board_in_12th" class="form-control form-control-lg" id="formGroupExampleInput2" placeholder="Enter Your Answer">
                        </div>

                        <div class="mb-3">
                            <label for="formGroupExampleInput" class="form-label">Your IBDP point score (24 - 45) ( If from IB board or else keep it blank)</label>
                            <input type="text" name="IBDP_point" class="form-control form-control-lg" id="formGroupExampleInput" placeholder="Enter Your Answer">
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput2" class="form-label">Year of Passing 12th class (* Mandatory)</label>
                            <input type="text" name="Graduation_completed_Pursuing" class="form-control form-control-lg" id="formGroupExampleInput2" placeholder="Enter Your Answer">
                        </div>

                        <div class="mb-3">
                            <label for="formGroupExampleInput" class="form-label">No. of backlogs/repeats (if any) Please mention the exact no of repeats.
                                (* Mandatory)</label>
                            <input type="text" name="backlogs" class="form-control form-control-lg" id="formGroupExampleInput" placeholder="Enter Your Answer">
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput2" class="form-label">Education Gap (In between studies or after studies)</label>
                            <input type="text" name="education_gap" class="form-control form-control-lg" id="formGroupExampleInput2" placeholder="Enter Your Answer">
                        </div>

                        <div class="mb-3">
                            <label for="formGroupExampleInput" class="form-label">Work Experience or internship project<span style="color:red">(* Mandatory)</span></label>
                            <input type="text" name="work_experience" class="form-control form-control-lg" id="formGroupExampleInput" placeholder="Enter Your Answer">
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput2" class="form-label">Overall IELTS Score <span style="color:red">(* Mandatory)</span></label>
                            <input type="text" name="overall_IELTS_score" class="form-control form-control-lg" id="formGroupExampleInput2" placeholder="Enter Your Answer">
                        </div>

                        <div class="mb-3">
                            <label for="formGroupExampleInput" class="form-label">Individual score in IELTS / ToEFL / PTE Score (Listening, Reading, Writing, Speaking)</span></label>
                            <input type="text" name="individual_score" class="form-control form-control-lg" id="formGroupExampleInput" placeholder="Enter Your Answer">
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput2" class="form-label">SAT score</label>
                            <input type="text" name="SAT_score" class="form-control form-control-lg" id="formGroupExampleInput2" placeholder="Enter Your Answer">
                        </div>

                        <div class="mb-3">
                            <label for="formGroupExampleInput" class="form-label">Any Budget Constraint (Total Program Cost)</label>
                            <input type="text" name="budget" class="form-control form-control-lg" id="formGroupExampleInput" placeholder="Enter Your Answer">
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput2" class="form-label">Country Preference (Maximum 2 Country)</span></label>
                            <input type="text" name="country_preference" class="form-control form-control-lg" id="formGroupExampleInput2" placeholder="Enter Your Answer">
                        </div>

                        <div class="mb-3">
                            <label for="formGroupExampleInput" class="form-label">Previous Visa rejections (if any)</label>
                            <input type="text" name="previous_visa" class="form-control form-control-lg" id="formGroupExampleInput" placeholder="Enter Your Answer">
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput2" class="form-label">Travel History (Countries visited/Travelled previously)</label>
                            <input type="text" name="travel_history" class="form-control form-control-lg" id="formGroupExampleInput2" placeholder="Enter Your Answer">
                        </div>

                        <div class="mb-3">
                            <label for="formGroupExampleInput" class="form-label">Course Preference<span style="color:red">(* Mandatory)</label>
                            <input type="text" name="course_preference" class="form-control form-control-lg" id="formGroupExampleInput" placeholder="Enter Your Answer">
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput2" class="form-label">Do you have any University/College preference?</label>
                            <input type="text" name="university_college" class="form-control form-control-lg" id="formGroupExampleInput2" placeholder="Enter Your Answer">
                        </div>

                        <div class="mb-3">
                            <label for="formGroupExampleInput" class="form-label">Are you looking for Undergraduate degree/ diploma or certificate program</label>
                            <input type="text" name="undergraduate_degree" class="form-control form-control-lg" id="formGroupExampleInput" placeholder="Enter Your Answer">
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput2" class="form-label">Your Expectations</label>
                            <input type="text" name="expectations" class="form-control form-control-lg" id="formGroupExampleInput2" placeholder="Enter Your Answer">
                        </div>

                        <div class="mb-3">
                            <label for="formGroupExampleInput" class="form-label">Emergency Contact Number<span style="color:red">(* Mandatory)
                            </span></label>
                            <input type="text" name="emergency_contact_number" class="form-control form-control-lg" id="formGroupExampleInput" placeholder="Enter Your Answer">
                        </div>
                            <br>
                        <button type="submit" name="submit" class="btn btn-primary float-right">Submit</button>
                    </form>
                     {{-- End --}}

                     {{-- Masters form code --}}
                     <form action="{{url('masters')}}" method="post" data-form="masters">
                        <h1 style="text-align: center;">Masters</h1>
                        @csrf
                        <div class="mb-3">
                            <label for="formGroupExampleInput" class="form-label">Preferred Intake</label>
                            <input type="text" name="intake" class="form-control form-control-lg" id="formGroupExampleInput" placeholder="Enter Your Answer" required>
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput2" class="form-label">Your overall percentage in 12th Class. If pursuing then expected percentage
                                <span style="color:red">(* Mandatory)</span></label>
                            <input type="text" name="percentage_in_12th" class="form-control form-control-lg" id="formGroupExampleInput2" placeholder="Enter Your Answer" required>
                        </div>

                        <div class="mb-3">
                            <label for="formGroupExampleInput" class="form-label">Subject Combinations in 12th class or IBDP <span style="color:red">(* Mandatory)</span></label>
                            <input type="text" name="subject_of_12th" class="form-control form-control-lg" id="formGroupExampleInput" placeholder="Enter Your Answer">
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput2" class="form-label">Your Board in 12th Class</label>
                            <input type="text" name="Board_in_12th" class="form-control form-control-lg" id="formGroupExampleInput2" placeholder="Enter Your Answer">
                        </div>

                        <div class="mb-3">
                            <label for="formGroupExampleInput" class="form-label">Your IBDP point score (24 - 45) ( If from IB board or else keep it blank)</label>
                            <input type="text" name="IBDP_point" class="form-control form-control-lg" id="formGroupExampleInput" placeholder="Enter Your Answer">
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput2" class="form-label">Graduation (UG) Course  you completed/ Pursuing (Full Course Name)</label>
                            <input type="text" name="Graduation_completed_Pursuing" class="form-control form-control-lg" id="formGroupExampleInput2" placeholder="Enter Your Answer">
                        </div>

                        <div class="mb-3">
                            <label for="formGroupExampleInput" class="form-label">Graduation (UG) Duration you pursued</label>
                            <input type="text" name="backlogs" class="form-control form-control-lg" id="formGroupExampleInput" placeholder="Enter Your Answer">
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput2" class="form-label">Your overall % or CGPA in Bachelors. If pursuing then expected % or CGPA</label>
                            <input type="text" name="education_gap" class="form-control form-control-lg" id="formGroupExampleInput2" placeholder="Enter Your Answer">
                        </div>

                        <div class="mb-3">
                            <label for="formGroupExampleInput" class="form-label">Year of Passing 12th class <span style="color:red">(* Mandatory)</span></label>
                            <input type="text" name="work_experience" class="form-control form-control-lg" id="formGroupExampleInput" placeholder="Enter Your Answer">
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput2" class="form-label">Year of Passing graduation <span style="color:red">(* Mandatory)</span></label>
                            <input type="text" name="overall_IELTS_score" class="form-control form-control-lg" id="formGroupExampleInput2" placeholder="Enter Your Answer">
                        </div>

                        <div class="mb-3">
                            <label for="formGroupExampleInput" class="form-label">No. of backlogs/repeats (if any) - Please specify the exact no of repeats.
                                <span style="color:red">(* Mandatory)</label>
                            <input type="text" name="individual_score" class="form-control form-control-lg" id="formGroupExampleInput" placeholder="Enter Your Answer">
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput2" class="form-label">Education Gap (In between studies or after studies)</label>
                            <input type="text" name="SAT_score" class="form-control form-control-lg" id="formGroupExampleInput2" placeholder="Enter Your Answer">
                        </div>

                        <div class="mb-3">
                            <label for="formGroupExampleInput" class="form-label">Work Experience or internship project</label>
                            <input type="text" name="budget" class="form-control form-control-lg" id="formGroupExampleInput" placeholder="Enter Your Answer">
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput2" class="form-label">Overall IELTS / ToEFL / PTE Score or Expected <span style="color:red">(* Mandatory)</span></label>
                            <input type="text" name="country_preference" class="form-control form-control-lg" id="formGroupExampleInput2" placeholder="Enter Your Answer">
                        </div>

                        <div class="mb-3">
                            <label for="formGroupExampleInput" class="form-label">Individual score in IELTS / ToEFL / PTE Score (Listening, Reading, Writing, Speaking)</label>
                            <input type="text" name="previous_visa" class="form-control form-control-lg" id="formGroupExampleInput" placeholder="Enter Your Answer">
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput2" class="form-label">GMAT Score</label>
                            <input type="text" name="travel_history" class="form-control form-control-lg" id="formGroupExampleInput2" placeholder="Enter Your Answer">
                        </div>

                        <div class="mb-3">
                            <label for="formGroupExampleInput" class="form-label">GRE Score</label>
                            <input type="text" name="course_preference" class="form-control form-control-lg" id="formGroupExampleInput" placeholder="Enter Your Answer">
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput2" class="form-label">Any Budget Constraint (Total Program Cost)</label>
                            <input type="text" name="university_college" class="form-control form-control-lg" id="formGroupExampleInput2" placeholder="Enter Your Answer">
                        </div>

                        <div class="mb-3">
                            <label for="formGroupExampleInput" class="form-label">Country Preference (Maximum 2 Country)</label>
                            <input type="text" name="undergraduate_degree" class="form-control form-control-lg" id="formGroupExampleInput" placeholder="Enter Your Answer">
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput2" class="form-label">Previous Visa rejections (if any)</label>
                            <input type="text" name="expectations" class="form-control form-control-lg" id="formGroupExampleInput2" placeholder="Enter Your Answer">
                        </div>

                        <div class="mb-3">
                            <label for="formGroupExampleInput" class="form-label">Course Preference for post graduation (You would like to study)
                                <span style="color:red">(* Mandatory)</label>
                            <input type="text" name="emergency_contact_number" class="form-control form-control-lg" id="formGroupExampleInput" placeholder="Enter Your Answer">
                        </div>

                        <div class="mb-3">
                            <label for="formGroupExampleInput" class="form-label">Do you have any University/College preference?</label>
                            <input type="text" name="undergraduate_degree" class="form-control form-control-lg" id="formGroupExampleInput" placeholder="Enter Your Answer">
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput2" class="form-label">Are you looking for Postgraduate degree/ diploma or certificate program</label>
                            <input type="text" name="expectations" class="form-control form-control-lg" id="formGroupExampleInput2" placeholder="Enter Your Answer">
                        </div>

                        <div class="mb-3">
                            <label for="formGroupExampleInput" class="form-label">Your Expectations</label>
                            <input type="text" name="undergraduate_degree" class="form-control form-control-lg" id="formGroupExampleInput" placeholder="Enter Your Answer">
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput2" class="form-label">Emergency Contact Number <span style="color:red">(* Mandatory)</label>
                            <input type="text" name="expectations" class="form-control form-control-lg" id="formGroupExampleInput2" placeholder="Enter Your Answer">
                        </div>
                        
                            <br>
                        <button type="submit" name="submit" class="btn btn-primary float-right">Submit</button>
                    </form>
                    {{-- End --}}

                     {{-- Doctorial form code --}}
                     <form action="{{url('doctrial')}}" method="post" data-form="doctoral">
                        <h1 style="text-align: center;">Doctorial</h1>
                        @csrf
                        <div class="mb-3">
                            <label for="formGroupExampleInput" class="form-label">Preferred Intake</label>
                            <input type="text" name="intake" class="form-control form-control-lg" id="formGroupExampleInput" placeholder="Enter Your Answer" required>
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput2" class="form-label">Your overall percentage in 10th Class <span style="color:red">(* Mandatory)</span></span></label>
                            <input type="text" name="percentage_in_12th" class="form-control form-control-lg" id="formGroupExampleInput2" placeholder="Enter Your Answer" required>
                        </div>

                        <div class="mb-3">
                            <label for="formGroupExampleInput" class="form-label">Your current status of 12th Class</label>
                            <input type="text" name="subject_of_12th" class="form-control form-control-lg" id="formGroupExampleInput" placeholder="Enter Your Answer">
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput2" class="form-label">Your overall percentage in 12th Class. If pursuing then expected percentage  <span style="color:red">(* Mandatory)</span></label>
                            <input type="text" name="Board_in_12th" class="form-control form-control-lg" id="formGroupExampleInput2" placeholder="Enter Your Answer">
                        </div>

                        <div class="mb-3">
                            <label for="formGroupExampleInput" class="form-label">Subject Combinations in 12th class or IBDP<span style="color:red">(* Mandatory)</span></label>
                            <input type="text" name="IBDP_point" class="form-control form-control-lg" id="formGroupExampleInput" placeholder="Enter Your Answer">
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput2" class="form-label">Your Board in 12th Class</label>
                            <input type="text" name="Graduation_completed_Pursuing" class="form-control form-control-lg" id="formGroupExampleInput2" placeholder="Enter Your Answer">
                        </div>

                        <div class="mb-3">
                            <label for="formGroupExampleInput" class="form-label">Your IBDP point score (24 - 45) ( If from IB board or else keep it blank)</label>
                            <input type="text" name="backlogs" class="form-control form-control-lg" id="formGroupExampleInput" placeholder="Enter Your Answer">
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput2" class="form-label">Emergency Contact Number<span style="color:red">(* Mandatory)</span></label>
                            <input type="text" name="education_gap" class="form-control form-control-lg" id="formGroupExampleInput2" placeholder="Enter Your Answer">
                        </div>

                        <div class="mb-3">
                            <label for="formGroupExampleInput" class="form-label">Graduation (UG) Course type  you pursued</label>
                            <input type="text" name="work_experience" class="form-control form-control-lg" id="formGroupExampleInput" placeholder="Enter Your Answer">
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput2" class="form-label">Graduation (UG) Duration you pursued</label>
                            <input type="text" name="overall_IELTS_score" class="form-control form-control-lg" id="formGroupExampleInput2" placeholder="Enter Your Answer">
                        </div>

                        <div class="mb-3">
                            <label for="formGroupExampleInput" class="form-label">Your current status of graduation</label>
                            <input type="text" name="individual_score" class="form-control form-control-lg" id="formGroupExampleInput" placeholder="Enter Your Answer">
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput2" class="form-label">Your Score in Bachelors (% or CGPA). If pursuing then expected score</label>
                            <input type="text" name="SAT_score" class="form-control form-control-lg" id="formGroupExampleInput2" placeholder="Enter Your Answer">
                        </div>

                        <div class="mb-3">
                            <label for="formGroupExampleInput" class="form-label">Post Graduation (PG) Course type  you pursued</label>
                            <input type="text" name="budget" class="form-control form-control-lg" id="formGroupExampleInput" placeholder="Enter Your Answer">
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput2" class="form-label">Country Preference (Maximum 2 Country)</span></label>
                            <input type="text" name="country_preference" class="form-control form-control-lg" id="formGroupExampleInput2" placeholder="Enter Your Answer">
                        </div>

                        <div class="mb-3">
                            <label for="formGroupExampleInput" class="form-label">Post Graduation (PG) Duration you pursued</label>
                            <input type="text" name="previous_visa" class="form-control form-control-lg" id="formGroupExampleInput" placeholder="Enter Your Answer">
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput2" class="form-label">Your current status of Post graduation</label>
                            <input type="text" name="travel_history" class="form-control form-control-lg" id="formGroupExampleInput2" placeholder="Enter Your Answer">
                        </div>

                        <div class="mb-3">
                            <label for="formGroupExampleInput" class="form-label">Your Score in Post Graduation (% or CGPA). If pursuing then expected score</label>
                            <input type="text" name="course_preference" class="form-control form-control-lg" id="formGroupExampleInput" placeholder="Enter Your Answer">
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput2" class="form-label">Project details of Masters</label>
                            <input type="text" name="university_college" class="form-control form-control-lg" id="formGroupExampleInput2" placeholder="Enter Your Answer">
                        </div>

                        <div class="mb-3">
                            <label for="formGroupExampleInput" class="form-label">Country Preference</label>
                            <input type="text" name="undergraduate_degree" class="form-control form-control-lg" id="formGroupExampleInput" placeholder="Enter Your Answer">
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput2" class="form-label">Year of Passed 10th class <span style="color:red">(* Mandatory)</span></label>
                            <input type="text" name="expectations" class="form-control form-control-lg" id="formGroupExampleInput2" placeholder="Enter Your Answer">
                        </div>

                        <div class="mb-3">
                            <label for="formGroupExampleInput" class="form-label">Year of Pass 12th class <span style="color:red">(* Mandatory)</span></label>
                            <input type="text" name="emergency_contact_number" class="form-control form-control-lg" id="formGroupExampleInput" placeholder="Enter Your Answer">
                        </div>

                        <div class="mb-3">
                            <label for="formGroupExampleInput" class="form-label">Year of Pass graduation <span style="color:red">(* Mandatory)</span></label>
                            <input type="text" name="undergraduate_degree" class="form-control form-control-lg" id="formGroupExampleInput" placeholder="Enter Your Answer">
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput2" class="form-label">Year of Pass Post graduation <span style="color:red">(* Mandatory)</span></label>
                            <input type="text" name="expectations" class="form-control form-control-lg" id="formGroupExampleInput2" placeholder="Enter Your Answer">
                        </div>

                        <div class="mb-3">
                            <label for="formGroupExampleInput" class="form-label">No. of backlogs/repeats (if any)</label>
                            <input type="text" name="undergraduate_degree" class="form-control form-control-lg" id="formGroupExampleInput" placeholder="Enter Your Answer">
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput2" class="form-label">Education Gap (In between studies or after studies)</label>
                            <input type="text" name="expectations" class="form-control form-control-lg" id="formGroupExampleInput2" placeholder="Enter Your Answer">
                        </div>

                        <div class="mb-3">
                            <label for="formGroupExampleInput" class="form-label">Work Experience or internship project</label>
                            <input type="text" name="undergraduate_degree" class="form-control form-control-lg" id="formGroupExampleInput" placeholder="Enter Your Answer">
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput2" class="form-label">IELTS / ToEFL / PTE Score</label>
                            <input type="text" name="expectations" class="form-control form-control-lg" id="formGroupExampleInput2" placeholder="Enter Your Answer">
                        </div>

                        <div class="mb-3">
                            <label for="formGroupExampleInput" class="form-label">Individual score in IELTS / ToEFL / PTE Score (Listening, Reading, Writing, Speaking)</label>
                            <input type="text" name="undergraduate_degree" class="form-control form-control-lg" id="formGroupExampleInput" placeholder="Enter Your Answer">
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput2" class="form-label">GMAT Score</label>
                            <input type="text" name="expectations" class="form-control form-control-lg" id="formGroupExampleInput2" placeholder="Enter Your Answer">
                        </div>

                        <div class="mb-3">
                            <label for="formGroupExampleInput" class="form-label">GRE Score</label>
                            <input type="text" name="undergraduate_degree" class="form-control form-control-lg" id="formGroupExampleInput" placeholder="Enter Your Answer">
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput2" class="form-label">Any Budget Constraint (Total Program Cost)</label>
                            <input type="text" name="expectations" class="form-control form-control-lg" id="formGroupExampleInput2" placeholder="Enter Your Answer">
                        </div>

                        <div class="mb-3">
                            <label for="formGroupExampleInput" class="form-label">Country Preference (Maximum 2 Country)</label>
                            <input type="text" name="undergraduate_degree" class="form-control form-control-lg" id="formGroupExampleInput" placeholder="Enter Your Answer">
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput2" class="form-label">Previous Visa rejections (if any)</label>
                            <input type="text" name="expectations" class="form-control form-control-lg" id="formGroupExampleInput2" placeholder="Enter Your Answer">
                        </div>

                        <div class="mb-3">
                            <label for="formGroupExampleInput" class="form-label">Travel History (Countries visited/Travelled previously)</label>
                            <input type="text" name="undergraduate_degree" class="form-control form-control-lg" id="formGroupExampleInput" placeholder="Enter Your Answer">
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput2" class="form-label">Course Preference you want to pursue <span style="color:red">(* Mandatory)</span></label>
                            <input type="text" name="expectations" class="form-control form-control-lg" id="formGroupExampleInput2" placeholder="Enter Your Answer">
                        </div>

                        <div class="mb-3">
                            <label for="formGroupExampleInput" class="form-label">Any Specilaization Preference</label>
                            <input type="text" name="undergraduate_degree" class="form-control form-control-lg" id="formGroupExampleInput" placeholder="Enter Your Answer">
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput2" class="form-label">Do you have any University/College preference?</label>
                            <input type="text" name="expectations" class="form-control form-control-lg" id="formGroupExampleInput2" placeholder="Enter Your Answer">
                        </div>

                        <div class="mb-3">
                            <label for="formGroupExampleInput" class="form-label">Are you looking for Postgraduate degree/ diploma or certificate program</label>
                            <input type="text" name="undergraduate_degree" class="form-control form-control-lg" id="formGroupExampleInput" placeholder="Enter Your Answer">
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput2" class="form-label">Your Expectations</label>
                            <input type="text" name="expectations" class="form-control form-control-lg" id="formGroupExampleInput2" placeholder="Enter Your Answer">
                        </div>

                            <br>
                        <button type="submit" name="submit" class="btn btn-primary float-right">Submit</button>
                    </form>
                    {{-- End --}}
                </div>
            </div>
        </div>


    </body>
    <script>
        // Function to hide all forms and show select dropdown
        function hideAllForms() {
            var forms = document.querySelectorAll('.col-md-10 form');
            forms.forEach(function(form) {
                form.style.display = 'none';
            });
        }
    
        // Function to show selected form
        function showSelectedForm(formName) {
            hideAllForms();
            var form = document.querySelector('.col-md-10 form[data-form="' + formName + '"]');
            if (form) {
                form.style.display = 'block';
            }
        }
    
        // Initial setup - hide all forms
        hideAllForms();
    
        // Event listener for select change
        var options = document.querySelectorAll('#selectDegree .opt');
        options.forEach(function(option) {
            option.addEventListener('click', function() {
                var selectedForm = this.getAttribute('data-value');
                showSelectedForm(selectedForm);
            });
        });
    </script>
    
    
    </html>
</x-app-layout>
