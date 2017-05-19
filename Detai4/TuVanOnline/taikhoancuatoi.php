
<html>
    <body>
        <?php
        include 'header2.php';
        ?>

        <div class="slide-animation-container">
            <div class="customers view indent">
                <div class="container">
                    <header>
                        <h3><span class="glyphicon glyphicon-user"></span> Tài khoản của tôi</h3>
                    </header>
                    <div class="row">
                        <div class="col-md-10">
                            <div class="navbar">
                                <ul class="nav navbar-nav">
                                    <li class="toolbaritem">
                                        <a href="taikhoancuatoi.php?view=1">
                                            <span class="glyphicon glyphicon-fingerprint-reload"></span>Thông tin cá nhân
                                        </a>
                                    </li>
                                    <li class="toolbaritem active">
                                        <a href="taikhoancuatoi.php?view=2">
                                            <span class="glyphicon glyphicon-call-traffic"></span> Lịch đã hẹn
                                        </a>
                                    </li>
                                    <li class="toolbaritem">
                                        <a href="taikhoancuatoi.php?view=3">
                                            <span class="glyphicon glyphicon-fingerprint-reload"></span> Thay đổi thông tin cá nhân
                                        </a>
                                    </li>

                                </ul>
                                <form class="navbar-form navbar-right">
                                    <div class="form-group">
                                        <label class="navbarText col-sm-2">Filter:</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="novalidate form-control" />
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <!--begin partial view-->
                        <?php
                        $view = filter_input(INPUT_GET, "view");
                        if ($view == 1) {
                            include './thongtintkcoban.php';
                        } elseif ($view == 2) {
                            include './Partial/listlichhen.php';
                        } else {
                            include './suathongtintaikhoan.php';
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>

        <?php
        include './footer.php';
        ?>
    </body>
</html>
