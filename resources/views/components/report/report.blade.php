<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="border p-4 bg-gradient-dark text-center">
                <h3 class="text-white">Soap Report</h3>
            </div>
        </div>
    </div>
</div>
<hr>
<hr>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="border p-4 bg-gradient-light text-center">
                <label>
                    Enter Client ID
                </label>
                <input type="text" name="appointment_id" class="form-control" id="appointment_id" placeholder="Enter Client Application ID">
            </div>
            <div class="row justify-content-center mt-5">
                <div class="col-md-8">
                    <div class="mb-4">
                        <div class="d-flex align-items-center m-2 p-2">
                            <button type="button" id="submitBtn" class="btn btn-outline-primary">
                                <i class="bi bi-plus-circle-fill"></i>
                                Submit
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="displayData"></div>

<script>
    $(document).ready(function(){
        $('#submitBtn').click(function(){
            var appointment_id = $('#appointment_id').val();

            // Send AJAX request to server
            $.ajax({
                url: '/fetch-data', // Replace this with your server endpoint URL
                method: 'GET',
                data: { appointment_id: appointment_id },
                success: function(response){
                    // Display the fetched data
                    $('#displayData').html(response);
                },
                error: function(xhr, status, error){
                    console.error(xhr.responseText);
                }
            });
        });
    });
</script>
