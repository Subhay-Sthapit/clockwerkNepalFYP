//opening user profile edit form
document.getElementById('open-button').addEventListener("click",function(){
    document.querySelector('.form-popup').style.display = "flex";
});

// closing user profile edit pop-up form
document.querySelector('.close-form').addEventListener("click",function(){
    document.querySelector('.form-popup').style.display = "none";
});


