<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>table</title>
    <style>
        *{
            background-color: black;
        }
         table{
            border-collapse:collapse;
            width:100%
            color:green;
            font-size: 25px;
            font-family:monospace;
            text-align:centre;
            color:green;
         }

         th {
            background-color: #588c7e;
            color: white;
            font-weight:bold;
            border: 3px solid white;
            padding:5px;
         }

         tr:nth-child(even){background-color: #f2f2f2;}
         td{
            border:2px dotted white;
            padding:5px;
         }
    </style>
</head>
<body>
    <h1>Book Donation details</h1>
    <table>
        <tr class="nav">
            <th>First Name </th>
            <th>Last Name</th>
            <th>EMAIL</th>
            <th>Mobile Num.</th>
            <th>Address</th>
            <th>Category of Book</th>
            <th>ISBN number of book</th>
        </tr>
    

    <?php
    // include "conn.php";
    $conn=mysqli_connect("localhost","root","","don_db");
    if ($conn-> connect_error){
        die("Connection failed:". $conn-> connect_error);
    }

    $SQL = "SELECT * from book_don";
    $result = $conn-> query($SQL);
    
    
    if ($result->num_rows > 0){
        while ($row = $result-> fetch_assoc()) {
            echo "<tr><td>". $row["FName"] ."</td><td>". $row["LName"] ."</td><td>". $row["Email"]."</td><td>".$row["Mob.No."]."</td><td>". $row["Address"]."</td><td>". $row["Cat-Book"]."</td><td>". $row["ISBN"]."</td></tr>";
        }
        echo "</table>";
    }
    else{
        echo "0 result";
    }

    $conn-> close();
    ?>
</table>    
</body>
</html>