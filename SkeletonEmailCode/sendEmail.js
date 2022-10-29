function registerForm() {
    document.getElementById("regform").submit();
}

function sendEmail() {
    console.log("Hello");
    Email.send({
        Host: "smtp.gmail.com",
        Username: "onlinebookstoreTeamBC8@gmail.com",
        Password: "ugaSEFALL2020",
        To: sessionValue,
        From: "onlinebookstoreTeamBC8@gmail.com",
        Subject: "Welcome to the Online Bookstore!",
        Body: "Welcome!\nHere is your verification code: " + verificationCode + ".",
    });
}



function sendConfirmationEmail(email) {
    console.log("Confirm");
    console.log(email);
    Email.send({
        Host: "smtp.gmail.com",
        Username: "onlinebookstoreTeamBC8@gmail.com",
        Password: "ugaSEFALL2020",
        To: email,
        From: "onlinebookstoreTeamBC8@gmail.com",
        Subject: "Thank you for your purchase!",
        Body: "Thank you for your purchase. Please shop again!",
    });
    document.getElementById("orderConfirmation").submit();
}


function sendPromotionEmail() {
    Email.send({
        Host: "smtp.gmail.com",
        Username: "onlinebookstoreTeamBC8@gmail.com",
        Password: "ugaSEFALL2020",
        To: session,
        From: "onlinebookstoreTeamBC8@gmail.com",
        Subject: "New Promotion!",
        Body: "A promotion for " + promotionName + " is now available." + "This discount is $" + discount + " off." + "\nHere is your promotion code: " + promotionCode + ".",
    });
}