<html>
    <head>
        <h1>DeSmart</h1>
    </head>
    <body>
    <h3>jadwal</h3>
    <button><a href="add_jadwal.php">Add Data</a><br/><br/></button>
        <table border="1" class = "table">
            <tr>
                <th>RW</th>
                <th>waktu</th>
                <th>lokasi</th>
                <th>nama desa</th>
            </tr>
            <?php
    include "koneksi.php";
    $query_mysql = mysqli_query($mysqli,"SELECT jadwal.RW,jadwal.waktu,jadwal.lokasi,kantor_desa.nama_desa FROM jadwal INNER JOIN kantor_desa ON kantor_desa.id_desa=jadwal.id_desa")or die(mysqli_error());
    $nomor = 1;
    while($data=mysqli_fetch_array($query_mysql)){
?>
        <tr>
            <td><?php echo$data['RW'];?></td>
            <td><?php echo$data['waktu'];?></td>
            <td><?php echo$data['lokasi'];?></td>
            <td><?php echo$data['nama_desa'];?></td>
        </tr> 
        <?php } ?>
        </table>
    </body>
</html>