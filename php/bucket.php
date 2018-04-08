<html>
    <head>
    <title>Title</title>
    <link href="../css/main1.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="top">
            <a href="../index.php"><H1 class="kek">Paradise</H1></a>
        </div>
        <div id="hello">
            <h2>Your bucket</h2>
            <br>
            <div class="login_form">
            <?php 
                session_start();
                if ($_SESSION["logged_on_user"] && file_get_contents("../data/bucket"))
                {
                    $acc = unserialize(file_get_contents("../data/bucket"));
                    foreach ($acc as $item)
                    { $price += $item["price"] * $item["quantity"]; ?>
                        <ul>
                        <li class="bucket"><?php echo $item["name"], " " , $item["quantity"] , "; Price: ", $item["price"] * $item["quantity"], "$", "\n"; ?></li>
                        </ul>
                    <?php }
                }
                ?> <p>Total price: <?php echo $price, "$"; ?></p>
                <br>
                <a href="del_from_bucket.php">Delete all!</a>
                <br>
            <form type="post" action="confirm_buy.php">
                <input type="submit" name="Buy" value="Buy"/>
            </form>
            </div>
        </div>
        <div id="bottom">
            <p id="authors">Authors:<br/>ekiriche<br/>mstorcha</p>
        </div>
    </body>
</html>