<!DOCTYPE html>
<html>
    <body>
    <form action="/importtool/save" method="post">
    <input type="text" name="category">
        <button name="btnsave">Simpan</button>
            <table class="table table-striped table-bordered" id="tProcess">
                <tbody>
                    <?php $c = 0;?>
                    <?php foreach($results as $obj){?>
                    <tr class="odd gradeX">
                        <th><?php echo $c;$c++;?></th>
                        <td><?php echo $obj["kditem"];?></td>
                        <td><?php echo $obj["nmitem"];?></td>
                        <td><?php echo $obj["hpp"];?></td>
                        <td><?php echo $obj["qty"];?></td>
                    </tr>
                    <input type="hidden" name="kditem[]" value="<?php echo $obj['kditem'];?>">
                    <input type="hidden" name="nmitem[]" value="<?php echo $obj['nmitem'];?>">
                    <input type="hidden" name="hpp[]" value="<?php echo $obj['hpp'];?>">
                    <input type="hidden" name="qty[]" value="<?php echo $obj['qty'];?>">
                    <input type="hidden" name="count" value="<?php echo $c;?>">
                    <?php }?>
                </tbody>
            </table>
        </form>
    </body>
</html>