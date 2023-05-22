<html>
    <head>
        <h1>DeSmart</h1>
    </head>
    <body>
    <h3>data data_penerimaan</h3>
    <button><a href="add_datapenerimaan.php">Add New Data</a><br/><br/></button>
        <table border="1" class = "table">
            <tr>
                <th>no</th>
                <th>nama</th>
                <th>NIK</th>
                <th>I</th>
                <th>II</th>
                <th>III</th>
                <th>IV</th>
                <th>V</th>
                <th>VI</th>
                <th>penerimaan</th>
            </tr>
            <?php
        include "koneksi.php";
        $query_mysql = mysqli_query($mysqli,"SELECT penerima.nama,data_penerimaan.NIK,data_penerimaan.data_satu,data_penerimaan.data_dua,data_penerimaan.data_tiga,data_penerimaan.data_empat,data_penerimaan.data_lima,data_penerimaan.data_enam,data_penerimaan.penerimaan FROM data_penerimaan INNER JOIN penerima ON data_penerimaan.id_data=penerima.id_data") or die(mysqli_error());
        $nomor = 1;
        while($data=mysqli_fetch_array($query_mysql)){
    ?>
            <tr>
                <td><?php echo $nomor++; ?></td>
                <td><?php echo$data['nama'];?></td>
                <td><?php echo$data['NIK'];?></td>
                <td><?php echo$data['data_satu'];?></td>
                <td><?php echo$data['data_dua'];?></td>
                <td><?php echo$data['data_tiga'];?></td>
                <td><?php echo$data['data_empat'];?></td>
                <td><?php echo$data['data_lima'];?></td>
                <td><?php echo$data['data_enam'];?></td>
                <td><?php echo$data['penerimaan'];?></td>
            </tr> 
        <?php } ?>
        </table>
    </body>
</html>