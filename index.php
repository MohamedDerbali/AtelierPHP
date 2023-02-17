<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $arr = [true, 'hello', 2020, ["name" => "ali"]];
    echo '<table border="1">
    <thead>
    <th>key</th>
    <th>value</th>
    </thead>
    <tbody>';
    foreach ($arr as $key => $item) {
        echo '<tr>';
        echo '<td>' . $key . '</td>';
        echo '<td>';
        if (is_array($item)) {
            echo '{name: ' . $item["name"] . ' }';
        } else {
            echo ($item);
        }
        echo '</td>';
        echo '</tr>';
    }
    echo '</tbody>
    </table>';
    ?>
</body>

</html>