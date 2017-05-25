jQuery(document).ready(function($) {
	$.getJSON(wpApiSettings.root + 'wp/v2/portfolio?_embed' , function(data) {
			/*optional stuff to do after success */
			createContent(data);
	});
	function createContent(data) {
		var portfolioContainer = $('.portfolio-items .container');
		data.forEach(function (post) {
			var title = post.title.rendered;
			var excerpt = post.excerpt.rendered;
			var link = post.link;
			console.log(post);
			var img = post._embedded['wp:featuredmedia'][0].source_url;

			portfolioContainer.prepend('<a class="portfolio-item" href="' + link + '" style="background-image: url(' + img + ')"><div class="title">' + title + '</div><div class="description">' + excerpt + '</div></a>'); 
		});
	}
});