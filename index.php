<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>PHP</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
        <script src="" async defer></script>
        <form action="./function.php" method="get">
            <input type="text" name="num1" placeholder="Number 1">
            <select name="oper">
                <label>Choose operation!</label>
                <option value="add">Add</option>
                <option value="sub">Subtract</option>
            </select>
            <input type="text" name="num2" placeholder="Number 2">
            <button type="submit">Calculate!</button>
        </form>
    </body>
</html>