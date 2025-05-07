<!DOCTYPE html>
<html>

<head>
    <title>Web Programming Update</title>
</head>

<body>
    <?php
    // calling db connection file
    include_once("../db_connect.php");

    // data from url
    $id = $_GET["id"];

    // query data
    $result = mysqli_query($conn, "SELECT id, name, continent FROM country WHERE id = " . $id);

    // return data
    $row = $result->fetch_assoc();
    ?>

    <form action="crud_update_proses.php?id=<?php echo $id ?>" method="POST">
        <table>
            <tr>
                <td>Name</td>
                <td><input type="text" name="name" value="<?php echo $row["name"] ?>"></td>
                <td>Continent</td>
                <td><input type="text" name="continent" value="<?php echo $row["continent"] ?>"></td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <button type="submit">Save</button>
                    <a href="crud_delete.php?id=<?php echo $id ?>" onclick="return confirm('Are you sure guys?')">Delete</a>
                </td>
            </tr>
        </table>
    </form>
</body>

</html>