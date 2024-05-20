<!DOCTYPE html>
<html>
<head>
    <title>Loan Details</title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2 class="mb-4">Loan Details</h2>

        <?php if ($loan) { ?>
            <table class="table table-bordered">
                <tr>
                    <th>Loan Code</th>
                    <td><?php echo $loan->loan_code; ?></td>
                </tr>
                <tr>
                    <th>Loan Amount</th>
                    <td><?php echo $loan->loan_amount; ?></td>
                </tr>
                <tr>
                    <th>Interest Rate</th>
                    <td><?php echo $loan->interest; ?></td>
                </tr>
                <tr>
                    <th>Loan Period</th>
                    <td><?php echo $loan->period; ?></td>
                </tr>
                <tr>
                    <th>Start Date</th>
                    <td><?php echo $loan->start_date; ?></td>
                </tr>
                <tr>
                    <th>End Date</th>
                    <td><?php echo $loan->end_date; ?></td>
                </tr>
                <tr>
                    <th>Monthly Rental</th>
                    <td><?php echo $loan->montly_rental; ?></td>
                </tr>
                <tr>
                    <th>Loan Status</th>
                    <td><?php echo $loan->loan_status; ?></td>
                </tr>
            </table>

            <h3 class="mt-5">Loan Schedule</h3>
            <table class="table table-bordered table-striped">
                <thead class="thead-dark">
                    <tr>
                        <th>Due Date</th>
                        <th>Capital Amount</th>
                        <th>Interest Amount</th>
                        <th>Total Installment</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($schedule as $sch): ?>
                        <tr>
                            <td><?= $sch->deu_date ?></td>
                            <td><?= $sch->cap_amount ?></td>
                            <td><?= $sch->int_amount ?></td>
                            <td><?= $sch->tot_instalment ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        <?php } else { ?>
            <div class="alert alert-warning" role="alert">
                No loan details found.
            </div>
        <?php } ?>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>



