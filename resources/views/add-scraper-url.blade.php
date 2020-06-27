<!DOCTYPE html>
<html lang="em">
@include('template/headtag', ['title' => 'DropShop Home'])

<body>
  @include('template/navbar')

  <div class="container">
    <form action="{{ action('ScraperInputController@add_scraper_entry') }}" method="POST">
      @csrf

      <div class="col-md-8 offset-md-2">
        <label for="url">URL</label><br>
        <input type="text" name="url" placeholder="Enter URL Here" class="form-control">
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