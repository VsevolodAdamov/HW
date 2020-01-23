var div = document.createElement("div");
div.style.width = "100px";
div.style.height = "100px";

const credentials = {login: 'admin',  password: 'qwerty',};

const button = document.querySelector(".btn-primary");
const password = document.querySelector("#exampleInputPassword1");
const login = document.querySelector("#exampleInputLogin");

let lgn = "";
login.addEventListener("input", event => {lgn = event.target.value});

let pwd = "";
password.addEventListener("input", event => {pwd = event.target.value});

button.addEventListener("click", event => {
  event.preventDefault();
  for (let key in credentials) {
    if (credentials["login"] === lgn) {
        for (let key in credentials) {
          if (credentials["password"] === pwd) {
            div.innerHTML = "login and password is true";
            div.style.background = "green";
          } else {
            div.innerHTML = "login is true but password is folse";
            div.style.background = "orange";
          }
        }
    } else if (credentials[key] !== lgn) {
        div.innerHTML = "login is folse";
        div.style.background = "red";
    }
  }
});

document.getElementById("main").appendChild(div);
console.log(button);

