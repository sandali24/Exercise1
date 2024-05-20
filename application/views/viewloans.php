<!DOCTYPE html>
<html>
<head>
    <title>View Loans</title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2 class="mb-4">All Loan Records</h2>
        <table class="table table-bordered table-striped">
            <thead class="thead-dark">
                <tr>
                    <th>Loan Amount</th>
                    <th>Interest Rate</th>
                    <th>Loan Period</th>
                    <th>Start Date</th>
                    <th>End Date</th>
                    <th>Loan Status</th>
                    <th>Monthly Rental</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($loans as $loan): ?>
                <tr>
                    <td><?= $loan->loan_amount ?></td>
                    <td><?= $loan->interest ?></td>
                    <td><?= $loan->period ?></td>
                    <td><?= $loan->start_date ?></td>
                    <td><?= $loan->end_date ?></td>
                    <td><?= $loan->loan_status ?></td>
                    <td><?= $loan->montly_rental ?></td>
                    <td>
                        <a href="<?= base_url() ?>Crud/viewLoanDetails/<?= $loan->loan_code ?>" class="btn btn-info btn-sm">View Details</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

