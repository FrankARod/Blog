$('#delete_form').submit(function(e) {
	if (!confirm('Are you sure you want to delete this post?')) {
		e.preventDefault();
	}
});