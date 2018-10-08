<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form  action="submit.php" method="POST" enctype="multipart/form-data">

			

			Nama : <input type="text" name="nama"  minlength="1" maxlength="35" ><br><br>
			NIM : <input type="number"  name="nim" maxlength="10"  required><br><br>
			Kelas : <input type="radio" name="kelas" value="d3mi4101" required> D3MI4101
					<input type="radio" name="kelas" value="d3mi4102" required> D3MI4102
					<br><br>

			Jenis Kelamin :	<input type="radio" name="jeniskelamin" value="Perempuan" required>Perempuan 

					 		<input type="radio" name="jeniskelamin" value="Laki - Laki" required>Laki - Laki

					 		<br><br>
			Hobi :

					<input type="checkbox" name="hobi" value="Badminton" >Badminton

					<input type="checkbox" name="hobi" value="Renang">Renang

					<input type="checkbox" name="hobi" value="Softball">Softball

					<br><br>
		
			Fakultas :

					<select name="fakultas">

						<option>Faklutas Industri Kreatif</option>

						<option>Fakultas Teknik Elektro</option>

						<option>Fakultas Komunikasi Bisnis</option>

						<option>Fakultas Ilmu Terapan</option>	

						<option>Fakultas Rekayasa Industri</option>

						<option>Fakultas Informatika</option>

						<option>Fakultas Ekonomi Bisnis</option>

					</select><br><br>

			Alamat : <textarea rows="10" cols="29" name="alamat"></textarea>
				<br><br>

			
		<input type="submit" name="submit" value="submit">

			

			

	</form>

</body>
</html>
