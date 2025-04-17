const singInForm = document.querySelector(".login-form");
const singUpForm = document.querySelector(".register-form");
const registerBtn = document.querySelector("#SignUpBtn");
const loginBtn = document.querySelector("#SignInBtn");
const errorText = document.querySelector(".error-message");

singInForm.onsubmit = (e) => {
    e.preventDefault();
};

loginBtn.onclick = () => {
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "php/login.php", true);
    xhr.onload = () => {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if(xhr.status === 200){
               let data = xhr.response;
               if (data === "login success") {
                location.href = "home.php";
               }else{
                errorText.classList.add("show");
                errorText.textContent = data;

                setTimeout(() =>{
                    errorText.classList.remove("show");
                }, 3000)
               }
            }

        }
    }
    let formData = new FormData(singInForm);
    xhr.send(formData);
}


// For Sign UP form

singUpForm.onsubmit = (e) => {
    e.preventDefault();
};

registerBtn.onclick = () => {
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "php/register.php", true);
    xhr.onload = () => {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if(xhr.status === 200){
               let data = xhr.response;
               if (data === "registration success") {
                errorText.classList.add("show");
                errorText.textContent = "Registered successfully!";

                setTimeout(() =>{
                    errorText.classList.remove("show");
                    loginFunction();
                }, 2000)
               }else{
                errorText.classList.add("show");
                errorText.textContent = data;

                setTimeout(() =>{
                    errorText.classList.remove("show");
                }, 3000)
               }
            }

        }
    }
    let formData = new FormData(singUpForm);
    xhr.send(formData);
}