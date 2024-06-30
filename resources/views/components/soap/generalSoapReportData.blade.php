@if(isset($appointment))
    <!-- Patient Information -->
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
    <div class=" py-5">
        <div class="row justify-content-between ">
            <div class="align-items-center col">
                <h4>General Soap Notes Information</h4>
            </div>
        </div>
        <hr class="bg-dark "/>
        <!-- Basic Soap Result -->
        <table class="table table-striped" id="myTable">
            <thead>
            <tr>
                @foreach ($generalSoapQuestion as $question)
                    <th>{{ $question->general_soap_question}}</th>
                @endforeach
                <th>Treatment Goal</th>
                <th>Appointment notes</th>
                    <th>Date</th>

            </tr>
            </thead>
            <tbody>
            @foreach($groupedAnswers as $date => $answers)
                <tr>
                    @foreach ($generalSoapQuestion as $question)
                        <td>
                            @foreach ($answers as $answer)
                                @if($answer->general_soap_question_id == $question->id)
                                    @foreach ($generalSoapOption as $option)
                                        @if($answer->general_soap_option_id == $option->id)
                                            <ul>
                                                <li>{{ $option->general_soap_option }}</li>
                                            </ul>
                                        @endif
                                    @endforeach
                                @endif
                            @endforeach
                        </td>
                    @endforeach
                    @if (isset($groupedOtherAnswers[$date]))
                        @php $otherAnswers = $groupedOtherAnswers[$date]; @endphp
                        <td>
                            @foreach($otherAnswers as $otheranswer)
                                {{ $otheranswer->treatment_goal }}
                            @endforeach
                        </td>
                        <td>
                            @foreach($otherAnswers as $otheranswer)
                                {{ $otheranswer->appointment_note }}
                            @endforeach
                        </td>
                    @endif
                    <td>{{$date}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>

    </div>
@endif



<script>
    $(document).ready( function () {
        $('#myTable').DataTable();
    } );

    window.$ = window.jquery = require('./node_modules/jquery');
    window.dt = require('./node_modules/datatables.net')();
    window.$('#table_id').DataTable();
</script>
