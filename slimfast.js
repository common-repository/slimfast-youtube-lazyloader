var tag = document.createElement('script');
tag.src = "https://www.youtube.com/iframe_api";
var firstScriptTag = document.getElementsByTagName('script')[0];
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
var player;
function onYouTubePlayerAPIReady(event) {

  var slimfast_player = document.querySelectorAll( ".slimfast_player" );
  for (var i = 0; i < slimfast_player.length; i++) {
	  var image = new Image();
	  image.src = "https://i3.ytimg.com/vi/"+ slimfast_player[i].dataset.embed +"/hqdefault.jpg";
	  image.alt = "click to play the video";
	  image.addEventListener( "load", function() {
		 slimfast_player[ i ].appendChild( image );
	  }( i ) );

    slimfast_player[i].addEventListener( "click", function() {
      player = new YT.Player(this.id, {
        height: '',
        width: '',
        videoId: this.dataset.embed,
        events: {
          'onReady': onPlayerReady
		}
	  });

      function onPlayerReady(event) {
        event.target.playVideo();
	  }

      this.innerHTML = "";
	});  	  
  }
}