function bindResults() {
	$("#results ul li").unbind();
	$("#results ul li").bind('click', function(){
		$('span.uri').hide();
		$('iframe').hide();
		$("#results ul li").removeClass('active');
		$('span.uri', this).show();
		$(this).addClass('active');
		var uri = $(this).attr("data-uri");
		$(this).append('<iframe src="https://embed.spotify.com/?uri=' + uri + '" width="580" height="80" frameborder="0"></iframe>');
	});
}

function bindForm() {
	$("form").bind('submit', function(data){
		$("form").unbind();
		$.post('_results.php', $(this).serialize(), function(data){
			$("#results").html(data);
			bindResults();
			bindForm();
		});
		return false;
	});	
}

$(document).ready(function(){
	bindForm();	
	bindResults();
});