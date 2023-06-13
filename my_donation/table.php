<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
         table{
            border-collapse:collapse;
            width:100%
            color:green;
            font-size: 35px;
            font-family:monospace;
            text-align:left;
            color:green;
         }

         th {
            background-color: #588c7e;
            color: white;
            font-weight:bold;
         }

         tr:nth-child(even){background: color #f2f2f2;}
         #nav{
            
         }
    </style>
</head>
<body>
    <table>
        <tr class="nav">
            <th>id </th>
            <th>name</th>
            <th>EMAIL</th>
            <th>password</th>
        </tr>
    

    <?php
    // include "conn.php";
    $conn=mysqli_connect("localhost","root","","don_db");
    if ($conn-> connect_error){
        die("Connection failed:". $conn-> connect_error);
    }

    $SQL = "SELECT id,name,EMAIL,PASSWORD from user_tbl";
    $result = $conn-> query($SQL);

    if ($result-> num_rows > 0){
        while ($row = $result-> fetch_assoc()) {
            echo "<tr><td>". $row["id"] ."</td><td>". $row["name"] ."</td><td>". $row["EMAIL"]."</td><td>".$row["PASSWORD"]."</td></tr>";
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