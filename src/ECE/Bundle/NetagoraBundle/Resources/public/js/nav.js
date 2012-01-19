$(document).ready(function () {	
	
	$('.nav li').hover(
		function () {
			//show its submenu
			$('ul', this).slideDown(100);

		}, 
		function () {
			//hide its submenu
			$('ul', this).slideUp(100);
		}
	);
	
	$('#pictures').click(
			function () {
				//show its submenu
				$('#pictures').addClass('active');
				$('#videos').removeClass('active');
				$('#music').removeClass('active');
				$('#locations').removeClass('active');
				$('#feeds').removeClass('active');
				$('#other').removeClass('active');
				$('#favoris').removeClass('active');
	
			}
		);
	
	$('#videos').click(
			function () {
				//show its submenu
				$('#videos').addClass('active');
				$('#pictures').removeClass('active');
				$('#music').removeClass('active');
				$('#locations').removeClass('active');
				$('#feeds').removeClass('active');
				$('#other').removeClass('active');
				$('#favoris').removeClass('active');
	
			}
		);
		
	$('#music').click(
			function () {
				//show its submenu
				$('#music').addClass('active');
				$('#pictures').removeClass('active');
				$('#videos').removeClass('active');
				$('#locations').removeClass('active');
				$('#feeds').removeClass('active');
				$('#other').removeClass('active');
				$('#favoris').removeClass('active');
	
			}
		);
	$('#locations').click(
			function () {
				//show its submenu
				$('#locations').addClass('active');
				$('#pictures').removeClass('active');
				$('#music').removeClass('active');
				$('#videos').removeClass('active');
				$('#feeds').removeClass('active');
				$('#other').removeClass('active');
				$('#favoris').removeClass('active');
	
			}
		);
		
		$('#feeds').click(
				function () {
					//show its submenu
					$('#feeds').addClass('active');
					$('#pictures').removeClass('active');
					$('#music').removeClass('active');
					$('#videos').removeClass('active');
					$('#locations').removeClass('active');
					$('#other').removeClass('active');
					$('#favoris').removeClass('active');
		
				}
			);
		$('#other').click(
				function () {
					//show its submenu
					$('#other').addClass('active');
					$('#pictures').removeClass('active');
					$('#music').removeClass('active');
					$('#videos').removeClass('active');
					$('#locations').removeClass('active');
					$('#feeds').removeClass('active');
					$('#favoris').removeClass('active');
		
				}
			);
		$('#favoris').click(
				function () {
					//show its submenu
					$('#favoris').addClass('active');
					$('#pictures').removeClass('active');
					$('#music').removeClass('active');
					$('#videos').removeClass('active');
					$('#locations').removeClass('active');
					$('#feeds').removeClass('active');
					$('#other').removeClass('active');
		
				}
			);
			
			$("#home_videos .close").click(function () { 
			    $("#home_videos").fadeOut();
			    $("#video_m").fadeIn();
			    
			});
			  
			$("#video_m").click(function () { 
			      $("#home_videos").fadeIn();
			      $("#video_m").fadeOut();
			});
			
			$("#home_music .close").click(function () { 
			    $("#home_music").fadeOut();
			    $("#music_m").fadeIn();
			    
			});
			  
			$("#music_m").click(function () { 
			      $("#home_music").fadeIn();
			      $("#music_m").fadeOut();
			});
			
			$("#home_pictures .close").click(function () { 
			    $("#home_pictures").fadeOut();
			    $("#picture_m").fadeIn();
			    
			});
			  
			$("#picture_m").click(function () { 
			      $("#home_pictures").fadeIn();
			      $("#picture_m").fadeOut();
			});
			
			$("#home_locations .close").click(function () { 
			    $("#home_locations").fadeOut();
			    $("#location_m").fadeIn();
			    
			});
			  
			$("#location_m").click(function () { 
			      $("#home_locations").fadeIn();
			      $("#location_m").fadeOut();
			});
			
			$("#home_other .close").click(function () { 
			    $("#home_other").fadeOut();
			    $("#other_m").fadeIn();
			    
			});
			  
			$("#other_m").click(function () { 
			      $("#home_other").fadeIn();
			      $("#other_m").fadeOut();
			});
			
			$("#home_feeds .close").click(function () { 
			    $("#home_feeds").fadeOut();
			    $("#feed_m").fadeIn();
			    
			});
			  
			$("#feed_m").click(function () { 
			      $("#home_feeds").fadeIn();
			      $("#feed_m").fadeOut();
			});
			
			$("#home_favourites .close").click(function () { 
			    $("#home_favourites").fadeOut();
			    $("#favourite_m").fadeIn();
			    
			});
			  
			$("#favourite_m").click(function () { 
			      $("#home_favourites").fadeIn();
			      $("#favourite_m").fadeOut();
			});
						
			$(function() {
			
			 $('#navigation a').stop().animate({'marginLeft':'-55px'},1000);
			
			 $('#navigation > li').hover(
			  function () {
			   $('a',$(this)).stop().animate({'marginLeft':'-2px'},200);
			  },
			  function () {
			   $('a',$(this)).stop().animate({'marginLeft':'-55px'},200);
			  }
			 );
			});
		$(function() {
		 $('#navigation > li').hover(
		  function () {
		   $('a',$(this)).stop().animate({'marginLeft':'-2px'},200);
		  },
		  function () {
		   $('a',$(this)).stop().animate({'marginLeft':'-55px'},200);
		  }
		 );
		});
		
		
		
});
