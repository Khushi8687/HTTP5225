<!DOCTYPE html>

<head>
    <title>Assignment 1</title>
    <link rel="stylesheet" type="text/css" href=" assignment1.css">
</head>

<body>
    <div class="main">
        <h1>Staff Attendance Details</h1>
        <div class="info">
            <?php
          
        

        require('db.php');
            $sql = "SELECT * FROM staff";
            $result = mysqli_query($con, $sql);

          
            if (mysqli_num_rows($result) > 0) {
                echo "<table>";
                echo "<tr class='title'><th>Name</th><th>Email</th><th>HireDate</th><th>Position</th><th>AnnualAttendance</th></tr>";
                while ($data = mysqli_fetch_assoc($result)) {
                    if($data['AnnualAttendance'] < 50){
                        echo "<tr class='danger'>";
                    }else{
                        echo "<tr>";
                    }
                    echo "<td>" . $data['Name'] . "</td>";
                    echo "<td>" . $data['Email'] . "</td>";
                    echo "<td>" . $data['HireDate'] . "</td>";
                    echo "<td>" . $data['Postion'] . "</td>";
                    echo "<td>" . $data['AnnualAttendance'] . "</td>";
                    echo "</tr>";
                }
                echo "</table>";
            } else {
                echo "No data found.";
            }

           
          
            ?>
        </div>
    </div>
</body>

</html>