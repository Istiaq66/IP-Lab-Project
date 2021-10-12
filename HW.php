<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Resgistration Form</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <script type="text/javascript">
        var c = 0;
        var b = 0;

        function pop() {
            if (c == 0) {
                document.getElementById("box").style.display = "block";
                c = 1;
            } else {
                document.getElementById("box").style.display = "none";
                c = 0;
            }
        }

        function pop2() {
            if (b == 0) {
                document.getElementById("box2").style.display = "block";
                b = 1;
            } else {
                document.getElementById("box2").style.display = "none";
                b = 0;
            }
        }
    </script>
</head>

<body>


    <!-- Display successfull message-->
    <div id="box">

        <span class="ion-checkmark-round"></span>
        <h2>
            Data has been inserted successfully
        </h2>

        <a onclick="pop()" class="close">Close</a>
    </div>



    <!-- Display failed message -->
    <div id="box2">

        <span class="ion-alert-circled"></span>
        <h2>
            Failed to insert data!
        </h2>

        <a onclick="pop2()" class="close">Close</a>
    </div>



    <!-- Main Body -->
    <div class="container">
        <form action="" method="post">
            <h1 class="Heading">International Islamic University Chittagong</h1><br>
            <table class="input">
                <tr>
                    <td>Student Name</td>
                    <td>
                        <input name="studentName" required id="studentName" placeholder="Enter Student Name">
                    </td>
                </tr>
                <tr>
                    <td>Roll</td>
                    <td> <input type="text" required name="roll" id="roll" placeholder="C191000"></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td> <input type="password" name="password" id="password" required pattern=".{8,}" placeholder="Enter the password"></td>
                </tr>
                <tr>
                    <td>Date of Birth</td>
                    <td>
                        <input name="Date" id="Date" type="date" min="1990-01-01" max="2021-12-30">
                    </td>
                </tr>
                <tr>
                    <td>Gender</td>
                    <td>
                        <select name="gender" id="gender">
                            <option>Male</option>
                            <option>Female</option>
                        </select>
                    </td>
                </tr>
                <tr class="move_bt">
                    <td></td>
                    <td>
                        <button class="submit" name="submitButton" type="submit" value="Save">Register</button>
                    </td>
                </tr>
            </table>


            <p>By creating an account you agree to our <a href="#" class="term">Terms & Privacy</a>.</p>


            <?php
            include 'Connection.php';
            if (isset($_POST['submitButton'])) {
                //  print_r($_POST);
                $studentName = $_POST['studentName'];
                $roll = $_POST['roll'];
                $password = $_POST['password'];
                $date = $_POST['Date'];
                $gender = $_POST['gender'];

                $insert_query = "INSERT INTO student(studentName,roll,password,Date,gender) values('$studentName','$roll','$password','$date','$gender')";

                $result = mysqli_query($connection, $insert_query);


                if ($result) {
                    echo "<script> pop(); </script>";
                } else {
                    echo "<script> pop2(); </script>";
                }



            ?>

            <?php

            }

            $select_query = "SELECT * FROM student";
            $result = mysqli_query($connection, $select_query);
            $serial = 1;


            ?>

            <table class="data">
                <h1 class="Heading">Information</h1>
                <thead>
                    <tr>
                        <!--  <th>Serial</th>-->
                        <th>Student Name</th>
                        <th>Roll</th>
                        <th>Password</th>
                        <th>Date of Birth</th>
                        <th>Gender</th>
                    </tr>
                </thead>

                <?php
                while ($row = mysqli_fetch_array($result)) {
                ?>
                    <tbody>
                        <tr>
                            <!--   <td><?php echo $serial++; ?></td>-->
                            <td><?php echo $row['studentName'] ?></td>
                            <td><?php echo $row['roll'] ?></td>
                            <td><?php echo $row['password'] ?></td>
                            <td><?php echo $row['Date'] ?></td>
                            <td><?php echo $row['gender'] ?> </td>
                        </tr>

                    </tbody>

                <?php
                }
                ?>
                <table>
        </form>
    </div>

</body>

</html>