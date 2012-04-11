function bindResults() {
	$("#results ul li").unbind('click');
	$("#results ul li:not(.active)").bind('click', function(){
		revealData(this);
	});
}

function revealData(track) {
	$('span.uri').hide();
	$('iframe').remove();
	$("#results ul li").removeClass('active');
	$('span.uri', track).show();
	$(track).addClass('active');
	var uri = $(track).attr("data-uri");
	$(track).append('<iframe src="https://embed.spotify.com/?uri=' + uri + '" width="580" height="80" frameborder="0"></iframe>');
	bindResults();
}

function bindForm() {
	$("form").bind('submit', function(data){
		$("form").unbind();
		$("form").addClass('busy');
		$.post('_results.php', $(this).serialize(), function(data){
			$("#results").html(data);
			bindResults();
			bindForm();
			$("form").removeClass('busy');
		});
		return false;
	});	
}

$(document).ready(function(){
	bindForm();	
	bindResults();
});