const loginPopup = document.querySelector(".login-popup");
const close = document.querySelector(".close");
window.addEventListener("load", function () {
  showPopup();
});
function showPopup() {
  const timeLimit = 1; //time delay (How much time is needed to popup the login page)
  let i = 0;
  const timer = setInterval(function () {
    i++;
    if (i == timeLimit) {
      clearInterval(timer);
      loginPopup.classList.add("show");
    }
    console.log(i);
  }, 1000);
}
close.addEventListener("click", function () {
  loginPopup.classList.remove("show");
});
