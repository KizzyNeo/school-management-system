<!DOCTYPE html>
<html>

<head>
    <title>Registration</title>
    <link type="text/css" rel="stylesheet" href="style.css">
</head>

<body>
        <?php

        // servername => localhost
        // username => root
        // password => empty
        // database name => staff
        $conn = mysqli_connect("localhost", "root", "", "results");
        
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. " 
                . mysqli_connect_error());
        }
        
        // Taking all 5 values from the form data(input)
        $session = $_REQUEST['session'];
        $calendar = $_REQUEST['calendar'];
        $academic_session = $session . $calendar;
        $student_name = $_REQUEST['student-name'];
        $student_no = $_REQUEST['student-no'];
        $school_year = $_REQUEST['school-year'];
        $campus = $_REQUEST['campus'];
        $class = $_REQUEST['class'];
        $arm = $_REQUEST['arm'];
        $position1 = $_REQUEST['position1'];
        $position2 = $_REQUEST['position2'];
        if ($session === "first_term_") {
            $term = "First";
        } elseif ($session === "second_term_") {
            $term = "Second";
        } else {
            $term = "Third";
        }
        $teacher = $_REQUEST['teacher'];
        $subject1 = $_REQUEST['subject1'];
        $subject2 = $_REQUEST['subject2'];
        $subject3 = $_REQUEST['subject3'];
        $subject4 = $_REQUEST['subject4'];
        $subject5 = $_REQUEST['subject5'];
        $subject6 = $_REQUEST['subject6'];
        $subject7 = $_REQUEST['subject7'];
        $subject8 = $_REQUEST['subject8'];
        $subject9 = $_REQUEST['subject9'];
        $subject10 = $_REQUEST['subject10'];
        $subject11 = $_REQUEST['subject11'];
        $subject12 = $_REQUEST['subject12'];
        $test1 = $_REQUEST['test1'];
        $test2 = $_REQUEST['test2'];
        $test3 = $_REQUEST['test3'];
        $test4 = $_REQUEST['test4'];
        $test5 = $_REQUEST['test5'];
        $test6 = $_REQUEST['test6'];
        $test7 = $_REQUEST['test7'];
        $test8 = $_REQUEST['test8'];
        $test9 = $_REQUEST['test9'];
        $test10 = $_REQUEST['test10'];
        $test11 = $_REQUEST['test11'];
        $test12 = $_REQUEST['test12'];
        $exam1 = $_REQUEST['exam1'];
        $exam2 = $_REQUEST['exam2'];
        $exam3 = $_REQUEST['exam3'];
        $exam4 = $_REQUEST['exam4'];
        $exam5 = $_REQUEST['exam5'];
        $exam6 = $_REQUEST['exam6'];
        $exam7 = $_REQUEST['exam7'];
        $exam8 = $_REQUEST['exam8'];
        $exam9 = $_REQUEST['exam9'];
        $exam10 = $_REQUEST['exam10'];
        $exam11 = $_REQUEST['exam11'];
        $exam12 = $_REQUEST['exam12'];
        $total_days = $_REQUEST['total_days'];
        $attendance = $_REQUEST['total_attendance'];
        $absence = $_REQUEST['absence'];
        $remark = $_REQUEST['remark'];
        
//         $result = mysql_query("SELECT key FROM table1 WHERE something LIMIT 1");
// $num_rows = mysql_num_rows($result);

// if ($num_rows > 0) {
//   // do something
// }
// else {
//   // do something else
// }
        // Performing insert query execution
        // here our table name is college

        $val = "CREATE TABLE IF NOT EXISTS $academic_session ( 
            id int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT, 
            student_name varchar(100), 
            student_no int(5), 
            school_year varchar(30),
            campus varchar(100), 
            class varchar(30), 
            arm varchar(1), 
            position1 varchar(30), 
            position2 varchar(30), 
            term varchar(30), 
            teacher varchar(100), 
            date varchar(30), 
            subject1 varchar(30), 
            subject2 varchar(30), 
            subject3 varchar(30), 
            subject4 varchar(30), 
            subject5 varchar(30), 
        subject6 varchar(30), 
        subject7 varchar(30), 
        subject8 varchar(30), subject9 varchar(30), 
        subject10 varchar(30), 
        subject11 varchar(30), 
        subject12 varchar(30), 
        test1 int(30), 
        test2 int(30), 
        test3 int(30), 
        test4 int(30), test5 int(30), test6 int(30), test7 int(30), test8 int(30), 
        test9 int(30), test10 int(30), test11 int(30), test12 int(30), exam1 int(30), exam2 int(30), exam3 int(30), exam4 int(30), exam5 int(30), exam6 int(30), exam7 int(30), exam8 int(30), exam9 int(30), exam10 int(30), exam11 int(30), exam12 int(30), total_days int(4), attendance int(4), absence int(4), remark varchar(100)
            );";
    
            if (mysqli_query($conn, $val)) {
                $sql = "INSERT INTO $academic_session (student_name, student_no, school_year, campus, class, arm, position1, position2, term, teacher, date, subject1, subject2, subject3, subject4, subject5, 
                subject6, subject7, subject8, subject9, subject10, subject11, subject12, test1, test2, test3, test4, test5, test6, test7, test8, 
                test9, test10, test11, test12, exam1, exam2, exam3, exam4, exam5, exam6, exam7, exam8, exam9, exam10, exam11, exam12, total_days, attendance, absence, remark)  VALUES ('$student_name', '$student_no', '$school_year', '$campus', '$class', '$arm', '$position1', '$position2', '$term', '$teacher', '$subject1', '$subject2', '$subject3', '$subject4', '$subject5', 
                '$subject6', '$subject7', '$subject8', '$subject9', '$subject10', '$subject11', '$subject12', '$test1', '$test2', '$test3', '$test4', '$test5', '$test6', '$test7', '$test8', 
                '$test9', '$test10', '$test11', '$test12', '$exam1', '$exam2', '$exam3', '$exam4', '$exam5', '$exam6', '$exam7', '$exam8', '$exam9', '$exam10', '$exam11', '$exam12', '$total_days', '$attendance', '$absence', '$remark')";
                $sql_check = "SELECT * FROM $academic_session WHERE student_no = ?"; 
                $stmt = mysqli_prepare($conn, $sql_check); 
                mysqli_stmt_bind_param($stmt, "s", $student_no); 
                mysqli_stmt_execute($stmt); 
                $result1 = mysqli_stmt_get_result($stmt); 
                 
                // Step 4: Check if the record exists
                if (mysqli_num_rows($result1) > 0) {
                    echo "<h1 style='color: red; text-align: center; margin-top: 100px;'>". "Student result already exist for " . $academic_session . " academic session" . "</h1>";
                } else {
                if(mysqli_query($conn, $sql)){
                    echo "<h1 style='color: blue; text-align: center; margin-top: 100px;'>" . "Saved Successfully!" . "</h1>";
                    echo '<h1 style="color: black; text-align: center;">' . 'Will you like to save another result?' . '</h1>';
                    echo '<div style="margin-top: 200px; text-align: center;">';
                    echo '<div>';
                    echo '<button style="border: 2px solid transparent; padding: 20px; font-size: large; font-weight: 600; background-color: rgb(216, 127, 26);"><a href="index.php" style="text-decoration: none; color: white;">Yes</a></button>';
                    echo '</div>';
                    echo '<div>';
                    echo '<button style="border: 2px solid transparent; padding: 20px; font-size: large; font-weight: 600; background-color: rgb(216, 127, 26);"><a href="staffs.php" style="text-decoration: none; color: white;">>No</a></button>';
                    echo '</div>';
                    echo '</div>';
                } else{
                    echo '<h1>' . "Couldn't store result. Please try again." . '</h1>';
                }
            }
            } else {
                echo '<h1 style="margin-top: 100px; margin-bottom: 100px; text-align: center;">' . "Please use a correct format for the session field." . '</h1>';
            }
        
        // Close connection
        mysqli_close($conn);
        ?>
        
</body>

</html>