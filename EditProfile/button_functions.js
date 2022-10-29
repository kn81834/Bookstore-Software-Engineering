var profile_info = ["firstName", "lastName", "phoneNumber"];
var payment_info = ["cardType", "cardNumber", "cvc", "expirationDate"];
var address_info = ["streetAddress", "city", "state", "zipCode"];
var all_info = [
  "firstName",
  "lastName",
  "phoneNumber",
  "emailAddress",
  "password",
  "cardType",
  "cardNumber",
  "cvc",
  "expirationDate",
  "streetAddress",
  "city",
  "state",
  "zipCode",
];
var updateProfileButton = document.getElementById("updateProfileButton");
var updatePaymentButton = document.getElementById("updatePaymentButton");
var updateAddressButton = document.getElementById("updateAddressButton");

function changeToInputPersonal() {
  profile_info.forEach(
    (element) => (document.getElementById(element).readOnly = false)
  );
}

function changeToTextPersonal() {
  profile_info.forEach((element) => {
    if (document.forms["editProfileForm"][element].value != "") {
      //updateProfileButton.setAttribute("type", "submit");
      document.getElementById(element).setAttribute("readOnly", "true");
    } else {
      //updateProfileButton.setAttribute("type", "button");
      alert("Please fill required field(s).");
      return false;
    }
  });
  updateProfileButton.submit();
}

function changeToInputPayment() {
  payment_info.forEach(
    (element) => (document.getElementById(element).readOnly = false)
  );
}

function changeToTextPayment() {
  payment_info.forEach((element) => {
    if (document.forms["editProfileForm"][element].value != "") {
      //updatePaymentButton.setAttribute("type", "submit");
      document.getElementById(element).setAttribute("readOnly", "true");
    } else {
      //updatePaymentButton.setAttribute("type", "button");
      alert("Please fill required field(s).");
      return false;
    }
  });
  updatePaymentButton.submit();
}

function changeToInputAddress() {
  address_info.forEach(
    (element) => (document.getElementById(element).readOnly = false)
  );
}

function changeToTextAddress() {
  address_info.forEach((element) => {
    if (document.forms["editProfileForm"][element].value != "") {
      //updateAddressButton.setAttribute("type", "submit");
      document.getElementById(element).setAttribute("readOnly", "true");
    } else {
      //updateAddressButton.setAttribute("type", "button");
      alert("Please fill required field(s).");
      return false;
    }
  });
  updateAddressButton.submit();
}

function matchPasswords() {
  var currentPassword = document.getElementById("password").value;
  var enteredPassword = document.getElementById("enteredPassword").value;
  if (currentPassword == enteredPassword) {
    window.location.href("../Login/ForgotPasswordVerify.html");
  } else {
    alert("Passwords must match.");
  }
}

function checkPassword(form) {
  element1 = form.getElementById("password").value;
  element2 = form.getElementById("enteredPassword").value;

  if (element1 != element2) {
    alert("\nPassword did not match: Please try again...");
    return false;
  } else {
    alert("Password Match: Your password has been reset!");
    return true;
  }
}
