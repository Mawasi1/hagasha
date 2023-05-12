<!DOCTYPE html>
<html>

<head>
    <title>Add product form</title>
</head>

<body>
    <h2>Welcome</h2>
    <h3>
        Name:
        <?php echo $_GET["item"]; ?><br>
        Colors:<br>
        <? foreach ($_GET['colors'] as $value) {
            echo $value . ' ';
        } ?> <br>
        Product size: <?php echo $_GET["size"]; ?><br>
        Closet: <?php echo $_GET["closet"]; ?><br>
        Category: <?php echo $_GET["category"]; ?><br>
        Brand name: <?php echo $_GET["brand"]; ?><br>
</body>

</html>