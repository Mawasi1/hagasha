<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
    <script src="./js/script.js"></script>
    <link rel="stylesheet" href="./css/style.css">
    <title>Add product form</title>
</head>

<body>
    <header class="p-4 py-3 border-bottom">
        <div class="d-flex align-items-center justify-content-center justify-content-md-between "
            style="grid-template-columns: 1fr 2fr;">

        </div>
        <!--    logo      -->
        <div class="col-4 d-flex col-md-auto mb-2 justify-content-center mb-md-0 header-logo">
            <a class="clother-logo" href="./index.html"> <img src="./images/icons/new_logo.png" class=""
                    height="40"></a>
        </div>

        </div>
    </header>

    <div class="container-fluid ">

        <div class="container">
            <div class="container main-container">
                <div class="container text-left">
                    <div class="row">
                        <div class="col">
                            <h1>Added products details:</h1>
                        </div>
                    </div>
                </div>

                <div class="container text-center">
                    <div class="row row-added-product">
                        <h3>
                            Name:
                            <?php echo $_GET["item"]; ?><br>
                            <div class="row">
                                <div class="col-6 mx-auto">
                                    <div class=" mx-auto clothingLine d-block"></div>
                                </div>
                            </div>
                            Colors:<br>
                            <? foreach ($_GET['colors'] as $value) {
                                echo $value . ' ';
                            } ?> <br>
                            <div class="row">
                                <div class="col-6 mx-auto">
                                    <div class=" mx-auto clothingLine d-block"></div>
                                </div>
                            </div>
                            Product size:
                            <?php echo $_GET["size"]; ?><br>
                            <div class="row">
                                <div class="col-6 mx-auto">
                                    <div class=" mx-auto clothingLine d-block"></div>
                                </div>
                            </div>
                            Closet:
                            <?php echo $_GET["closet"]; ?><br>
                            <div class="row">
                                <div class="col-6 mx-auto">
                                    <div class=" mx-auto clothingLine d-block"></div>
                                </div>
                            </div>
                            Category:
                            <?php echo $_GET["category"]; ?><br>
                            <div class="row">
                                <div class="col-6 mx-auto">
                                    <div class=" mx-auto clothingLine d-block"></div>
                                </div>
                            </div>
                            Brand name:
                            <?php echo $_GET["brand"]; ?><br>
                        </h3>

                    </div>
                </div>

</body>

</html>