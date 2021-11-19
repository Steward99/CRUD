<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD practice</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>DATABASE</h1>
    <form autocomplete="off" action="create.php" method="POST" id="forminputs">
        <input type="text" name="name" placeholder="Enter Name">
        <input type="text" name="location" placeholder="Enter Location">
        <input type="tel" name="phone" placeholder="Enter Phone Numbers">
        <input type="submit" name="save" value="Save" id="save">
    </form>

    <table>

        <tbody>
            <th>NAME</th>
            <th>LOCATION</th>
            <th>PHONE</th>
            <th colspan="2">ACTION</th>
            <?php include 'read.php'; ?>
        </tbody>

    </table>
</body>
</html>