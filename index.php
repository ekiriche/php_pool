<html>
    <head>
        <title>UNITShop</title>
        <meta charset="UTF-8" />
        <link href="css/main1.css" rel="stylesheet" type="text/css" />
        <link rel="shortcut icon" href="https://unit.ua/img/vi.jpg"/>
        <style>
            .printed_div {
                border: 2px solid green;
                height: auto;
                width: auto;
            }
            #printed_div_img {
                height: 200px;
                width: 200px;
            }
            .description {
            }
        </style>
    </head>
    <body>

        <div id="top">
            <a href="index.php"><H1 id="kek">Paradise</H1></a>
            <form id="search_form">
                <input class="search" />
                <input id="search_button" name="submit" type='submit' value="OK">
            </form>
            <div>
                <div id="bucket">
                    <a href="php/bucket.php"><img id="bucket_img" src="sources/bucket.png"></a>
                </div>
            </div>
        </div>

        <div id="center">
            <form method="post" action="./php/sort_category.php" class="center_item" id="kategory">
                <div class="dropdown">
                    <p id="list_header">Choose category</p>
                    <div class="dropdown_menu">
                        <?php
                            $acc = unserialize(file_get_contents("./data/categories"));
                            foreach ($acc as $key => $value)
                            {
                                echo "<input type='submit' name='$key' value='".$value["category"]."' id='list_elem'/>";
                            }
                            echo "<input type='submit' name='all' value='all' id='list_elem'/>";
                        ?>
                    </div>
                </div>
            </form>
            <div class="center_item" id="user">
                <p id="authorise">Hello,
                        <?php
                            session_start();
                            if (!$_SESSION["logged_on_user"])
                                echo "<a href=\"./html/login.html\"> want to login?</a>";
                            else
                                echo $_SESSION["logged_on_user"];
                        ?>
                </p>

                <?php
                    if ($_SESSION["logged_on_user"])
                        echo "<a href='../php/exit.php'><p id='exit'>Exit</p></a>";
                ?>
                <?php 
                    if ($_SESSION["logged_on_user"] == "admin")
                        echo "<a href='./html/admin.php'>To duty</a>";
                ?>
            </div>
            <div id="korzina">

            </div>
        </div>

        <div id="tovary">
            <!-- List of stuff here-->
            <?php
            session_start();
            if ($_SESSION["category"] !== null && $_SESSION["category"] !== "all") {
                $i = 0;
                $uns = unserialize(file_get_contents("./data/products"));
                $acc = array();
                foreach ($uns as $el) {
                    if ($el["category1"] === $_SESSION["category"] ||
                        $el["category2"] === $_SESSION["category"] ||
                        $el["category3"] === $_SESSION["category"]) {
                        $acc[] = $el;
                        $i++;
                    }
                }
                if ($i === 0)
                    echo "<h1>No such tovary for category: ".$_SESSION["category"]."</h1>";
            }
            else
                $acc = unserialize(file_get_contents("./data/products"));
            $i = 0;
            echo "<table style='display: flex;justify-content: center;' >";
            foreach ($acc as $key=>$value)
            {
                if ($i % 4 === 0)
                    echo "<tr>";
                echo "<td><form method='post' action='./php/add_to_bucket.php' class='printed_div'>
                    <input type='hidden' name='name' value='".$acc[$key]["name"]."'/>
                    <input type='hidden' name='price' value='".$acc[$key]["price"]."'/>
                    Name: <span class='description'>".$acc[$key]["name"]."</span><br/>Price: <span class='description'>"
                    .$acc[$key]["price"]."</span><br/>"
                    ."<img id='printed_div_img' src='".$acc[$key]["img"]."'/><br/>
                        <input type='submit' name='buy' value='buy'/></form></td>";
                if ($i % 4 === 3)
                    echo "</tr>";
                $i++;
            }
            echo "</table>";
            ?>
        </div>


        <div id="bottom">
            <p id="authors">Authors:<br/>ekiriche<br/>mstorcha</p>
        </div>

    </body>
</html>