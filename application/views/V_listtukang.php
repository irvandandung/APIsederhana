<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css">
    <title>
        List Tukang
    </title>
</head>
<body>
    <form action="" method="GET">
        <select name="jenistukang">
            <?php
                foreach ($datalist2 as $row) {
            ?>
            <option value="<?php echo $row->jenistukang;?>"><?php echo $row->jenistukang;?></option>
            <?php
                }
            ?>
        </select>
        <select name="namakabupaten">
            <?php
                foreach ($datalist2 as $row) {
            ?>
            <option value="<?php echo $row->namakabupaten;?>"><?php echo $row->namakabupaten;?></option>
            <?php
                }
            ?>
        </select>
        <input type="submit" value="cari">
    </form>
    <div class="table-responsive bootstrap">
        <table id="tabel-data" class="table table-striped table-bordered" width="100%" cellspacing="0">
            <thead>
            <tr>
                <th>No</th>
                <th>Nama Tukang</th>
                <th>Jenis Tukang</th>
                <th>Kabupaten</th>
            </tr>
            </thead>
            <tbody>
                <?php
                    $nomor = 1;
                    foreach ($datalist as $row) {
                ?>
                <tr>
                <td><?php echo $nomor++;?></td>
                <td><?php echo $row->nama;?></td>
                <td><?php echo $row->jenistukang;?></td>
                <td><?php echo $row->namakabupaten;?></td>
                <?php 
                    }
                ?>
            </tbody>
        </table>
    </div>
   <script src="https://code.jquery.com/jquery-3.1.0.js"></script>
   <script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
   <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
    <script>
    $(document).ready(function(){
        $('#tabel-data').DataTable(
            { "lengthMenu": [[2, 4, 10, -1], [2, 4, 10, "All"]]
        });
    });
</script>
</body>
</html>