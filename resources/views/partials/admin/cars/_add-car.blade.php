<form action="#" method="post" enctype="multipart/form-data"> <!-- class="dropzone" -->
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-sm-12">
        <div class="form-group">
          <label for="motorCapacity">Motor Capacity</label>
          <input type="number" class="form-control" id="motorCapacity" aria-describedby="motorCapacity">
        </div>
        <div class="form-group">
          <label for="power">Power</label>
          <input type="text" class="form-control" id="power" placeholder="Power">
        </div>
        <div class="form-group">
          <label for="model">Model</label>
          <input type="text" class="form-control" id="model" placeholder="Model">
        </div>
        <div class="form-group">
          <label for="bodyType">Body Type</label>
          <input type="text" class="form-control" id="bodyType" placeholder="bodyType">
        </div>
        <div class="form-group">
          <label for="gearboxType">Gearbox Type</label>
          <input type="text" class="form-control" id="gearboxType" placeholder="gearboxType">
        </div>
        <div class="form-group">
          <label for="CO2">CO2 Emmision</label>
          <input type="text" class="form-control" id="CO2" placeholder="CO2 Emmision">
        </div>
        <div class="form-group">
          <label for="location">Location</label>
          <input type="text" class="form-control" id="location" placeholder="Location">
        </div><div class="form-group">
          <label for="color">Color</label>
          <input type="text" class="form-control" id="color" placeholder="Color">
        </div>
      </div>
      <div class="col-md-6 col-sm-12">
        <div class="form-group">
          <label for="featuredImage">Featured Image</label>
          <input type="file" name="featuredImage">
        </div>
        <div class="form-group">
          <label for="file">Gallery Images</label>
          <input type="file" name="file" multiple />          
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </div>
</form>
