<html>
    <head>
        <title>UNITShop</title>
        <meta charset="UTF-8" />
        <link href="css/main.css" rel="stylesheet" type="text/css" />
        <link rel="shortcut icon" href="https://unit.ua/img/vi.jpg"/>
        <script>
            function bucket() {
                var shops = document.getElementById("num_shops");

            }
            function show_bucket() {
                var num = document.getElementById("num_shops");
                var str = document.getElementById("num_shops");
                var int_num = parseInt(num) + 1;
                str.innerHTML = String.fromCharCode(int_num);
            }
        </script>
    </head>
    <body>

        <div id="top">
            <H1 id="kek">UnitShop</H1>
            <form id="search_form">
                <input class="search" />
                <input id="search_button" name="submit" type='submit' value="OK">
            </form>
            <div onclick="show_bucket()" id="bucket">
                <img id="bucket_img" src="sources/bucket.png">
                <div id="num_">
                    <p id="num_shops">0</p>
                </div>
            </div>
        </div>

        <div id="center">
            <div class="center_item" id="kategory">
                <p id="list_header">Выберите категорию товара</p>
                <a href="product.php"> <p id="list_elem">lol</p></a>
                <p id="list_elem">shmot</p>
                <p id="list_elem">telefon</p>
                <p id="list_elem">komp</p>
                <p id="list_elem">dom</p>
            </div>
            <div class="center_item" id="user">
                <p id="authorise">Здравствуйте,
                        <?php
                            session_start();
                            if (!$_SESSION["logged_on_user"])
                                echo "<a href=\"login.html\"> to buy some войдите в личный кабинет</a>";
                            else
                                echo $_SESSION["logged_on_user"];
                        ?>
                    <!--<a href="login.html">войдите в личный кабинет</a>-->
                </p>

                <?php
                    if ($_SESSION["logged_on_user"])
                        echo "<a href='./exit.php'><p id='exit'>exit</p></a>";
                ?>
            </div>
            <div id="korzina">

            </div>
        </div>

        <div id="tovary">
            <!-- List of stuff here-->
        </div>


        <div id="bottom">
            <p id="authors">Authors:<br/>ekiriche<br/>mstorcha</p>
        </div>

    </body>
</html>