$(document).ready(function() {
	$('.tabs a').click(function() {
		var $this = $(this); // creates a variable to store $(this)
		$('.panel-tab').hide(); // hides the panels
		$('.tabs a.active').removeClass('active'); // removes the active class 
		$this.addClass('active').blur(); // adds the active class to the selected tab, but prevents focus style
		var panel = $this.attr('href'); //variable holding the href of the link
		$(panel).fadeIn(250); // fades in the panel currently selected
		return false; // prevents the browser from following the link down the page
		});//end click
	$('.tabs li:first a').click(); // triggers the whole event
}); // end ready