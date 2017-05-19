
<html>
    <body>
        <?php
        include 'header.php';
        ?>

        <div class="container">
            <header>
                <h3><span class="glyphicon glyphicon-user"></span> Customers</h3>
            </header>
        </div>
        <div class="view">
            <div class="container">
                <h2>Xin mời Đăng Nhập:</h2>
                <form class="form-horizontal">
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="name">Email:</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="emailphanhoi" placeholder="Nhập Email">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="pwd">Password:</label>
                        <div class="col-sm-10">          
                            <input type="password" class="form-control" id="emailphanhoi" placeholder="Nhập Email">
                        </div>
                    </div>
                    <div class="form-group ">        
                        <div class=" col-sm-offset-2 col-sm-4 form-inline">
                            <div class="checkbox">
                                <div >
                                    <label><input type="checkbox">Ghi Nhớ </label>
                                </div >
                                <div >
                                    <label><input type="checkbox">Bạn là Chuyên gia </label>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <a href="dangki.php">Bạn chưa có tài khoản? Hãy đăng kí !</a>
                        </div>

                    </div>
                    <div class="form-group">        
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-success">Đăng Nhập</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <?php
        include 'footer.php';
        ?>
    </body>
</html>
