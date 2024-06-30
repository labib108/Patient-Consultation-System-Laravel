
<div class="text-center mb-4">
    <h1>Advance Body Care</h1>
</div>
<div class="container mt-5">
    <!-- Patient Information -->
    @if(isset($appointment))
    <div class="card mb-4">
        <div class="card-header bg-primary text-white">
            Client Information
        </div>
        <div class="card-body">
            <p><strong>Name:</strong> {{$appointment->firstname}} {{$appointment->middlename}} {{$appointment->lastname}}</p>
            <p><strong>Gender:</strong> {{$appointment->gender}}</p>
            <p><strong>Address:</strong> {{$appointment->address}}</p>
            <p><strong>Date of Birth:</strong> {{$appointment->dob}}</p>
            <p><strong>Contact:</strong> {{$appointment->phone}}</p>
        </div>
    </div>

    <!-- health history -->
    <div class="card mb-4">
        <div class="card-header bg-primary text-white">
            Health History
        </div>
        @if($history->isNotEmpty())
            @foreach($history as $record)
                <p><strong>Symptoms:</strong> {{$record->condition}} </p>
                <p><strong>Injuries:</strong> {{$record->symptoms}}</p>
                <p><strong>Others:</strong> {{$record->other}} </p>
            @endforeach
        @else
            <p>No health history available.</p>
        @endif
    </div>
    <!-- Basic Soap Result -->
    <div class="card mb-4">
        <div class="card-header bg-primary text-white">
            Basic Soap Note Information
        </div>
        <div class="card-body">
            @foreach ($basicSoapQuestion as $question)
                <p><strong>{{ $question->basic_soap_question}}</strong></p>
                @foreach ($basicSoapAnswer as $answer)
                    <ul>
                        @if($answer->basic_soap_question_id == $question->id)
                            @foreach ($basicSoapOption as $option)
                                @if($answer->basic_soap_option_id == $option->id)
                                    <li>{{ $option->basic_soap_option }}</li>
                                @endif
                            @endforeach
                        @endif
                    </ul>
                @endforeach
            @endforeach
            <p><strong>Treatment Goal</strong></p>
                <ul>
                    @foreach( $basicSoapOtherAnswer as $otheranswer)
                    <li>
                        {{$otheranswer->treatment_goal}}
                    </li>
                    @endforeach
                </ul>
                <hr>
                <p><strong>Subjective Information </strong></p>
                <ul>
                    @foreach( $basicSoapOtherAnswer as $otheranswer)
                        <li>
                            {{$otheranswer->subjective}}
                        </li>
                    @endforeach
                </ul>
                <hr>
                <p><strong>Objective (Physical examination and text result)</strong></p>
                <ul>
                    @foreach( $basicSoapOtherAnswer as $otheranswer)
                        <li>
                            {{$otheranswer->objective}}
                        </li>
                    @endforeach
                </ul>
                <hr>
                <p><strong>Assessment(summary and conclusion from examination)</strong></p>
                <ul>
                    @foreach( $basicSoapOtherAnswer as $otheranswer)
                        <li>
                            {{$otheranswer->assessment}}
                        </li>
                    @endforeach
                </ul>
                <hr>
                <p><strong>Treatment Plan</strong></p>
                <ul>
                    @foreach( $basicSoapOtherAnswer as $otheranswer)
                        <li>
                            {{$otheranswer->plan}}
                        </li>
                    @endforeach
                </ul>
                <hr>
        </div>
    </div>

        <!-- General Soap Result -->
    <div class="card mb-4">
        <div class="card-header bg-primary text-white">
                General Soap Note Information
            </div>
        <div class="card-body">
                @foreach ($generalSoapQuestion as $question)
                    <p><strong>{{ $question->general_soap_question}}</strong></p>
                    @foreach ($generalSoapAnswer as $answer)
                        <ul>
                            @if($answer->general_soap_question_id == $question->id)
                                @foreach ($generalSoapOption as $option)
                                    @if($answer->general_soap_option_id == $option->id)
                                        <li>{{ $option->general_soap_option }}</li>
                                    @endif
                                @endforeach
                            @endif
                        </ul>
                    @endforeach
                @endforeach
                    <p><strong>Treatment Goal</strong></p>
                    <ul>
                        @foreach( $generalSoapOtherAnswer as $otheranswer)
                            <li>
                                {{$otheranswer->treatment_goal}}
                            </li>
                        @endforeach
                    </ul>
                    <hr>
                    <p><strong>Appointment notes </strong></p>
                    <ul>
                        @foreach( $generalSoapOtherAnswer as $otheranswer)
                            <li>
                                {{$otheranswer->appointment_note}}
                            </li>
                        @endforeach
                    </ul>
            </div>
        </div>
    <div class="card mb-4">
        <div class="card-header bg-primary text-white">
            Detailed Soap Note Information
        </div>
        <div class="card-body">

            <p><strong>What is the primary reason for visit?</strong></p>
            @if(isset($patient_data_array["q_answer"]) && !empty($patient_data_array["q_answer"]))
                @foreach ($patient_data_array["q_answer"] as $answer)
                    <ul>
                        <li>{{ $answer }}</li>
                    </ul>
                @endforeach
            @endif
            <hr>

            <p><strong>Have we treated you for this in the past?</strong></p>
            @if(isset($patient_data_array["past_treatment"]) && !empty($patient_data_array["past_treatment"]))
                @foreach ($patient_data_array["past_treatment"] as $answer)
                    <ul>
                        <li>{{ $answer }}</li>
                    </ul>
                @endforeach
            @endif
            <hr>

            <p><strong>Time pattern of pain?</strong></p>
            @if(isset($patient_data_array["time_pattern"]) && !empty($patient_data_array["time_pattern"]))
                @foreach ($patient_data_array["time_pattern"] as $answer)
                    <ul>
                        <li>{{ $answer }}</li>
                    </ul>
                @endforeach
            @endif
            <hr>

            <p><strong>Have you seen other healthcare practitioners about this issue?</strong></p>
            @if(isset($patient_data_array["previous_practitioner"]) && !empty($patient_data_array["previous_practitioner"]))
                @foreach ($patient_data_array["previous_practitioner"] as $answer)
                    <ul>
                        <li>{{ $answer }}</li>
                    </ul>
                @endforeach
            @endif
            <hr>

            <p><strong>Test performed:</strong></p>
            @if(isset($patient_data_array["tests"]) && !empty($patient_data_array["tests"]))
                @foreach ($patient_data_array["tests"] as $answer)
                    <ul>
                        <li>{{ $answer }}</li>
                    </ul>
                @endforeach
            @endif
            <hr>

            <p><strong>Treatment Goal</strong></p>
            @if(isset($patient_data_array["treatGoal"]) && !empty($patient_data_array["treatGoal"]))
                <ul>
                    <li>{{ $patient_data_array["treatGoal"] }}</li>
                </ul>
            @endif
            <hr>

            <p><strong>Sensation of pain (Select all the apply)</strong></p>
            @if(isset($patient_data_array["sensation_of_pain"]) && !empty($patient_data_array["sensation_of_pain"]))
                <ul>
                    <li>{{ $patient_data_array["sensation_of_pain"] }}</li>
                </ul>
            @endif
            <hr>

            <p><strong>Approximately when did the pain start?</strong></p>
            @if(isset($patient_data_array["pain_start_date"]) && !empty($patient_data_array["pain_start_date"]))
                <ul>
                    <li>{{ $patient_data_array["pain_start_date"] }}</li>
                </ul>
            @endif
            <hr>

            <p><strong>Was there a specific incident that caused this pain?</strong></p>
            @if(isset($patient_data_array["specific_incident"]) && !empty($patient_data_array["specific_incident"]))
                <ul>
                    <li>{{ $patient_data_array["specific_incident"] }}</li>
                </ul>
            @endif
            <hr>

            <p><strong>Additional comments</strong></p>
            @if(isset($patient_data_array["additional_comment"]) && !empty($patient_data_array["additional_comment"]))
                <ul>
                    <li>{{ $patient_data_array["additional_comment"] }}</li>
                </ul>
            @endif

            <br>
            <p><strong>Posture assessment of spine</strong></p>
            <table class="table table-bordered table-striped table-responsive-sm">
                <tr>
                    <td>
                        <p>Posture assessment of spine (lordosis)</p>
                    </td>
                    <td>
                        @if(isset($patient_data_array["lordosis"]) && !empty($patient_data_array["lordosis"][0]))
                            {{ $patient_data_array["lordosis"][0] }}
                        @endif
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>Posture assessment of spine (kyphosis)</p>
                    </td>
                    <td>

                        @if(isset($patient_data_array["kyphosis"]) && !empty($patient_data_array["kyphosis"][0]))
                            {{ $patient_data_array["kyphosis"][0] }}
                        @endif
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>Posture assessment of spine (scoliosis)</p>
                    </td>
                    <td>
                        @if(isset($patient_data_array["scoliosis"]) && !empty($patient_data_array["scoliosis"][0]))
                            {{ $patient_data_array["scoliosis"][0] }}
                        @endif
                    </td>
                </tr>
                <tr></tr>
            </table>
            <br>
            <p><strong>Posture assessment of shoulders</strong></p>
            <table class="table table-bordered table-striped table-responsive-sm">
                <tr>
                    <td>
                        <p>Posture assessment of shoulders (tilt)</p>
                    </td>
                    <td>
                        @if(isset($patient_data_array["tilt"]) && !empty($patient_data_array["tilt"][0]))
                            {{ $patient_data_array["tilt"][0] }}
                        @endif
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>Posture assessment of shoulders (twist)</p>
                    </td>
                    <td>
                        @if(isset($patient_data_array["twist"]) && !empty($patient_data_array["twist"][0]))
                            {{ $patient_data_array["twist"][0] }}
                        @endif
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>Posture assessment of shoulders (protraction)</p>
                    </td>
                    <td>
                        @if(isset($patient_data_array["protraction"]) && !empty($patient_data_array["protraction"][0]))
                            {{ $patient_data_array["protraction"][0] }}
                        @endif
                    </td>
                </tr>
                <tr></tr>
            </table>
            <br>
            <p><strong>Posture assessment of pelvis</strong></p>

            <table class="table table-bordered table-striped table-responsive-sm">
                <tr>
                    <td>
                        <p>Posture assessment of pelvis (tilt)</p>
                    </td>
                    <td>
                        @if(isset($patient_data_array["pelvic_tilt"]) && !empty($patient_data_array["pelvic_tilt"][0]))
                           {{ $patient_data_array["pelvic_tilt"][0] }}
                        @endif
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>Posture assessment of pelvis (twist)</p>
                    </td>
                    <td>
                        @if(isset($patient_data_array["pelvic_twist"]) && !empty($patient_data_array["pelvic_twist"][0]))
                           {{ $patient_data_array["pelvic_twist"][0] }}
                        @endif
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>Posture assessment of pelvis (protraction)</p>
                    </td>
                    <td>
                        @if(isset($patient_data_array["pelvic_protraction"]) && !empty($patient_data_array["pelvic_protraction"][0]))
                            {{ $patient_data_array["pelvic_protraction"][0] }}
                        @endif
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>Posture assessment of pelvis (retraction)</p>
                    </td>
                    <td>
                        @if(isset($patient_data_array["retraction"]) && !empty($patient_data_array["retraction"][0]))
                            {{ $patient_data_array["retraction"][0] }}
                        @endif
                    </td>
                </tr>
                <tr></tr>
            </table>

            <hr>
            <p><strong>Additional posture assessment comments</strong></p>
            @if(isset($patient_data_array["posture_assessment"]) && !empty($patient_data_array["posture_assessment"]))
                <ul>
                    <li>{{ $patient_data_array["posture_assessment"] }}</li>
                </ul>
            @endif
            <hr>

            <p><strong>Range of motion</strong></p>
            @if(isset($patient_data_array["area_tested"]) && !empty($patient_data_array["area_tested"]))
                <ul>
                    <li><strong>Area Tested: </strong>{{ $patient_data_array["area_tested"] }}</li>
                </ul>
            @endif
            @if(isset($patient_data_array["motion"]) && !empty($patient_data_array["motion"]))
                <ul>
                    <li><strong>Motion: </strong>{{ $patient_data_array["motion"] }}</li>
                </ul>
            @endif
            @if(isset($patient_data_array["Result"]) && !empty($patient_data_array["Result"]))
                <ul>
                    <li><strong>Result: </strong>{{ $patient_data_array["Result"] }}</li>
                </ul>
            @endif
            <hr>

            <p><strong>Additional palpation comments</strong></p>
            @if(isset($patient_data_array["additional_palpation"]) && !empty($patient_data_array["additional_palpation"]))
                <ul>
                    <li>{{ $patient_data_array["additional_palpation"] }}</li>
                </ul>
            @endif
            <hr>

            <p><strong>Areas treated</strong></p>
            @if(isset($patient_data_array["areas_treated_another"]) && !empty($patient_data_array["areas_treated_another"]))
                @foreach ($patient_data_array["areas_treated_another"] as $answer)
                    <ul>
                        <li>{{ $answer }}</li>
                    </ul>
                @endforeach
            @endif
            <hr>

            <p><strong>Areas of focus</strong></p>
            @if(isset($patient_data_array["area_of_focus"]) && !empty($patient_data_array["area_of_focus"]))
                <ul>
                    <li>{{ $patient_data_array["area_of_focus"] }}</li>
                </ul>
            @endif
            <hr>

            <p><strong>Techniques used</strong></p>
            @if(isset($patient_data_array["techniques_used"]) && !empty($patient_data_array["techniques_used"]))
                @foreach ($patient_data_array["techniques_used"] as $answer)
                    <ul>
                        <li>{{ $answer }}</li>
                    </ul>
                @endforeach
            @endif
            <hr>

            <p><strong>How did the client respond to treatment?</strong></p>
            @if(isset($patient_data_array["client_respond"]) && !empty($patient_data_array["client_respond"]))
                <ul>
                    <li>{{ $patient_data_array["client_respond"] }}</li>
                </ul>
            @endif
            <hr>

            <p><strong>Additional comments</strong></p>
            @if(isset($patient_data_array["another_additional_comment"]) && !empty($patient_data_array["another_additional_comment"]))
                <ul>
                    <li>{{ $patient_data_array["another_additional_comment"] }}</li>
                </ul>
            @endif
            <hr>

            <p><strong>Treatment Plan</strong></p>
            @if(isset($patient_data_array["treatment_plan"]) && !empty($patient_data_array["treatment_plan"]))
                <ul>
                    <li>{{ $patient_data_array["treatment_plan"] }}</li>
                </ul>
            @endif
            <hr>

            <p><strong>Self-care recommendations</strong></p>
            @if(isset($patient_data_array["self_care"]) && !empty($patient_data_array["self_care"]))
                <ul>
                    <li>{{ $patient_data_array["self_care"] }}</li>
                </ul>
            @endif
        </div>
    </div>

    @endif
    <!-- Diagnosis -->

</div>
