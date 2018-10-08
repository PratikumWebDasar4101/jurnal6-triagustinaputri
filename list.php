<?php

require_once("db.php");

?>

<!DOCTYPE html>

<head>

    <title>List</title>

</head>

<body>

    <table>

        <tr align="left">

            <th>Nama</th>

            <th>Nim</th>

            <th>Kelas</th>

            <th> Jenis Kelamin</th>

            <th>Hobi</th>

            <th>Fakultas</th>

            <th>Alamat</th>

            <th>Aksi</th>

        </tr>

       <?php

            $sql = "SELECT * FROM siswa";



            $result = mysqli_query($conn, $sql);

            $row = mysqli_num_rows($result);



            if ($row > 0) {

                while ($row = mysqli_fetch_array($result)) {

              ?>

                    <tr>

                    <td> <?php echo $row["nama"]?> </td>;
                    <td> <?php echo  $row["nim"]?> </td>;
                    <td> <?php echo  $row["kelas"] ?> </td>;
                    <td> <?php echo  $row["jeniskelamin"] ?> </td>;
                   <td> <?php echo  $row["hobi"] ?> </td>;
                    <td> <?php echo  $row["fakultas"] ?> </td>;
                    <td>  <?php echo  $row["alamat"] ?> </td>;
                    <td><a href="update.php?id=<?php echo $row['id']?>"> Update </a></td>

            </tr>
            <?php
        }
    }else{
        echo "0 result";
    }
    mysqli_close($conn);
    ?>
    ?>

    </table>

</body>

</html>
<h3><a href="pendaftaran.php"> Pendaftaran</a></h3>