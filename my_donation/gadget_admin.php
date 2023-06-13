<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        
        *{
            background-color:black;
        }
        h1{
            color:white;
        }
         table{
            border-collapse:collapse;
            width:100%
            color:green;
            font-size: 25px;
            font-family:monospace;
            text-align:left;
            color:green;
            
         }

         th {
            background-color: #588c7e;
            color: white;
            font-weight:bold;
            border: 3px solid white;
            padding:10px;

         }

         tr:nth-child(even){background: color #f2f2f2;}
         td{
            border:2px dotted white;
            padding:10px;
         }
    </style>
</head>
<body>
    <h1>Gadget Donation Details....</h1>
    <table>
        <tr class="nav">
            <th>FName</th>
            <th>LName</th>
            <th>Email</th>
            <th>Mob.No.</th>
            <th>Address</th>
            <th>Cat-gadget</th>
            <th>No.Gadget</th>
        </tr>
    <?php
    // include "conn.php";
    $conn=mysqli_connect("localhost","root","","don_db");
    if ($conn-> connect_error){
        die("Connection failed:". $conn-> connect_error);
    }

    $SQL = "SELECT * from gadget_don";
    $result = $conn-> query($SQL);

    if($result->num_rows > 0){
        while ($row = $result-> fetch_assoc()) {
            echo "<tr><td>". $row["FName"] ."</td><td>". $row["LName"] ."</td><td>". $row["Email"]."</td><td>".$row["Mob.No."]."</td><td>".$row["Address"]."</td><td>".$row["Cat-gadget"]."</td><td>".$row["No.Gadget"]."</td></tr>";
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