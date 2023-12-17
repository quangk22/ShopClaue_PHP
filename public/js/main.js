const showMenuButton = document.querySelector("#show-menu");
const menuShow = document.querySelector("#menu");
const header2 = document.querySelector('.header2');

// Hàm để hiển thị hoặc ẩn menu
function toggleMenu() {
    if (menuShow) { // Kiểm tra xem menuShow có tồn tại không
        menuShow.classList.toggle("hidden");
    }
}

// Sự kiện khi click vào show-menu
if (showMenuButton) { // Kiểm tra xem showMenuButton có tồn tại không
    showMenuButton.addEventListener("click", function (event) {
        event.stopPropagation(); // Ngăn chặn sự kiện click xung quanh lan truyền vào menu
        toggleMenu();
    });
}

// Sự kiện khi click bất kỳ nơi nào trên tài liệu (để ẩn menu)
document.addEventListener("click", function () {
    if (menuShow && !menuShow.classList.contains("hidden")) { // Kiểm tra menuShow có tồn tại và không ẩn
        toggleMenu();
    }
});

// Ngăn chặn sự kiện click trên menu lan truyền lên tài liệu
if (menuShow) { // Kiểm tra xem menuShow có tồn tại không
    menuShow.addEventListener("click", function (event) {
        event.stopPropagation();
    });
}

// phần này cho menu
window.addEventListener('scroll', function () {
    if (header2 && window.scrollY > 0) { // Kiểm tra header2 có tồn tại và xử lý khi cuộn trang
        header2.classList.add('fixed', 'top-0', 'left-0', 'right-0');
    } else if (header2) { // Kiểm tra header2 có tồn tại và xử lý khi không cuộn
        header2.classList.remove('fixed', 'top-0', 'left-0', 'right-0');
    }
});

// 
function decreaseQuantity() {
    var input = document.getElementById('customNumberInput');
    if (input.value > 1) {
        input.value = parseInt(input.value) - 1;
    }
    input.dispatchEvent(new Event('input')); // Kích hoạt sự kiện input để cập nhật giá trị
}

function increaseQuantity() {
    var input = document.getElementById('customNumberInput');
    input.value = parseInt(input.value) + 1;
    input.dispatchEvent(new Event('input')); // Kích hoạt sự kiện input để cập nhật giá trị
}

function submitForm() {
    document.getElementById('addToCartForm').submit();
}
// Lấy tham chiếu đến phần tử <input> và các nút
document.addEventListener("DOMContentLoaded", function () {
    const numberInputs = document.querySelectorAll('.customNumberInput');
    const decreaseButtons = document.querySelectorAll('.decreaseButton');
    const increaseButtons = document.querySelectorAll('.increaseButton');

    function clamp(value, min, max) {
        return Math.min(Math.max(value, min), max);
    }
    
    function handleInputChange(index, event) {
        const input = numberInputs[index];
        const value = parseInt(input.value, 10);
    
        if (!isNaN(value)) {
            input.value = clamp(value, 1, Infinity);
        }
    }
    
    function handleDecreaseClick(index, event) {
        const input = numberInputs[index];
        const value = parseInt(input.value, 10);
    
        if (!isNaN(value) && value > 1) {
            input.value = value - 1;
        }
    }
    
    function handleIncreaseClick(index, event) {
        const input = numberInputs[index];
        const value = parseInt(input.value, 10);
    
        if (!isNaN(value)) {
            input.value = value + 1;
        }
    }
    
    numberInputs.forEach((input, index) => {
        input.addEventListener('input', handleInputChange.bind(null, index));
    });
    
    decreaseButtons.forEach((button, index) => {
        button.addEventListener('click', handleDecreaseClick.bind(null, index));
    });
    
    increaseButtons.forEach((button, index) => {
        button.addEventListener('click', handleIncreaseClick.bind(null, index));
    });
});
// 
const btnDescription = document.getElementById("btn-description");
const Description = document.getElementById("description");
const btnAdditional = document.getElementById("btn-additional");
const Additional = document.getElementById("additional");
const btnReviews = document.getElementById("btn-reviews");
const Reviews = document.getElementById("reviews");

// Thêm sự kiện cho nút Description
if (btnDescription) {
    btnDescription.addEventListener("click", function () {
        Description.classList.remove("hidden");
        Additional.classList.add("hidden");
        Reviews.classList.add("hidden");
        btnAdditional.style.border = "none";
        btnAdditional.style.color = "#878787";

        // Ẩn border và đổi màu sắc của nút Reviews
        btnReviews.style.border = "none";
        btnReviews.style.color = "#878787";

        // Thay đổi border và màu sắc của nút Description (tuỳ chọn)
        btnDescription.style.border = "1px solid #878787";
        btnDescription.style.color = "black";
    });
}

// Thêm sự kiện cho nút Additional information
if (btnAdditional) {
    btnAdditional.addEventListener("click", function () {
        Description.classList.add("hidden");
        Additional.classList.remove("hidden");
        Reviews.classList.add("hidden");
        btnAdditional.style.border = "1px solid #878787";
        btnAdditional.style.color = "black";

        // Ẩn border và đổi màu sắc của nút Description
        btnDescription.style.border = "none";
        btnDescription.style.color = "#878787";

        // Ẩn border và đổi màu sắc của nút Reviews
        btnReviews.style.border = "none";
        btnReviews.style.color = "#878787";
    });
}

// Thêm sự kiện cho nút Reviews
if (btnReviews) {
    btnReviews.addEventListener("click", function () {
        Description.classList.add("hidden");
        Additional.classList.add("hidden");
        Reviews.classList.remove("hidden");
        btnReviews.style.border = "1px solid #878787";
        btnReviews.style.color = "black";

        // Ẩn border và đổi màu sắc của nút Description
        btnDescription.style.border = "none";
        btnDescription.style.color = "#878787";

        // Ẩn border và đổi màu sắc của nút Additional
        btnAdditional.style.border = "none";
        btnAdditional.style.color = "#878787";
    });
}
// 
// sliderSP

document.addEventListener('DOMContentLoaded', function () {
    const nextButton = document.getElementById('next');
    const prevButton = document.getElementById('prev');

    if (nextButton) {
        nextButton.onclick = function () {
            let lists = document.querySelectorAll('.card');
            document.getElementById('slide').appendChild(lists[0]);
        }
    }
    if (prevButton) {
        prevButton.onclick = function () {
            let lists = document.querySelectorAll('.card');
            document.getElementById('slide').prepend(lists[lists.length - 1]);
        }
    }
})
// cart

// search
const openFormButton = document.getElementById('openForm');
const closeFormButton = document.getElementById('closeForm');
const myForm = document.getElementById('myForm');

openFormButton.addEventListener('click', function () {
    myForm.classList.remove('hidden');
})
if(closeFormButton){
    closeFormButton.addEventListener('click', function () {
        myForm.classList.add('hidden');
    })
}

// chi tiết SP

// 
/**Slideshow CTSP */
// Đặt biến slideIndex để theo dõi slide hiện tại
// Hàm hiển thị slide
let slideIndex2 = 1;
let startX = null;

function showSlides2(n) {
    const slides = document.querySelectorAll(".slideshow-image");

    if (n > slides.length) {
        slideIndex2 = 1;
    }
    if (n < 1) {
        slideIndex2 = slides.length;
    }

    for (let i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }

    if (slides.length > 0) {
        slides[slideIndex2 - 1].style.display = "block";
    }
}

function prevSlide2() {
    showSlides2(slideIndex2 -= 1);
}

function nextSlide2() {
    showSlides2(slideIndex2 += 1);
}

function touchStart(event) {
    startX = event.touches[0].clientX;
}

function touchEnd(event) {
    if (startX === null) {
        return;
    }

    const endX = event.changedTouches[0].clientX;
    const deltaX = startX - endX;

    if (deltaX > 50) {
        nextSlide2();
    } else if (deltaX < -50) {
        prevSlide2();
    }

    startX = null;
}

// document.querySelector(".slideshow-container").addEventListener("touchstart", touchStart);
// document.querySelector(".slideshow-container").addEventListener("touchend", touchEnd);

showSlides2(slideIndex2);

// Hàm để chuyển đến slide trước
function prevSlide() {
    showSlides(slideIndex2 -= 1);
}

// Hàm để chuyển đến slide tiếp theo
function nextSlide() {
    showSlides(slideIndex2 += 1);
}

// Hiển thị slide đầu tiên khi tải trang
// showSlides(slideIndex2);

// check Out
const btn_show_login = document.getElementById("show-formLogin");
const form_Login = document.getElementById("form-login");

if (btn_show_login) {
    btn_show_login.addEventListener('click', function () {
        form_Login.classList.toggle("hidden");
    });
}
const btn_show_code = document.getElementById("show-fromCode");
const form_code = document.getElementById("form-code");
if (btn_show_code) {
    btn_show_code.addEventListener('click', function () {
        form_code.classList.toggle("hidden");
    });
}
// meu mobi
const btn_mobi = document.getElementById("show-mobi");
const menu_mobi = document.getElementById("menu-mobi");
const close_mobi = document.getElementById("close_mobi");
const mobi = document.getElementById("mobi");
btn_mobi.addEventListener('click', function () {
    menu_mobi.classList.remove('hidden');
    setTimeout(function () {
        mobi.style.transform = 'translateX(0)';
        mobi.style.transition = 'transform 500ms ease-in-out';
    }, 0);

});
if (close_mobi) {
    close_mobi.addEventListener('click', function () {
        mobi.style.transform = 'translateX(-320px)';
        mobi.style.transition = 'transform 500ms ease-in';

        // Sử dụng setTimeout để ẩn element sau khi transition hoàn thành
        setTimeout(function () {
            menu_mobi.classList.add('hidden');
        }, 500);
    });
}
function reloadCartContent() {
    // Thực hiện các thao tác cần thiết để tải lại nội dung giỏ hàng
    console.log('Đã cập nhật giỏ hàng.');
    // Điều này có thể bao gồm việc gửi yêu cầu AJAX để cập nhật nội dung từ máy chủ

}
let isHidden = false;
function cart_mini() {
    console.log("đã hiện giỏ hàng");
    const showCart = document.getElementById('cart_mini');
    const cart_mini = document.getElementById('cart_mini2');

    showCart.classList.remove('hidden');
    setTimeout(function () {
        cart_mini.style.transform = 'translateX(0)';
        cart_mini.style.transition = 'transform 500ms ease-in-out';
        if (!isHidden) {
            reloadCartContent();
        }
    }, 0);


}

document.addEventListener('DOMContentLoaded', function () {
    const showCartButtons = document.querySelectorAll('.show-cart-btn');

    showCartButtons.forEach(function (button) {
        button.addEventListener('click', cart_mini);
    });
});

const closeCart = document.getElementById('close_cart');
if (closeCart) {
    closeCart.addEventListener('click', function () {
        const cart_mini = document.getElementById('cart_mini2');
        const showCart = document.getElementById('cart_mini');
        cart_mini.style.transform = 'translateX(320px)';
        cart_mini.style.transition = 'transform 500ms ease-in';
    
        setTimeout(function () {
            if (showCart) {
                showCart.classList.add('hidden');
            }
            reloadCartContent();
        }, 500);
    });
}

// -----------------------------------
function quickShop(image, name, price,id) {
    var imageProduct = document.getElementById('imageProduct');
    var nameProduct = document.getElementById('nameProduct');
    var priceProduct = document.getElementById('priceProduct');

    imageProduct.src = "./public/media/img/" + image + ".jpg";
    nameProduct.innerHTML = name;
    priceProduct.innerHTML = '$' + price + '.000';
    console.log("da lay");
    zoom();

}
function zoom() {
    const MotaSP = document.getElementById('MotaSP');
    const detail = document.getElementById('detail');
    MotaSP.classList.remove('hidden');
    detail.style.transition = 'transform 400ms ease-in';
    detail.style.transform = 'scale(0.1)';
    setTimeout(function () {
        detail.style.transform = 'scale(1)';
    }, 1);
}
function close_detail() {
    const MotaSP = document.getElementById('MotaSP');
    MotaSP.classList.add('hidden');
    console.log("đã click");
}
// search
document.getElementById("search").addEventListener("keyup", function(event) {
    if (event.key === "Enter") {
        event.preventDefault();
        document.getElementById("searchForm").submit();
    }
});

