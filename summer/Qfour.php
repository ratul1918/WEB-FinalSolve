<?php

// $db_server = "localhost";
// $db_user = "root";
// $db_pass = "";
// $db_name = "sundarban";
// $conn = "";

// $conn = mysqli_connect($db_server, $db_user, $db_pass, $db_name);

// if ($conn) {
//     echo "you are connected";
// } else {
//     echo "shit not connected";
// }
// echo "<h3>1. Total Revenue per Category</h3>";

// $sql1 = "SELECT Catagoryname, SUM(Revenue) As Total_Revenue
//     FROM sales_data
//     GROUP BY Catagoryname";

// $result1 = $conn->query($sql1);

// if ($result1->num_rows > 0) {
//     echo "<table border='1' cellpadding='8'>
//         <tr>
//         <th>Catagory Name</th>
//         <th>Total Revenue</th>
//         </tr>";

//     while ($row = $result1->fetch_assoc()) {
//         echo "<tr>
//             <td>{$row['Catagoryname']}</td>
//             <td>{$row['Total_Revenue']}</td>
//             </tr>";
//     }
//     echo "</table><br>";
// }

// $sql2 = "UPDATE sales_data
//     SET Catagoryname ='LOW Performing'
//     WHERE Revenue <40000";

// $conn->query($sql2);
// echo "<p>2. Products with revenue below 40,000 updated to <b>Low Performing</b>.</p>";

// $sql3 = "UPDATE sales_data
//     SET Revenue= Revenue + (Revenue * 0.10)
//     WHERE Revenue >70000";

// $conn->query($sql3);
// echo "<p>3. 10% bonus added for products with revenue above 70,000.</p>";


// $sql4 = " SELECT
//     s.Productname,
//     s.Catagoryname,
//     s.Revenue,
//     CASE
//         WHEN s.Revenue >
//             (
//                 SELECT AVG(s2.Revenue)
//                 FROM sales_data s2
//                 WHERE s2.Catagoryname = s.Catagoryname
//             )
//         THEN 'Top Seller'
//         ELSE 'Regular Seller'
//     END AS Seller_Status
// FROM sales_data s
//     ";

//     $result4=$conn->query($sql4);
//     echo"<p>4.</p>";

//     if ($result4->num_rows > 0) {
//     echo "<table border='1' cellpadding='8'>
//             <tr>
//                 <th>Product Name</th>
//                 <th>Category Name</th>
//                 <th>Revenue</th>
//                 <th>Status</th>
//             </tr>";

//     while ($row = $result4->fetch_assoc()) {
//         echo "<tr>
//                 <td>{$row['Productname']}</td>
//                 <td>{$row['Catagoryname']}</td>
//                 <td>{$row['Revenue']}</td>
//                 <td>{$row['Seller_Status']}</td>
//               </tr>";
//     }
//     echo "</table>";
// }

// $conn->close();


$db_server = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "sundarban";
$conn = "";

$conn = mysqli_connect($db_server, $db_user, $db_pass, $db_name);

if ($conn) {
    echo "You are connected";
} else {
    echo "Failed";
}

echo "<h1>1. Total revenue per Category</h1>";

$sql1 = "SELECT Catagoryname, SUM(Revenue) as Total_Revenue
FROM sales_data
Group by Catagoryname";

$result1 = $conn->query($sql1);

if ($result1->num_rows > 0) {
    echo "<table border='1' cellpadding='8'>
    <tr>
    <td>Category Name</td>
    <td>Total Revenue</td>
    </tr>";

    while ($row = $result1->fetch_assoc()) {
        echo "<tr>
        <td>{$row['Catagoryname']}</td>
        <td>{$row['Total_Revenue']}</td>
        </tr>";
    }
    echo "</table>";
}

$sql2 = "UPDATE sales_data
    set Catagoryname = 'LOW Performing'
    where Revenue < 40000";

$conn->query($sql2);
echo "<p>2. Products with revenue below 40,000 updated to <b>Low Performing</b>.</p>";

$sql3 = "UPDATE sales_data
    set Revenue = Revenue + (Revenue * 0.10)
    where Revenue >70000";

$conn->query($sql3);
echo "<p>3. 10% bonus added for products with revenue above 70,000.</p>";

$sql4 = "SELECT 
    s.Productname,
    s.Catagoryname,
    s.Revenue,
    CASE 
    WHEN s.Revenue > 
    (
    select AVG(s2.Revenue)
    from sales_data s2
    where s2.Catagoryname=s.Catagoryname
    )
    then 'Top seller'
    else 'Regular seller'
    end as Seller_status
    from sales_data s 
    ";

$result4 = $conn->query($sql4);

if ($result4->num_rows > 0) {
    echo "<table border='1' cellpadding='8'>
        <tr>
        <td>Product name</td>
        <td>Category name</td>
        <td>Revenue</td>
        <td>Status</td>
        </tr>";


    while ($row = $result4->fetch_assoc()) {
        echo "<tr>
        <td>{$row['Productname']}</td>
        <td>{$row['Catagoryname']}</td>
        <td>{$row['Revenue']}</td>
        <td>{$row['Seller_status']}</td>
        </tr>";
    }

    echo "</table>";
}
$conn->close();
?>