//Validation of email address

"use strict";
const submit = document.getElementById("submit");

submit.addEventListener("click", validate);

function validate(email) {
  email.preventDefault();

  const userInput = document.getElementById("placeholder");
  const emailValue = userInput.value.trim();
  let valid = true;
  noEmail.classList.remove("visible");
  notValidEmail.classList.remove("visible");
  noColumbia.classList.remove("visible");
  checkboxMessage.classList.remove("visible");
  if (emailValue === "") {
    noEmail.classList.add("visible");
    // userInput.classList.add("invalid");
    noEmail.setAttribute("aria-hidden", false);
    // noEmail.setAttribute("aria-invalid", true);
  } else if (emailValue.indexOf("@") === -1) {
    notValidEmail.classList.add("visible");
    // userInput.classList.add("invalid");
    notValidEmail.setAttribute("aria-hidden", false);
    // notValidEmail.setAttribute("aria-invalid", true);
  } else if (
    emailValue.charAt(emailValue.length - 3) === "." &&
    emailValue.charAt(emailValue.length - 2) === "c" &&
    emailValue.charAt(emailValue.length - 1) === "o"
  ) {
    noColumbia.classList.add("visible");
    // userInput.classList.add("invalid");
    noColumbia.setAttribute("aria-hidden", false);
    // noColumbia.setAttribute("aria-invalid", true);
  } else if (!submit.form.checkbox.checked) {
    checkboxMessage.classList.add("visible");
    // userInput.classList.add("invalid");
    checkboxMessage.setAttribute("aria-hidden", false);
    // checkboxMessage.setAttribute("aria-invalid", true);
  } else {
    window.location.href = "thank_you.html";
  }
}
