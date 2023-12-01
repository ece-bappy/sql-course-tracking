<!DOCTYPE html>
<html>
<head>
    <title>Student Grades</title>
    <style>
        .print-button {
            display: block;
            margin-top: 20px;
        }

        @media print {
            .print-button {
                display: none;
            }
        }

        .first {
  background-color: #19dcea;
  margin-top: 10px;
  margin-bottom: 10px;
  border-radius:4px;
}

.second {
  background-color:  #d9d7ff;
  margin-top: 10px;
  margin-bottom: 10px;
  border-radius:4px;
}

.third {
  background-color: rgb(248, 149, 149);
  margin-top: 10px;
  margin-bottom: 10px;
  border-radius:4px;
}

.third td,.second td,.first td,.third th,.second th,.first th{

    padding:5px 5px;
}


    </style>


    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section class="all">
        <div class="content">
    <center>
    <?php
    // Establish database connection
    $conn = new mysqli("localhost", "root", "", "int_prog");

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Include the fetchGrades function
    include 'fetch_grades.php';

    // Get student ID from GET request
    $studentId = isset($_GET['studentId']) ? $conn->real_escape_string($_GET['studentId']) : null;

    if ($studentId) {
        echo "<h4>Student Course Grades for ID: " . $studentId . "</h4>";

        // Display table for grades excluding 'F'

        echo "<h3>Passsed Coursed</h3>";
        echo "<table border='1' class='first' cellspacing='0' border='1'><tr><th>ID</th><th>Course Code</th><th>Grade</th></tr>";
        fetchGrades($conn, ['A+', 'A', 'A-', 'B+', 'B', 'B-', 'C+', 'C', 'D+', 'D'], $studentId);
        echo "</table>";

        // Display table for 'C' or 'D' grades
        echo "<h3>Course Can Be Given Improve</h3>";
        echo "<table cellspacing='0' class='second' border='1'><tr><th>ID</th><th>Course Code</th><th>Grade</th></tr>";
        fetchGrades($conn, ['C', 'D'], $studentId);
        echo "</table>";

        // Display table for 'F' grades
        echo "<h3>Course Has to be Retaken</h3>";
        echo "<table cellspacing='0' class='third' border='1'><tr><th>ID</th><th>Course Code</th><th>Grade</th></tr>";
        fetchGrades($conn, ['F'], $studentId);
        echo "</table>";
    } else {
        echo "<p>Please enter a Student ID to view grades.</p>";
    }

    // Close the database connection
    $conn->close();
    ?>
      <div class="print-button ">
        <button class="btn" onclick="printPage()">Print This Page</button>
    </div>
    </center>
    
    </section>
    <script>
        function printPage() {
            window.print();
        }
    </script>
</body>
</html>
