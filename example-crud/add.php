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
 <form action="insert.php" method="post"> 
    <label>NIM</label><br/>
    <input type="text" name="NIM"/>
 <br/><br/>

    <label>Nama</label><br/>
    <input type="text" name="nama"/>
 <br/><br/>

 <label>Alamat</label><br/>
 <textarea name="alamat" cols="30" rows="10"></textarea>
 <br/><br/>
 
 <label>Jenis Kelamin</label><br/>
 <div class="radio-group">
 <input type="radio"name="JK" value="laki-laki" id="laki-laki">
 <label for="laki-laki">Laki-laki</label><br>
 <input type="radio" name="JK" value="Perempuan" id="perempuan">
 <label for="perempuan">Perempuan</label>
 <br/><br/>
      </div>

 <label>Hobby</label><br/>
 <select name="hobby">
    <option value="Musik">Musik</option>
    <option value="Tari">Tari</option>
    <option value="Melukis">Melukis</option>
    <option value="Olahraga">Olahraga</option>
    </select>
      <br/><br/>

<label>No Telepon</label><br/>
      <input type="tel" name="noHP" />
      <br/><br/>
      
 
 <button type="submit">Tambah</button>
 </form>
      </body>
</html>
