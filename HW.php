<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resgistration Form</title>
</head>
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    .container {
        max-width: 60%;
        border-radius: 10px;
        margin: 45px auto 0px auto;
        display: flex;
        padding: 50px;
        background-color: rgb(5, 87, 87, 0.7);
        justify-content: center;
        color: azure;
        box-shadow: 0 8px 10px 0 rgba(0, 255, 128, 0.2), 0 8px 20px 0 rgba(0, 255, 128, 0.19);


    }

    body {
        background: url("bg.jpg");
        background-size: 100%;
    }

    h1 {
        color: white;
        text-shadow: 2px 2px 4px #000000;
    }

    input,
    textarea {
        width: 90%;
        margin: 12px 0px;
        padding: 10px;
        color: aliceblue;
        font-size: 16px;
        background: none;
        border: 2px solid rgb(0, 255, 128);
        border-radius: 10px;
        outline: none;
        box-shadow: 0 4px 8px 0 rgba(0, 255, 128, 0.2), 0 6px 20px 0 rgba(0, 255, 128, 0.19);
    }

    table {
        justify-content: center;
        display: flex;
        flex-direction: column;
        font-size: 20px;
        align-items: center;

    }

    #submit {
        color: rgb(255, 255, 255);
        padding: 10px;
        font-size: 20px;
        border-radius: 10px;
        background: rgb(0, 242, 87);
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    }

    select {
        width: 40%;
        margin: 12px 0px;
        padding: 10px;
        font-size: 16px;
        background: none;
        color: whitesmoke;
        border: 2px solid rgb(0, 255, 128);
        border-radius: 10px;
        outline: none;
        box-shadow: 0 4px 8px 0 rgba(0, 255, 128, 0.2), 0 6px 20px 0 rgba(0, 255, 128, 0.19);
    }

    ::placeholder {
        color: cadetblue;
    }

    option {
        color: black;
    }

    td {
        padding-left: 15px;
    }

    .data {
        font-size: 20px;
        margin-top: 10px;
        padding: 20px;
        border: 2px solid wheat;
        border-radius: 10px;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    }

   
</style>

<body>
    <div class="container">
        <form action="" method="post">
            <h1>International Islamic University Chittagong</h1><br>
            <table>
                <tr>
                    <td>Student Name</td>
                    <td>
                        <input name="studentName" id="studentName" placeholder="Enter Student Name">
                    </td>
                </tr>
                <tr>
                    <td>Roll</td>
                    <td> <input type="text" name="roll" id="roll" placeholder="C191000"></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td> <input type="password" name="password" id="password" pattern=".{8,}" placeholder="Enter the password"></td>
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
                <tr>
                    <td></td>
                    <td>
                        <input id="submit" name="submitButton" type="submit" value="Save">
                    </td>
                </tr>
            </table>

            <?php

            //  print_r($_POST);
            $studentName = $_POST['studentName'];
            $roll = $_POST['roll'];
            $password = $_POST['password'];
            $gender = $_POST['gender'];
            ?>
            <table class="data">
                <tr>
                    <td>Student Name:</td>
                    <td><?php echo $studentName ?></td>
                </tr>
                <tr>
                    <td>Roll:</td>
                    <td><?php echo $roll ?></td>
                </tr>
                <tr>
                    <td>Password:</td>
                    <td><?php echo $password ?></td>
                </tr>
                <tr>
                    <td>Gender:</td>
                    <td><?php echo $gender ?>


            </table>
        </form>
    </div>

</body>

</html>