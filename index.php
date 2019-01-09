<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Mega menu</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"> -->
    <link rel="stylesheet" type="text/css" href="css/fontawesome.all.css">
    <link rel="stylesheet" type="text/css" href="css/normalize.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
    <!-- Mega Menu -->
    <div class="navbar">
        <a href="#home">Home</a>
        <a href="#news">News</a>
        <div class="dropdown">
            <button class="dropbtn">Dropdown
            <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
            <div class="header">
                <h2>Mega Menu</h2>
            </div>
            <div class="row">
                <div class="column">
                <h3>Category 1</h3>
                <a href="#">Link 1</a>
                <a href="#">Link 2</a>
                <a href="#">Link 3</a>
                </div>
                <div class="column">
                <h3>Category 2</h3>
                <a href="#">Link 1</a>
                <a href="#">Link 2</a>
                <a href="#">Link 3</a>
                </div>
                <div class="column">
                <h3>Category 3</h3>
                <a href="#">Link 1</a>
                <a href="#">Link 2</a>
                <a href="#">Link 3</a>
                </div>
            </div>
            </div>
        </div>
    </div>

    <div style="padding:16px">
    <h3>Responsive Mega Menu (Full-width dropdown in navbar)</h3>
    <p>Hover over the "Dropdown" link to see the mega menu.</p>
    <p>Resize the browser window to see the responsive effect.</p>
    </div>

    <!-- /Mega Menu -->
    <!-- Javascript  -->
    <script src="js/vendor/jquery.min.js"></script>
    <script src="js/vendor/modernizr-3.6.0.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins.js"></script>
</body>
</html>
