<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submitted Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="card shadow p-4">
        <h3 class="mb-4">Submitted Information</h3>
        <div class="card-body">
            <form action="payslip.php" method="POST">
                <div class="mb-3">
                    <label class="form-label">Employee Name</label>
                    <input type="text" name="employeename" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Total Days Worked</label>
                    <input type="number" name="totaldaysofwork" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Daily Rate (₱)</label>
                    <input type="number" name="dailyrate" step="0.01" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Cash Advance (₱)</label>
                    <input type="number" name="cashadvance" step="0.01" class="form-control" value="0">
                <div class="text-center mt-3">
                  <button type="submit" class="btn" style="background-color: #007bff; color: white;">Generate Payslip</button>

                </div>

        <p><strong>Full Name:</strong> asdadd</p><p><strong>Age:</strong> 11</p><p><strong>Average Grade:</strong> 96</p><p><strong>Course:</strong> ACT</p><p><strong>Gender:</strong> Male</p><hr><p><strong>Tuition Fee:</strong> ₱15,000.00</p><p class='text-success'><strong>Grade Discount (20%):</strong> -₱3,000.00</p><p class='text-primary'><strong>Total Discounts:</strong> -₱3,000.00</p><h5><strong>Final Tuition Fee:</strong> ₱12,000.00</h5>        <a href="registration.php" class="btn btn-secondary mt-3">Go Back</a>
        
    </div>
</div>

</body>
</html>