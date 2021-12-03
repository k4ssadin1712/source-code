<?php include_once('./master_layout/header.php') ?>

<?php
$errors = []; // biến để lưu tất cả các lỗi ở server thực hiện và trả về cho người dùng
if (isset($_POST['submit'])) {
    /**
     * isset là kiểm tra có tại tại biến không?
     * $_POST: phương thức post của form 
     * $_POST['submit']: lấy giá trị trong phương thức post của form với name là submit
     * $_POST['username']: lấy giá trị trong phương thức post của form với name là username
     */
    $username =  $_POST['username'];
    $email =  $_POST['email'];
    $fullname =  $_POST['fullname'];
    $password =  $_POST['password'];
    $gender =  $_POST['gender'];
    $birthday =  $_POST['birthday'];

    if (empty($fullname)) { // là kiểm tra giá trị của biến có khác null hoặc rỗng không
        $errors[] = "Tên đầy đủ không được để trống"; // thêm thông thông báo vào trong mảng
    }

    // Làm việc với database
}
?>
<!-- Giao diện đăng ký -->
<div class="container">
    <div class="row">
        <div class="col col-md-6 col-md-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Đăng ký
                </div>
                <div class="panel-body">
                    <?php if (count($errors) > 0) : ?>
                        <?php for ($i = 0; $i < count($errors); $i++) : ?>
                            <p class="errors" style="color: red;"> <?php echo $errors[$i]; ?> </p>
                        <?php endfor; ?>
                    <?php endif; ?>
                    <form method="post" action="" onsubmit="return handeFormSubmit();">
                        <div class="form-group">
                            <label for="username">Tên đăng nhập</label>
                            <input type="text" class="form-control" name="username" id="username" placeholder="Nhập tên" value="Hien">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" name="email" id="email" placeholder="Nhập Email" value="ahien1512@gmail.com">
                        </div>
                        <div class="form-group">
                            <label for="fullname">Tên đầy đủ</label>
                            <input type="text" class="form-control" name="fullname" id="fullname" placeholder="Nhập tên đầy đủ" value="duyHien">
                        </div>
                        <div class="form-group">
                            <label for="password">Mật khẩu</label>
                            <input type="password" class="form-control" name="password" id="password" placeholder="Mật khẩu" value="1234">
                        </div>
                        <div class="form-group">
                            <label for="re_password">Nhập lại mật khẩu</label>
                            <input type="password" class="form-control" name="re_password" id="re_password" placeholder="Nhập lại mật khẩu" value="1234">
                        </div>
                        <div class="form-group">
                            <label for="phone">Số điện thoại</label>
                            <input type="text" min="10" max="10" class="form-control" name="phone" id="phone" placeholder="Nhập số điện thoại" value="0123456789">
                        </div>
                        <div class="form-group">
                            <label for="gender">Giới tính</label>
                            <div class="radio-inline" for="male">
                                <input class="form-check-input" type="radio" name="gender" id="male" value="NAM" checked>
                                Nam

                            </div>
                            <div class="radio-inline" for="female">
                                <input class="form-check-input" type="radio" name="gender" id="female" value="NU">
                                Nữ
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="birthday">Ngày sinh</label>
                            <input type="date" class="form-control" name="birthday" id="birthday" placeholder="Nhập ngày sinh" value="2021-12-15">
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-xs-6"><button type="submit" name="submit" class="form-control btn btn-primary mt-4">Đăng Ký</button></div>
                                <div class="col-xs-6"><button type="reset" class="form-control btn btn-primary mt-4">Trở lại</button></div>
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
<?php include_once('./master_layout/footer.php') ?>
<script src="./assets/js/regisin.js"></script>