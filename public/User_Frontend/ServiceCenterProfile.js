// opening booking pop-up form
document.getElementById('open-booking').addEventListener("click",function(){
    document.querySelector('.booking-popup-form').style.display = "flex";
});

// closing booking pop-up form
document.querySelector('.close-booking-form').addEventListener("click",function(){
    document.querySelector('.booking-popup-form').style.display = "none";
});
