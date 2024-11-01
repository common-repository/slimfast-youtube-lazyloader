=== SlimFast - YouTube Lazyloader ===
Contributors: thinksmall1
Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=GDS3MPDYFU2T8&source=url
Tags: youtube, lazyload, lazy load, video, iframe, performance, speed, seo, light
Requires at least: 4.4
Tested up to: 5.4.2
Stable tag: 1.0.1
License: GPLv3
License URI: https://www.gnu.org/licenses/gpl-3.0.html

== Description ==
 
This minimalist lazyloader makes your video pages slimmer and faster. SlimFast replaces heavy YouTube iframes by their thumbnail. [View a demo.](https://thinksmall.me)

= How to use it? = 

Paste the url of the YouTube video in a page (for example `https://youtu.be/neV3EPgvZ3g`). WordPress will convert it into a video iframe. SlimFast will take it from there and replace the iframe by the video thumbnail and a button to play the video. This will also work for all pre-existing videos embedded this way.

= What is lazyloading and why is it important to use it on YouTube videos? = 

Lazyloading is a technique to make your pages load faster, by only loading required elements when the visitor requests them. The page speed is a key element in Google’s algorithm to rank pages.

Embedding a YouTube iframe will load a lot of scripts for every single video and will slow down your page, especially if your visitor doesn’t have a top connection. Hence the need for lazyloaders!

2 types of lazyloaders exist:

* Those who load the video iframe when the visitor scrolls down to the point where he sees the video on his screen.

* Those who load the iframe after the visitor clicks the Play button. SlimFast is one of those. We believe it is the best approach to let your visitor decide if he wants to click or not, and only load the iframe if he clicks.


See a comparison of performances with/without SlimFast in the "Screenshots" section.

 = Why is SlimFast better than other YouTube lazyloading plugins? = 

1. Because they require 2 click to play a video: 1 to load the iframe, 1 to play it! This is actually the reason why we built this plugin: SlimFast loads & play videos with 1 single click, even on mobile! Think about your User Experience, it’s crucial. Your visitors are frustrated if they have to click twice on that Play button to launch a video!

2. Because it doesn’t use any custom shortcode. WordPress already recognises YouTube videos when you paste their urls. SlimFast takes it from there. Why bother with shortcodes? Think long term! Shortcodes are painful if you decide to drop a plugin. If you’re unhappy with SlimFast, just deactivate it and all your YouTube videos will be back to their default iframes.

3. Because we’ve made it as light as possible! The plugin only adds 3 small scripts (YouTube iframe API, 1 custom javascript and 1 css) to your pages containing YouTube videos, for an extra weight of 4KB only. And nothing will be loaded if your pages don’t have YouTube videos! This is why you’ll only see 1 custom setting. We decided to sacrifice all settings (such as playlists support and video titles) that would add unnecessary weight. How many options do you really need on your WordPress plugins?

 = Is it possible not to use SlimFast on specific videos? = 

Of course! Juste paste the iframe code provided by YouTube (for example `<iframe width= »560″ height= »315″ src= »https://www.youtube.com/embed/neV3EPgvZ3g » frameborder= »0″ allow= »accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture » allowfullscreen></iframe>`) and SlimFast will leave it intact. Do it if you feel like certain videos deserve features we’ve cut.


 = What is in the code? = 

* Just 3 little scripts (YouTube iframe API, 1 custom javascript and 1 css).
* These will be loaded on your pages containing YouTube videos for an extra weight of 4KB only. Nothing will be loaded on pages that don't host YouTube videos.
* No JavaScript library such as jQuery is used to ensure a maximum compatibility with all themes.


== Installation ==

1. Upload the complete `slimfast-youtube-lazyloader` folder to your `/wp-content/plugins/` directory.
2. Activate the plugin through the 'Plugins' menu.
3. Paste the url of the YouTube video in a page (for example `https://youtu.be/neV3EPgvZ3g`). WordPress will convert it into a video iframe. SlimFast will take it from there and replace the iframe by the video thumbnail and a button to play the video. This will also work for all pre-existing videos embedded this way.
4. To change the default maximum width of videos (560px), go to your settings menu > SlimFast YouTube Lazyloader, and change the value.

== Demo ==

[View a demo.](https://thinksmall.me)


== Screenshots ==

1. Testing conditions: 4 Youtube videos on the page (blankslate theme), without SlimFast. Data are provided by GtMetrix. Pretty bad, no? Look beyond the PageSpeed and YSlow scores, the page took 6 secondes to load, while Google recommends not to exceed 2 seconds!

2. Same testing conditions, but with SlimFast activated! The page is 6x slimmer and loads 3x faster! Now you see why we’ve called this plugin SlimFast!


3. In this animation, we're using the Google console and simulating a "good 3G" mobile connection. See the difference with your own eyes!

== Frequently Asked Questions ==

= How to change the maximum video width? =

To change the default maximum video width, go to your settings menu > SlimFast YouTube Lazyloader, and change the value. The default value is 560px.

= Is it possible not to use SlimFast on specific videos? =

Of course! Juste paste the iframe code provided by YouTube (for example <iframe width= »560″ height= »315″ src= »https://www.youtube.com/embed/neV3EPgvZ3g » frameborder= »0″ allow= »accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture » allowfullscreen></iframe>) and SlimFast will leave it intact. Do it if you feel like certain videos deserve features we’ve cut.

= What is lazyloading and why is it important to use it on YouTube videos? = 

Lazyloading is a technique to make your pages load faster, by only loading required elements when the visitor requests them. The page speed is a key element in Google’s algorithm to rank pages.

Embedding a YouTube iframe will load a lot of scripts for every single video and will slow down your page, especially if your visitor doesn’t have a top connection. Hence the need for lazyloaders!

2 types of lazyloaders exist:

* Those who load the video iframe when the visitor scrolls down to the point where he sees the video on his screen.

* Those who load the iframe after the visitor clicks the Play button. SlimFast is one of those. We believe it is the best approach to let your visitor decide if he wants to click or not, and only load the iframe if he clicks.

See a comparison of performances with/without SlimFast in the "Screenshots" section.

 = Why is this plugin better than the other YouTube lazyloading plugins? = 

1. Because they require 2 click to play a video: 1 to load the iframe, 1 to play it! This is actually the reason why we built this plugin: SlimFast loads & play videos with 1 single click, even on mobile! Think about your User Experience, it’s crucial. Your visitors are frustrated if they have to click twice on that Play button to launch a video!

2. Because it doesn’t use any custom shortcode. WordPress already recognises YouTube videos when you paste their urls. SlimFast takes it from there. Why bother with shortcodes? Think long term! Shortcodes are painful if you decide to drop a plugin. If you’re unhappy with SlimFast, just deactivate it and all your YouTube videos will be back to their default iframes.

3. Because we’ve made it as light as possible! The plugin only adds 3 small scripts (YouTube iframe API, 1 custom javascript and 1 css) to your pages containing YouTube videos, for an extra weight of 4KB only. And nothing will be loaded if your pages don’t have YouTube videos! This is why you’ll only see 1 custom setting. We decided to sacrifice all settings (such as playlists support and video titles) that would add unnecessary weight. How many options do you really need on your WordPress plugins?

 = What is in the code? = 

* Just 3 little scripts (YouTube iframe API, 1 custom javascript and 1 css).
* These will be loaded on your pages containing YouTube videos for an extra weight of 4KB only. Nothing will be loaded on pages that don't host YouTube videos.
* No JavaScript library such as jQuery is used to ensure a maximum compatibility with all themes.

== Changelog ==

= 1.0.1 =
* Changing the default thumbnail served from YouTube to hqdefault format, which exists for all videos, unlike the sddefault format which lead to a grey thumbnail for some videos. The hqdefault format is also lighter than the ssdefault, which will improve furthermore speed performances.
* Reducing the default video size to 560px to match with YouTube's iframe default size.

= 1.0 =
* Initial version.

== Upgrade Notice ==

= 1.0.1 =
* Changing the default thumbnail served from YouTube to hqdefault format, which exists for all videos, unlike the sddefault format which lead to a grey thumbnail for some videos. The hqdefault format is also lighter than the ssdefault, which will improve furthermore speed performances.
* Reducing the default video size to 560px to match with YouTube's iframe default size.

= 1.0 =
* Initial version.
