<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Result</title>
</head>
<body>
    <form method="post" action="submission2.php">
        <div>
            <label for="term">Session:</label>
            <select name="term" style="margin-top: 5px; outline: none; padding: 5px;" type="text">
                <option value="first_term_">First Term</option>
                <option value="second_term_">Second Term</option>
                <option value="third_term_">Third Term</option>
            </select>
            <input type="text" style="margin-top: 5px; outline: none; padding: 5px;" name="session" maxlength="4" style="margin-left: 30px;" placeholder="Session - Eg. 2324" required>
        </div>
        <div>
            <label for="student_no">Student Number:</label>
            <input name="student_no" style="margin-top: 5px; outline: none; padding: 5px;" type="number">
        </div>
        <div>
            <label for="detail">Detail to correct:</label>
            <select name="detail" id="detail" style="margin-top: 5px; outline: none; padding: 5px;" type="text">
                <option value="student_name">Student Name</option>
                <option value="school_year">School Year</option>
                <option value="campus">Campus</option>
                <option value="class">Class</option>
                <option value="arm">Arm</option>
                <option value="position1">Class-Position</option>
                <option value="position2">Position(Arm)</option>
                <option value="teacher">Teacher</option>
                <option value="subject1">Subject1</option>
                <option value="subject2">Subject2</option>
                <option value="subject3">Subject3</option>
                <option value="subject4">Subject4</option>
                <option value="subject5">Subject5</option>
                <option value="subject6">Subject6</option>
                <option value="subject7">Subject7</option>
                <option value="subject8">Subject8</option>
                <option value="subject9">Subject9</option>
                <option value="subject10">Subject10</option>
                <option value="subject11">Subject11</option>
                <option value="subject12">Subject12</option>
                <option value="test1">Test1</option>
                <option value="test2">Test2</option>
                <option value="test3">Test3</option>
                <option value="test4">Test4</option>
                <option value="test5">Test5</option>
                <option value="test6">Test6</option>
                <option value="test7">Test7</option>
                <option value="test8">Test8</option>
                <option value="test9">Test9</option>
                <option value="test10">Test10</option>
                <option value="test11">Test11</option>
                <option value="test12">Test12</option>
                <option value="exam1">Exam1</option>
                <option value="exam2">Exam2</option>
                <option value="exam3">Exam3</option>
                <option value="exam4">Exam4</option>
                <option value="exam5">Exam5</option>
                <option value="exam6">Exam6</option>
                <option value="exam7">Exam7</option>
                <option value="exam8">Exam8</option>
                <option value="exam9">Exam9</option>
                <option value="exam10">Exam10</option>
                <option value="exam11">Exam11</option>
                <option value="exam12">Exam12</option>
                <option value="total_days">No. of Days School Opened</option>
                <option value="total_attendance">No. of Days Present</option>
                <option value="absence">No. of Days Absent</option>
                <option value="remark">Teacher's Remark</option>
            </select>
        </div>
        <div>
            <label for="replace_detail">Replace with:</label>
            <input name="replace_detail" style="margin-top: 5px; outline: none; padding: 5px;" type="text" placeholder="What should be there?">
        </div>
        <button id="reg_staff_btn" type="submit" style="border: 2px solid transparent; margin-top: 10px; color: white; padding: 10px; font-size: large; font-weight: 600; background-color: rgb(20, 8, 53);">Update Result</button>
    </form>
</body>
</html>