<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>List of users</title>
</head>
<body>
    <table>
    <tr>
    <td>ID</td>
    <td>NAME</td> 
    <td>CONTACT</td>   
    <td>STATUS</td>
    </tr>
    <?php  foreach($users as $user){ ?>
    <tr>
    <td><?php echo $user['id']; ?> </td></br>
    <td><?php echo $user['name']; ?> </td></br>
    <td><?php echo $user['contact']; ?> </td></br>
    <td><?php echo $user['status']; ?> </td></br>
    </tr>
    <?php } ?>
    </table>

</body>
</html>