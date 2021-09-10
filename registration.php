<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Resgistration</title>
</head>
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    .container {
        max-width: 80%;
        height: 100%;
        background-color: aqua;
        margin: auto;
        display: flex;
        padding: 10px;
        display: flex;
        justify-content: center;


    }

    input,  textarea {
        width: 80%;
        margin: 12px 0px;
        padding: 10px;
        font-size: 16px;
        border: 2px solid rgb(11, 5, 99);
        border-radius: 10px;
        outline: none;
    }
</style>

<body>

    <div class="container">
        <form action="" method="post">
        <h1>Welcome to IIUC</h1>
            <table>
                <tr>
                    <td>Student Name</td>
                    <td>
                        <input name="studentName" id="studentName" placeholder="Enter the Student Name">
                    </td>
                </tr>
                <tr>
                    <td>Roll</td>
                    <td> <input type="number" name="roll" id="roll" placeholder="Enter the roll"></td>
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
                        <input name="submitButton" type="submit" value="Save">
                    </td>
                </tr>
            </table>
            <?php

            //  print_r($_POST);
            $studentName = $_POST['studentName'];
            $roll = $_POST['roll'];
            $gender = $_POST['gender'];
            ?>
            <table>
                <tr>
                    <td>Student Name:</td>
                    <td><?php echo $studentName ?></td>
                </tr>
                <tr>
                    <td>Roll:</td>
                    <td><?php echo $roll ?></td>
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