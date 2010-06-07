jQuery(document).ready(function($) {
	$("#sitemap-tags a").toggle(		
	function() {
		$("#sitemap-tags a").removeClass( "bold" );
		$("#sitemap-pages a" ).removeClass( "highlight" );
		$("#sitemap-pages a" ).addClass( "transparent" );
		var tag_id = $(this).attr('class');
		$("#sitemap-tags a." + tag_id ).addClass( "bold" );
		$("#sitemap-pages a." + tag_id ).addClass( "highlight" );
		$("#sitemap-pages a." + tag_id ).removeClass( "transparent" );
	},
		function() {
		$("#sitemap-tags a").removeClass( "bold" );
		$("#sitemap-pages a" ).removeClass( "highlight" );
		$("#sitemap-pages a" ).addClass( "transparent" );
		var tag_id = $(this).attr('class');
		$("#sitemap-tags a." + tag_id ).addClass( "bold" );
		$("#sitemap-pages a." + tag_id ).addClass( "highlight" );
		$("#sitemap-pages a." + tag_id ).removeClass( "transparent" );
	}
);});