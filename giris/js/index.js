 $("#login-button").click(function(event){
	 if($("#kntrl1").val() != "" || $("#kntrl1").val() != "")
	 {
		 event.preventDefault();
	 
	 $('form').fadeOut(500);
	 $('.wrapper').addClass('form-success');
	 setTimeout(function(){
  $("#girisform").submit();
}, 2000);
}
});