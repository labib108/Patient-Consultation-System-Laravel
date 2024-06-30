<div class="container mt-5">
    <div class="row">
        <div class="col-md-12 border p-4 shadow bg-light">
            <div class="col-12">
                <h3 class="fw-normal text-secondary fs-4 text-uppercase mb-4">Client Information</h3>
            </div>
            <form action="">
                <div class="row g-3">
                    <div class="col-md-6">
                        <lebel> First Name *</lebel>
                        <input type="text" name="firstname" class="form-control" id="firstname" placeholder="First Name" required>
                    </div>
                    <div class="col-md-6">
                        <lebel> Middle Name </lebel>
                        <input type="text" name="middlename" class="form-control" id="middlename" placeholder="Middle Name">
                    </div>
                    <div class="col-md-6">
                        <lebel> Last Name *</lebel>
                        <input type="text" name="lastname" class="form-control" id="lastname" placeholder="Last Name" required>
                    </div>
                    <div class="col-md-6">
                        <lebel> Phone Number *</lebel>
                        <input type="tel" name="phone" class="form-control" id="phone" placeholder="Phone Number" required>
                    </div>
                    <div class="col-md-6">
                        <lebel> Address *</lebel>
                        <input type="text" name="address" class="form-control" id="address" placeholder="Address" required>
                    </div>
                    <div class="col-md-6">
                        <lebel> E-mail</lebel>
                        <input type="email" name="email" class="form-control" id="email" placeholder="Enter E-mail" >
                    </div>
                    <div class="col-6">
                        <lebel> Sex *</lebel>
                        <select class="form-select" name="sex" required>
                            <option selected disabled>Sex</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                            <option value="others">Others</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <lebel> Date of Birth</lebel>
                        <input type="date" class="form-control" id="dob" placeholder="Enter Date of Birth ">
                    </div>
                    <div class="col-md-6">
                        <lebel>Appointment Date *</lebel>
                        <input type="date" class="form-control" id="date" placeholder="Enter Date" required>
                    </div>
                    <div class="col-md-8">

                    </div>
                    <div class="col-md-8">

                    </div>
                    <div class="col-12 mt-5">
                        <button type="submit" onclick="onAppointment()" class="btn btn-primary float-end">Book Appointment</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 col-sm-12 col-lg-12">
            <div class="px-5 py-5">
                <div class="row justify-content-between ">
                    <div class="align-items-center col">
                        <h4>Client List</h4>
                    </div>
                </div>
                <hr>
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
                        <th>Action</th>
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
                            <td>
                                <button class="btn btn-warning" onclick="EditAppointment({{$appointment->id}})">Edit</button>
                                <button class="btn btn-danger" onclick="deleteAppointment({{$appointment->id}})" >Delete</button>
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
    function EditAppointment(appointmentId) {
        window.location.href = `/editAppointment/${appointmentId}`;
    }

    async function deleteAppointment(appointmentId) {
        // Show a confirmation dialog before deleting the appointment
        if (confirm("Are you sure you want to delete this appointment?")) {
            try {
                showLoader();
                let res = await axios.delete(`/deleteappointment/${appointmentId}`);
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
