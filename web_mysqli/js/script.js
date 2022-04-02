let menu = document.querySelector("#menu-btn");
// menu chứa thẻ có id là menu-btn
let navbar = document.querySelector(".navbar");
// navbar thì chứa thẻ có class là narbar 
// 2 dòng đầu là tạo biến
menu.onclick = () => {
    menu.classList.toggle("fa-times");
    navbar.classList.toggle("active");
};
// khi click nào menu nó sẽ thêm class fa-times vô thẻ có id menu-btn.thêm class active vô class navbar

document.querySelector("#login-btn").onclick = () => {
    document.querySelector(".login-form-container").classList.toggle("active");
};
// khi click vào nút login thì thêm class active vô thẻ chứa class login-form-container
document.querySelector("#close-login-form").onclick = () => {
    document.querySelector(".login-form-container").classList.remove("active");
};
// này thì click vào chữ X nó xoá class active
window.onscroll = () => {

    if (window.scrollY > 0) {
        document.querySelector(".header").classList.add("active");
    } else {
        document.querySelector(".header").classList.remove("active");
    }
};
// back to top
$(document).ready(function(){ 
    $(window).scroll(function(){ 
        if ($(this).scrollTop() > 100) { 
            $('#on_top').fadeIn(); 
        } else { 
            $('#on_top').fadeOut(); 
        } 
    }); 
    $('#on_top').click(function(){ 
        $("html, body").animate({ scrollTop: 0 }, 600); 
        return false; 
    }); 
});


