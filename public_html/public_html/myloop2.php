<form method="post">
    <label for="start">Start : </label><br>
    <input name="start" type="text"
    value="<?php
    echo isset($_POST['start'])
    ? $_POST['start']
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