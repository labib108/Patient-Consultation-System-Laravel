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
        <div class="justify-content-between ">
            <div class="align-items-center col">
                <h4>Basic Soap Note Information</h4>
            </div>
        </div>
        <hr class="bg-dark "/>
        <!-- Basic Soap Result -->
        <table class="table table-striped" id="myTable">
            <thead>
            <tr>
                @foreach ($basicSoapQuestion as $question)
                    <th>{{ $question->basic_soap_question}}</th>
                @endforeach
                <th>Treatment Goal</th>
                <th>Subjective Information</th>
                <th>Objective (Physical examination and text result)</th>
                <th>Assessment(summary and conclusion from examination)</th>
                <th>Treatment Plan</th>
                <th>Appointment Date</th>
            </tr>
            </thead>
            <tbody>
            @foreach($groupedAnswers as $date => $answer)
                <tr>
                    @foreach ($basicSoapQuestion as $question)
                        <td>
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
                        </td>
                    @endforeach
                    @if (isset($groupedOtherAnswers[$date]))
                        @php $otherAnswers = $groupedOtherAnswers[$date]; @endphp
                        <td>
                            @foreach ($otherAnswers as $otherAnswer)
                                {{ $otherAnswer->treatment_goal }}
                            @endforeach
                        </td>
                        <td>
                            @foreach ($otherAnswers as $otherAnswer)
                                {{ $otherAnswer->subjective }}
                            @endforeach
                        </td>
                        <td>
                            @foreach ($otherAnswers as $otherAnswer)
                                <li>{{ $otherAnswer->objective }}
                            @endforeach

                        </td>
                        <td>
                            @foreach ($otherAnswers as $otherAnswer)
                                {{ $otherAnswer->assessment }}
                            @endforeach
                        </td>
                        <td>
                            @foreach ($otherAnswers as $otherAnswer)
                                {{ $otherAnswer->plan }}
                            @endforeach

                        </td>

                        <td>
                            @foreach ($otherAnswers as $otherAnswer)
                                {{ $otherAnswer->updated_at }}
                            @endforeach

                        </td>
                    @endif
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
