<html>
    <head>
        <title> LOGIN </title>
        <style type = "text/css">
        #hasil{width:600px; margin:0 auto; padding : 10px; font-weight : bold; color : #f00;}
        body{padding:0; margin:0; font-family:array_fill; font-size:15px;}
        #main-wrapper{border:5px double #00CED1; padding:5px; width:500px; margin:20px auto 0;}
        #main{text-align:left; padding:5px; background:#B0E0E6;}
        table{font-size:15; width:450px;}
        #prn{border:2px solid #b3ccf7; background:#c3d9ff; cursor:pointer; padding:2px 24px;}
        h1{font-size:20px; font-weight:bold; padding:15px 0; text-align:center;}
        #efri{font-size:12px; padding:5px 0 0; color:#0000ff; text-align:center;} blue{font-weight:bold; color:#f00;}
        body {
            background : #e0ffff
        }
        </style>
        </head>

        <body>
            <div id ="main-wrapper">
                <div id="main">
                    <h4><b> USER INTERFACE <b></h4>
                    <br>
                    <form method = "POST" action="kedua.php">
                    <?php
                        $username = $_POST["Username"];
                        $password = $_POST["Password"];
                        echo "<br>";

                        if ($_POST["submit"] == "SIGN IN") {

                        }
                        if ($username == "Natasya" && $password="1008") {
                        echo "SIGN IN SUCCES";
                        } else {
                            echo "OOPS!";
                        }
                    ?>
                    </form>
                </div>
                </div>
        </body>
</html>

