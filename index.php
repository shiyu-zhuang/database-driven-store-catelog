<?php  include("./connection/db-connect.php"); ?>
    <!DOCTYPE html>
    <html>

    <head>
        <meta charset="utf-8">
        <title>Creamy Cupcakes</title>
        <link rel="stylesheet" href="./css/reset.css">
        <link rel="stylesheet" href="./css/main.css">
        <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">
    </head>

    <body>
        <div class="wrapper">
            <header>
                <div class="masthead">
                    <div class="logo">
                        <div class="content-box">
                            <h1>LOGO</h1> </div>
                    </div>
                </div>
                <div class="nav-bg">
                    <nav>
                        <div class="content-box center">
                            <ul class="navbar clearfix">
                                <li><a href="index.php">Home</a></li>
                                <li><a href="#">Cupcakes</a></li>
                                <li><a href="#">Pies</a></li>
                                <li><a href="#">Cookies</a></li>
                                <li><a href="#">Contact</a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
                <div class="masthead-bg">
                    <div class="content-box">
                        <h1>Creamy Cupcakes</h1> </div>
                </div>
            </header>
            <main>
                <div class="main-content-bg">
                    <div class="clearfix">
                        <h2>The Product List</h2>
                        <div class="container">
                            <ul class="store center">
                                <?php
                                    $query = "SELECT store_id, image, name, price, description
                                             FROM store";
                                    $record_sets = mysqli_query($GLOBALS['conn'], $query);
                                    $collect_html = "";
                                     while ($row = mysqli_fetch_assoc($record_sets)) {
                                         //echo $row["store_id"];
                                        echo "<li class=\"float_l\">
                                              <figure>
                                                 <a href=\"details.php?id={$row["store_id"]}\">
                                                    <img src=\"{$row["image"]}\" alt=\"{$row["description"]}\">
                                                 </a>
                                                 <figcaption>
                                                    <ul>
                                                       <li>
                                                          <p class='center'><a href=\"details.php?id={$row["store_id"]}\">{$row["name"]}</a></p>
                                                       </li>
                                                       <li>
                                                          <p class='center'>price: {$row["price"]}/piece</p>
                                                       </li>
                                                    </ul>
                                                 </figcaption>
                                              </figure>
                                           </li>";
                                    }
                               ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </main>
            <footer>
                <div class="footer-bg">
                    <div class="content-box">
                        <p>&copy; 2017 Creamy Cupcakes</p>
                    </div>
                </div>
            </footer>
        </div>
    </body>

    </html>