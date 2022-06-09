<?php

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table cellpadding="0" cellspacing="0" width="100%">
<tr>
        <td width = "20%">First Name</td>
        <td width = "20%">Last Name</td>
        <td width = "10%"> Age</td>
        <td width = "30%">Address</td>
        <td width = "10%">City</td>
</tr>

        <?php foreach($csvData as $field){?>
            <tr>
                <td><?php echo $field['fname']?></td>
                <td><?php echo $field['lname']?></td>
                <td><?php echo $field['age']?></td>
                <td><?php echo $field['address']?></td>
                <td><?php echo $field['city']?></td>
            </tr>
        <?php }?>
</table
</body>
</html>










?>