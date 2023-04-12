<?php 
    require_once 'dbkoneksi.php';
?>
<?php 
   $sql = "SELECT * FROM produk";
   $rs = $dbh->query($sql);
?>

<a class="btn btn-success" href="form_produk.php" role="button">Create Produk</a>
<table border="1">
    <thead>
        <tr style="text-align: center;">
            <th>No</th>
            <th>Kode</th>
            <th>Nama</th>
            <th>Harga Jual</th>
            <th>Qty</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php 
                $nomor  =1 ;
                foreach($rs as $row){
                ?>
        <tr style="text-align: center;">
            <td><?=$nomor?></td>
            <td><?=$row['kode']?></td>
            <td><?=$row['nama']?></td>
            <td><?= "Rp.".number_format($row['harga_jual'],2,',','.'); ?></td>
            <td><?=$row['stok']?></td>
            <td>
                <a class="btn btn-primary" href="view_produk.php?id=<?=$row['id']?>">View</a>
                <a class="btn btn-primary" href="edit_produk.php?idedit=<?=$row['id']?>">Edit</a>
                <a class="btn btn-primary" href="delete_produk.php?iddel=<?=$row['id']?>"
                    onclick="if(!confirm('Anda Yakin Hapus Data Produk <?=$row['nama']?>?')) {return false}">Delete</a>
            </td>
        </tr>
        <?php 
                $nomor++;   
                } 
                ?>
    </tbody>
</table>