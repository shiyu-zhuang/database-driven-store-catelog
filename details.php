<?php include("./connection/db-connect.php"); 
    if (isset($_GET["delete"])) {
        unset($_SESSION["item_".$_GET["delete"]]);
            if (sizeof($_SESSION) === 0) {
                session_unset();
                session_destroy();
                header("Location: index.php");
            }
    }
?>
<!DOCTYPE html>
    <html>

    <head>
        <meta charset="utf-8">
        <title>Creamy Cupcakes</title>
        <link rel="stylesheet" href="./css/reset.css">
        <link rel="stylesheet" href="./css/main.css">
        <link rel="stylesheet" href="./css/details.css">
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
                    <div class="content-box-detail">
                        <?php if (isset($_GET["id"])) {
                            
                             $query = "SELECT *
                                         FROM store WHERE store_id=".$_GET["id"];
                            
                             $record_sets = mysqli_query($GLOBALS['conn'], $query);
                             $collect_html = "";
                        
                            if(mysqli_num_rows($record_sets) == 1 ) {
                                $row = mysqli_fetch_assoc($record_sets) ;
                                $_SESSION["item_".$_GET["id"]] = $row;
                                
                            } else {         
                                $err = "<p>there is no product with id: </p>" ; $_SESSION["item_".$_GET["id"]];
                            }
                        }
                    
                        
                        if(sizeof($_SESSION) > 0){
                            foreach ($_SESSION as $items){
                                echo "<div class=\"cart-item\">
                                        <figure class='clearfix'>
                                            <img src=\"{$items["image"]}\" alt=\"{$items["description"]}\">
                                            <figcaption>
                                              <ul>
                                                 <li><p>{$items["name"]} @ {$items["price"]}/piece</p></li>
                                                 <li><p>{$items["description"]}</p></li>
                                               </ul>
                                            </figcaption>
                                        </figure>
                                        <a class='clearfix' href=\"details.php?delete={$items["store_id"]}\">Remove Item</a>
                                    </div>";
                            }  
                        }
                    /*echo "<pre>";
                    print_r($_SESSION);
                    echo "</pre>";*/
                    ?>
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