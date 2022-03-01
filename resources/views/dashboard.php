<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/main.css">
</head>

<body>

    <h1>Users</h1>
    <ul>
    <?php foreach($data['users'] as $user) : ?>
        <li><?php echo $user->firstname ?></li>
    <?php endforeach; ?>
    </ul>
    
</body>

</html>