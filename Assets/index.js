function sendEmail() {
  Email.send({
    Host: "smtp.elasticemail.com",
    Username: "web.dev1@seoprohub.co.uk",
    Password: "57884F5083F360A1ED055130966CEE68BB03",
    To: "web.dev1@seoprohub.co.uk",
    From: document.getElementById("email").value,
    Subject: "New Contact Form Enquiry",
    Body: "And this is the body",
  }).then((message) => alert(message));
}
