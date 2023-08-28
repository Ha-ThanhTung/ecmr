function validateForm() {
    var isValid = true;
    // Validate Họ và tên
    var username = document.querySelector('input[name="username"]');
    if (username.value.trim() === "") {
        username.classList.add("error");  
        isValid = false;
    } else {
        username.classList.remove("error");
    }

    // Validate Tài khoản
    var useraccount = document.querySelector('input[name="useraccount"]');
    if (useraccount.value.trim() === "") {
        useraccount.classList.add("error");
        isValid = false;
    } else {
        useraccount.classList.remove("error");
    }    
    
    // Validate Mật khẩu
    var userpassword = document.querySelector('input[name="userpassword"]');
    if (userpassword.value.trim() === "") {
        userpassword.classList.add("error");
        isValid = false;
    } else {
        userpassword.classList.remove("error");
    }    
    
    // Validate useremail
    var useremail = document.querySelector('input[name="useremail"]');
    var useremailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!useremailPattern.test(useremail.value)) {
        useremail.classList.add("error");
        isValid = false;
    } else {
        useremail.classList.remove("error");
    }
    

    // Validate Giới tính
    var genderRadio = document.querySelectorAll('input[name="usersex"]');
    var genderSelected = false;
    for (var i = 0; i < genderRadio.length; i++) {
        if (genderRadio[i].checked) {
            genderSelected = true;
            break;
        }
    }
    if (!genderSelected) {
        isValid = false;
        document.querySelector('.form-group').classList.add("error");
    } else {
        document.querySelector('.form-group').classList.remove("error");
    }
    // Validate Quốc tịch
    var usernationalitySelect = document.querySelector('select[name="usernationality"]');
    if (usernationalitySelect.value === "") {
        isValid = false;
        usernationalitySelect.classList.add("error");
    } else {
        usernationalitySelect.classList.remove("error");
    }
    // Validate Nghề nghiệp
    var userjobSelect = document.querySelector('select[name="userjob"]');
    if (userjobSelect.value === "") {
        isValid = false;
        userjobSelect.classList.add("error");
    } else {
        userjobSelect.classList.remove("error");
    }
    // Validate Ghi chú
    var usernoteTextarea = document.querySelector('textarea[name="usernote"]');
    if (usernoteTextarea.value.length > 200) {
        usernoteTextarea.classList.add("error");
        isValid = false;
    } else {
        usernoteTextarea.classList.remove("error");
    }

    return isValid;
}