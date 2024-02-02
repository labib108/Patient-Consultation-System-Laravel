<div class="container-fluid">
    <div class="row">
        <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12 animated fadeIn p-2">
            <div class="card card-plain h-100 dashboard-hover bg-gradient-light">
                <div class="p-3">
                    <div class="row">
                        <div class="col-9 col-lg-8 col-md-8 col-sm-9">
                            <div>
                                <h5 class="mb-0 text-capitalize font-weight-bold">
                                    <span id="appointment"></span>
                                </h5>
                                <p class="mb-0 text-sm">Appointment</p>
                            </div>
                        </div>
                        <div class="col-3 col-lg-4 col-md-4 col-sm-3 text-end">
                            <div class="icon icon-shape bg-dark shadow float-end border-radius-md">
                                <img class="w-100 " src="{{asset('images/appointment.png')}}"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12 animated fadeIn p-2">
            <div class="card card-plain h-100 bg-gradient-light dashboard-hover">
                <div class="p-3">
                    <div class="row">
                        <div class="col-9 col-lg-8 col-md-8 col-sm-9">
                            <div>
                                <h5 class="mb-0 text-capitalize font-weight-bold">
                                    <span id="patient"></span>
                                </h5>
                                <p class="mb-0 text-sm">Client List</p>
                            </div>
                        </div>
                        <div class="col-3 col-lg-4 col-md-4 col-sm-3 text-end">
                            <div class="icon icon-shape bg-dark shadow float-end border-radius-md">
                                <img class="w-100 " src="{{asset('images/patient.png')}}"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12 animated fadeIn p-2">
            <div class="card card-plain h-100 bg-gradient-light dashboard-hover">
                <div class="p-3">
                    <div class="row">
                        <div class="col-9 col-lg-8 col-md-8 col-sm-9">
                            <div>
                                <h5 class="mb-0 text-capitalize font-weight-bold">
                                    <span id="report"></span>
                                </h5>
                                <p class="mb-0 text-sm">Report</p>
                            </div>
                        </div>
                        <div class="col-3 col-lg-4 col-md-4 col-sm-3 text-end">
                            <div class="icon icon-shape bg-dark shadow float-end border-radius-md">
                                <img class="w-100 " src="{{asset('images/report.png')}}"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12 animated fadeIn p-2 }">
            <div class="card card-plain h-100 bg-gradient-light dashboard-hover ">
                <div class="p-3 ">
                    <div class="row ">
                        <div class="col-9 col-lg-8 col-md-8 col-sm-9">
                            <div>
                                <h5 class="mb-0 text-capitalize font-weight-bold">
                                    <span id="soap"></span>
                                </h5>
                                <p class="mb-0 text-sm">SOAP notes</p>
                            </div>
                        </div>
                        <div class="col-3 col-lg-4 col-md-4 col-sm-3 text-end">
                            <div class="icon icon-shape bg-dark shadow float-end border-radius-md">
                                <img class="w-100 " src="{{asset('images/report.png')}}"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script>
    getList();
    async function getList() {
        showLoader();
        let res=await axios.get("/dashboard");

        document.getElementById('appointment')
        document.getElementById('patient')
        document.getElementById('report')
        document.getElementById('soap')

        hideLoader();
    }
</script>
