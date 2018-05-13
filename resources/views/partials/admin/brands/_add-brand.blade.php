<form action="{{route('brands.store')}}" method="post">
  {{csrf_field()}}
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-sm-12">
        <div class="form-group">
          <label for="name">Brand Name</label>
          <input type="text" name="name" class="form-control" id="name" placeholder="Name" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </div>
</form>
