function get_otp(mail){
    var email = mail;
    $.ajax({
      url: "./includes/get_otp.php",
      data: {mail: email},
      type: 'POST',
      dataType: 'json',
      success: function(result){
        if(result.mail_send==1){
          console.log(result);
          alert('OTP has been sent to your given mail!');
        }else{
          alert('Error in sending OTP!');
          location.reload();
        }
      }
    });
  }