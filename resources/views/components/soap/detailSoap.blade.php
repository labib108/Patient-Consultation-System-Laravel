<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="border p-4 bg-gradient-dark text-center">
                <h3 class="text-white">Detailed Soap Notes</h3>
            </div>
        </div>
    </div>
</div>
<hr>
<form method="post" action="{{ route('detailSoapQuestion.answers') }}" enctype="multipart/form-data">
    @csrf

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="border p-4 bg-gradient-light text-center">
                    <lebel>
                        Enter Client ID
                    </lebel>
                    <input type="text" name="appointment_id" class="form-control" id="appointment_id" placeholder="Enter Client Application ID" required>
                </div>
            </div>
        </div>
    </div>
    <br>
    <hr>
    <!-- Tabs navs -->
    <ul class="nav nav-tabs nav-fill mb-3" id="ex1" role="tablist">
        <li class="nav-item" role="presentation">
            <a data-mdb-tab-init class="nav-link active" id="ex1-tab-1" href="#ex1-tabs-1" role="tab" aria-controls="ex1-tabs-1" aria-selected="true">SUBJECTIVE</a>
        </li>
        <li class="nav-item" role="presentation">
            <a data-mdb-tab-init class="nav-link" id="ex1-tab-2" href="#ex1-tabs-2" role="tab" aria-controls="ex1-tabs-2" aria-selected="false" >OBJECTIVE</a>
        </li>
        <li class="nav-item" role="presentation">
            <a data-mdb-tab-init class="nav-link" id="ex1-tab-3" href="#ex1-tabs-3" role="tab" aria-controls="ex1-tabs-3" aria-selected="false">TREATMENT</a>
        </li>
        <li class="nav-item" role="presentation">
            <a data-mdb-tab-init class="nav-link" id="ex1-tab-4" href="#ex1-tabs-4" role="tab" aria-controls="ex1-tabs-4" aria-selected="false">PLAN</a>
        </li>
        <li class="nav-item" role="presentation">
            <a data-mdb-tab-init class="nav-link" id="ex1-tab-5" href="#ex1-tabs-5" role="tab" aria-controls="ex1-tabs-5" aria-selected="false">ATTACHMENTS</a>
        </li>
        <li class="nav-item" role="presentation">
            <a data-mdb-tab-init class="nav-link" id="ex1-tab-6" href="#ex1-tabs-6" role="tab" aria-controls="ex1-tabs-6" aria-selected="false"></a>
        </li>
    </ul>
    <!-- Tabs navs -->

    <!-- Tabs content -->
    <div class="tab-content" id="ex1-content">
        <div class="tab-pane fade show active" id="ex1-tabs-1" role="tabpanel" aria-labelledby="ex1-tab-1">
            <div class="container">
                <div class="row justify-content-center mt-5">
                    <div class="col-md-10 border">
                        <div class="card border mt-3 mb-4">
                            <div class="d-flex align-items-center m-1">
                                <img class="nav-logo  mx-2"  src="{{asset('images/question-arrow.png')}}" alt="arrow"/>
                                <h5 class="m-3">
                                    What is the primary reason for visit?
                                </h5>
                            </div>
                            <div class="card-body">
                                <div class="btn-group-vertical w-100" data-toggle="buttons">
                                    <label class="btn btn-light btn-lg mb-2">
                                        <input type="checkbox" name="q_answer[]" value="Relieve pain" autocomplete="off">
                                        Relieve pain
                                    </label>
                                    <label class="btn btn-light btn-lg mb-2">
                                        <input type="checkbox" name="q_answer[]" value="Relieve tension" autocomplete="off">
                                        Relieve tension
                                    </label>
                                    <label class="btn btn-light btn-lg mb-2">
                                        <input type="checkbox" name="q_answer[]" value="Relieve stress" autocomplete="off">
                                        Relieve stress
                                    </label>
                                    <label class="btn btn-light btn-lg mb-2">
                                        <input type="checkbox" name="q_answer[]" value="Relieve anxiety" autocomplete="off">
                                        Relieve anxiety
                                    </label>
                                    <label class="btn btn-light btn-lg mb-2">
                                        <input type="checkbox" name="q_answer[]" value="Improve mobility" autocomplete="off">
                                        Improve mobility
                                    </label>
                                    <label class="btn btn-light btn-lg mb-2">
                                        <input type="checkbox" name="q_answer[]" value="Improve quality of life (sleep, mood, etc.)" autocomplete="off">
                                        Improve quality of life (sleep, mood, etc.)
                                    </label>
                                    <label class="btn btn-light btn-lg mb-2">
                                        <input type="checkbox" name="q_answer[]" value="Relaxation" autocomplete="off">
                                        Relaxation
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="card border mt-3 mb-4">
                            <div class="d-flex align-items-center m-1">
                                <img class="nav-logo  mx-2"  src="{{asset('images/question-arrow.png')}}" alt="arrow"/>
                                <h5 class="m-3">
                                    Have we treated you for this in the past?
                                </h5>
                            </div>
                            <div class="card-body">
                                <div class="btn-group-vertical w-100" data-toggle="buttons">
                                    <label class="btn btn-light btn-lg mb-2">
                                        <input type="checkbox" name="past_treatment[]" value="Yes" autocomplete="off">
                                        Yes
                                    </label>
                                    <label class="btn btn-light btn-lg mb-2">
                                        <input type="checkbox" name="past_treatment[]" value="No" autocomplete="off">
                                        NO
                                    </label>
                                    <label class="btn btn-light btn-lg mb-2">
                                        <input type="checkbox" name="past_treatment[]" value="Unsure" autocomplete="off">
                                        Unsure
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="card border mt-3 mb-4">
                            <div class="d-flex align-items-center m-1">
                                <img class="nav-logo  mx-2"  src="{{asset('images/question-arrow.png')}}" alt="arrow"/>
                                <h5 class="m-3">
                                    Time pattern of pain
                                </h5>
                            </div>
                            <div class="card-body">
                                <div class="btn-group-vertical w-100" data-toggle="buttons">
                                    <label class="btn btn-light btn-lg mb-2">
                                        <input type="checkbox" name="time_pattern[]" value="Constant (Pain does not change much from one moment to another)" autocomplete="off">
                                        Constant (Pain does not change much from one moment to another)
                                    </label>
                                    <label class="btn btn-light btn-lg mb-2">
                                        <input type="checkbox" name="time_pattern[]" value="Variable (Pain all the time. Moments of more pain or varying types of pain)" autocomplete="off">
                                        Variable (Pain all the time. Moments of more pain or varying types of pain)
                                    </label>
                                    <label class="btn btn-light btn-lg mb-2">
                                        <input type="checkbox" name="time_pattern[]" value="Intermittent (I feel pain sometimes but I am pain-free at other times)" autocomplete="off">
                                        Intermittent (I feel pain sometimes but I am pain-free at other times)
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="card border mt-3 mb-4">
                            <div class="d-flex align-items-center m-1">
                                <img class="nav-logo  mx-2"  src="{{asset('images/question-arrow.png')}}" alt="arrow"/>
                                <h5 class="m-3">
                                    Have you seen other healthcare practitioners about this issue?
                                </h5>
                            </div>
                            <div class="card-body">
                                <div class="btn-group-vertical w-100" data-toggle="buttons">
                                    <label class="btn btn-light btn-lg mb-2">
                                        <input type="checkbox" name="previous_practitioner[]" value="Physician" autocomplete="off">
                                        Physician
                                    </label>
                                    <label class="btn btn-light btn-lg mb-2">
                                        <input type="checkbox" name="previous_practitioner[]" value="Massage Therapist" autocomplete="off">
                                        Massage Therapist
                                    </label>
                                    <label class="btn btn-light btn-lg mb-2">
                                        <input type="checkbox" name="previous_practitioner[]" value="Physical Therapist" autocomplete="off">
                                        Physical Therapist
                                    </label>
                                    <label class="btn btn-light btn-lg mb-2">
                                        <input type="checkbox" name="previous_practitioner[]" value="Chiropractor" autocomplete="off">
                                        Chiropractor
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="card border mt-3 mb-4">
                            <div class="d-flex align-items-center m-1">
                                <img class="nav-logo  mx-2"  src="{{asset('images/question-arrow.png')}}" alt="arrow"/>
                                <h5 class="m-3">
                                    Select all tests performed:
                                </h5>
                            </div>
                            <div class="card-body">
                                <div class="btn-group-vertical w-100" data-toggle="buttons">
                                    <label class="btn btn-light btn-lg mb-2">
                                        <input type="checkbox" name="tests[]" value="Posture assessment of spine" autocomplete="off">
                                        Posture assessment of spine
                                    </label>
                                    <label class="btn btn-light btn-lg mb-2">
                                        <input type="checkbox" name="tests[]" value="Posture assessment of shoulders" autocomplete="off">
                                        Posture assessment of shoulders
                                    </label>
                                    <label class="btn btn-light btn-lg mb-2">
                                        <input type="checkbox" name="tests[]" value="Posture assessment of pelvis" autocomplete="off">
                                        Posture assessment of pelvis
                                    </label>
                                    <label class="btn btn-light btn-lg mb-2">
                                        <input type="checkbox" name="tests[]" value="Range of motion" autocomplete="off">
                                        Range of motion
                                    </label>
                                    <label class="btn btn-light btn-lg mb-2">
                                        <input type="checkbox" name="tests[]" value="Palpation" autocomplete="off">
                                        Palpation
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center mt-5">
                <div class="col-md-8 border">
                    <div class="card mb-4">
                        <div class="d-flex align-items-center m-2 p-2">
                            <img class="nav-logo  mx-2"  src="{{asset('images/question-arrow.png')}}" alt="arrow"/>
                            <h5 class="m-3">
                                Treatment Goal
                            </h5>
                        </div>
                        <hr>
                        <div class="d-flex align-items-center m-1">
                            <textarea name="treatGoal" id="details_soap_treatment_goal_textarea" class="form-control mb-3 mt-2 pb-3" placeholder="Enter reason for Treatment"></textarea>
                            <button class="hover-zoom bg-white border-0" id="details_soap_treatment_goal_button">
                                <img class="nav-logo mx-2" src="{{asset('images/microphone-listening.png')}}" alt="microphone"/>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center mt-3">
                <div class="col-md-8 border mt-3 mb-3">
                    <div class="card mb-4">
                        <div class="d-flex align-items-center m-2 p-2">
                            <img class="nav-logo  mx-2"  src="{{asset('images/question-arrow.png')}}" alt="arrow"/>
                            <h5 class="m-3">
                                Indicate the area(s) of pain
                            </h5>
                        </div>
                        <hr>
                        <div class="m-1">
                            <div class="p-2" >
                                <img class="w-50"  src="{{asset('images/treatment/mascular-back-man.jpg')}}" alt="arrow"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center mt-3">
                <div class="col-md-8 border mt-3 mb-3">
                    <div class="card mb-4">
                        <div class="d-flex align-items-center m-2 p-2">
                            <img class="nav-logo  mx-2"  src="{{asset('images/question-arrow.png')}}" alt="arrow"/>
                            <h5 class="m-3">
                                Sensation of pain (Select all the apply)
                            </h5>
                        </div>
                        <hr>
                        <select class="form-select" aria-label="Default select example" name="sensation_of_pain">
                            <option selected>Select pain lavel</option>
                            <option value="Dull">Dull</option>
                            <option value="Cold">Cold</option>
                            <option value="Numb">Numb</option>
                            <option value="Sharp">Sharp</option>
                            <option value="Burning">Burning</option>
                            <option value="Tender">Tender</option>
                            <option value="Aching">Aching</option>
                            <option value="Itchy">Itchy</option>
                            <option value="Sensitive">Sensitive</option>
                            <option value="Cramping">Cramping</option>
                            <option value="Throbbing">Throbbing</option>
                            <option value="Shooting">Shooting</option>
                            <option value="Tingling">Tingling</option>
                            <option value="Pressure">Pressure</option>
                            <option value="Stiff">Stiff</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center mt-5">
                <div class="col-md-8 border">
                    <div class="card m-3 p-2">
                        <div class="card-header d-flex align-items-center justify-content-between">
                            <div class="d-flex align-items-center">
                                <img class="nav-logo mx-2" src="{{asset('images/question-arrow.png')}}" alt="arrow" />
                                <h5 class="card-title m-0">
                                    Approximately when did the pain start?
                                </h5>
                            </div>
                            <div class="d-flex align-items-center m-1">
                                <div class="m-2">
                                    <input type="date" name="pain_start_date" class="form-control" id="date" placeholder="Enter Date">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center mt-5">
                <div class="col-md-8 border">
                    <div class="card mb-4">
                        <div class="d-flex align-items-center m-2 p-2">
                            <img class="nav-logo  mx-2"  src="{{asset('images/question-arrow.png')}}" alt="arrow"/>
                            <h5 class="m-3">
                                Was there a specific incident that caused this pain?
                            </h5>
                        </div>
                        <div class="d-flex align-items-center m-1">
                            <textarea name="specific_incident" id="details_soap_indicate_pain_textarea" class="form-control mb-3 mt-2 pb-3" placeholder="Enter reason for Treatment"></textarea>
                            <button class="hover-zoom bg-white border-0" id="details_soap_indicate_pain_button">
                                <img class="nav-logo mx-2" src="{{asset('images/microphone-listening.png')}}" alt="microphone"/>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center mt-5">
                <div class="col-md-8 border">
                    <div class="card mb-4">
                        <div class="d-flex align-items-center m-2 p-2">
                            <img class="nav-logo  mx-2"  src="{{asset('images/question-arrow.png')}}" alt="arrow"/>
                            <h5 class="m-3">
                                Additional comments
                            </h5>
                        </div>
                        <div class="d-flex align-items-center m-1">
                            <textarea name="additional_comment" id="details_soap_additional_textarea" class="form-control mb-3 mt-2 pb-3" placeholder="Enter reason for Treatment"></textarea>
                            <button class="hover-zoom bg-white border-0" id="details_soap_additional_button">
                                <img class="nav-logo mx-2" src="{{asset('images/microphone-listening.png')}}" alt="microphone"/>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="tab-pane fade" id="ex1-tabs-2" role="tabpanel" aria-labelledby="ex1-tab-2">
            <div class="container border">
                <div class="row justify-content-center mt-5">
                    <div class="col-md-8 border">
                        <div class="card mb-4">
                            <div class="d-flex align-items-center m-2 p-2">
                                <img class="nav-logo  mx-2"  src="{{asset('images/question-arrow.png')}}" alt="arrow"/>
                                <h5 class="m-3">
                                    Posture assessment of spine
                                </h5>
                            </div>
                            <div class="d-flex align-items-center m-1">
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th scope="col"></th>
                                        <th scope="col">NONE</th>
                                        <th scope="col">MILD</th>
                                        <th scope="col">MODERATE</th>
                                        <th scope="col">SERVER</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <th scope="row">Lordosis</th>
                                        <td>
                                            <input name="lordosis[]" class="form-check-input" type="checkbox" value="NONE" id="flexCheckDefault">
                                        </td>
                                        <td>
                                            <input name="lordosis[]" class="form-check-input" type="checkbox" value="MILD" id="flexCheckDefault">
                                        </td>
                                        <td>
                                            <input name="lordosis[]" class="form-check-input" type="checkbox" value="MODERATE" id="flexCheckDefault">
                                        </td>
                                        <td>
                                            <input name="lordosis[]" class="form-check-input" type="checkbox" value="SERVER" id="flexCheckDefault">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Kyphosis</th>
                                        <td>
                                            <input name="kyphosis[]" class="form-check-input" type="checkbox" value="NONE" id="flexCheckDefault">
                                        </td>
                                        <td>
                                            <input name="kyphosis[]" class="form-check-input" type="checkbox" value="MILD" id="flexCheckDefault">
                                        </td>
                                        <td>
                                            <input name="kyphosis[]" class="form-check-input" type="checkbox" value="MODERATE" id="flexCheckDefault">
                                        </td>
                                        <td>
                                            <input name="kyphosis[]" class="form-check-input" type="checkbox" value="SERVER" id="flexCheckDefault">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Scoliosis</th>
                                        <td>
                                            <input name="scoliosis[]" class="form-check-input" type="checkbox" value="NONE" id="flexCheckDefault">
                                        </td>
                                        <td>
                                            <input name="scoliosis[]" class="form-check-input" type="checkbox" value="MILD" id="flexCheckDefault">
                                        </td>
                                        <td>
                                            <input name="scoliosis[]" class="form-check-input" type="checkbox" value="MODERATE" id="flexCheckDefault">
                                        </td>
                                        <td>
                                            <input name="scoliosis[]" class="form-check-input" type="checkbox" value="SERVER" id="flexCheckDefault">
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center mt-5">
                    <div class="col-md-8 border">
                        <div class="card mb-4">
                            <div class="d-flex align-items-center m-2 p-2">
                                <img class="nav-logo  mx-2"  src="{{asset('images/question-arrow.png')}}" alt="arrow"/>
                                <h5 class="m-3">
                                    Posture assessment of shoulders
                                </h5>
                            </div>
                            <div class="d-flex align-items-center m-1">
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th scope="col"></th>
                                        <th scope="col">NONE</th>
                                        <th scope="col">MILD</th>
                                        <th scope="col">MODERATE</th>
                                        <th scope="col">SERVER</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <th scope="row">Tilt</th>
                                        <td>
                                            <input name="tilt[]" class="form-check-input" type="checkbox" value="NONE" id="flexCheckDefault">
                                        </td>
                                        <td>
                                            <input name="tilt[]" class="form-check-input" type="checkbox" value="MILD" id="flexCheckDefault">
                                        </td>
                                        <td>
                                            <input name="tilt[]" class="form-check-input" type="checkbox" value="MODERATE" id="flexCheckDefault">
                                        </td>
                                        <td>
                                            <input name="tilt[]" class="form-check-input" type="checkbox" value="SERVER" id="flexCheckDefault">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Twist</th>
                                        <td>
                                            <input name="twist[]" class="form-check-input" type="checkbox" value="NONE" id="flexCheckDefault">
                                        </td>
                                        <td>
                                            <input name="twist[]" class="form-check-input" type="checkbox" value="MILD" id="flexCheckDefault">
                                        </td>
                                        <td>
                                            <input name="twist[]" class="form-check-input" type="checkbox" value="MODERATE" id="flexCheckDefault">
                                        </td>
                                        <td>
                                            <input name="twist[]" class="form-check-input" type="checkbox" value="SERVER" id="flexCheckDefault">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Protraction</th>
                                        <td>
                                            <input name="protraction[]" class="form-check-input" type="checkbox" value="NONE" id="flexCheckDefault">
                                        </td>
                                        <td>
                                            <input name="protraction[]" class="form-check-input" type="checkbox" value="MILD" id="flexCheckDefault">
                                        </td>
                                        <td>
                                            <input name="protraction[]" class="form-check-input" type="checkbox" value="MODERATE" id="flexCheckDefault">
                                        </td>
                                        <td>
                                            <input name="protraction[]" class="form-check-input" type="checkbox" value="SERVER" id="flexCheckDefault">
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center mt-5">
                    <div class="col-md-8 border">
                        <div class="card mb-4">
                            <div class="d-flex align-items-center m-2 p-2">
                                <img class="nav-logo  mx-2"  src="{{asset('images/question-arrow.png')}}" alt="arrow"/>
                                <h5 class="m-3">
                                    Posture assessment of pelvis
                                </h5>
                            </div>
                            <div class="d-flex align-items-center m-1">
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th scope="col"></th>
                                        <th scope="col">NONE</th>
                                        <th scope="col">MILD</th>
                                        <th scope="col">MODERATE</th>
                                        <th scope="col">SERVER</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <th scope="row">Tilt</th>
                                        <td>
                                            <input name="pelvic_tilt[]" class="form-check-input" type="checkbox" value="NONE" id="flexCheckDefault">
                                        </td>
                                        <td>
                                            <input name="pelvic_tilt[]" class="form-check-input" type="checkbox" value="MILD" id="flexCheckDefault">
                                        </td>
                                        <td>
                                            <input name="pelvic_tilt[]" class="form-check-input" type="checkbox" value="MODERATE" id="flexCheckDefault">
                                        </td>
                                        <td>
                                            <input name="pelvic_tilt[]" class="form-check-input" type="checkbox" value="SERVER" id="flexCheckDefault">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Twist</th>
                                        <td>
                                            <input name="pelvic_twist[]" class="form-check-input" type="checkbox" value="NONE" id="flexCheckDefault">
                                        </td>
                                        <td>
                                            <input name="pelvic_twist[]" class="form-check-input" type="checkbox" value="MILD" id="flexCheckDefault">
                                        </td>
                                        <td>
                                            <input name="pelvic_twist[]" class="form-check-input" type="checkbox" value="MODERATE" id="flexCheckDefault">
                                        </td>
                                        <td>
                                            <input name="pelvic_twist[]" class="form-check-input" type="checkbox" value="SERVER" id="flexCheckDefault">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Protraction</th>
                                        <td>
                                            <input name="pelvic_protraction[]" class="form-check-input" type="checkbox" value="NONE" id="flexCheckDefault">
                                        </td>
                                        <td>
                                            <input name="pelvic_protraction[]" class="form-check-input" type="checkbox" value="MILD" id="flexCheckDefault">
                                        </td>
                                        <td>
                                            <input name="pelvic_protraction[]" class="form-check-input" type="checkbox" value="MODERATE" id="flexCheckDefault">
                                        </td>
                                        <td>
                                            <input name="pelvic_protraction[]" class="form-check-input" type="checkbox" value="SERVER" id="flexCheckDefault">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Retraction</th>
                                        <td>
                                            <input name="retraction[]" class="form-check-input" type="checkbox" value="NONE" id="flexCheckDefault">
                                        </td>
                                        <td>
                                            <input name="retraction[]" class="form-check-input" type="checkbox" value="MILD" id="flexCheckDefault">
                                        </td>
                                        <td>
                                            <input name="retraction[]" class="form-check-input" type="checkbox" value="MODERATE" id="flexCheckDefault">
                                        </td>
                                        <td>
                                            <input name="retraction[]" class="form-check-input" type="checkbox" value="SERVER" id="flexCheckDefault">
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center mt-5">
                    <div class="col-md-8 border">
                        <div class="card mb-4">
                            <div class="d-flex align-items-center m-2 p-2">
                                <img class="nav-logo  mx-2"  src="{{asset('images/question-arrow.png')}}" alt="arrow"/>
                                <h5 class="m-3">
                                    Additional posture assessment comments
                                </h5>
                            </div>
                            <div class="d-flex align-items-center m-1">
                                <textarea name="posture_assessment" id="details_soap_posture_textarea" class="form-control mb-3 mt-2 pb-3" placeholder="Enter reason for Treatment"></textarea>
                                <button class="hover-zoom bg-white border-0" id="details_soap_posture_button">
                                    <img class="nav-logo mx-2" src="{{asset('images/microphone-listening.png')}}" alt="microphone"/>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center mt-5">
                    <div class="col-md-8 border">
                        <div class="card mb-4">
                            <div class="d-flex align-items-center m-2 p-2">
                                <img class="nav-logo  mx-2"  src="{{asset('images/question-arrow.png')}}" alt="arrow"/>
                                <h5 class="m-3">
                                    Range of motion
                                </h5>
                            </div>
                            <div class="d-flex align-items-center m-1">
                                <div class="col-6">
                                    Area tested
                                </div>
                                <div class="col-6">
                                    <select class="form-select" name="area_tested">
                                        <option selected disabled>Area Tested</option>
                                        <option value="Jaw">Jaw</option>
                                        <option value="Cervical spine">Cervical spine</option>
                                        <option value="Thoracic spine">Thoracic spine</option>
                                        <option value="Left shoulder">Left shoulder</option>
                                        <option value="Right shoulder">Right shoulder</option>
                                        <option value="Left elbow">Left elbow</option>
                                        <option value="Right elbow">Right elbow</option>
                                        <option value="Left wrist">Left wrist</option>
                                        <option value="Right wrist">Right wrist</option>
                                        <option value="Left hip">Left hip</option>
                                        <option value="Right hip">Right hip</option>
                                        <option value="Left knee">Left knee</option>
                                        <option value="Right knee">Right knee</option>
                                        <option value="Left ankle">Left ankle</option>
                                        <option value="Right ankle">Right ankle</option>
                                        <option value="Left fingers">Left fingers</option>
                                        <option value="Right fingers">Right fingers</option>
                                    </select>
                                </div>
                            </div>
                            <div class="d-flex align-items-center m-1">
                                <div class="col-6">
                                    Motion
                                </div>
                                <div class="col-6">
                                    <select class="form-select" name="motion">
                                        <option selected disabled>Motion</option>
                                        <option value="Active">Active</option>
                                        <option value="Passive">Passive</option>
                                    </select>
                                </div>
                            </div>
                            <div class="d-flex align-items-center m-1">
                                <div class="col-6">
                                    Result
                                </div>
                                <div class="col-6">
                                    <select class="form-select" name="Result">
                                        <option selected disabled>Result</option>
                                        <option value="Full range">Full range</option>
                                        <option value="Slight restriction">Slight restriction</option>
                                        <option value="Moderate restriction">Moderate restriction</option>
                                        <option value="Severe restriction">Severe restriction</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center mt-5">
                    <div class="col-md-8 border">
                        <div class="card mb-4">
                            <div class="d-flex align-items-center m-2 p-2">
                                <img class="nav-logo  mx-2"  src="{{asset('images/question-arrow.png')}}" alt="arrow"/>
                                <h5 class="m-3">
                                    Additional palpation comments
                                </h5>
                            </div>
                            <div class="d-flex align-items-center m-1">
                                <textarea name="additional_palpation" id="details_soap_palpation_textarea" class="form-control mb-3 mt-2 pb-3" placeholder="Enter reason for Treatment"></textarea>
                                <button class="hover-zoom bg-white border-0" id="details_soap_palpation_button">
                                    <img class="nav-logo mx-2" src="{{asset('images/microphone-listening.png')}}" alt="microphone"/>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="tab-pane fade" id="ex1-tabs-3" role="tabpanel" aria-labelledby="ex1-tab-3">
            <div class="container border">
                <div class="row justify-content-center mt-5">
                    <div class="col-md-8 border">
                        <div class="card mb-4">
                            <div class="d-flex align-items-center m-2 p-2">
                                <img class="nav-logo  mx-2"  src="{{asset('images/question-arrow.png')}}" alt="arrow"/>
                                <h5 class="m-3">
                                    Areas treated
                                </h5>
                            </div>
                            <div class="form-check">
                                <input name="areas_treated_another[]"  class="form-check-input"  type="checkbox" value="Full body" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Full body
                                </label>
                            </div>
                            <div class="form-check">
                                <input name="areas_treated_another[]" class="form-check-input" type="checkbox" value="Jaw" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Jaw
                                </label>
                            </div>
                            <div class="form-check">
                                <input name="areas_treated_another[]" class="form-check-input" type="checkbox" value="Neck" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Neck
                                </label>
                            </div>
                            <div class="form-check">
                                <input name="areas_treated_another[]" class="form-check-input" type="checkbox" value="Chest" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Chest
                                </label>
                            </div>
                            <div class="form-check">
                                <input name="areas_treated_another[]" class="form-check-input" type="checkbox" value="Abdomen" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Abdomen
                                </label>
                            </div>
                            <div class="form-check">
                                <input name="areas_treated_another[]" class="form-check-input" type="checkbox" value="Back(upper)" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Back(upper)
                                </label>
                            </div>
                            <div class="form-check">
                                <input name="areas_treated_another[]" class="form-check-input" type="checkbox" value="Back (mid)" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Back (mid)
                                </label>
                            </div>
                            <div class="form-check">
                                <input name="areas_treated_another[]" class="form-check-input" type="checkbox" value="Back (lower)" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Back (lower)
                                </label>
                            </div>
                            <div class="form-check">
                                <input name="areas_treated_another[]" class="form-check-input" type="checkbox" value="Shoulder" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Shoulder
                                </label>
                            </div>
                            <div class="form-check">
                                <input name="areas_treated_another[]" class="form-check-input" type="checkbox" value="Arm" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Arm
                                </label>
                            </div>
                            <div class="form-check">
                                <input name="areas_treated_another[]" class="form-check-input" type="checkbox" value="Hand" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Hand
                                </label>
                            </div>
                            <div class="form-check">
                                <input name="areas_treated_another[]" class="form-check-input" type="checkbox" value="Hip" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Hip
                                </label>
                            </div>
                            <div class="form-check">
                                <input name="areas_treated_another[]" class="form-check-input" type="checkbox" value="Leg (upper)" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Leg (upper)
                                </label>
                            </div>
                            <div class="form-check">
                                <input name="areas_treated_another[]" class="form-check-input" type="checkbox" value="Leg (lower)" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Leg (lower)
                                </label>
                            </div>
                            <div class="form-check">
                                <input name="areas_treated_another[]" class="form-check-input" type="checkbox" value="Foot" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Foot
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center mt-5">
                    <div class="col-md-8 border">
                        <div class="card mb-4">
                            <div class="d-flex align-items-center m-2 p-2">
                                <img class="nav-logo  mx-2"  src="{{asset('images/question-arrow.png')}}" alt="arrow"/>
                                <h5 class="m-3">
                                    Areas of focus
                                </h5>
                            </div>
                            <div class="d-flex align-items-center m-1">
                                <textarea name="area_of_focus" id="details_soap_focus_textarea" class="form-control mb-3 mt-2 pb-3" placeholder="Enter reason for Treatment"></textarea>
                                <button class="hover-zoom bg-white border-0" id="details_soap_focus_button">
                                    <img class="nav-logo mx-2" src="{{asset('images/microphone-listening.png')}}" alt="microphone"/>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center mt-5">
                    <div class="col-md-8 border">
                        <div class="card mb-4">
                            <div class="d-flex align-items-center m-2 p-2">
                                <img class="nav-logo  mx-2"  src="{{asset('images/question-arrow.png')}}" alt="arrow"/>
                                <h5 class="m-3">
                                    Techniques used
                                </h5>
                            </div>
                            <div class="form-check">
                                <input name="techniques_used[]" class="form-check-input" type="checkbox" value="Massage therapy" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Massage therapy
                                </label>
                            </div>
                            <div class="form-check">
                                <input name="techniques_used[]" class="form-check-input" type="checkbox" value="Craniosacral" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Craniosacral
                                </label>
                            </div>
                            <div class="form-check">
                                <input name="techniques_used[]" class="form-check-input" type="checkbox" value="Cupping" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Cupping
                                </label>
                            </div>
                            <div class="form-check">
                                <input name="techniques_used[]" class="form-check-input" type="checkbox" value="Joint mobilization" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Joint mobilization
                                </label>
                            </div>
                            <div class="form-check">
                                <input name="techniques_used[]" class="form-check-input" type="checkbox" value="Lymph drainage" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Lymph drainage
                                </label>
                            </div>
                            <div class="form-check">
                                <input name="techniques_used[]" class="form-check-input" type="checkbox" value="Myofascial release" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Myofascial release
                                </label>
                            </div>
                            <div class="form-check">
                                <input name="techniques_used[]" class="form-check-input" type="checkbox" value="Neuromobalization" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Neuromobalization
                                </label>
                            </div>
                            <div class="form-check">
                                <input name="techniques_used[]" class="form-check-input" type="checkbox" value="Stretching" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Stretching
                                </label>
                            </div>
                            <div class="form-check">
                                <input name="techniques_used[]" class="form-check-input" type="checkbox" value="Taping" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Taping
                                </label>
                            </div>
                            <div class="form-check">
                                <input name="techniques_used[]" class="form-check-input" type="checkbox" value="Trigger point" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Trigger point
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center mt-5">
                    <div class="col-md-8 border">
                        <div class="card mb-4">
                            <div class="d-flex align-items-center m-2 p-2">
                                <img class="nav-logo  mx-2"  src="{{asset('images/question-arrow.png')}}" alt="arrow"/>
                                <h5 class="m-3">
                                    How did the client respond to treatment?
                                </h5>
                            </div>
                            <div class="d-flex align-items-center m-1">
                                <textarea name="client_respond" id="details_soap_respond_textarea" class="form-control mb-3 mt-2 pb-3" placeholder="Enter reason for Treatment"></textarea>
                                <button class="hover-zoom bg-white border-0" id="details_soap_respond_button">
                                    <img class="nav-logo mx-2" src="{{asset('images/microphone-listening.png')}}" alt="microphone"/>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center mt-5">
                    <div class="col-md-8 border">
                        <div class="card mb-4">
                            <div class="d-flex align-items-center m-2 p-2">
                                <img class="nav-logo  mx-2"  src="{{asset('images/question-arrow.png')}}" alt="arrow"/>
                                <h5 class="m-3">
                                    Additional comments
                                </h5>
                            </div>
                            <div class="d-flex align-items-center m-1">
                                <textarea name="another_additional_comment" id="details_soap_additional_text_textarea" class="form-control mb-3 mt-2 pb-3" placeholder="Enter reason for Treatment"></textarea>
                                <button class="hover-zoom bg-white border-0" id="details_soap_additional_text_button">
                                    <img class="nav-logo mx-2" src="{{asset('images/microphone-listening.png')}}" alt="microphone"/>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="tab-pane fade" id="ex1-tabs-4" role="tabpanel" aria-labelledby="ex1-tab-4">
            <div class="container border">
                <div class="row justify-content-center mt-5">
                    <div class="col-md-8 border">
                        <div class="card mb-4">
                            <div class="d-flex align-items-center m-2 p-2">
                                <img class="nav-logo  mx-2"  src="{{asset('images/question-arrow.png')}}" alt="arrow"/>
                                <h5 class="m-3">
                                    Treatment Plan
                                </h5>
                            </div>
                            <div class="d-flex align-items-center m-1">
                                <textarea name="treatment_plan" id="details_soap_treatment_plan_text_textarea" class="form-control mb-3 mt-2 pb-3" placeholder="Enter reason for Treatment"></textarea>
                                <button class="hover-zoom bg-white border-0" id="details_soap_treatment_plan_text_button">
                                    <img class="nav-logo mx-2" src="{{asset('images/microphone-listening.png')}}" alt="microphone"/>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center mt-5">
                        <div class="col-md-8 border">
                            <div class="card mb-4">
                                <div class="d-flex align-items-center m-2 p-2">
                                    <img class="nav-logo  mx-2"  src="{{asset('images/question-arrow.png')}}" alt="arrow"/>
                                    <h5 class="m-3">
                                        Self-care recommendations
                                    </h5>
                                </div>
                                <div class="d-flex align-items-center m-1">
                                    <textarea name="self_care" id="details_soap_recommendation_textarea" class="form-control mb-3 mt-2 pb-3" placeholder="Enter reason for Treatment"></textarea>
                                    <button class="hover-zoom bg-white border-0" id="details_soap_recommendation_button">
                                        <img class="nav-logo mx-2" src="{{asset('images/microphone-listening.png')}}" alt="microphone"/>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="tab-pane fade" id="ex1-tabs-5" role="tabpanel" aria-labelledby="ex1-tab-5">
            <div class="container">
                <div class="row justify-content-center mt-5">
                    <div class="col-md-8 border">
                        <div class="card mb-4">
                            <div class="d-flex align-items-center m-2 p-2">
                                <img class="nav-logo  mx-2"  src="{{asset('images/question-arrow.png')}}" alt="arrow"/>
                                <h5 class="m-3">
                                    Upload any external files here...
                                </h5>
                            </div>
                            <hr>
                            <div class="d-flex align-items-center m-1">
                                <input type="file" name="file">
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center mt-5">
                        <div class="col-md-8">
                            <div class="mb-4">
                                <div class="d-flex align-items-center m-2 p-2">
                                    <button class="btn btn-outline-primary" type="submit">
                                        <i class="bi bi-plus-circle-fill"></i>
                                        Submit
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="tab-pane fade" id="ex1-tabs-6" role="tabpanel" aria-labelledby="ex1-tab-6">
            <div class="container">
                <!--
                <div class="row justify-content-center mt-5">
                    <div class="row justify-content-center mt-5">
                        <div class="col-md-8">
                            <div class="mb-4">
                                <div class="d-flex align-items-center m-2 p-2">
                                    <button class="btn btn-outline-primary">
                                        <i class="bi bi-plus-circle-fill"></i>
                                        Add Question
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                 -->
            </div>
        </div>

    </div>
</form>


<script>

    document.addEventListener('DOMContentLoaded', function () {// Initialization for tabs
        new mdb.Tab(document.getElementById('ex1')).init();
    });


    function initializeSpeechRecognition(textareaId, buttonId) {
        const textarea = document.getElementById(textareaId);
        const button = document.getElementById(buttonId);
        let recognition;

        function startRecognition() {
            recognition = new (webkitSpeechRecognition || SpeechRecognition)();
            recognition.continuous = true;
            recognition.interimResults = true;

            recognition.onresult = (event) => {
                let result = '';
                for (let i = event.resultIndex; i < event.results.length; i++) {
                    if (event.results[i].isFinal) {
                        result += event.results[i][0].transcript + ' ';
                    }
                }
                textarea.value += result;
            };

            recognition.onend = () => {
                updateButton(false);
            };

            recognition.start();
            updateButton(true);
        }

        function stopRecognition() {
            if (recognition && recognition.recognizing) {
                recognition.stop();
                updateButton(false);
            }
        }

        function toggleRecognition() {
            if (recognition && recognition.recognizing) {
                stopRecognition();
            } else {
                startRecognition();
            }
        }

        function updateButton(isActive) {
            button.classList.toggle('active', isActive);
            const imageName = isActive ? 'microphone.png' : 'microphone-listening.png';
            button.innerHTML = `<img class="nav-logo mx-2" src="{{asset('images/${imageName}')}}" alt="microphone"/>`;
        }

        button.addEventListener('click', toggleRecognition);
    }

    initializeSpeechRecognition('details_soap_treatment_goal_textarea', 'details_soap_treatment_goal_button');
    initializeSpeechRecognition('details_soap_indicate_pain_textarea', 'details_soap_indicate_pain_button');
    initializeSpeechRecognition('details_soap_additional_textarea', 'details_soap_additional_button');
    initializeSpeechRecognition('details_soap_posture_textarea', 'details_soap_posture_button');
    initializeSpeechRecognition('details_soap_palpation_textarea', 'details_soap_palpation_button');
    initializeSpeechRecognition('details_soap_focus_textarea', 'details_soap_focus_button');
    initializeSpeechRecognition('details_soap_respond_textarea', 'details_soap_respond_button');
    initializeSpeechRecognition('details_soap_additional_text_textarea', 'details_soap_additional_text_button');
    initializeSpeechRecognition('details_soap_treatment_plan_text_textarea', 'details_soap_treatment_plan_text_button');
    initializeSpeechRecognition('details_soap_recommendation_textarea', 'details_soap_recommendation_button');

</script>
