<?php include_once('./master_layout/header.php') ?>

<!-- Giao diện đăng nhập -->
<div class="container">
    <div class="row">
        <div class="col col-md-6 col-md-offset-3">
            <div class="panel panel-defaul">
                <div class="panel-heading">
                    Đăng nhập
                </div>
                <div class="panel-body">
                    <form method="" action="">
                        <div class="form-group">
                            <label for="email">Email hoặc tên đăng nhập</label>
                            <input type="text" class="form-control" name="email" id="email"  placeholder="Nhập Email hoặc tên đăng nhập">
                        </div>
                        <div class="form-group">
                            <label for="password">Mật khẩu</label>
                            <input type="password" class="form-control" name="password" id="password" placeholder="Mật khẩu">
                        </div>
                        

                        
                        <button type="submit" class="btn btn-primary mt-4">Đăng nhập</button>
                    </form>
                </div>
            </div>
        </div>
        <!-- <div class="col-sm-12 col-md-5" style="height:100px; background-color: red;">

        </div> -->
    </div>
</div>

<?php  include_once('./master_layout/footer.php') ?>