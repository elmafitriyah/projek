<html>
    <head>
        <h1>DeSmart</h1>
    </head>

    <body>
    <h3>bansos</h3>
        <table border="1" class = "table">
            <tr>
                <th>no</th>
                <th>jenis bansos</th>
                <th>jumlah bansos</th>
                <th>kategori</th>
                <th>nama desa</th>
            </tr>
            <?php
    include "koneksi.php";
    $query_mysql = mysqli_query($mysqli,"SELECT bansos.jenis_bansos,bansos.jumlah_bansos,bansos.kategori,kantor_desa.nama_desa FROM bansos INNER JOIN kantor_desa ON kantor_desa.id_desa=bansos.id_desa")or die(mysqli_error());
    $nomor = 1;
    while($data=mysqli_fetch_array($query_mysql)){
?>
    <tr>
        <td><?php echo $nomor++; ?></td>
        <td><?php echo $data['jenis_bansos'];?></td>
        <td><?php echo$data['jumlah_bansos'];?></td>
        <td><?php echo$data['kategori'];?></td>
        <td><?php echo$data['nama_desa'];?></td>
    </tr> 
    <?php } ?>
    </table>
    </body>
</html>