
<html>
    <body>
        <?php
        include 'header2.php';
        ?>

        <div class="container">
            <header>
                <h3><span class="glyphicon glyphicon-user"></span>Xin mời Đăng Kí:</h3>
            </header>
        </div>
        <div class="view">
            <div class="container">
                
                <form name="editForm" novalidate>
                    <div class="customerEdit">
                        <div class="row">
                            <div class="col-md-12">
                                <h4><span></span></h4>
                                <br />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2">
                                Họ tên:
                            </div>
                            <div class="col-md-10">
                                <input type="text" name="Hotendk" class="form-control"  required />
                            </div>
                        </div>
                        <br />
                        <div class="row">
                            <div class="col-md-2">
                                Giới tính:
                            </div>
                            <div class="col-md-10">
                                <div class="radio">
                                    <label class="radio">
                                        <input type="radio" name="gioitinh" value="nam"/>
                                        Nam
                                    </label>
                                </div>
                                <div class="radio">
                                    <label class="radio">
                                        <input type="radio" name="gioitinh" value="nu"/>
                                        Nữ
                                        <br />
                                    </label>
                                </div>
                            </div>
                        </div>
                        <br />
                        <div class="row">
                            <div class="col-md-2">
                                Email:
                            </div>
                            <div class="col-md-10">
                                <input type="email" name="email" required />
                            </div>
                        </div>
                        <br />
                        <div class="row">
                            <div class="col-md-2">
                                Password:
                            </div>
                            <div class="col-md-10">
                                <input type="password" name="pwd" required />
                            </div>
                        </div>
                        <br />
                        <div class="row">
                            <div class="col-md-2">
                                Nhập lại Password:
                            </div>
                            <div class="col-md-10">
                                <input type="password" name="pwd" required />
                            </div>
                        </div>
                        <br />
                        <div class="row">
                            <div class="col-md-2">
                                Địa chỉ:
                            </div>
                            <div class="col-md-10">
                                <input type="text" name="diachi" class="form-control" required />
                            </div>
                        </div>
                        <br />
                        <div class="row">
                            <div class="col-md-2">
                                Số CMND:
                            </div>
                            <div class="col-md-10">
                                <input type="text" name="soCMND" class="form-control" required />
                            </div>
                        </div>
                        <br />
                        <div class="row">
                            <div class="col-md-2">
                                Số điện thoại:
                            </div>
                            <div class="col-md-10">
                                <input type="text" name="SDT" class="form-control" required />
                            </div>
                        </div>
                        <br />
                        <div class="row">
                            <div class="col-md-2">
                                Phương thức thanh toán:
                            </div>
                            <div class="col-md-10">
                                <div class="radio">
                                    <label class="radio">
                                        <input type="radio" name="pttt" value="Vista"/>
                                        Thẻ Vista
                                    </label>
                                </div>
                                <div class="radio">
                                    <label class="radio">
                                        <input type="radio" name="pttt" value="PAaypad"/>
                                        Paypad
                                        <br />
                                    </label>
                                </div>
                                <div class="radio">
                                    <label class="radio">
                                        <input type="radio" name="pttt" value="Ttn"/>
                                        Thu tại nhà
                                        <br />
                                    </label>
                                </div>
                            </div>
                        </div>
                        <br />
                        <div class="row">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary" >
                                    Đăng kí
                                </button>
                                &nbsp;&nbsp;
                                <button class="btn btn-danger" >Quay lại trang đăng nhập </button>
                            </div>
                        </div>
                        <br />

                    </div>
                </form>
            </div>
        </div>

        <?php
        include 'footer.php';
        ?>
    </body>
</html>
