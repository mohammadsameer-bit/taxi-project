function emailSend(){
  Email.send({
        Host : "smtp.elasticemail.com",
        Username : "abdulazeem123@gmail.com",
        Password : "5CFC89914D9601207A25EB3D5E107A9C70FA",
        To : 'mohammadsameer4561@gmail.com',
        From : "abdulazeem123@gmail.com",
        Subject : "This is the subject",
        Body : "And this is the body"
    }).then(
      message => alert(message)
    );
}

