<?php
    require "cccc.php"
?>

<div class="modal">
    <div class="modal_overlay">

    </div>
    <div class="modal_body">
        <div class="modal_inner">
             <div class="auth-form" id="auth-form">
                <div class="auth-form_container">
                   <h3 class="auth-form_heading">Đăng ký</h3>

                   <div class="auth-form_form">
                      <div class="auth-form_group">
                         <input type="text" class="auth-form_input" placeholder="Email...">
                      </div>
    
                      <div class="auth-form_group">
                         <input type="password" class="auth-form_input" placeholder="Mật khẩu...">
                      </div>

                      <div class="auth-form_group">
                         <input type="password" class="auth-form_input" placeholder="Xác nhận mật khẩu...">
                      </div>
                   </div>

                   <div class="auth-form_control">
                    <button class="btn">Trở lại</button>
                    <button class="btn_primary">Đăng ký</button>
                   </div>
    
                   <div class="auth-form_aside">
                    <p class="auth-form_policy-text">
                    Bạn đã có tài khoản. Đăng nhập
                    <a href="" class="auth-form_text-link">tại đây</a>
                    </p>
                   </div>
                </div>
             </div>
        </div>
    </div>
</div>


<style>

.modal{
    position: fixed;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    display: flex;
}

.modal_overlay{
    position: absolute;
    width: 100%;
    height: 100%;
    background-color: rgba(0,0,0,0.4);
}

.modal_body{
    
    background-color: white;
    margin: auto;
    position: relative;
    border-radius: 5px;
}

.auth-form_container{
    padding: 0 30px;
}

.auth-form_heading{
    font-size: 30px;
    font-weight: 700;
    color: #282c40;
    line-height: 35px;
    margin-top: 10px;
}

.auth-form_btn{
    font-size: 
}

.auth-form_input{
    width: 350px;
    height: 40px;
    margin-top: 16px;
    padding: 0 12pxx;
    font-size: 1rem;
    border: 1px solid #000;
    border-radius: 2px;
    outline: none;
    padding: 0 12px;
}

.auth-form_aside{
    margin-top: 18px;
    margin-bottom: 28px;
}

.auth-form_policy-text{
    font-size: 1.0rem;
    line-height: 1.8rem;
    text-align: center  ;
    padding: 0 12px;
}

.auth-form_text-link{
    text-decoration: none;
    color: #203864;

}

.auth-form_control{
    padding-top: 33px;
}

.auth-form_help{
    display: flex;
    justify-content: flex-end;
}

.auth-form_help-link{
    text-decoration: none;
    color: #00739f;
    font-size: 1rem;
    margin-top: 8px;
}

.auth-form_control{
    margin-top: 0px;
    display: flex;
    justify-content: flex-end;
}

.btn{
    width: 120px;
    height: 36px;
    text-decoration: none;
    border: none;
    border-radius: 2px;
    font-size: 15px;
    padding: 0;
    cursor: pointer;
    outline: none;
    margin-right: 8px;
}

.btn:hover{
    background-color: rgba(0,0,0,0.05)
}

.btn_primary{
    width: 120px;
    height: 36px;
    background-color: #203864;
    color: #fff;
    border-radius: 2px;
    font-size: 15px;
    justify-content: center;
    align-items: center;
    cursor: pointer;
    outline: none;
}
</style>
