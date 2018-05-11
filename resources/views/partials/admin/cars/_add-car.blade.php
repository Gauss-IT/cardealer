<form action="{{route('cars.store')}}" method="post" enctype="multipart/form-data"> <!-- class="dropzone" -->
  {{csrf_field()}}
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-sm-12">
        <div class="form-group">
          <label for="motorCapacity">Motor Capacity</label>
          <input type="number" name="motorCapacity" class="form-control" id="motorCapacity" aria-describedby="motorCapacity" required>
        </div>
        <div class="form-group">
          <label for="power">Power</label>
          <input type="text" name="power" class="form-control" id="power" placeholder="Power" required>
        </div>
        <div class="form-group">
          <label for="model">Model</label>
          <input type="text" name="model" class="form-control" id="model" placeholder="Model" required>
        </div>
        <div class="form-group">
          <label for="bodyType">Body Type</label>
          <input type="text" name="bodyType" class="form-control" id="bodyType" placeholder="bodyType" required>
        </div>
        <div class="form-group">
          <label for="gearboxType">Gearbox Type</label>
          <input type="text" name="gearboxType" class="form-control" id="gearboxType" placeholder="gearboxType" required>
        </div>
        <div class="form-group">
          <label for="co2emmision">CO2 Emmision</label>
          <input type="text" name="co2emmision" class="form-control" id="co2emmision" placeholder="CO2 Emmision">
        </div>
        <div class="form-group">
          <label for="location">Location</label>
          <input type="text" name="location" class="form-control" id="location" placeholder="Location">
        </div><div class="form-group">
          <label for="color">Color</label>
          <input type="text" name="color" class="form-control" id="color" placeholder="Color">
        </div>
      </div>
      <div class="col-md-6 col-sm-12">
        <div class="form-group">
          <label for="featuredImage">Featured Image</label>
          <input type="file" name="featuredImage">
        </div>
        <div class="form-group">
          <label for="file">Gallery Images</label>
          <input type="file" id="file" name="file[]" multiple />
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </div>
</form>
