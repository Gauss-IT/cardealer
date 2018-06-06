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
          <label for="refNr">Ref Nr</label>
          <input type="number" name="refNr" class="form-control" id="refNr"
            aria-describedby="refNr" value="{{ isset($car) ? $car->refNr : '' }}" required>
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
            value="{{ isset($car) ? $car->model : '' }}" placeholder="model" required>
        </div>
        <div class="form-group">
          <label for="fuelType">Fuel Type</label>
          <input type="text" name="fuelType" class="form-control" id="fuelType"
            value="{{ isset($car) ? $car->fuelType : '' }}" placeholder="Fuel Type" required>
        </div>
        <div class="form-group">
          <label for="exterior">Exterior</label>
          <input type="text" name="exterior" class="form-control" id="exterior"
            value="{{ isset($car) ? $car->exterior : '' }}" placeholder="exterior" required>
        </div>
        <div class="form-group">
          <label for="interior">Interior</label>
          <input type="text" name="interior" class="form-control" id="interior"
            value="{{ isset($car) ? $car->interior : '' }}" placeholder="interior" required>
        </div>
        <div class="form-group">
          <label for="co2">CO2 Emmision</label>
          <input type="text" name="co2" class="form-control" id="co2"
            value="{{ isset($car) ? $car->co2 : '' }}" placeholder="CO2 Emmision">
        </div>
        <div class="form-group">
          <label for="hpkw">HP/KW</label>
          <input type="text" name="hpkw" class="form-control" id="hpkw"
            value="{{ isset($car) ? $car->hpkw : '' }}" placeholder="HP/KW">
        </div>
        <div class="form-group">
          <label for="firstRegistration">First Registration</label>
          <input type="text" name="firstRegistration" class="form-control" id="firstRegistration"
            value="{{ isset($car) ? $car->firstRegistration : '' }}" placeholder="First Registration">
        </div>
        <div class="form-group">
          <label for="KMs">KMs</label>
          <input type="text" name="KMs" class="form-control" id="KMs"
            value="{{ isset($car) ? $car->KMs : '' }}" placeholder="Kilometers">
        </div>
        <div class="form-group">
          <label for="price">Price</label>
          <input type="text" name="price" class="form-control" id="price"
            value="{{ isset($car) ? $car->price : '' }}" placeholder="Price">
        </div>
      </div>
      <div class="col-md-6 col-sm-12">
        <div class="form-group">
          <label for="featuredImage">Featured Image</label>
          <input type="file" value="{{ isset($car) ? $car->featuredImage : ''}}" name="featuredImage">
        </div>
        <div class="form-group">
          <label for="file">Gallery Images</label>
          <input type="file" id="file" value="{{ isset($car) ? $car->galleryimages : ''}}" name="file[]" multiple />
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
