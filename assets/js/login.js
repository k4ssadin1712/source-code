const validRegex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
const handeFormSubmit = () => { // arrow funtion
    // Nếu mà điều kiện cần kiểm tra là thỏa mãn => return true;
    let checkValidate = true;
    let username =  $("input[name=username]").val().trim();
    let password =  $("input[name=password]").val().trim();
   
    // Check validate của username
    if(!username){ // có ! là không có giá trị hoặc là false
        alert("Tên đăng nhập không được để trống");
        return false;
    } else if(username.indexOf(' ') >= 0) { // Kiểm tra tên chỉ được viết liền không có khoảng trắng
        alert("Tên đăng nhập không được chứa ký tự khoảng trắng");
        return false;
    }

    if(!password){ 
        alert("Mật khẩu không được để trống");
        return false;
    } else if (password.length < 3 || password.length > 15) {
        alert("Mật khẩu phải có độ dài từ 3 đến 15 ký tự");
        return false;
    }




    // Check validate fullname => không được để trống
    // Check validate password => không được để trống, min: 3 ký tự, max: 15 ký tự
    // Check validate re_password => không được khác password
    // Check validate phone => không được bỏ trống, phải là số, đủ 10 ký tự
    // Check validate birthday => không được bỏ trống





    /**
     * const => hằng số => khai báo 1 lần duy nhất và được án giá trị => ko thay đổi được giá vị
     *  */ 
    
    return true;
}
console.log('xxxxx')

