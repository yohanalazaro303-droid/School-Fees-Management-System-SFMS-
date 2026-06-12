<?php
session_start();

if(!isset($_SESSION['username'])){
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
        <head>
          <title>Dashboard</title>
          <link rel="stylesheet" href="css/dashboard.css">
        </head>
        <body>
            <h1>Welcome <?php echo $_SESSION['username']; ?></h1>
 
            <h3>Role: <?php echo $_SESSION['role']; ?></h3>

            <hr>

            <h2>School Fees Management System</h2>

                <ul>
                    <li><a href="student/add_student.php">Register Student</a></li>
                    <li><a href="student/view_students.php">View Students</a></li>
                    <li><a href="payment/add_payment.php">Record Payment</a></li>
                    <li><a href="payment/view_payment.php">View Payments</a></li>
                    <li><a href="report/report.php">Fee Balance Report</a></li>
                    <li><a href="css/list.php? id=<?php echo$row['payment_id']; ?>" > print receipt </a></li>
                    <li><a href="logout.php">Logout</a></li>
                </ul>

</body>
</html>