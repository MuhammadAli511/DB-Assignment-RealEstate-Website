<?php
include('helper/connection.php');
session_start();
$grade = $_SESSION["GRADE"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Show Residence</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

</head>
<body>
<?php
    include 'helper/connection.php';
?>

<div class="container" style="padding-top: 20px; padding-bottom: 20px;">
    <h3>Residency</h3>
<hr>

<table class="table" align="center">
    <thead>
        <tr>
            <th>Apartment ID</th>
            <th>Address</th>
            <th>Category</th>
            <th>Rooms</th>
            <th>Action</th>                  
        </tr>
    </thead>  
    <tbody>
    <?php
        $no=1;

        $sql = "SELECT * FROM available_residential";
        $query = oci_parse($con, $sql);
        oci_execute($query);
        while($data = oci_fetch_assoc($query)){
        ?>
        <tr>
            <td><?php echo $data['APARTMENT_ID']; ?></td>
            <td><?php echo $data['ADDRESS']; ?></td>
            <td><?php echo $data['CATEGORY']; ?></td>
            <td><?php echo $data['ROOMS']; ?></td>
            <td>
                <a href="process/processAllotCivil.php?id=<?php echo $data['APARTMENT_ID'] ?>" class="btn btn-success">Confirm</a>
            </td>
            
        </tr>
        <?php $no++; ?>
        <?php }
         if($no == 0)
         {
        ?>
            <script>
            alert("Unfortunately No Resident is available. You have been added to waiting list.");
            document.location = "process/insertWaitinglist.php";
            </script>
        <?php
         }
         ?>
    </tbody>
</table>