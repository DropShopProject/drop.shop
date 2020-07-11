<!DOCTYPE html>
<html lang="em">
@include('template/headtag', ['title' => 'DropShop Socials'])

<body>

@include('template/navbar')

<div class="container-fluid text-center">

<div class="dsbanner text-center">
  <img src="{{ url('img/SOCIALSBANNER.jpg') }}" id="ds-banner" class="img-fluid">
</div>

</div>

    <div class="container-fluid justify-content-center" id="container">
      <div class="row text-center">
        <div class="col text-center">
          <a id="twitFeed" height="610" class="twitter-timeline" data-theme="light" href="https://twitter.com/DropShop4935?ref_src=twsrc%5Etfw">Tweets by DropShop4935</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
        </div>
      </div>
      <div class="row text-center pb-5">
        <div class="col text-center pb-5">
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
