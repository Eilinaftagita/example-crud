<?php
include('koneksi.php');
$id = $_GET['id']; // Untuk mengambil id yang dilempar dari form list.php
$query = mysqli_query($connect,"SELECT * FROM mahasiswa WHERE id='$id' LIMIT 1");
//mengambil data sesuai dengan id nya
$result = mysqli_fetch_all($query, MYSQLI_ASSOC);
?>

<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add Data</title>
    <style>
       body {
            background-color: #B0C4DE;
            font-family: Arial, sans-serif;
        }

        form {
            max-width: 400px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 8px;
            margin-right: 70px;
        }

        input,
        textarea,
        select {
            width: 100%;
            padding: 8px;
            margin-bottom: 12px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .radio-group {
            display: flex;
            align-items: center;
            margin-bottom: 12px;
         }

        input[type="radio"] {
         margin-right: 5px;
        }
        
        button {
            background-color: #4CAF50;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <form action="update.php" method="post">
 
        <input type="hidden" name="id" value="<?php echo $result[0]['id']?>">
        <!--untuk menyimpan id tanpa menampilkan data id pada form-->
       
<label>NIM</label><br/>      
<input type="text" name="NIM" value="<?php echo $result[0]['NIM']?>"/>
<!--menampilkan data sesuai dr variabel $result diatas-->

<br/><br/>
       
<label>Nama</label><br/>      
<textarea name="nama" cols="30" rows="10"><?php echo $result[0]['nama']?></textarea>
<br/><br/>

<label>Alamat</label><br/>      
<textarea name="alamat" cols="30" rows="10"><?php echo $result[0]['alamat']?></textarea>
<br/><br/>

<label>Jenis Kelamin</label><br/>
<div class="radio-group">
 <input type="radio" name="JK" value="Laki-laki" <?php echo ($result[0]['JK'] =='Laki-laki') ? 'checked' : '';?> > Laki-laki <br>
 <input type="radio" name="JK" value="Perempuan" <?php echo ($result[0]['JK'] =='Perempuan') ? 'checked' : '';?> > Perempuan
 <br/><br/>
    </div>

 <label>Hobby</label><br/>
 <select name="hobby">
 <option value="Musik"<?php echo ($result[0]['hobby'] =='Musik') ? 'selected' : '';?> >Musik</option>
 <option value="Tari"<?php echo ($result[0]['hobby'] =='Tari') ? 'selected' : '';?> >Tari</option>
 <option value="Melukis"<?php echo ($result[0]['hobby'] =='Melukis') ? 'selected' : '';?> > Melukis</option>
 <option value="Olahraga"<?php echo ($result[0]['hobby'] =='Olahraga') ? 'selected' : '';?> > Olahraga</option>
 </select>

</br></br>
<label>No Telepon</label><br/>
 <input type="tel" name="noHP" value="<?php echo $result[0]['noHP']?>"  /><!--menampilkan data sesuai dr variabel $result diatas-->
 <br/><br/>
   
<button type="submit">Perbaharui</button>
</form>
    </body>
</html>