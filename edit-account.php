<?php include_once('./master_layout/header.php') ?>
<?php
if (!isset($_SESSION['account'])) {
    header('Location: login.php');
}
require('./connect.php');
$errors = []; // biến để lưu tất cả các lỗi ở server thực hiện và trả về cho người dùng (1 mảng)
$success = ""; // là 1 chuỗi thông báo thành công (1 chuỗi)
date_default_timezone_set("Asia/Ho_Chi_Minh"); // xét timezone (múi giờ)
if (isset($_POST['submit'])) {
    /**
     * isset là kiểm tra có tại tại biến không?
     * $_POST: phương thức post của form 
     * $_POST['submit']: lấy giá trị trong phương thức post của form với name là submit
     * $_POST['username']: lấy giá trị trong phương thức post của form với name là username
     */

    $fullname =  $_POST['fullname'];
    $phone = $_POST['phone'];
    $gender =  $_POST['gender'];
    $birthday =  $_POST['birthday'];
}

?>
<!-- Giao diện đăng nhập -->
<div class="container">
    <div class="row">
        <div class="col col-md-6 col-md-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Sửa thông tin tài khoản
                </div>
                <div class="panel-body">
                    <?php if (count($errors) > 0) : ?>
                        <?php for ($i = 0; $i < count($errors); $i++) : ?>
                            <p class="errors" style="color: red;"> <?php echo $errors[$i]; ?> </p>
                        <?php endfor; ?>
                    <?php endif; ?>
                    <?php if ($success) : ?>
                        <p class="success" style="color: green;"> <?php echo $success; ?> </p>
                    <?php endif; ?>
                    <form method="post" action="" onsubmit="return handeFormSubmit();">
                        <div class="form-group">
                            <label for="fullname">Tên đầy đủ</label>
                            <input type="text" class="form-control" name="fullname" id="fullname" placeholder="Nhập tên đầy đủ" value="duyHien">
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
                            <label for="phone">Số điện thoại</label>
                            <input type="text" min="10" max="10" class="form-control" name="phone" id="phone" placeholder="Nhập số điện thoại" value="0123456789">
                        </div>
                        <div class="form-group">
                            <label for="birthday">Ngày sinh</label>
                            <input type="date" class="form-control" name="birthday" id="birthday" placeholder="Nhập ngày sinh" value="2021-12-15">
                        </div>
                        <button type="submit" class="btn btn-primary mt-4">Sửa thông tin</button>
                    </form>
                </div>
            </div>
        </div>
        <!-- <div class="col-sm-12 col-md-5" style="height:100px; background-color: red;">

        </div> -->
    </div>
</div>
<script src="./assets/js/edit-account.js"></script>
<?php include_once('./master_layout/footer.php') ?>