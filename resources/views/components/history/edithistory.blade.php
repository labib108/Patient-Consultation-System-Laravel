<div class="container mt-5">
    <div class="row">
        <div class="col-md-12 border p-4 shadow bg-light">
            <div class="col-12">
                <h3 class="fw-normal text-secondary fs-4 text-uppercase mb-4">Client Intake Form</h3>
            </div>
            @if(session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif
            <form id="historyForm">
                <div class="row g-3">
                    <div class="col-md-6">
                        <label for="condition">Health Condition *</label>
                        <input type="text" name="condition" class="form-control" id="condition" placeholder="Enter your health condition *" value="{{ $history->condition }}" required>
                    </div>
                    <div class="col-md-6">
                        <label for="symptoms">Symptoms *</label>
                        <input type="text" name="symptoms" class="form-control" id="symptoms" placeholder="Enter your current symptoms *" value="{{ $history->symptoms }}" required>
                    </div>
                    <div class="col-md-6">
                        <label for="injuries">Injuries *</label>
                        <input type="text" name="injuries" class="form-control" id="injuries" placeholder="Enter any injuries and issues *" value="{{ $history->injuries }}" required>
                    </div>
                    <div class="col-md-6">
                        <label for="other">Others</label>
                        <input type="text" name="other" class="form-control" id="other" placeholder="Enter any other issues" value="{{ $history->other }}">
                    </div>
                    <div class="col-md-8">
                        <label for="date">Date *</label>
                        <input type="date" name="date" class="form-control" id="date" placeholder="Enter Date" value="{{ $history->date }}" required>
                    </div>
                    <div class="col-12 mt-5">
                        <button type="submit" class="btn btn-primary float-end" onclick="updateHistory()">Update History</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<script>
    async function updateHistory() {
        let Id = {{$history->id}};
        let formData = {
            condition: document.getElementById('condition').value,
            symptoms: document.getElementById('symptoms').value,
            injuries: document.getElementById('injuries').value,
            other: document.getElementById('other').value,
            date: document.getElementById('date').value
        };

        try {
            showLoader();
            let res = await axios.post(`/updateHistory/${Id}`, formData);
            successToast(res.data.message);
        } catch (error) {
            errorToast("Failed to update appointment. Please try again.");
        } finally {
            hideLoader();
        }
    }
</script>
