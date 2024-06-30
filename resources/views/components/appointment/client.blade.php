
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 col-sm-12 col-lg-12">
            <div class="card px-5 py-5">
                <div class="row justify-content-between ">
                    <div class="align-items-center col">
                        <h4>Client List</h4>
                    </div>
                </div>
                <hr class="bg-dark "/>
                <table class="table table-striped" id="myTable">
                    <thead>
                    <tr class="bg-light">
                        <th>Client ID</th>
                        <th>First name</th>
                        <th>Middle Name</th>
                        <th>Last name</th>
                        <th>Phone</th>
                        <th>Address</th>
                        <th>Email</th>
                        <th>Sex</th>
                        <th>date of birth</th>
                        <th>Appointment Date</th>
                    </tr>
                    </thead>
                    <tbody id="tableList">
                    @foreach($appointment as $appointment)
                        <tr>
                            <td>{{$appointment->id}}</td>
                            <td>{{$appointment->firstname}}</td>
                            <td>{{$appointment->middlename}}</td>
                            <td>{{$appointment->lastname}}</td>
                            <td>{{$appointment->phone}}</td>
                            <td>{{$appointment->address}}</td>
                            <td>{{$appointment->email}}</td>
                            <td>{{$appointment->gender}}</td>
                            <td>{{$appointment->dob}}</td>
                            <td>{{$appointment->date}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<script>
    async function onAppointment() {
        let firstname = document.getElementById('firstname').value;
        let middlename = document.getElementById('middlename').value;
        let lastname = document.getElementById('lastname').value;
        let phone = document.getElementById('phone').value;
        let address = document.getElementById('address').value;
        let email = document.getElementById('email').value;
        let sexSelect = document.querySelector('.form-select[name="sex"]');
        let sex = sexSelect.value;
        let dob = document.getElementById('dob').value;
        let date = document.getElementById('date').value;

        if (firstname.length === 0) {
            errorToast("First Name required")
        } else if (lastname.length === 0) {
            errorToast("Last Name required")
        } else if (email.length === 0) {
            errorToast("Email is required")
        } else if (date.length === 0) {
            errorToast("Date is required")
        } else {
            showLoader();
            let res = await axios.post("newappointment",{
                firstname:firstname,
                middlename:middlename,
                lastname:lastname,
                phone:phone,
                address:address,
                email:email,
                sex:sex,
                dob:dob,
                date:date,
            })
            hideLoader();
        }
    }

    $(document).ready( function () {
        $('#myTable').DataTable();
    } );
</script>
