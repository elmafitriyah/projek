<html>
    <head>
        <h1>DeSmart</h1>
    </head>
    <body>
    <h3>kantor desa</h3>
    <table border="1" class="table">
            <tr>
                <th>no</th>
                <th>id desa</th>
                <th>nama desa</th>
                <th>kecamatan</th>
            </tr>
            <?php
    include "koneksi.php";
    $query_mysql = mysqli_query($mysqli,"SELECT * FROM kantor_desa");
    $nomor = 1;
    while($data=mysqli_fetch_array($query_mysql)){
            ?>
    <tr>
        <td><?php echo $nomor++; ?></td>
        <td><?php echo $data['id_desa'];?></td>
        <td><?php echo $data['nama_desa'];?></td>
        <td><?php echo $data['kecamatan'];?></td>
        </tr>
    <?php } ?>
    </table>
    </body>
</html>