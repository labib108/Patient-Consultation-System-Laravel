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
                                <input type="text" name="firstname" class="form-control" id="firstname" placeholder="First Name" required value="{{$appointment->firstname}}">
                            </div>
                            <div class="col-md-6">
                                <lebel> Middle Name </lebel>
                                <input type="text" name="middlename" class="form-control" id="middlename" placeholder="Middle Name" value="{{$appointment->middlename}}">
                            </div>
                            <div class="col-md-6">
                                <lebel> Last Name *</lebel>
                                <input type="text" name="lastname" class="form-control" id="lastname" placeholder="Last Name" required value="{{$appointment->lastname}}">
                            </div>
                            <div class="col-md-6">
                                <lebel> Phone Number *</lebel>
                                <input type="tel" name="phone" class="form-control" id="phone" placeholder="Phone Number" required value="{{$appointment->phone}}">
                            </div>
                            <div class="col-md-6">
                                <lebel> Address *</lebel>
                                <input type="text" name="address" class="form-control" id="address" placeholder="Address"value="{{$appointment->address}}" required>
                            </div>
                            <div class="col-md-6">
                                <lebel> E-mail</lebel>
                                <input type="email" name="email" class="form-control" id="email" placeholder="Enter E-mail"value="{{$appointment->email}}" >
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
                        <button type="submit" onclick="onUpdateAppointment()" class="btn btn-primary float-end">Update Appointment</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    async function onUpdateAppointment() {
        let Id = {{$appointment->id}};
        let formData = {
            firstname: document.getElementById('firstname').value,
            middlename: document.getElementById('middlename').value,
            lastname: document.getElementById('lastname').value,
            phone: document.getElementById('phone').value,
            address: document.getElementById('address').value,
            email: document.getElementById('email').value,
            sex: document.querySelector('.form-select[name="sex"]').value,
            dob: document.getElementById('dob').value,
            date: document.getElementById('date').value
        };

        try {
            showLoader();
            let res = await axios.post(`/updateappointment/${Id}`, formData);
            successToast(res.data.message);
        } catch (error) {
            errorToast("Failed to update appointment. Please try again.");
        } finally {
            hideLoader();
        }
    }
</script>
