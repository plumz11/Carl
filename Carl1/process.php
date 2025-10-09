<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Payroll Form<</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="card shadow-lg">
        <div class="card-header bg-primary text-white">
            <h4 class="mb-0">Employee Payroll</h4>
        </div>
        <div class="card-body">
            <form action="payslip.php" method="POST">
                <!-- Full Name -->
                <div class="mb-3">
                    <label for="fullname" class="form-label">Employee Name</label>
                    <input type="text" name="fullname" id="fullname" class="form-control" placeholder="Enter your full name" required> <br>
                </div>

                <!-- Email -->
                <div class="mb-3">
                    <label for="totalDays" class="form-label">Total Days of Work</label> <br>
                    <input type="number" name="totalDays" id="days" class="form-control" placeholder="Enter total days of work"> <br>
                </div>

                <!-- Address -->
                <div class="mb-3">
                    <label for="dailyRate" class="form-label">Daily Rate</label> <br>
                    <input type="number" name="dailyRate" id="dailyRate" class="form-control" placeholder="Enter daily rate"> <br>
                </div>

                <!-- Birthdate -->
                <div class="mb-3">
                    <label for="cash" class="form-label">Cash Advance</label> <br>
                    <input type="number" name="cash" id="cash"class="form-control" placeholder="Enter cash advance"> <br>
                </div>

                <!-- Submit Button -->
                <div class="text-end">
                    <button type="submit" class="btn btn-success">Register</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Bootstrap JS Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>