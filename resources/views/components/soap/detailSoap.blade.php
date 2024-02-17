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
        <a data-mdb-tab-init class="nav-link" id="ex1-tab-6" href="#ex1-tabs-6" role="tab" aria-controls="ex1-tabs-6" aria-selected="false">ADD TAB</a>
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
                                    <input type="checkbox" name="q_answer[]" value="" autocomplete="off">
                                    Relieve pain
                                </label>
                                <label class="btn btn-light btn-lg mb-2">
                                    <input type="checkbox" name="q_answer[]" value="" autocomplete="off">
                                    Relieve tension
                                </label>
                                <label class="btn btn-light btn-lg mb-2">
                                    <input type="checkbox" name="q_answer[]" value="" autocomplete="off">
                                    Relieve stress
                                </label>
                                <label class="btn btn-light btn-lg mb-2">
                                    <input type="checkbox" name="q_answer[]" value="" autocomplete="off">
                                    Relieve anxiety
                                </label>
                                <label class="btn btn-light btn-lg mb-2">
                                    <input type="checkbox" name="q_answer[]" value="" autocomplete="off">
                                    Improve mobility
                                </label>
                                <label class="btn btn-light btn-lg mb-2">
                                    <input type="checkbox" name="q_answer[]" value="" autocomplete="off">
                                    Improve quality of life (sleep, mood, etc.)
                                </label>
                                <label class="btn btn-light btn-lg mb-2">
                                    <input type="checkbox" name="q_answer[]" value="" autocomplete="off">
                                    Relaxation
                                </label>
                                <level class="btn btn-light btn-lg mb-2 p-2">
                                    <input type="checkbox" name="other" value="other" autocomplete="off">Others
                                </level>
                                <div class="w-100">
                                    <textarea name="general_soap_Other_textarea" id="otherText" class="form-control mb-2" placeholder="Please type your answer"></textarea>
                                </div>
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
                                    <input type="checkbox" name="q_answer[]" value="" autocomplete="off">
                                    Yes
                                </label>
                                <label class="btn btn-light btn-lg mb-2">
                                    <input type="checkbox" name="q_answer[]" value="" autocomplete="off">
                                    NO
                                </label>
                                <label class="btn btn-light btn-lg mb-2">
                                    <input type="checkbox" name="q_answer[]" value="" autocomplete="off">
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
                                    <input type="checkbox" name="q_answer[]" value="" autocomplete="off">
                                    Constant (Pain does not change much from one moment to another)
                                </label>
                                <label class="btn btn-light btn-lg mb-2">
                                    <input type="checkbox" name="q_answer[]" value="" autocomplete="off">
                                    Variable (Pain all the time. Moments of more pain or varying types of pain)
                                </label>
                                <label class="btn btn-light btn-lg mb-2">
                                    <input type="checkbox" name="q_answer[]" value="" autocomplete="off">
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
                                    <input type="checkbox" name="q_answer[]" value="" autocomplete="off">
                                    Physician
                                </label>
                                <label class="btn btn-light btn-lg mb-2">
                                    <input type="checkbox" name="q_answer[]" value="" autocomplete="off">
                                    Massage Therapist
                                </label>
                                <label class="btn btn-light btn-lg mb-2">
                                    <input type="checkbox" name="q_answer[]" value="" autocomplete="off">
                                    Physical Therapist
                                </label>
                                <label class="btn btn-light btn-lg mb-2">
                                    <input type="checkbox" name="q_answer[]" value="" autocomplete="off">
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
                                    <input type="checkbox" name="q_answer[]" value="" autocomplete="off">
                                    Posture assessment of spine
                                </label>
                                <label class="btn btn-light btn-lg mb-2">
                                    <input type="checkbox" name="q_answer[]" value="" autocomplete="off">
                                    Posture assessment of shoulders
                                </label>
                                <label class="btn btn-light btn-lg mb-2">
                                    <input type="checkbox" name="q_answer[]" value="" autocomplete="off">
                                    Posture assessment of pelvis
                                </label>
                                <label class="btn btn-light btn-lg mb-2">
                                    <input type="checkbox" name="q_answer[]" value="" autocomplete="off">
                                    Range of motion
                                </label>
                                <label class="btn btn-light btn-lg mb-2">
                                    <input type="checkbox" name="q_answer[]" value="" autocomplete="off">
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
                            <img class="nav-logo mx-2" src="{{asset('images/microphone.png')}}" alt="microphone"/>
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
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Select pain lavel</option>
                        <option value="1">Dull</option>
                        <option value="2">Cold</option>
                        <option value="3">Numb</option>
                        <option value="4">Sharp</option>
                        <option value="5">Burning</option>
                        <option value="6">Tender</option>
                        <option value="7">Aching</option>
                        <option value="8">Itchy</option>
                        <option value="9">Sensitive</option>
                        <option value="10">Cramping</option>
                        <option value="11">Throbbing</option>
                        <option value="12">Shooting</option>
                        <option value="13">Tingling</option>
                        <option value="14">Pressure</option>
                        <option value="15">Stiff</option>
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
                                <input type="date" class="form-control" id="date" placeholder="Enter Date">
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
                        <textarea name="treatGoal" id="details_soap_indicate_pain_textarea" class="form-control mb-3 mt-2 pb-3" placeholder="Enter reason for Treatment"></textarea>
                        <button class="hover-zoom bg-white border-0" id="details_soap_indicate_pain_button">
                            <img class="nav-logo mx-2" src="{{asset('images/microphone.png')}}" alt="microphone"/>
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
                        <textarea name="treatGoal" id="details_soap_additional_textarea" class="form-control mb-3 mt-2 pb-3" placeholder="Enter reason for Treatment"></textarea>
                        <button class="hover-zoom bg-white border-0" id="details_soap_additional_button">
                            <img class="nav-logo mx-2" src="{{asset('images/microphone.png')}}" alt="microphone"/>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center mt-5">
            <div class="col-md-8">
                <div class="mb-4">
                    <div class="d-flex align-items-center m-2 p-2">
                        <button class="btn btn-outline-primary">
                            <i class="bi bi-plus-circle-fill"></i>
                            Submit
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
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    </td>
                                    <td>
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    </td>
                                    <td>
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    </td>
                                    <td>
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">Kyphosis</th>
                                    <td>
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    </td>
                                    <td>
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    </td>
                                    <td>
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    </td>
                                    <td>
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">Scoliosis</th>
                                    <td>
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    </td>
                                    <td>
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    </td>
                                    <td>
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    </td>
                                    <td>
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
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
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    </td>
                                    <td>
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    </td>
                                    <td>
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    </td>
                                    <td>
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">Twist</th>
                                    <td>
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    </td>
                                    <td>
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    </td>
                                    <td>
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    </td>
                                    <td>
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">Protraction</th>
                                    <td>
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    </td>
                                    <td>
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    </td>
                                    <td>
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    </td>
                                    <td>
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
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
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    </td>
                                    <td>
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    </td>
                                    <td>
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    </td>
                                    <td>
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">Twist</th>
                                    <td>
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    </td>
                                    <td>
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    </td>
                                    <td>
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    </td>
                                    <td>
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">Protraction</th>
                                    <td>
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    </td>
                                    <td>
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    </td>
                                    <td>
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    </td>
                                    <td>
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">Retraction</th>
                                    <td>
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    </td>
                                    <td>
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    </td>
                                    <td>
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    </td>
                                    <td>
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
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
                            <textarea name="treatGoal" id="details_soap_posture_textarea" class="form-control mb-3 mt-2 pb-3" placeholder="Enter reason for Treatment"></textarea>
                            <button class="hover-zoom bg-white border-0" id="details_soap_posture_button">
                                <img class="nav-logo mx-2" src="{{asset('images/microphone.png')}}" alt="microphone"/>
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
                                <select class="form-select" name="area-tested">
                                    <option selected disabled>Area Tested</option>
                                    <option value="1">jaw</option>
                                    <option value="2">Cervical spine</option>
                                    <option value="3">Thoracic spine</option>
                                    <option value="4">Left shoulder</option>
                                    <option value="5">Right shoulder</option>
                                    <option value="6">Left elbow</option>
                                    <option value="7">Right elbow</option>
                                    <option value="8">Left wrist</option>
                                    <option value="9">Right wrist</option>
                                    <option value="10">Left hip</option>
                                    <option value="11">Right hip</option>
                                    <option value="12">Left knee</option>
                                    <option value="13">Right knee</option>
                                    <option value="14">Left ankle</option>
                                    <option value="15">Right ankle</option>
                                    <option value="16">Left fingers</option>
                                    <option value="17">Right fingers</option>
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
                                    <option value="1">Active</option>
                                    <option value="2">Passive</option>
                                </select>
                            </div>
                        </div>
                        <div class="d-flex align-items-center m-1">
                            <div class="col-6">
                                Result
                            </div>
                            <div class="col-6">
                                <select class="form-select" name="motion">
                                    <option selected disabled>Result</option>
                                    <option value="1">Full range</option>
                                    <option value="2">Slight restriction</option>
                                    <option value="2">Moderate restriction</option>
                                    <option value="2">Severe restriction</option>
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
                            <textarea name="treatGoal" id="details_soap_palpation_textarea" class="form-control mb-3 mt-2 pb-3" placeholder="Enter reason for Treatment"></textarea>
                            <button class="hover-zoom bg-white border-0" id="details_soap_palpation_button">
                                <img class="nav-logo mx-2" src="{{asset('images/microphone.png')}}" alt="microphone"/>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center mt-5">
                <div class="col-md-8">
                    <div class="mb-4">
                        <div class="d-flex align-items-center m-2 p-2">
                            <button class="btn btn-outline-primary">
                                <i class="bi bi-plus-circle-fill"></i>
                                Submit
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
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Full body
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Jaw
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Neck
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Chest
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Abdomen
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Back(upper)
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Back (mid)
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Back (lower)
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Shoulder
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Arm
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Hand
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Hip
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Leg (upper)
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Leg (lower)
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
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
                            <textarea name="treatGoal" id="details_soap_focus_textarea" class="form-control mb-3 mt-2 pb-3" placeholder="Enter reason for Treatment"></textarea>
                            <button class="hover-zoom bg-white border-0" id="details_soap_focus_button">
                                <img class="nav-logo mx-2" src="{{asset('images/microphone.png')}}" alt="microphone"/>
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
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Massage therapy
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Craniosacral
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Cupping
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Joint mobilization
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Lymph drainage
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Myofascial release
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Neuromobalization
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Stretching
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Taping
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
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
                            <textarea name="treatGoal" id="details_soap_respond_textarea" class="form-control mb-3 mt-2 pb-3" placeholder="Enter reason for Treatment"></textarea>
                            <button class="hover-zoom bg-white border-0" id="details_soap_respond_button">
                                <img class="nav-logo mx-2" src="{{asset('images/microphone.png')}}" alt="microphone"/>
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
                            <textarea name="treatGoal" id="details_soap_additional_text_textarea" class="form-control mb-3 mt-2 pb-3" placeholder="Enter reason for Treatment"></textarea>
                            <button class="hover-zoom bg-white border-0" id="details_soap_additional_text_button">
                                <img class="nav-logo mx-2" src="{{asset('images/microphone.png')}}" alt="microphone"/>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center mt-5">
                <div class="col-md-8">
                    <div class="mb-4">
                        <div class="d-flex align-items-center m-2 p-2">
                            <button class="btn btn-outline-primary">
                                <i class="bi bi-plus-circle-fill"></i>
                                Submit
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
                            <textarea name="treatGoal" id="details_soap_treatment_plan_text_textarea" class="form-control mb-3 mt-2 pb-3" placeholder="Enter reason for Treatment"></textarea>
                            <button class="hover-zoom bg-white border-0" id="details_soap_treatment_plan_text_button">
                                <img class="nav-logo mx-2" src="{{asset('images/microphone.png')}}" alt="microphone"/>
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
                                <textarea name="treatGoal" id="details_soap_recommendation_textarea" class="form-control mb-3 mt-2 pb-3" placeholder="Enter reason for Treatment"></textarea>
                                <button class="hover-zoom bg-white border-0" id="details_soap_recommendation_button">
                                    <img class="nav-logo mx-2" src="{{asset('images/microphone.png')}}" alt="microphone"/>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center mt-5">
                    <div class="col-md-8">
                        <div class="mb-4">
                            <div class="d-flex align-items-center m-2 p-2">
                                <button class="btn btn-outline-primary">
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
                            <button class="btn btn-outline-danger">UPLOAD FILE</button>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center mt-5">
                    <div class="col-md-8">
                        <div class="mb-4">
                            <div class="d-flex align-items-center m-2 p-2">
                                <button class="btn btn-outline-primary">
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
            const imageName = isActive ? 'microphone-listening.png' : 'microphone.png';
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
