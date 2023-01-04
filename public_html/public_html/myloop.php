<form method="post">
    <input name="myinput" type="text"
    value="<?php
    echo isset($_POST['myinput'])
    ? $_POST['myinput']
    : ""; ?> ">
    <button type="submit">Submit</button>
</form>
<table>
    <?php
    $a = isset($_POST['myinput'])
    ? $_POST['myinput']
    : 2;
    for($i=1;$i<=12;$i++) { ?>
        <tr>
            <td><?php echo $a; ?> x <?php echo $i; ?></td>
            <td>=</td>
            <td><?= $a*$i ?></td>
        </tr>
    <?php } ?>    
