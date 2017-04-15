/**
 * Cory Cizauskas
 * 
 * This file handles the validation and overall submission of the contact form
*/

$(function() {
  // Validate the contact form
  $('#contact_form').validate({
    // Specify what the errors should look like
    // when they are dynamically added to the form
    errorElement: "label",
    //wrapper: "td",
    errorPlacement: function(error, element) {
      error.insertBefore( element );
      //error.wrap("<div class='error'></div>");
      //$("<td></td>").insertBefore(error);
    },
 
    // Add requirements to each of the fields
    rules: {
      name: {
        required: true,
        minlength: 2
      },
      email: {
        required: true,
        email: true
      },
      message: {
        required: true,
        minlength: 10
      }
    },
 
    // Specify what error messages to display
    // when the user does something horrid
    messages: {
      name: {
        required: "Please enter your name.",
        minlength: jQuery.validator.format("At least {0} characters required.")
      },
      email: {
        required: "Please enter your email.",
        email: "Please enter a valid email."
      },
      message: {
        required: "Please enter a message.",
        minlength: jQuery.validator.format("At least {0} characters required.")
      }
    },
 
    // Use Ajax to send everything to processForm.php
    submitHandler: function(form) {
      $("#submit_button").attr("value", "Sending...");
      $(form).ajaxSubmit({
        target: "#response",
        success: function(responseText, statusText, xhr, $form) {
          //console.log("Result: " + responceText);
          $(form).slideUp("fast");
          //$("#response").html(responseText).hide().slideDown("fast");
        }
      });
      return false;
    }
  });
});