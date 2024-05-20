<!DOCTYPE html>
<html>
<head>
    <title>Registration Form</title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2 class="mb-4">Registration Form</h2>
        <form method="post" action="<?= base_url() ?>Crud/savedata">
            <div class="form-group row">
                <label for="loan_amount" class="col-sm-4 col-form-label">Enter Loan Amount:</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="loan_amount" name="loan_amount" />
                </div>
            </div>
            <div class="form-group row">
                <label for="interest" class="col-sm-4 col-form-label">Enter Interest Rate:</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="interest" name="interest" />
                </div>
            </div>
            <div class="form-group row">
                <label for="period" class="col-sm-4 col-form-label">Enter Loan Period:</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="period" name="period" />
                </div>
            </div>
            <div class="form-group row">
                <label for="start_date" class="col-sm-4 col-form-label">Select Loan Start Date:</label>
                <div class="col-sm-8">
                    <input type="date" class="form-control" id="start_date" name="start_date" />
                </div>
            </div>
            <div class="form-group row">
                <label for="loan_status" class="col-sm-4 col-form-label">Select Loan Status:</label>
                <div class="col-sm-8">
                    <select class="form-control" id="loan_status" name="loan_status">
                        <option value="" selected>--Select loan status--</option>
                        <option value="CONFIRMED">CONFIRMED</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-12 text-center">
                    <input type="submit" name="save" value="Save Data" class="btn btn-primary" />
                </div>
            </div>
        </form>

        <div class="form-group row">
                <div class="col-sm-12 text-center">
                <form method="get" action="<?= base_url() ?>Crud/viewloans">
        <button type="submit">View All Loans</button>
    </form>
                </div>
            </div>




       
    </div>
    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>


