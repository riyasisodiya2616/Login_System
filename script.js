let loginBtn = document.querySelector(".loginBtn");
let wrapper = document.querySelector(".wrapper");
let loginLink = document.querySelector(".login-link");
let registerLink = document.querySelector(".register-link");
let closeBtn = document.querySelector(".icon-close");
console.log(closeBtn);
registerLink.addEventListener("click", ()=>{
    wrapper.classList.add('active');
});
loginLink.addEventListener("click", ()=>{
    wrapper.classList.remove('active');
});
loginBtn.addEventListener("click", ()=>{
    wrapper.classList.add('active-popup');
});
closeBtn.addEventListener("click", ()=>{
    wrapper.classList.remove('active-popup');
});
