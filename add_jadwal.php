<html>
<head>
        <h1>Create Data Jadwal</h1>
    </head>

    <body>
        <h3>Data Jadwal</h3>
            <form action="add_jadwal.php" method="post" name="form1">
            <table width="25%" border="0">
                <tr>
                    <td>RW</td>
                    <td><input type="text" name="RW"></td>
                </tr>
                <tr>
                    <td>waktu</td>
                    <td><input type="datetime-local" name="waktu"></td>
                </tr>
                <tr>
                    <td>lokasi</td>
                    <td><input type="text" name="lokasi"></td>
                </tr>
                <tr>
                    <td>Desa</td>
                    <td><input type="text" name="id_desa"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" name="Submit" value="Add"></td>
                </tr>
<?php
 if(isset($_POST['Submit'])) {
    $RW=$_POST['RW'];
    $waktu=$_POST['waktu'];
    $lokasi=$_POST['lokasi'];
    $id_desa=$_POST['id_desa'];
    echo $waktu;

    include_once("koneksi.php");

    $result = mysqli_query($mysqli,"INSERT INTO jadwal VALUES('$RW','$waktu','$lokasi','$id_desa')");
   // header("location:jadwal.php");

 }
 ?>
            </table>
        </form>
    </body>
</html>