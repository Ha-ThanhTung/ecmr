function openLoginForm(){
    document.getElementById("form-login").style.display = "flex";
}
function closeLoginForm(){
    document.getElementById("form-login").style.display = "none";
}
function openRegisterForm(){
    document.getElementById("form-register").style.display = "flex";
}
function closeRegisterForm(){
    document.getElementById("form-register").style.display = "none";
}
function openDonateForm(){
    document.getElementById("form-donate").style.display = "flex";
}
function closeDonateForm(){
    document.getElementById("form-donate").style.display = "none";
}
function openSlideshowForm(){
    document.getElementById("form-slideShow").classList.toggle("show-slider");
}