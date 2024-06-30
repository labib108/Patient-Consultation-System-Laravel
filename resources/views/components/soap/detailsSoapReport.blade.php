<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="mb-4 mx-3">
                <h1>Detail Soap notes Reports</h1>
            </div>
            <div class="border p-4 bg-gradient-light text-center">
                <lebel>
                    Enter Client ID
                </lebel>
                <input type="text" name="appointment_id" class="form-control" id="appointment_id" placeholder="Enter Client Application ID" required>
                <div class="d-flex align-items-center m-2 p-2">
                    <button class="btn btn-outline-primary" type="submit" id="submitBtn">
                        <i class="bi bi-plus-circle-fill"></i>
                        Submit
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div id="displayDetailData"></div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function(){
        $('#submitBtn').click(function(){
            var appointment_id = $('#appointment_id').val();
            // Send AJAX request to server
            $.ajax({
                url: '/detailSoapReportData', // Replace this with your server endpoint URL
                method: 'GET',
                data: { appointment_id: appointment_id },
                success: function(response){
                    // Display the fetched data
                    $('#displayDetailData').html(response);
                },
                error: function(xhr, status, error){
                    console.error(xhr.responseText);
                }
            });
        });
    });
</script>
