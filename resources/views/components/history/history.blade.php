<div class="container mt-5">
    <div class="row">
        <div class="col-md-12 border p-4 shadow bg-light">
            <div class="col-12">
                <h3 class="fw-normal text-secondary fs-4 text-uppercase mb-4">Client Intake form</h3>
            </div>
            <form action="">
                <div class="row g-3">
                    <div class="col-md-6">
                        <label for="appointment_id">Appointment ID *</label>
                        <input type="text" name="id" class="form-control" id="appointment_id" placeholder="Enter Appointment ID *" required>
                    </div>
                    <div class="col-md-6">
                        <label for="condition">Health Condition *</label>
                        <input type="text" name="history" class="form-control" id="condition" placeholder="Enter your health condition *" required>
                    </div>
                    <div class="col-md-6">
                        <label for="symptoms">Symptoms *</label>
                        <input type="text" name="symptoms" class="form-control" id="symptoms" placeholder="Enter your current symptoms *" required>
                    </div>
                    <div class="col-md-6">
                        <label for="injuries">Injuries *</label>
                        <input type="text" name="injuries" class="form-control" id="injuries" placeholder="Enter any injuries and issues *" required>
                    </div>
                    <div class="col-md-6">
                        <label for="other">Others</label>
                        <input type="text" name="others" class="form-control" id="other" placeholder="Enter any other issues">
                    </div>
                    <div class="col-md-8">
                        <label for="date">Date *</label>
                        <input type="date" name="date" class="form-control" id="date" placeholder="Enter Date" required>
                    </div>
                    <div class="col-12 mt-5">
                        <button type="submit" class="btn btn-primary float-end" onclick="onHistory()">Submit History</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="m-3">
<br>
</div>
<hr class="m-3">
<hr class="m-3">
<div class="m-3">
<br>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 col-sm-12 col-lg-12">
            <div class="card px-5 py-5">
                <div class="row justify-content-between ">
                    <div class="align-items-center col">
                        <h4>Client Health History</h4>
                    </div>
                </div>
                <hr class="bg-dark "/>
                <table class="table" id="myTable">
                    <thead>
                    <tr class="bg-light">
                        <th>Name</th>
                        <th>Health Condition</th>
                        <th>Symptoms</th>
                        <th>Injuries</th>
                        <th>others</th>
                        <th>History Modified Date</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody id="tableList">
                    @foreach($histories as $history)
                        <tr>
                            <td>{{$history->appointment->firstname}} {{$history->appointment->middlename}} {{$history->appointment->lastname}}</td>
                            <td>{{$history->condition}}</td>
                            <td>{{$history->symptoms}}</td>
                            <td>{{$history->injuries}}</td>
                            <td>{{$history->other}}</td>
                            <td>{{$history->date}}</td>
                            <td>
                                <button class="btn btn-warning" onclick="EditHistory({{$history->id}})">Edit</button>
                                <button class="btn btn-danger" onclick="deleteHistory({{$history->id}})" >Delete</button>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<script>

    async function onHistory() {
        let appointment_id = document.getElementById('appointment_id').value;
        let condition = document.getElementById('condition').value;
        let symptoms = document.getElementById('symptoms').value;
        let injuries = document.getElementById('injuries').value;
        let other = document.getElementById('other').value;
        let date = document.getElementById('date').value;

        if (appointment_id.length === 0) {
            errorToast("Appointment ID required")
        } else if (condition.length === 0) {
            errorToast("Health History required")
        } else if (symptoms.length === 0) {
            errorToast("Symptom is required")
        }
        else {
            if (other.trim().length === 0) {
                other = "No";
            }
            showLoader();
            try {
                let res = await axios.post("newHistory", {
                    appointment_id: appointment_id,
                    condition: condition,
                    symptoms: symptoms,
                    injuries: injuries,
                    other: other,
                    date: date
                });
                // Handle the response here
                hideLoader();
            } catch (error) {
                // Handle errors here
                hideLoader();
            }
        }
    }


    function EditHistory(Id) {
        window.location.href = `/editHistory/${Id}`;
    }
    async function deleteHistory(Id) {
        if (confirm("Are you sure you want to delete this appointment?")) {
            try {
                showLoader();
                let res = await axios.delete(`/deleteHistory/${Id}`);
                successToast(res.data.message);
                window.location.reload();
            } catch (error) {
                errorToast("Failed to delete appointment. Please try again.");
            } finally {
                hideLoader();
            }
        }
    }
    $(document).ready( function () {
        $('#myTable').DataTable();
    } );
</script>
