<?php
include "koneksi.php";
include "function.php";
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>data penjualanan</title>
</head>
<body>
    <table border="1">
        <caption>data stok barang</caption>
        <form action="" method="get">
                <select name="Filter">
                    <option value="Fashion">Fashion</option>
                    <option value="Food">Food</option>
                    <option value="Farmasi">Farmasi</option>
                </select>
                <input type="submit" value="Filter" />
            </form>
        </caption>
        <tr>
            <th>no</th>
            <th>nama barang</th>
            <th>harga</th>
            <th>stok barang</th>
            <th>katagori</th>
        </tr>
        <?php
        $query="SELECT * FROM barang where katagori='$_GET[Filter]';";
        $result=$mysqli->query($query);
        $no=0;
        while($row=$result->fetch_assoc()){
        $no++;
    ?>
    <tr>
        <td><?=$no;?></td>
        <td><?=$row['nama_barang'];?></td>
        <td><?=FormatRupiah($row['harga']);?></td>
        <td><?=$row['stok_barang'];?></td>
        <td><?=$row['katagori'];?></td>

    </tr>
    <?php
        }
        ?>
        </table>
    </body>
    </html>