<!DOCTYPE html>
<html lang="em">
@include('template/headtag', ['title' => 'DropShop Home'])

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
        <input type="text" name="collab_name" placeholder="Enter Collab Name" class="form-control">
      </div>

      <div class="col-md-8 offset-md-2" style="margin-top: 20px;">
        <input type="submit" class="form-control" value="Submit">
      </div>
    </form>
  </div>


  @include('template/footer')
</body>

</html>