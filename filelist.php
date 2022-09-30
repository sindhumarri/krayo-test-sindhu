<?php
require_once 'config.php';

if (!isset($_SESSION['userData'])) {
    header('location: index.php');
}
$msg = '';
$query = "SELECT * FROM `uploading`;";
$result = $conn->query($query);
if (mysqli_num_rows($result) > 0) {
} else {
    $msg = "No Record found";
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>File List</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />
</head>

<body>
    <h1>Display file list </h1>
    <div class="panel-heading clearfix">
        <!-- <h4 class="panel-title pull-left">Welcome User</h4> -->
        <div class="btn-group pull-left">
            <a href="view.php" class="btn btn-primary">Home</a>
        </div>
    </div>
    <?= $msg; ?>
    <table border="1px" style="width:600px; line-height:40px;">
        <thead>
            <tr>
                <th>User Name</th>
                <th>File Name</th>
                <th>File Download</th>
            </tr>
        </thead>
        <tbody>
            <?php
            while ($row = $result->fetch_assoc()) { ?>
                <tr>
                    <td><?php echo $_SESSION['userData']['l_name']; ?></td>
                    <td><?php echo $row['file_name']; ?></td>
                    <td><a href=<?php echo $row['file_path']; ?> download> <?php echo $row['file_name']; ?></a></td>
                <tr>
                <?php } ?>
        </tbody>
    </table>
</body>

</html>