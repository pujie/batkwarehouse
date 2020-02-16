<!DOCTYPE html>
<html>
    <body>
        <table class="table table-striped table-bordered" id="tProcess">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Jumlah</th>
                    <th>Nama</th>
                    <th>Kode 1</th>
                    <th>Kode 2</th>
                    <th>Kode 3</th>
                    <th>Bulan</th>
                    <th>Tahun</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($results as $obj){?>
                <tr class="odd gradeX">
                    <td><?php echo $obj["id"];?></td>
                    <td><?php echo $obj["idr"];?></td>
                    <td><?php echo $obj["name"];?></td>
                    <td><?php echo $obj["kd1"];?></td>
                    <td><?php echo $obj["kd2"];?></td>
                    <td><?php echo $obj["kd3"];?></td>
                    <td><?php echo $obj["month"];?></td>
                    <td><?php echo $obj["year"];?></td>
                    <td class="center">
                    <div class="btn-group">
                        <button class="btn">Action</button>
                        <button data-toggle="dropdown" class="btn dropdown-toggle"><span class="caret"></span></button>
                        <ul class="dropdown-menu">
                            <li><a href="../bimbelgroups/edit/<?php echo "test";?>">Edit</a></li>
                            <li class="divider"></li>
                            <li><a href="../bimbelgroups/remove/<?php echo "test";?>">Hapus</a></li>
                        </ul>
                    </div>
                    </td>
                </tr>
                <?php }?>
            </tbody>
        </table>
 
    </body>
</html>

