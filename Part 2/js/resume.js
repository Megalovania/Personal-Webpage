/**
 * Cory Cizauskas
 * 
 * This js code responds to the resume download link and 
 * calls verifyPassword.php and downLoadResume.php to handle pw verification
*/

$(document).ready(function() {

  function submit_post_via_hidden_form(url, params) {
    var f = $("<form target='_blank' method='POST' style='display:none;'></form>").attr({
        action: url
    }).appendTo(document.body);

    for (var i in params) {
        if (params.hasOwnProperty(i)) {
            $('<input type="hidden" />').attr({
                name: i,
                value: params[i]
            }).appendTo(f);
        }
    }

    f.submit();

    f.remove();
}


  function ajax_test(password, callback){
    $.ajax({
         type: 'POST',
         data: {'password':password},
         url: 'php/verifyPassword.php',
         success: function (response) {       //response is value returned from php (for your example it's "bye bye"
           alert(response);
           if(response.indexOf('Password Accepted') >= 0){
             callback(true);
           }
           else{
             callback(false);
           }
         }
      });
  }
  
  $('#rDownload').on('click', function(event) {
    var isPassword = false;
    event.preventDefault(); 
    var password = prompt("Please enter your password:", "(It's 'password')");
    
    
    
    if(password == null){
      alert("Password is Incorrect 1");
    }
    

    ajax_test(password, function(isPassword){
      
      if(isPassword){
        submit_post_via_hidden_form(
            'php/downloadResume.php',
            {
                'password': password
            }
        );
      }
      
      
    });
    
    

  });

})


