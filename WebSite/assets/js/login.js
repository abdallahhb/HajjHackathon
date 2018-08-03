// process the form
$('#login_form').submit(function(event) {
  $('.form-group').removeClass('has-error'); // remove the error class
  $('.help-block').remove(); // remove the error text
  $('#register-alerts').remove(); // remove the error text
  $('form').removeClass('alert-success');
  // get the form data
  // there are many ways to get this data using jQuery (you can use the class or id also)
  var formData = {
    'email_user_name'  : $('input[name=email_user_name]').val(),
    'password' 			   : $('input[name=password]').val()
  };
  // process the form
  $.ajax({
    type 		: 'POST', // define the type of HTTP verb we want to use (POST for our form)
    url 		: '<?php echo base_url() . 'index.php?login/ajax_login' ; ?>' , // the url where we want to POST
    data 		: formData, // our data object
    dataType 	: 'json', // what type of data do we expect back from the server
    encode 		: true
  })
  // using the done promise callback
  .done(function(data) {

    // log data to the console so we can see
    console.log(data);

    // here we will handle errors and validation messages
    if (!data.ok) {

      if (data.errors.email_user_name) {
        $('#email_user_name-group').addClass('has-error'); // add the error class to show red input
        $('#email_user_name-group').append('<div class="help-block">' + data.errors.email_user_name + '</div>'); // add the actual error message under our input
      }

      // handle errors for name ---------------
      if (data.errors.password) {
        $('#password-group').addClass('has-error'); // add the error class to show red input
        $('#password-group').append('<div class="help-block">' + data.errors.password + '</div>'); // add the actual error message under our input
      }

      //	alert(data.errors);
      $('.alert').html('<h4><div class="alert alert-danger">' + data.message + '</h4></div>');
      scroll(0, 0);
      // window.location.href = data.location; // redirect a user to another page

    } else {
      if (!data.success) {
        $('.alert').html('<h4><div class="alert alert-danger">' + data.message + '</h4></div>');
        setTimeout(function() {
          // window.location.href = data.location; // redirect a user to another page
        }, 2000);
      }else{
        $('.alert').html('<h4><div class="alert alert-success">' + data.message + '</h4></div>');
        // setTimeout(function() {
        window.location.href = data.location; // redirect a user to another page
        // }, 2000);
      }
    }
  })

  // using the fail promise callback
  .fail(function(data) {

    // show any errors
    // best to remove for production
    console.log(data);
  });

  // stop the form from submitting the normal way and refreshing the page
  event.preventDefault();
});


// process the form
$('#contuct_us_form').submit(function(event) {
  //  alert("Thank you for your hhh!");
  $('.form-group').removeClass('has-error'); // remove the error class
  $('.help-block').remove(); // remove the error text
  $('#register-alerts').remove(); // remove the error text
  $('form').removeClass('alert-success');
  // get the form data
  // there are many ways to get this data using jQuery (you can use the class or id also)
  var formData = {
    'contuct_name' 	     : $('input[name=contuct_name]').val(),
    'contuct_email' 		 : $('input[name=contuct_email]').val(),
    'contuct_phone' 	   : $('input[name=contuct_phone]').val(),
    'contuct_message' 	 : $('textarea[name=contuct_message]').val()
  };

  // process the form
  $.ajax({
    type 		: 'POST', // define the type of HTTP verb we want to use (POST for our form)
    url 		: '<?php echo base_url() . 'index.php?Home/contact_us' ; ?>' , // the url where we want to POST
    data 		: formData, // our data object
    dataType 	: 'json', // what type of data do we expect back from the server
    encode 		: true
  })
  // using the done promise callback
  .done(function(data) {

    // log data to the console so we can see
    console.log(data);

    // here we will handle errors and validation messages
    if ( ! data.success) {
      //	alert(data.errors);
      $('.contuct_us_alert').html('<h4><div class="alert alert-danger">' + data.message + '</h4></div>');
    } else {
      $('.contuct_us_alert').html('<h4><div class="alert alert-success">' + data.message + '</h4></div>');
      setTimeout(function() {
        location.reload();
      }, 1000);
    }
  })

  // using the fail promise callback
  .fail(function(data) {

    // show any errors
    // best to remove for production
    console.log(data);
  });

  // stop the form from submitting the normal way and refreshing the page
  event.preventDefault();
});
// $('#contuct_us_form').reset();


$("#showHide").click(function () {
  if ($(".password").attr("type")=="password") {
    $(".password").attr("type", "text");
  }
  else{
    $(".password").attr("type", "password");
  }

});
