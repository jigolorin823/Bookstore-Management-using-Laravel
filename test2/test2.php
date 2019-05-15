<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div>
        <form action="test2.php" method="POST">
            <table>
                <th>Select</th>
                <th>Fruit</th>
                <th>Price</th>
                <tr>
                    <td><input id="0" name="asd[]" type="checkbox" onclick="test()" value="50"></td>
                    <td>Apple</td>
                    <td>50</td>
                </tr>
                <tr>
                    <td><input id="1" name="asd[]" type="checkbox" value="60"></td>
                    <td>Manga</td>
                    <td>60</td>
                </tr>
                <tr>
                    <td><input id="2" name="asd[]" type="checkbox" value="45"></td>
                    <td>Orange</td>
                    <td>45</td>
                </tr>
            </table>
            <input type="submit" name="submit">
        </form>
    </div>
    <div>
        <?php
            $str = "";
            $sum = 0;
            if (isset($_POST['submit'])) {
                if (!empty($_POST['asd'])) {
                    $checked_count = count($_POST['asd']);
                    echo "You have selected following " . $checked_count . " option(s): <br/>";
                    foreach ($_POST['asd'] as $selected => $key) {
                        if($selected == 0) {
                            $str += "<br>Apple " . $key;
                        }
                        echo "<p>" . $selected . "</p> " . $key;
                    }
                }
            }
        ?>
    </div>
</body>
</html>