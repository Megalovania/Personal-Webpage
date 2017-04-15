/*Author: Cory Cizauskas*/

$(document).ready(function() {

  $('#rDownload').on('click', function(event) {
    var password = prompt("Please enter your password:", "(It's 'password')");

    if (password != null) {

      if (password === "password") {
        return true;
      } else {
        alert("Password is Incorrect");
        event.preventDefault(); 
      }
    } else {
      alert("Password is Incorrect");
      event.preventDefault(); 
    }

  });

})
