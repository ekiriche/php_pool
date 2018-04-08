<html>
    <head>
    <title>Title</title>
    <link href="../css/admin.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="top">
            <a href="../index.php"><H1 class="kek">Paradise</H1></a>
        </div>
        <br>
        <br>
        <br>
        <br>
        <?php 
        session_start();
            if ($_SESSION["logged_on_user"] != "admin") {
          echo "<h1>You don't know da wae</h1>";  ?>
        <?php } else { ?>
        <div id="hello">
            <h2>Yo, you are admin now!</h2>
            <br>
            <div id="buttons">
                <a href="../php/orders.php"><input class="buttons_style" type="button" name="del_user" value="Orders"/></a>
                <br>
                <a href="add_prod.html"><input class="buttons_style" type="button" name="add_product" value="Add product"/></a>
                <br>
                <a href="add_category.html"><input class="buttons_style" type="button" name="add_product_cat" value="Add category"/></a>
                <br>
                <a href="../php/product_table.php"><input class="buttons_style" type="button" name="del_user" value="All products"/></a>
                <br>
                <a href="mod_prod.html"><input class="buttons_style" type="button" name="mod_product" value="Modify product"/></a>
                <br>
                <a href="del_prod.html"><input class="buttons_style" type="button" name="del_product" value="Delete product"/></a>
                <br>
                <a href="delete_category.html"><input class="buttons_style" type="button" name="del_user" value="Delete category"/></a>
                <br>
                <a href="modify_category.html"><input class="buttons_style" type="button" name="del_user" value="Modify category"/></a>
                <br>
                <a href="../php/user_table.php"><input class="buttons_style" type="button" name="del_user" value="Users table"/></a>
                <br>
                <a href="add_user.html"><input class="buttons_style" type="button" name="add_user" value="Add user"/></a>
                <br>
                <a href="mod_user.html"><input class="buttons_style" type="button" name="mod_user" value="Modify user"/></a>
                <br>
                <a href="del_user.html"><input class="buttons_style" type="button" name="del_user" value="Delete user"/></a>
            </div>
        </div>
        <?php }?>
        <div id="bottom">
            <p id="authors">Authors:<br/>ekiriche<br/>mstorcha</p>
        </div>
    </body>
</html>
