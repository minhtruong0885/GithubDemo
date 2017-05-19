
<html>
    <body>
        <?php
        include 'header2.php';
        ?>
        <div class="container">
            <header>
                <h3><span class="glyphicon glyphicon-user"></span> Customers</h3>
            </header>
        </div>
        <div class="slide-animation-container">
            <div class="customers view indent">
                <div class="container">

                    <h3><span class="glyphicon glyphicon-user"></span> Danh sách lĩnh vực</h3>

                    <div class="container">
                        <!--begin partial view-->
                        <?php
                        include './Partial/listlinhvuc.php';
                        ?>
                    </div>
                </div>
            </div>
        </div>

        <?php
        include 'footer.php';
        ?>
    </body>
</html>
