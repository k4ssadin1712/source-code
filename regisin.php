<!-- CSS only -->
<?php
    require "cccc.php"
?>


<div class="container">
    <div class="row">
        <div class="col col-md-6 offset-md-3">
            <div class="card">
                <div class="card-header">
                    Đăng ký
                </div>
                <div class="card-body">
                    <form method="" action="">
                        <div class="form-group">
                            <label for="username">Tên đăng nhập</label>
                            <input type="text" class="form-control" name="username" id="username"  placeholder="Nhập tên" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" name="email" id="email"  placeholder="Nhập Email">
                        </div>
                        <div class="form-group">
                            <label for="fullname">Tên đầy đủ</label>
                            <input type="text" class="form-control" name="fullname" id="fullname"  placeholder="Nhập tên đầy đủ">
                        </div>
                        <div class="form-group">
                            <label for="password">Mật khẩu</label>
                            <input type="password" class="form-control" name="password" id="password" placeholder="Mật khẩu">
                        </div>
                        <div class="form-group">
                            <label for="re_password">Nhập lại mật khẩu</label>
                            <input type="password" class="form-control" name="re_password" id="re_password" placeholder="Nhập lại mật khẩu">
                        </div>
                        <div class="form-group">
                            <label for="phone">Số điện thoại</label>
                            <input type="text" min="10" max="10" class="form-control" name="phone" id="phone"  placeholder="Nhập số điện thoại">
                        </div>
                        <div class="form-group">
                            <label for="gender">Giới tính</label>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="gender" id="male" value="NAM" checked>
                                <label class="form-check-label" for="male" >Nam</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="gender" id="female" value="NU">
                                <label class="form-check-label" for="female">Nữ</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="birthday">Ngày sinh</label>
                            <input type="date" class="form-control" name="birthday" id="birthday"  placeholder="Nhập ngày sinh">
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-6"><button type="submit" class="form-control btn btn-primary mt-4">Đăng Ký</button></div>
                                <div class="col-6"><button type="submit" class="form-control btn btn-primary mt-4">Trở lại</button></div>
                            </div>
                            
                            
                        </div>      

                        
                    </form>
                </div>
            </div>
        </div>
        <!-- <div class="col-sm-12 col-md-5" style="height:100px; background-color: red;">

        </div> -->
    </div>
</div>

<!-- JavaScript Bundle with Popper -->
