<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "results";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Download Results</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body style="background-image: url(./images/logo.jpg); background-color: rgba(255, 255, 255, 1.0); background-blend-mode: lighten; background-repeat: no-repeat; background-attachment: fixed; background-size: cover;">
    
    <?php
    $student_info = $_REQUEST['student-info'];
    $term = $_REQUEST['term'];
    $session = $_REQUEST['session'];
    $academic_session = $term . $session;

    $sql_check = "SELECT * FROM $academic_session WHERE student_no = ?"; 
$stmt = mysqli_prepare($conn, $sql_check); 
mysqli_stmt_bind_param($stmt, "s", $student_info); 
mysqli_stmt_execute($stmt); 
$result1 = mysqli_stmt_get_result($stmt); 
 
// Step 4: Check if the record exists
if (mysqli_num_rows($result1) > 0) { 
            $sql = "SELECT student_name, student_no, school_year, campus, class, arm, position1, position2, term, teacher, subject1, subject2, subject3, subject4, subject5, 
    subject6, subject7, subject8, subject9, subject10, subject11, subject12, test1, test2, test3, test4, test5, test6, test7, test8, 
    test9, test10, test11, test12, exam1, exam2, exam3, exam4, exam5, exam6, exam7, exam8, exam9, exam10, exam11, exam12, total_days, attendance, absence, remark FROM $academic_session WHERE student_no = $student_info";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();

    if (mysqli_query($conn, $sql)) {
        echo '<header style="display: flexbox;">';
        echo '<div style="display: flex;">';
        echo '<img src="./images/logo.jpg" alt="school logo" width="100px" height="100px" style="margin-top: 50px;">';
        echo '<h1 style="font-size: xx-large; color: rgb(20, 8, 53); margin-top: 50px; margin-left: 5px;">ABC International Secondary School</h1>';
        echo '<h2 style="background-color: rgb(20, 8, 53); color: white; padding: 10px; margin-left: 100px;">Report Card</h2>';
        echo '</div>';
        echo '</header>';
        echo '<div>';
        echo '<div style="display: flex; margin-top: 50px;">';
        echo '<h3>Name of Student: ' . $row["student_name"] . '</h3>';
        echo '<h3 style="margin-left: 50px;">Academic Session: ' . $row["school_year"] . '</h3>';
        echo '<h3 style="margin-left: 50px;">Term: ' . $row["term"] . '</h3>';
        echo '<h3 style="margin-left: 50px;">Campus: ' . $row["campus"] . '</h3>';
        echo '</div>';
        echo '<div style="display: flex; margin-top: 0px;">';
        echo '<h3>Class: ' . $row["class"] . '</h3>';
        echo '<h3 style="margin-left: 50px;">Arm: ' . $row["arm"] . '</h3>';
        echo '<h3 style="margin-left: 50px;">Student Number: ' . $row["student_no"] . '</h3>';
        echo '<h3 style="margin-left: 50px;">Teacher: ' . $row["teacher"] . '</h3>';
        echo '</div>';
        echo '<div style="display: flex; margin-top: 0px;">';
        echo '<h3>Position(Class): ' . $row["position1"] . '</h3>';
        echo '<h3 style="margin-left: 50px;">Position(Arm): ' . $row["position2"] . '</h3>';
        echo '<h3 style="margin-left: 50px;">Date Issued: ' . '___________________' . '</h3>';
        echo '</div>';
        echo '</div>';
        echo '<div style="display: flex; margin-top: 20px;">';
        echo '<div style="float: left;">';
        echo '<table style="border: 2px solid black; float: left; text-align: center;">';
        echo '<tr style="background-color: rgb(20, 8, 53); color: white; margin-top: 10px;">';
        echo '<th>Subjects</th>';
        echo '<th>Test</th>';
        echo '<th>Exam</th>';
        echo '<th>Total</th>';
        echo '<th>Grade</th>';
        echo '</tr>';
            if ($row["test1"] + $row["exam1"] > 84) {
                $grade1 = "A";
            } elseif ($row["test1"] + $row["exam1"] > 59){
                $grade1 = "C";
            } elseif ($row["test1"] + $row["exam1"] > 49){
                $grade1 = "P";} else {
                    $grade1 = "F";
            }
            if ($row["test2"] + $row["exam2"] > 84) {
                    $grade2 = "A";
            } elseif ($row["test2"] + $row["exam2"] > 59){
                    $grade2 = "C";
                } elseif ($row["test2"] + $row["exam2"] > 49){
                    $grade2 = "P";} else {
                        $grade2 = "F";
                    }
                    if ($row["test3"] + $row["exam3"] > 84) {
                        $grade3 = "A";
                    } elseif ($row["test3"] + $row["exam3"] > 59){
                        $grade3 = "C";
                    } elseif ($row["test3"] + $row["exam3"] > 49){
                        $grade3 = "P";} else {
                            $grade3 = "F";
                        }
                        if ($row["test4"] + $row["exam4"] > 84) {
                            $grade4 = "A";
                        } elseif ($row["test4"] + $row["exam4"] > 59){
                            $grade4 = "C";
                        } elseif ($row["test4"] + $row["exam4"] > 49){
                            $grade4 = "P";} else {
                                $grade4 = "F";
                        }
                        if ($row["test5"] + $row["exam5"] > 84) {
                            $grade5 = "A";
                        } elseif ($row["test5"] + $row["exam5"] > 59){
                            $grade5 = "C";
                        } elseif ($row["test5"] + $row["exam5"] > 49){
                            $grade5 = "P";
                        } else {
                                $grade5 = "F";
                        }
                                if ($row["test6"] + $row["exam6"] > 84) {
                                    $grade6 = "A";
                                } elseif ($row["test6"] + $row["exam6"] > 59){
                                    $grade6 = "C";
                                } elseif ($row["test6"] + $row["exam6"] > 49){
                                    $grade6 = "P";} else {
                                        $grade6 = "F";
                                    }
                                    if ($row["test7"] + $row["exam7"] > 84) {
                                        $grade7 = "A";
                                    } elseif ($row["test7"] + $row["exam7"] > 59){
                                        $grade7 = "C";
                                    } elseif ($row["test7"] + $row["exam7"] > 49){
                                        $grade7 = "P";} else {
                                            $grade7 = "F";
                                        }
                                        if ($row["test8"] + $row["exam8"] > 84) {
                                            $grade8 = "A";
                                        } elseif ($row["test8"] + $row["exam8"] > 59){
                                            $grade8 = "C";
                                        } elseif ($row["test8"] + $row["exam8"] > 49){
                                            $grade8 = "P";} else {
                                                $grade8 = "F";
                                            }
                                            if ($row["test9"] + $row["exam9"] > 84) {
                                                $grade9 = "A";
                                            } elseif ($row["test9"] + $row["exam9"] > 59){
                                                $grade9 = "C";
                                            } elseif ($row["test9"] + $row["exam9"] > 49){
                                                $grade9 = "P";} else {
                                                    $grade9 = "F";
                                                }
                                                if ($row["test10"] + $row["exam10"] > 84) {
                                                    $grade10 = "A";
                                                } elseif ($row["test10"] + $row["exam10"] > 59){
                                                    $grade10 = "C";
                                                } elseif ($row["test10"] + $row["exam10"] > 49){
                                                    $grade10 = "P";} else {
                                                        $grade10 = "F";
                                                    }
                                                    if ($row["test11"] + $row["exam11"] > 84) {
                                                        $grade11 = "A";
                                                    } elseif ($row["test11"] + $row["exam11"] > 59){
                                                        $grade11 = "C";
                                                    } elseif ($row["test11"] + $row["exam11"] > 49){
                                                        $grade11 = "P";} else {
                                                            $grade11 = "F";
                                                        }
                                                        if ($row["test12"] + $row["exam12"] > 84) {
                                                            $grade12 = "A";
                                                        } elseif ($row["test12"] + $row["exam12"] > 59){
                                                            $grade12 = "C";
                                                        } elseif ($row["test12"] + $row["exam12"] > 49){
                                                            $grade12 = "P";} else {
                                                                $grade12 = "F";
                                                            }
            

                        echo "<tr style='border: 2px solid white;'><td>" . $row["subject1"]. "</td><td>" . $row["test1"]. "</td><td>" . $row["exam1"]. "</td><td>" . $row["test1"] + $row["exam1"] . "</td><td>" . $grade1 . "</td></tr>";
                        echo "<tr style='border: 2px solid white;'><td>" . $row["subject2"]. "</td><td>" . $row["test2"]. "</td><td>" . $row["exam2"]. "</td><td>" . $row["test2"] + $row["exam2"] . "</td><td>" . $grade2 . "</td></tr>";
                        echo "<tr style='border: 2px solid white;'><td>" . $row["subject3"]. "</td><td>" . $row["test3"]. "</td><td>" . $row["exam3"]. "</td><td>" . $row["test3"] + $row["exam3"] . "</td><td>" . $grade3 . "</td></tr>";
                        echo "<tr style='border: 2px solid white;'><td>" . $row["subject4"]. "</td><td>" . $row["test4"]. "</td><td>" . $row["exam4"]. "</td><td>" . $row["test4"] + $row["exam4"] . "</td><td>" . $grade4 . "</td></tr>";
                        echo "<tr style='border: 2px solid white;'><td>" . $row["subject5"]. "</td><td>" . $row["test5"]. "</td><td>" . $row["exam5"]. "</td><td>" . $row["test5"] + $row["exam5"] . "</td><td>" . $grade5 . "</td></tr>";
                        echo "<tr style='border: 2px solid white;'><td>" . $row["subject6"]. "</td><td>" . $row["test6"]. "</td><td>" . $row["exam6"]. "</td><td>" . $row["test6"] + $row["exam6"] . "</td><td>" . $grade6 . "</td></tr>";
                        echo "<tr style='border: 2px solid white;'><td>" . $row["subject7"]. "</td><td>" . $row["test7"]. "</td><td>" . $row["exam7"]. "</td><td>" . $row["test7"] + $row["exam7"] . "</td><td>" . $grade7 . "</td></tr>";
                        echo "<tr style='border: 2px solid white;'><td>" . $row["subject8"]. "</td><td>" . $row["test8"]. "</td><td>" . $row["exam8"]. "</td><td>" . $row["test8"] + $row["exam8"] . "</td><td>" . $grade8 . "</td></tr>";
                        echo "<tr style='border: 2px solid white;'><td>" . $row["subject9"]. "</td><td>" . $row["test9"]. "</td><td>" . $row["exam9"]. "</td><td>" . $row["test9"] + $row["exam9"] . "</td><td>" . $grade9 . "</td></tr>";
                        echo "<tr style='border: 2px solid white;'><td>" . $row["subject10"]. "</td><td>" . $row["test10"]. "</td><td>" . $row["exam10"]. "</td><td>" . $row["test10"] + $row["exam10"] . "</td><td>" . $grade10 . "</td></tr>";
                        echo "<tr style='border: 2px solid white;'><td>" . $row["subject11"]. "</td><td>" . $row["test11"]. "</td><td>" . $row["exam11"]. "</td><td>" . $row["test11"] + $row["exam11"] . "</td><td>" . $grade11 . "</td></tr>";
                        echo "<tr style='border: 2px solid white;'><td>" . $row["subject12"]. "</td><td>" . $row["test12"]. "</td><td>" . $row["exam12"]. "</td><td>" . $row["test12"] + $row["exam12"] . "</td><td>" . $grade12 . "</td></tr>";

    echo '</div>';
    echo '<div style="margin-left: 20px; float: right;">';
        echo '<table style="border: 2px solid black; float: right; margin-left: 100px; text-align: center;">';
            echo '<tr>';
                echo '<th style="background-color: rgb(20, 8, 53); color: white;" colspan="2">Grading System</th>';
            echo '</tr>';
            echo '<tr><td>A</td><td>85 - 100</td></tr>';
            echo '<tr><td>C</td><td>60 - 85</td></tr>';
            echo '<tr><td>P</td><td>40 - 60</td></tr>';
            echo '<tr><td>F</td><td>0 - 40</td></tr>';
        echo '</table>';
    echo '</div>';
    echo '</div>';
    echo '<div  style="display: flex;">';
    echo '<div style="float: left;">';
        echo '<table style="margin-top: 20px;">';
            echo '<tr style="background-color: rgb(20, 8, 53); color: white;">';
                echo '<th>Attendance</th>';
                echo '<th>Figure</th>';
            echo '</tr>';

                        echo "<tr><td>" . "Total Days of School: " . "</td><td>" . $row["total_days"]. "</td></tr>";
                        echo "<tr><td>" . "Total Days Present: " . "</td><td>" . $row["attendance"]. "</td></tr>";
                        echo "<tr><td>" . "Total Days Absent: " . "</td><td>" . $row["absence"]. "</td></tr>";

        echo '</table>';
    echo '</div>';
    echo '<div style="float: left; margin-left: 100px;">';
        echo '<h2 style="background-color: rgb(20, 8, 53); padding: 3px; color: white;">Teacher\'s Remark</h2>';
        echo '<h3 style="padding: 0px; margin-bottom: 50px;">' . $row['remark'] . '</h3>';
    echo '</div>';
    echo '<div>';
    echo '<h2 style="color: white; padding: 3px; background-color: rgb(20, 8, 53); margin-left: 100px;">' . "Principal's Signature" . '</h2>';
    echo '<h2 style="margin-left: 100px;">' . '___________________' . '</h2>';
    echo '</div>';
    } else {
        echo '<h1 style="margin-top: 100px; margin-bottom: 100px; text-align: center;">' . "Student result doesn't exist for the term/session." . '</h1>';
    }
} else { 
    echo '<h1 style="margin-top: 100px; margin-bottom: 100px; text-align: center;">' . "Student result doesn't exist for the term/session." . '</h1>';
} 


    $conn->close();
    ?>

</body>
</html>