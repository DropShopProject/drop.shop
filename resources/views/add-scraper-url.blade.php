<!DOCTYPE html>
<html lang="em">
@include('template/headtag', ['title' => 'Add Scraper URL'])

<body>
  @include('template/navbar')

  <div class="container">
    <form action="{{ action('ScraperInputController@add_scraper_entry') }}" method="POST">
      @csrf

      <div class="col-md-8 offset-md-2">
        <label for="url">GOAT URL</label><br>
        <input type="text" name="goat_url" placeholder="Enter GOAT URL Here" class="form-control">
      </div>

      <div class="col-md-8 offset-md-2">
        <label for="url">FlightClub URL</label><br>
        <input type="text" name="fc_url" placeholder="Enter FlightClub URL Here" class="form-control">
      </div>

      <div class="col-md-8 offset-md-2">
        <label for="url">Kixify URL</label><br>
        <input type="text" name="kixify_url" placeholder="Enter Kixify URL Here" class="form-control">
      </div>

      <div class="col-md-8 offset-md-2">
        <label for="collab_name">Collab Name</label><br>
        <select type="text" name="collab_name" class="form-control">
          <option value="travis-scott">TRAVIS SCOTT</option>
          <option value="drake">DRAKE</option>
          <option value="yeezy">YEEZY</option>
          <option value="asap-rocky">A$AP ROCKY</option>
          <option value="kobe">KOBE BRYANT</option>
          <option value="off-white">OFF-WHITE</option>
          <option value="supreme">SUPREME</option>
          <option value="alex-wang">ALEXANDER WANG</option>
          <option value="just-don">JUST DON</option>
          <option value="fear-of-god">FEAR OF GOD</option>
          <option value="rihanna">RIHANNA</option>
          <option value="dr-woo">DR. WOO</option>
          <option value="pharrell">PHARRELL</option>
          <option value="kendrick-lamar">KENDRICK LAMAR</option>
        </select>

      </div>

      <div class="col-md-8 offset-md-2" style="margin-top: 20px;">
        <input type="submit" class="form-control" value="Submit">
      </div>
    </form>
  </div>


  @include('template/footer')
</body>

</html>