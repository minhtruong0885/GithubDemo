<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>

    <body>
        <?php
        include 'header.php';
        ?>
        <div class="container">
            <header>
                <h3><span class="glyphicon glyphicon-user"></span> Thanh Toán</h3>
            </header>
        </div>
        <div class="container">
            <h2>Thanh Toán</h2>
            <form class="form-group">
                <div class=" form-group">

                    <h4>Phương thức Thanh Toán</h4>                   

                    <div class="form-inline">
                        <div class="form-group radio">
                            <img width="100" height="100" src="Content/images/paypad.jpg" alt=""/>
                            <input  type="radio" name="pttt" value="paypad">
                        </div>
                        <div class="form-group radio">
                            <img width="100" height="100" src="Content/images/paypad.jpg" alt=""/>
                            <input  type="radio" name="pttt" value="paypad">
                        </div>
                        <div class="form-group radio">
                            <img width="100" height="100" src="Content/images/paypad.jpg" alt=""/>
                            <input  type="radio" name="pttt" value="paypad">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label>Giá trị thanh toán: </label>
                        <label>000</label>
                    </div>
                    
                    <div class="form-group">        
                        <div class="col-sm-offset-4 col-sm-8">
                            <button type="submit" class="btn btn-success">Thanh toán</button>
                        </div>
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
