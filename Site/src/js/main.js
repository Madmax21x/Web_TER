$(document).ready(function(){
  // OPEN Modal
  $("#open_modal").click(function(){
    $("#modal_to_open").css(
      {
        'display': 'block'
      }
    );
  });
  // close close_modal
  $("#close_modal").click(function(){
    $("#modal_to_open").css(
      {
        'display': 'none'
      }
    );
  });

  // send mail with ajax
  $('#send_email').click(function(e){
		e.preventDefault();
		var data = {
			email: $('#email').val(),
			name: $('#name').val(),
      firstname: $('#firstname').val(),
			subject: $('#subject').val(),
			message: $('#message').val(),
      number: $('#number').val()
		};

    // ajax
		$.ajax({
			url: "mail.php",
			type: 'POST',
			data: data,
			success: function(data) {
				$('#js_alert_success').css({'display' : 'block'});
				setTimeout(function(){
					$('#js_alert_success').css({'display' : 'none'});
					$('#email').val("");
					$('#name').val("");
          $('#firstname').val("");
          $('#number').val("");
					$('#subject').val("");
					$('#message').val("")
				}, 3000);
			},
			error: function(data) {
				$('#js_alert_danger').css({'display' : 'block'});
				setTimeout(function(){
					$('#js_alert_danger').css({'display' : 'none'});
					$('#email').val("");
					$('#name').val("");
          $('#firstname').val("");
          $('#number').val("");
					$('#subject').val("");
					$('#message').val("")
				}, 3000);
			}
		});
  });
  // Check for click events on the navbar burger icon
  $(".navbar-burger").click(function(){

    // Toggle the "is-active" class on both the "navbar-burger" and the "navbar-menu"
    $(".navbar-burger").toggleClass("is-active");
    $(".navbar-menu").toggleClass("is-active");
    // window.open("contact.php");

  });
});