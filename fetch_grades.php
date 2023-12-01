<?php
function fetchGrades($conn, $gradeCondition, $studentId) {
    // SQL query to retrieve data
    $sql = "SELECT id, eee103, eee104, cse107, cse108, mat109, che139, che140, ssl107, soc105 FROM L1_S1 WHERE id = " . $studentId;
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Output data of each row
        while($row = $result->fetch_assoc()) {
            foreach($row as $courseCode => $grade) {
                if($courseCode != 'id' && in_array($grade, $gradeCondition)) {
                    echo "<tr><td>" . $row["id"]. "</td><td>" . $courseCode. "</td><td>" . $grade . "</td></tr>";
                }
            }
        }
    } else {
        echo "<tr><td colspan='3'>No results for ID: " . $studentId . "</td></tr>";
    }
}
?>
