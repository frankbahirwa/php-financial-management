const sign_in_btn = document.querySelector("#sign-in-btn");
const sign_up_btn = document.querySelector("#sign-up-btn");
const container = document.querySelector(".container");
const container2 = document.querySelector(".cont-slide");

sign_up_btn.addEventListener('click',()=>{
    container2.classList.add("sign-up-mode");
});

sign_in_btn.addEventListener('click',()=>{
    container2.classList.remove("sign-up-mode");
})
sign_up_btn.addEventListener('click',()=>{
    container.classList.add("sign-up-mode");
});

sign_in_btn.addEventListener('click',()=>{
    container.classList.remove("sign-up-mode");
});
