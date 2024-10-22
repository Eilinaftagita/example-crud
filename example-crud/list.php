<?php

include ('koneksi.php');

$query = mysqli_query($connect,"SELECT * FROM mahasiswa");
$results = mysqli_fetch_all($query, MYSQLI_ASSOC);
?>

<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>List Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>

<body style="background-color: #B0C4DE; font-family: Arial, sans-serif;">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

<div class="container">    
<a href="add.php" class="btn btn-info">Add Data</a> 
    <br/><br/>
  
 <table class="table table-info table-striped-columns">
 <tr>
 <th>ID</th>
 <th>NIM</th>
 <th>Nama</th>
 <th>Alamat</th>
 <th>Jenis Kelamin</th>
 <th>Hobby</th>
 <th>Nomor HP</th>
 <th>Aksi</th>
 </tr>
 <?php foreach($results as $result) : ?>
 <tr>
 <td><?php echo $result['id']?></td>
 <td><?php echo $result['NIM']?></td>
 <td><?php echo $result['nama']?></td>
 <td><?php echo $result['alamat']?></td>
 <td><?php echo $result['JK']?></td>
 <td><?php echo $result['hobby']?></td>
 <td><?php echo $result['noHP']?></td>
 <td>
 <a href="edit.php?id=<?php echo $result['id']?> "class="btn btn-warning">Edit</a>
 <a href="delete.php?id=<?php echo $result['id']?>" class="btn btn-danger">Delete</a>
</td>
 </tr>
 <?php endforeach ?>
 </table>
 </div>
</body>
</html>