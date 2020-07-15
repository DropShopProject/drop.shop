<!DOCTYPE html>
<html lang="em">
@include('template/headtag', ['title' => 'DropShop Socials'])

<body>

@include('template/navbar')


<!-- Facebook Messenger Chat Plugin
 Load Facebook SDK for JavaScript
      <div id="fb-root"></div>
      <script>
        window.fbAsyncInit = function() {
          FB.init({
            xfbml            : true,
            version          : 'v7.0'
          });
        };

        (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));</script>

      Your Chat Plugin code
      <div class="fb-customerchat"
        attribution=setup_tool
        page_id="101779201616820"
  theme_color="#FF6600">
      </div>
-->
<div class="container-fluid text-center">

<div class="dsbanner text-center">
  <img src="{{ url('img/SOCIALSBANNER.jpg') }}" id="ds-banner" class="img-fluid">
</div>

</div>

    <div class="container-fluid justify-content-center" id="container">
      <div class="row text-center">
        <div class="col text-center">
          
        <div class="table">
          <div class="table-cell">
            <a class="twitter-timeline tw-align-center" href="https://twitter.com/DropShop4935" data-widget-id="591646755353186304" height="610px" width="800px">Tweets by @DropShop4935</a>

              <script>
                ! function(d, s, id) 
                {
                  var js, fjs = d.getElementsByTagName(s)[0],
                  p = /^http:/.test(d.location) ? 'http' : 'https';
                  if (!d.getElementById(id))
                  {
                    js = d.createElement(s);
                    js.id = id;
                    js.src = p + "://platform.twitter.com/widgets.js";
                    fjs.parentNode.insertBefore(js, fjs);
                  }
                }(document, "script", "twitter-wjs");
              </script>
          </div>
        </div>
      </div>

      <!-- Facebook Feed-->
      <div class="col text-center">
        <div id="fb-root"></div>
        <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v7.0" nonce="T6kEMjrU"></script>

        <div class="fb-page" data-href="https://www.facebook.com/DropShop-101779201616820" data-tabs="timeline,events,messages" data-height="610px" data-width="800px" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/DropShop-101779201616820" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/DropShop-101779201616820">DropShop</a></blockquote></div>
      </div>
    </div>

    <!-- Twitter Buttons -->
      <div class="row text-left pb-5">
        <div class="col text-left pb-5">
          <a href="https://twitter.com/DropShop4935?ref_src=twsrc%5Etfw" class="twitter-follow-button" data-show-count="false">Follow @DropShop4935</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
          <a href="https://twitter.com/intent/tweet?screen_name=DropShop4935&ref_src=twsrc%5Etfw" class="twitter-mention-button" data-show-count="false">Tweet to @DropShop4935</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
        </div>
      </div>
      
    <!-- Instagram Feed -->
      <!-- Place <div> tag where you want the feed to appear -->
      <div id="curator-feed-default-feed-layout"><a href="https://curator.io" target="_blank" class="crt-logo crt-tag">Powered by Curator.io</a></div>
      <!-- The Javascript can be moved to the end of the html page before the </body> tag -->
      <script type="text/javascript">
      /* curator-feed-default-feed-layout */
        (function(){
        var i, e, d = document, s = "script";i = d.createElement("script");i.async = 1;
        i.src = "https://cdn.curator.io/published/e47b77f6-933a-4ad7-bb63-a8f0bbbddb8f.js";
        e = d.getElementsByTagName(s)[0];e.parentNode.insertBefore(i, e);
        })();
      </script>
    </div>



@include('template/footer')
  

</body>
</footer>
</html>
