<div class="container mt-5">
    <div class="row">
        <div class="col-md-12 border p-4 shadow bg-light">
            <div class="col-12">
                <h3 class="fw-normal text-secondary fs-4 text-uppercase mb-4">Client Intake form</h3>
            </div>
            <form action="">
                <div class="row g-3">
                    <div class="col-md-6">
                        <input type="email" name="email" class="form-control" id="email" placeholder="Enter Email">
                    </div>
                    <div class="col-md-6">
                        <input type="text" name="history" class="form-control" id="history_field" placeholder="Enter your health condition">
                    </div>
                    <div class="col-md-6">
                        <input type="text" name="symptoms" class="form-control" id="symptoms_field" placeholder="Enter your current symptoms">
                    </div>
                    <div class="col-md-6">
                        <input type="text" name="injuries " class="form-control" id="injuries_field" placeholder="Enter any injuries and issues ">
                    </div>

                    <div class="col-md-6">
                        <input type="text" name="others" class="form-control" id="others_history" placeholder="Enter any other issues">
                    </div>
                    <div class="col-12 mt-5">
                        <button type="submit" onclick="onHistory()" class="btn btn-primary float-end">Submit History</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<hr class="m-3">
<hr class="m-3">
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 col-sm-12 col-lg-12">
            <div class="card px-5 py-5">
                <div class="row justify-content-between ">
                    <div class="align-items-center col">
                        <h4>Client Health History</h4>
                    </div>
                    <div class="align-items-center col">
                        <a class="btn float-end m-0 bg-gradient-primary" href="{{url("/history")}}">Add History</a>
                    </div>
                </div>
                <hr class="bg-dark "/>
                <!--
                <table class="table" id="myTable">
                    <thead>
                    <tr class="bg-light">
                        <th>Client ID</th>
                        <th>Name</th>
                        <th>Health Condition</th>
                        <th>Current Symptoms</th>
                        <th>Injuries and Issues</th>
                        <th>Other Condition</th>
                    </tr>
                    </thead>
                    <tbody id="tableList">

                    </tbody>
                </table>
                -->
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
