@if(isset($car))
  <form action="{{route('cars.update', $car->id)}}" method="post" enctype="multipart/form-data"> <!-- class="dropzone" -->
@else
  <form action="{{route('cars.store')}}" method="post" enctype="multipart/form-data"> <!-- class="dropzone" -->
@endif
  {{csrf_field()}}
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-sm-12">
        <div class="form-group">
          <label for="motorCapacity">Motor Capacity</label>
          <input type="number" name="motorCapacity" class="form-control" id="motorCapacity"
            aria-describedby="motorCapacity" value="{{ isset($car) ? $car->motorcapacity : '' }}" required>
        </div>
        <div class="form-group">
          <label for="power">Power</label>
          <input type="number" name="power" class="form-control" id="power"
            placeholder="Power" value="{{ isset($car) ? $car->power : '' }}" required>
        </div>
        <div class="form-group">
          <label for="topspeed">Top Speed</label>
          <input type="number" name="topspeed" class="form-control" id="topspeed"
            aria-describedby="topspeed" value="{{ isset($car) ? $car->topspeed : '' }}">
        </div>
        <div class="form-group">
          <label for="acceleration">Acceleration 0-100km/h</label>
          <input type="number" name="acceleration" class="form-control" id="acceleration"
            aria-describedby="acceleration" value="{{ isset($car) ? $car->acceleration : '' }}">
        </div>
        <div class="form-group">
          <div class="input-group mb-3">
          <div class="input-group-prepend">
            <label class="input-group-text" for="brand">Brand</label>
          </div>
          <select class="custom-select" id="brand" name="brand">
            @foreach($brands as $b)
              <option value="{{$b->id}}"
                {{ isset($car) ? ($b->id == $car->brand_id ? 'selected' : '') : '' }}>{{$b->name}}</option>
            @endforeach
          </select>
        </div>
        </div>
        <div class="form-group">
          <label for="model">Model</label>
          <input type="text" name="model" class="form-control" id="model"
            value="{{ isset($car) ? $car->model : '' }}" placeholder="Model" required>
        </div>
        <div class="form-group">
          <label for="bodyType">Body Type</label>
          <input type="text" name="bodyType" class="form-control" id="bodyType"
            value="{{ isset($car) ? $car->bodytype : '' }}" placeholder="bodyType" required>
        </div>
        <div class="form-group">
          <label for="gearboxType">Gearbox Type</label>
          <input type="text" name="gearboxType" class="form-control" id="gearboxType"
            value="{{ isset($car) ? $car->gearboxtype : '' }}" placeholder="gearboxType" required>
        </div>
        <div class="form-group">
          <label for="co2emmision">CO2 Emmision</label>
          <input type="text" name="co2emmision" class="form-control" id="co2emmision"
            value="{{ isset($car) ? $car->co2emmision : '' }}" placeholder="CO2 Emmision">
        </div>
        <div class="form-group">
          <label for="location">Location</label>
          <input type="text" name="location" class="form-control" id="location"
            value="{{ isset($car) ? $car->location : '' }}" placeholder="Location">
        </div><div class="form-group">
          <label for="color">Color</label>
          <input type="text" name="color" class="form-control" id="color"
            value="{{ isset($car) ? $car->color : '' }}" placeholder="Color">
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
        <div class="row">
          <div class="col-sm-6 col-md-6 col-lg-6">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
          <div class="col-sm-4 col-md-4 col-lg-4 col-sm-offset-2 col-md-offset-2 col-lg-offset-2">
        </form>
        @if(isset($car))
          <form action="{{route('cars.delete', $car->id)}}" method="post">
            {{csrf_field()}}
            <input type="submit" class="btn btn-danger mt-5 mt-sm-0" value="Delete">
          </form>
        @endif
      </div>
    </div>

    </div>
  </div>
</div>
