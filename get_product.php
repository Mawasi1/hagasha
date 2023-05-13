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
            <!--    Hamburger menu-->
            <div class="col-4 mb-2 mb-md-0 header-hamburger">
                <button class="btn " type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample"
                    aria-controls="offcanvasExample">
                    <img src="./images/icons/hamburger.png" height="40" width="40">
                </button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample"
                    aria-labelledby="offcanvasExampleLabel">
                    <!--        hamburger contents-->
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasExampleLabel">Offcanvas</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <div>
                            Some text as placeholder. In real life you can have the elements you have chosen. Like,
                            text, images, lists, etc.
                        </div>
                        <div class="dropdown mt-3">
                            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown">
                                Dropdown button
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!--    logo      -->
            <div class="col-4 d-flex col-md-auto mb-2 justify-content-center mb-md-0 header-logo">
                <a class="clother-logo" href="./index.html"> <img src="./images/icons/new_logo.png" class=""
                        height="40"></a>
            </div>
            <!--    User panel    -->
            <div class="col-4 d-flex justify-content-end text-end header-user-menu">
                <div class="flex-shrink-0 dropdown">
                    <button class=" btn d-block link-dark text-decoration-none dropdown-toggle" type="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="https://github.com/mdo.png" alt="mdo" width="32" height="32" class="rounded-circle">
                    </button>
                    <ul class="dropdown-menu text-small shadow dropdown-menu-end">
                        <li><a class="dropdown-item" href="#">New project...</a></li>
                        <li><a class="dropdown-item" href="#">Settings</a></li>
                        <li><a class="dropdown-item" href="#">Profile</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Sign out</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>

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
                    <div class="row py-3">
                        <div class=container-sm>
                            <?php $src = './images/shirts/flannel-striped-shirt.png';
                            ?>
                            <img src='<?php echo $src ?>'>
                        </div>
                        <div class="row">
                            <div class="col-6 mx-auto">
                                <div class=" mx-auto clothingLine d-block"></div>
                            </div>
                        </div>
                        <h3>
                            Name:
                            <?php echo $_GET["item"]; ?><br>

                            Colors:<br>
                            <div class="col-6 text-center">
                                <?php $src1 = './images/colors/red1.png';
                                $src2 = './images/colors/red2.png';
                                $src3 = './images/colors/red3.png'; ?>
                                <img src='<?php echo $src1 ?>'>
                                <img src='<?php echo $src2 ?>'>
                                <img src='<?php echo $src3 ?>'>
                            </div>
                            Product size:
                            <?php echo $_GET["size"]; ?><br>

                            Closet:
                            <?php echo $_GET["closet"]; ?><br>

                            Category:
                            <?php echo $_GET["category"]; ?><br>

                            Brand name:
                            <?php echo $_GET["brand"]; ?><br>
                        </h3>

                    </div>
                </div>

</body>

</html>