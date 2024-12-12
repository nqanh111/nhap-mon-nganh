let currentIndex = 0; 
const slides = document.querySelectorAll('.slide'); 
const totalSlides = slides.length; 
const slidesContainer = document.querySelector('.slides'); 

// Hàm cập nhật vị trí của các slide
function updateSlidePosition() {
    slidesContainer.style.transform = 'translateX(' + (-currentIndex * 100) + '%)';
}

// Hàm chuyển đến slide tiếp theo
function showNextSlide() {
    currentIndex = (currentIndex + 1) % totalSlides; // Chuyển đến slide tiếp theo
    updateSlidePosition(); // Cập nhật vị trí của slides
}

// Hàm chuyển đến slide trước
function showPrevSlide() {
    currentIndex = (currentIndex - 1 + totalSlides) % totalSlides; // Chuyển đến slide trước
    updateSlidePosition(); // Cập nhật vị trí của slides
}

// Tự động chuyển slide sau mỗi 4 giây
setInterval(showNextSlide, 3000);

// Gọi hàm để hiển thị slide đầu tiên
updateSlidePosition();