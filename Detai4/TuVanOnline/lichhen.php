
<html>      
    <body>
        <script type="text/javascript" src="../js/jquery-1.11.0.min.js"></script>
        <script type="text/javascript" src="../js/jquery.e-calendar.js"></script>
        <link rel="stylesheet" href="../css/jquery.e-calendar.css"/>
        <script src="js/index.js" type="text/javascript"></script>
        <?php
        include 'header2.php';
        ?>
        <div class="container">
            <header>
                <h3><span class="glyphicon glyphicon-user"></span> Customers</h3>
            </header>
        </div>
        <div class="view">
            <div class="container">
                <form >
                    <div class="form-group">
                        <h2>Lịch hẹn:</h2>
                        <div class="calendar" id="calendar"></div>
                    </div>
                </form>
            </div>
        </div>
        <?php
        include 'footer.php';
        ?>

    </body>
</html>
