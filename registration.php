<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Resgistration Form</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link href="css/jquery-ui.css" rel="stylesheet">
    <script src="js/jquery-ui.js"></script>
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
        <h3>
            Data has been inserted successfully
        </h3>

        <button onclick="pop()" class="back">Close</button>
    </div>



    <!-- Display failed message -->
    <div id="box2">

        <span class="ion-alert-circled"></span>
        <h3>
            Failed to insert data!
        </h3>

        <button onclick="pop2()" class="back">Close</button>
    </div>



    <!-- Main Body -->
    <div class="container">
        <div>
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
            </form>

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
                        <th>Edit</th>
                        <th>Delete</th>
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

                            <td>
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal<?php echo $row['id'] ?>">
                                    Edit
                                </button>
                            </td>

                            <td>
                                <a onclick="confirm('Do you want to delete?')" class="btn btn-danger" href="Delete.php? id=<?php echo $row['id'] ?>">Delete</a>
                            </td>



                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal<?php echo $row['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h2 class="modal-title" id="exampleModalLabel">Edit</h2>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">

                                            <form action="edit.php" method="post" enctype="multipart/form-data">
                                                <?php
                                                include 'Connection.php';
                                                $id = $row['id'];
                                                $select_query = "SELECT * FROM student where id='$id'";
                                                $result_edit = mysqli_query($connection, $select_query);
                                                $result_edit_row = mysqli_fetch_row($result_edit);


                                                ?>
                                                <input id="id" type="hidden" name="id" value="<?php echo $result_edit_row[0] ?>">
                                                <div class="form-group">
                                                    <label class="lbel">Student Name</label>
                                                    <input class="in" name="studentName" required id="studentName" value="<?php echo $result_edit_row[1] ?>" placeholder="Enter Student Name">
                                                    <br>
                                                    <label class="lbel">Roll</label> <br>
                                                    <input class="in" type="text" value="<?php echo $result_edit_row[2] ?>" required name="roll" id="roll" placeholder="C191000">
                                                    <br>
                                                    <label class="lbel">Password</label>
                                                    <input class="in" type="password" value="<?php echo $result_edit_row[3] ?>" name="password" id="password" required pattern=".{8,}" placeholder="Enter the password">
                                                    <br>
                                                    <label class="lbel">Date of birth</label>
                                                    <input class="in" name="Date" value="<?php echo $result_edit_row[4] ?>" id="Date" type="date" min="1990-01-01" max="2021-12-30">
                                                    <br>
                                                    <label class="lbel">Gender</label>
                                                    <select style="margin-left: 10px;" value="<?php echo $result_edit_row[5] ?>" class="in" name="gender" id="gender">
                                                        <option>Male</option>
                                                        <option>Female</option>
                                                    </select>

                                                    <!-- <button class="btn btn-primary" type="submit"  class="btn btn-primary">Save changes</button>
                                                    </div>
                                                -->


                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                        <button onclick="confirm('Do you want to save changes?')" type="submit" class="btn btn-primary">Save changes</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>




                        </tr>

                    </tbody>

                <?php
                }
                ?>
                <table>

        </div>
    </div>

</body>

</html>