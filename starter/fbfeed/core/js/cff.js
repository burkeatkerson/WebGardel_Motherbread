jQuery(function(){
	//Toggle comments
	jQuery('#cff a.cff-view-comments').click(function(){
		jQuery(this).closest('.cff-item').find('.cff-comments-box').slideToggle();
	});


	jQuery('#cff .cff-item').each(function(){
		//Expand post
		var $self = jQuery(this),
			expanded = false,
			$post_text = $self.find('.cff-post-text .cff-text'),
			text_limit = $self.closest('#cff').attr('rel');
		if (typeof text_limit === 'undefined' || text_limit == '') text_limit = 99999;
		
		//If the text is linked then use the text within the link
		if ( $post_text.find('a.cff-post-text-link').length ) $post_text = $self.find('.cff-post-text .cff-text a');
		var	full_text = $post_text.html();
		if(full_text == undefined) full_text = '';
		var short_text = full_text.substring(0,text_limit);
		
		//Cut the text based on limits set
		$post_text.html( short_text );
		//Show the 'See More' link if needed
		if (full_text.length > text_limit) $self.find('.cff-expand').show();
		//Click function
		$self.find('.cff-expand a').click(function(e){
			e.preventDefault();
			var $expand = jQuery(this),
				$more = $expand.find('.cff-more'),
				$less = $expand.find('.cff-less');
			if (expanded == false){
				$post_text.html( full_text );
				expanded = true;
				$more.hide();
				$less.show();
			} else {
				$post_text.html( short_text );
				expanded = false;
				$more.show();
				$less.hide();
			}
		});


		//AJAX
		var locatefile = true;
		if (typeof cffpath === 'undefined' || cffpath == '') cffpath = window.location.host + '/fbfeed';

		var post_id = $self.attr('id'),
			url = cffpath + "/core/query.php?id=" + post_id;


		//If the file can be found then load in likes and comments
		if (locatefile == true){
			var $likesCountSpan = $self.find('.cff-likes .cff-count'),
				$commentsCountSpan = $self.find('.cff-comments .cff-count');

			//If the likes or comment counts are above 25 then replace them with the query.php values
			if( $likesCountSpan.find('.cff-replace').length ) $likesCountSpan.load(url + '&type=likes');
			if( $commentsCountSpan.find('.cff-replace').length ) $commentsCountSpan.load(url + '&type=comments');

			var $likesCount = $self.find('.cff-comment-likes .cff-comment-likes-count');
			if( $likesCount.length ) {
				$likesCount.load(url + '&type=likes', function(){
					$likesCount.text( $likesCount.text() -2 );
				});
			}
		} else {
			$self.find('.cff-replace').show();
			$self.find('.cff-loader').hide();
		}


		//Only show 4 latest comments
		var $showMoreComments = $self.find('.cff-show-more-comments'),
			$comment = $self.find('.cff-comment');

		if ( $showMoreComments.length ) {
			$comment.hide();
			var commentCount = $comment.length;
			//Show latest 4 comments
			$comment.slice(commentCount-4).show();
			//Show all on click
			$showMoreComments.click(function(){
				$comment.show();
				jQuery(this).hide();
			});
		}


		//If a shared link image is 1x1 (after it's loaded) then hide it and add class (as php check for 1x1 doesn't always work)
		$self.find('.cff-link img').load(function() {
			var $cffSharedLink = $self.find('.cff-link');
			if( $cffSharedLink.find('img').width() < 2 ) {
				$cffSharedLink.hide().siblings('.cff-text-link').addClass('cff-no-image');
			}
		});


	});

	
	if( !$('#cff').hasClass('cff-disable-narrow') ){
		//Allow us to make some tweaks when the feed is narrow
		function cffCheckWidth(){
			var $cff = $('#cff');
			if( $cff.innerWidth() < 400 ){
				$cff.addClass('narrow');
			} else {
				$cff.removeClass('narrow');
			}
		}
		cffCheckWidth();

		//Only check the width once the resize event is over
		var cffdelay = (function(){
			var cfftimer = 0;
				return function(cffcallback, cffms){
				clearTimeout (cfftimer);
				cfftimer = setTimeout(cffcallback, cffms);
			};
		})();
		$(window).resize(function() {
		    cffdelay(function(){
		    	cffCheckWidth();
		    }, 500);
		});
	}

});