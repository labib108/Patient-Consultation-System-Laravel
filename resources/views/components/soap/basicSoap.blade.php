<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="border p-4 bg-gradient-dark text-center">
                <h3 class="text-white">Basic Soap Notes</h3>
            </div>
        </div>
    </div>
</div>
<hr>

<form method="post" action="{{ route('basicSoapQuestion.answers') }}" enctype="multipart/form-data">
    @csrf
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="border p-4 bg-gradient-light text-center">
                <lebel>
                    Enter Client ID
                </lebel>
                <input type="text" name="appointment_id" class="form-control" id="appointment_id" placeholder="Enter Client Application ID *" required>
            </div>
        </div>
    </div>
</div>
<br>
<hr>
<!-- Tabs navs -->
<ul class="nav nav-tabs nav-fill mb-3" id="ex1" role="tablist">
    <li class="nav-item" role="presentation">
        <a data-mdb-tab-init class="nav-link active" id="ex2-tab-1" href="#ex2-tabs-1" role="tab" aria-controls="ex2-tabs-1" aria-selected="true">TREATMENT GOAL</a>
    </li>
    <li class="nav-item" role="presentation">
        <a data-mdb-tab-init class="nav-link" id="ex2-tab-2" href="#ex2-tabs-2" role="tab" aria-controls="ex2-tabs-2" aria-selected="false">TREATMENT NOTE</a>
    </li>
    <li class="nav-item" role="presentation">
        <a data-mdb-tab-init class="nav-link" id="ex2-tab-3" href="#ex2-tabs-3" role="tab" aria-controls="ex2-tabs-3" aria-selected="false">ATTACHMENT</a>
    </li>
</ul>
<!-- Tabs navs -->

<!-- Tabs content -->
<div class="tab-content" id="ex2-content">
    <div class="tab-pane fade show active" id="ex2-tabs-1" role="tabpanel" aria-labelledby="ex2-tab-1">
        <div class="container">
            <div class="row justify-content-center mt-5">
                <div class="col-md-8 border">
                    @foreach ($questions as $question)
                        <div class="card border mt-3 mb-4">
                            <div class="d-flex align-items-center m-1">
                                <img class="nav-logo  mx-2"  src="{{asset('images/question-arrow.png')}}" alt="arrow"/>
                                <h5 class="m-3">
                                    {{ $question->basic_soap_question}}
                                </h5>
                            </div>
                            <div class="card-body">
                                <div class="btn-group-vertical w-100" data-toggle="buttons">
                                    @foreach ($options as $option)
                                        @if ($option->basic_soap_question_id == $question->id)
                                        <label class="btn btn-light btn-lg mb-2">
                                            <input type="checkbox" name="basic_soap_answer[{{ $question->id }}][]" value="{{ $option->id }}" autocomplete="off">
                                            {{ $option->basic_soap_option}}
                                        </label>
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    @endforeach
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
                            <div class="d-flex align-items-center m-1">
                                <textarea name="basic_soap_treatment_textarea" id="basic_soap_treatment_textarea" class="form-control mb-3 mt-2 pb-3" placeholder="Enter reason for Treatment"></textarea>
                                <button class=" btn hover-zoom bg-white border-0" id="basic_soap_treatment_button">
                                    <img class="nav-logo mx-2" src="{{asset('images/microphone-listening.png')}}" alt="microphone"/>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
               {{-- <div class="row justify-content-center mt-5">
                    <div class="col-md-8">
                        <div class="mb-4">
                            <div class="d-flex align-items-center m-2 p-2">

                            </div>
                        </div>
                    </div>
                </div>--}}
            </div>
        </div>
    </div>
    <div class="tab-pane fade" id="ex2-tabs-2" role="tabpanel" aria-labelledby="ex2-tab-2">
        <div class="container">
            <div class="row justify-content-center mt-5">
                <div class="col-md-8 border">
                    <div class="row justify-content-center mt-3">
                        <div class="col-md-8 border mt-3 mb-3">
                            <div class="card mb-4">
                                <div class="d-flex align-items-center m-2 p-2">
                                    <img class="nav-logo  mx-2"  src="{{asset('images/question-arrow.png')}}" alt="arrow"/>
                                    <h5 class="m-3">
                                        Click on the image to start markup
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
                </div>
                <div class="row justify-content-center mt-5">
                    <div class="col-md-8 border mb-3 mt-3">
                        <div class="card mb-4">
                            <div class="d-flex align-items-center m-2 p-2">
                                <img class="nav-logo  mx-2"  src="{{asset('images/question-arrow.png')}}" alt="arrow"/>
                                <h5 class="m-3">
                                    Subjective(Information provided by the client)
                                </h5>
                            </div>
                            <div class="d-flex align-items-center m-1">
                                <textarea id="basic_soap_subjective_notes_textarea" name="basic_soap_subjective_notes_textarea" class="form-control mb-3 mt-2 pb-3" placeholder="Enter  Subjective Information" required></textarea>
                                <button class="hover-zoom bg-white border-0" id="basic_soap_subjective_notes_button">
                                    <img class="nav-logo mx-2" src="{{asset('images/microphone-listening.png')}}" alt="microphone"/>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center mt-5">
                    <div class="col-md-8 border mb-3 mt-3">
                        <div class="card mb-4">
                            <div class="d-flex align-items-center m-2 p-2">
                                <img class="nav-logo  mx-2"  src="{{asset('images/question-arrow.png')}}" alt="arrow"/>
                                <h5 class="m-3">
                                    Objective(Physical examination and text result)
                                </h5>
                            </div>
                            <div class="d-flex align-items-center m-1">
                                <textarea name="basic_soap_objective_notes_textarea" id="basic_soap_objective_notes_textarea" class="form-control mb-3 mt-2 pb-3" placeholder="Enter Physical examination and text result" required></textarea>
                                <button class="hover-zoom bg-white border-0" id="basic_soap_objective_notes_button">
                                    <img class="nav-logo mx-2" src="{{asset('images/microphone-listening.png')}}" alt="microphone"/>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center mt-5">
                    <div class="col-md-8 border mb-3 mt-3">
                        <div class="card mb-4">
                            <div class="d-flex align-items-center m-2 p-2">
                                <img class="nav-logo  mx-2"  src="{{asset('images/question-arrow.png')}}" alt="arrow"/>
                                <h5 class="m-3">
                                    Assessment(summary and conclusion from examination)
                                </h5>
                            </div>
                            <div class="d-flex align-items-center m-1">
                                <textarea name="basic_soap_assessment_notes_textarea" id="basic_soap_assessment_notes_textarea" class="form-control mb-3 mt-2 pb-3" placeholder="Enter summary and conclusion from examination" required></textarea>
                                <button class="hover-zoom bg-white border-0" id="basic_soap_assessment_notes_button">
                                    <img class="nav-logo mx-2" src="{{asset('images/microphone-listening.png')}}" alt="microphone"/>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center mt-5">
                    <div class="col-md-8 border mb-3 mt-3">
                        <div class="card mb-4">
                            <div class="d-flex align-items-center m-2 p-2">
                                <img class="nav-logo  mx-2"  src="{{asset('images/question-arrow.png')}}" alt="arrow"/>
                                <h5 class="m-3">
                                    Treatment Plan
                                </h5>
                            </div>
                            <div class="d-flex align-items-center m-1">
                                <textarea name="basic_soap_treatment_plan_textarea" id="basic_soap_treatment_plan_textarea" class="form-control mb-3 mt-2 pb-3" placeholder="Enter Treatment plan" required></textarea>
                                <button class="hover-zoom bg-white border-0" id="basic_soap_treatment_plan_button">
                                    <img class="nav-logo mx-2" src="{{asset('images/microphone-listening.png')}}" alt="microphone"/>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                {{--<div class="row justify-content-center mt-5">
                    <div class="col-md-8">
                        <div class="mb-4">
                            <div class="d-flex align-items-center m-2 p-2">

                            </div>
                        </div>
                    </div>
                </div>--}}
            </div>
        </div>
    </div>
    <div class="tab-pane fade" id="ex2-tabs-3" role="tabpanel" aria-labelledby="ex2-tab-3">
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
                        <div id="fileInfo" style="display: none;"></div>
                        <div class="d-flex align-items-center m-1">
                            <input type="file" name="fileInput" id="fileInput" accept="image/*, .pdf, .doc, .docx" style="display: none;" />
                            <input type="hidden" id="fileData" name="fileData"/>
                            <button type="button" class="btn btn-outline-danger" onclick="uploadFile()">UPLOAD FILE</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Tabs content -->

    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-8">
                <div class="mb-4">
                    <div class="d-flex align-items-center m-2 p-2">
                        <button type="submit" class="btn btn-outline-primary" onclick="Validate()">
                            <i class="bi bi-plus-circle-fill"></i>
                            Submit
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

</form>
<script>
    function Validate() {
        let fileInputNew = document.getElementById('fileInput');
        let appointmentId = document.getElementById('appointment_id').value;
        let treatmentTextarea = document.getElementById('basic_soap_treatment_textarea').value;
        let subjectiveTextarea = document.getElementById('basic_soap_subjective_notes_textarea').value;
        let objectiveTextarea = document.getElementById('basic_soap_objective_notes_textarea').value;
        let assessmentTextarea = document.getElementById('basic_soap_assessment_notes_textarea').value;
        let treatmentPlanTextarea = document.getElementById('basic_soap_treatment_plan_textarea').value;
        let file = fileInputNew.files[0];

        if (appointmentId.length === 0) {
            errorToast("Appointment ID required")
        }
        if (treatmentTextarea.length === 0) {
            errorToast("Treatment Goal is required")
        }
        if (subjectiveTextarea.length === 0) {
            errorToast("Subjective Information is required")
        }
        if (objectiveTextarea.length === 0) {
            errorToast("Objective Information is required")
        }
        if (assessmentTextarea.length === 0) {
            errorToast("Assessment is required")
        }
        if (treatmentPlanTextarea.length === 0) {
            errorToast("Treatment plan is required")
        }
        if (!file) {
            errorToast("File upload is required");
            window.location.href = '/basicSoapPage';
        }
    }

    function uploadFile() {
            const fileInput = document.getElementById('fileInput');
            const fileDataInput = document.getElementById('fileData');
            const fileInfoDiv = document.getElementById('fileInfo');
            // Trigger click on the hidden file input
            fileInput.click();

            // Attach change event listener to the file input
            fileInput.addEventListener('change', function () {
                const selectedFile = fileInput.files[0];

                if (selectedFile) {

                    fileInfoDiv.innerHTML = `<p>File Name: ${selectedFile.name}</p>
                                         <p>File Size: ${formatFileSize(selectedFile.size)}</p>`;
                    fileInfoDiv.style.display = 'block';
                    // Convert file to base64 for storing in the hidden input
                    const reader = new FileReader();
                    reader.onload = function (e) {
                        fileDataInput.value = e.target.result;
                    };
                    reader.readAsDataURL(selectedFile);
                }
            });
            function formatFileSize(size) {
            const units = ['B', 'KB', 'MB', 'GB', 'TB'];
            let i = 0;
            while (size >= 1024 && i < units.length - 1) {
                size /= 1024;
                i++;
            }
            return size.toFixed(2) + ' ' + units[i];
        }
    }


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

    initializeSpeechRecognition('basic_soap_treatment_textarea', 'basic_soap_treatment_button');
    initializeSpeechRecognition('basic_soap_subjective_notes_textarea', 'basic_soap_subjective_notes_button');
    initializeSpeechRecognition('basic_soap_objective_notes_textarea', 'basic_soap_objective_notes_button');
    initializeSpeechRecognition('basic_soap_assessment_notes_textarea', 'basic_soap_assessment_notes_button');
    initializeSpeechRecognition('basic_soap_treatment_plan_textarea', 'basic_soap_treatment_plan_button');


    // Initialization for ES Users
    document.addEventListener('DOMContentLoaded', function () {// Initialization for tabs
        new mdb.Tab(document.getElementById('ex1')).init();
    });

</script>

