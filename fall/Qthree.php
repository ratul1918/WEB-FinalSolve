<?php
$db_server = "localhost";
$db_user ="root";
$db_pass = "";
$db_name = "uiuweb_final";
$db_conn ="";

$conn=mysqli_connect($db_server,$db_user,$db_pass,$db_name);

if($conn){
    echo"you are connected";
}
else{
    echo"shit not connected";
}

echo"<h3>1. Number of student who received Letter Grades</h3>";

$sql1="SELECT LetterGrade, COUNT(*) as TotalStudents
from student_final
group by LetterGrade";

$result1=$conn->query($sql1);

if($result1->num_rows){
    echo"<table border='1' cellpadding='8'>
    <tr>
    <td>Letter Grade</td>
    <td>Total Student</td>
    </tr>";

    while($row=$result1->fetch_assoc()){
        echo"<tr>
        <td>{$row['LetterGrade']}</td>
        <td>{$row['TotalStudents']}</td>
        </tr>";
    }
    echo "</table>";
}

$sql2= "UPDATE student_final
        set LetterGrade ='C'
        where Grade <75
        and LetterGrade !='D'
        ";
$conn->query($sql2);
echo"<p>2. Number of students whose letter grade was updated.</p>";

$sql3= "UPDATE student_final
        set Grade= Grade+5
        where Grade >80
        and (Grade+5) <=90
";
$conn->query($sql3);
echo"<p>3. Number of students who received bonus points</p>";

echo "<h2>4. Students Per Course (Most Popular First)</h2>";
$sql4="SELECT CourseTitle, COUNT(*) as StudentCount
from student_final
group by CourseTitle
order by StudentCount DESC
";

$result4=$conn->query($sql4);
if($result4->num_rows){
    echo"<table border='1' cellpadding='8'>
    <tr>
    <th>Course Title</th>
    <th>Num Of Students</th>
    </tr>";

    while($row=$result4->fetch_assoc()){
        echo"<tr>
        <td>{$row['CourseTitle']}</td>
        <td>{$row['StudentCount']}</td>
        </tr>";
    }
    echo"</table>";
}
$conn->close();
?>