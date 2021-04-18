// opening booking pop-up form
document.getElementById('open-booking').addEventListener("click",function(){
    document.querySelector('.booking-popup-form').style.display = "flex";
});

// closing booking pop-up form
document.querySelector('.close-booking-form').addEventListener("click",function(){
    document.querySelector('.booking-popup-form').style.display = "none";
});


//opening user profile edit form
document.getElementById('open-review').addEventListener("click",function(){
    document.querySelector('.review-popup-form').style.display = "flex";
});

// closing user profile edit pop-up form
document.querySelector('.close-review-form').addEventListener("click",function(){
    document.querySelector('.review-popup-form').style.display = "none";
});

