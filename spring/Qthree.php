<?php
$db_server = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "uiutcch_final";
$db_conn = "";

$conn = mysqli_connect($db_server, $db_user, $db_pass, $db_name);

if ($conn) {
    echo "connected";
} else {
    echo "failed";
}
echo "<h3>1. Total Employee as per Performance Rating</h3>";
$sql1 = "SELECT PerformanceRating, COUNT(*) as TotalEmployee
from employee_final
group by PerformanceRating";

$result1= $conn->query($sql1);

if($result1->num_rows>0){
     echo "<table border='1' cellpadding='8'>
            <tr>
                <th>Performance Rating</th>
                <th>Total Employees</th>
            </tr>";

            while($row=$result1->fetch_assoc()){
                echo"<tr>
                <td>{$row['PerformanceRating']}</td>
                <td>{$row['TotalEmployee']}</td>
                </tr>";
            }
            echo"</table>";
}

$sql2="UPDATE employee_final
        set PerformanceRating= 'C'
        where Salary <40000
        and PerformanceRating <>'D'
";

$conn->query($sql2);
echo "<p><b>2.</b> Employees with salary below 40,000 updated to rating 'C'.</p>";

$sql3="UPDATE employee_final
        set Salary = Salary + 5000
        where Salary <50000
        and (Salary+5000) <=60000
";

$conn->query($sql3);
echo "<p><b>3.</b> Employees with salary below 50,000 updated with a 5,000 increment, not exceeding 60,000.</p>";

$sql4 = "
SELECT DepartmentName, COUNT(*) AS TotalEmployees
FROM employee_final
GROUP BY DepartmentName
ORDER BY TotalEmployees DESC
";

$result4 = $conn->query($sql4);

if ($result4->num_rows > 0) {
    echo "<table border='1' cellpadding='8'>
            <tr>
                <th>Department Name</th>
                <th>Total Employees</th>
            </tr>";

    while ($row = $result4->fetch_assoc()) {
        echo "<tr>
                <td>{$row['DepartmentName']}</td>
                <td>{$row['TotalEmployees']}</td>
              </tr>";
    }
    echo "</table>";
}

$conn->close();
?>