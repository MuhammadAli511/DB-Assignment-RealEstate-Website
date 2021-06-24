<!DOCTYPE html>
<html lang="en">
<head>
<title>Show Commercial</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

</head>
<body>
<?php
    include 'helper/connection.php';
?>

<div class="container" style="padding-top: 20px; padding-bottom: 20px;">
    <h3>Commercial</h3>
<hr>

<table class="table" align="center">
    <thead>
        <tr>
            <th>Commercial ID</th>
            <th>Address</th>
            <th>Category</th>
            <th>Total Square Foot</th>
            <th>Action</th>                  
        </tr>
    </thead>  
    <tbody>
    <?php
        $sql = "SELECT * FROM available_commercial  ";
        $query = oci_parse($con, $sql);
        oci_execute($query);
        while($data = oci_fetch_assoc($query)){
        ?>
        <tr>
            <td><?php echo $data['COMMERCIAL_ID']; ?></td>
            <td><?php echo $data['ADDRESS']; ?></td>
            <td><?php echo $data['CATEGORY']; ?></td>
            <td><?php echo $data['TOTAL_SQUAREFOOT']; ?></td>
            <td>
                <a href="process/processAllotCivil.php?id=<?php echo $data['COMMERCIAL_ID'] ?>" class="btn btn-success">Apply</a>
            </td>
            
            </tr>
        <?php $no++; ?>
        <?php }
         if($no == 0)
         {
        ?>
            <script>
            alert("Unfortunately No Commercial Place is available.");
            document.location = "profile.php";
            </script>
        <?php
         }
         ?>
    </tbody>
</table>