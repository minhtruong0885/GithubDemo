
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
        <div class="view">
            <div class="container">
                <h2>Thông tin liên hệ:</h2>
                <form class="form-horizontal">
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="name">Tên của bạn:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="hotenphanhoi" placeholder="Nhập Tên">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="email">Email:</label>
                        <div class="col-sm-10">          
                            <input type="email" class="form-control" id="emailphanhoi" placeholder="Nhập Email">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="ykien">Ý kiến của bạn:</label>
                        <div class="col-sm-10">          
                            <input type="textarea" class="form-control" id="ykienphanhoi" placeholder="Nhập Ý kiến của bạn">
                        </div>
                    </div>
                    <div class="form-group">        
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-default">Gửi</button>
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
