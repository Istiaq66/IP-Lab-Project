<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
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
        margin: 50px auto 50px auto;
        display: flex;
        padding: 40px;
        background-color: rgb(5, 87, 87, 0.7);
        justify-content: center;
        color: azure;
        box-shadow: 0 8px 10px 0 rgba(0, 255, 128, 0.2), 0 8px 20px 0 rgba(0, 255, 128, 0.19);


    }

    body {
        background: url("bg.jpg")no-repeat;
        background-size: cover;
    }

    h1 {
        text-align: center;
        color: white;
        text-shadow: 2px 2px 4px #000000;
    }

    p {
        padding: 20px;
        font-size: 20px;
        text-align: center;
        color: white;
    }


    a:visited {
        color: aquamarine;
        background-color: transparent;
        text-decoration: none;
    }

    a:hover {
        color: red;
        background-color: transparent;
        text-decoration: underline;
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

    input:hover {
        box-shadow: 0px 8px 15px rgba(72, 255, 59, 0.5);
    }

    ::-webkit-calendar-picker-indicator {
        background-image: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 24 24"><path fill="%23bbbbbb" d="M20 3h-1V1h-2v2H7V1H5v2H4c-1.1 0-2 .9-2 2v16c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 18H4V8h16v13z"/></svg>');
    }

    table {
        justify-content: center;
        display: flex;
        flex-direction: column;
        font-size: 20px;
        align-items: center;
        margin-top: 10px;
        padding: 20px;
        border: 2px solid wheat;
        border-radius: 10px;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    }

    .submit {
        width: 90%;
        margin-top: 10px;
        color: rgb(255, 255, 255);
        padding: 10px;
        font-size: 20px;
        border: 2px solid rgb(0, 255, 128);
        opacity: 0.9;
        border-radius: 10px;
        background: rgb(0, 242, 87);

    }

    .submit:hover {
        opacity: 1;
        box-shadow: 0px 8px 15px rgba(72, 255, 59, 0.5);
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

    select:hover {
        box-shadow: 0px 8px 15px rgba(72, 255, 59, 0.5);
    }

    ::placeholder {
        color: cadetblue;
    }

    option {
        background-color: blanchedalmond;
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

    .data:hover {
        box-shadow: 0px 8px 15px rgba(72, 255, 59, 0.5);
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


            <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>


            <?php

            //  print_r($_POST);
            $studentName = $_POST['studentName'];
            $roll = $_POST['roll'];
            $password = $_POST['password'];
            $date = $_POST['Date'];
            $gender = $_POST['gender'];

            ?>
            <table class="data" >
            <h1>Information</h1>
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
                    <td>Date of Birth:</td>
                    <td><?php echo $date ?></td>
                </tr>
                <tr>
                    <td>Gender:</td>
                    <td><?php echo $gender ?>
                    </td>
                </tr>

            </table>
        </form>
    </div>

</body>

</html>