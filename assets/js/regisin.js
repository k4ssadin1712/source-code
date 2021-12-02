const validRegex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
const handeFormSubmit = () => { // arrow funtion
    // Nếu mà điều kiện cần kiểm tra là thỏa mãn => return true;
    let checkValidate = true;
    let username = $("input[name=username]").val();
   
    let email = $("input[name=email]").val();
    let fullname = $("input[name=fullname]").val();
    let password = $("input[name=password]").val();
    let re_password = $("input[name=re_password]").val();
    let phone = $("input[name=phone]").val();
    let gender = $("input[name=gender]:checked").val();
    let birthday = $("input[name=birthday]").val(); 
    // Check validate của username
    if(!username){ // có ! là không có giá trị hoặc là false
        alert("Tên đăng nhập không được để trống");
        return false;
    } // Kiểm tra tên chỉ được viết liền không có khoảng trắng

    // Check validate của email
    if(!email) {
        alert ("Email không được để trống");
        return false;
    }  else if (!email.match(validRegex)) {// kiểm tra có phải là mail không
        alert("Không đúng định dạng email");
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
    
    return false;
}

