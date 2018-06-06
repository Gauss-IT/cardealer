<div class="card mb-3">
  <div class="card-header">
    <i class="fa fa-table"></i> All Cars </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>Ref Nr</th>
            <th>Brand</th>
            <th>Model</th>
            <th>Fuel Type</th>
            <th>Exterior</th>
            <th>Interior</th>
            <th>CO2</th>
            <th>HP/KW</th>
            <th>First Registration</th>
            <th>KMs</th>
            <th>Price</th>
          </tr>
        </thead>
        <tfoot>
          <tr>
            <th>Ref Nr</th>
            <th>Brand</th>
            <th>Model</th>
            <th>Fuel Type</th>
            <th>Exterior</th>
            <th>Interior</th>
            <th>CO2</th>
            <th>HP/KW</th>
            <th>First Registration</th>
            <th>KMs</th>
            <th>Price</th>
          </tr>
        </tfoot>
        <tbody>
          @foreach($cars as $c)
            <tr>
              <td>{{$c->refNr}}</td>
              <td>{{$c->brand->name}}</td>
              <td>{{$c->model}}</td>
              <td>{{$c->fuelType}}</td>
              <td>{{$c->exterior}}</td>
              <td>{{$c->interior}}</td>
              <td>{{$c->co2}}</td>
              <td>{{$c->hpkw}}</td>
              <td>{{ isset($c->firstRegistration) ? $c->firstRegistration : '-' }}</td>
              <td>{{ isset($c->KMs) ? $c->KMs : '-' }}</td>
              <td>{{$c->price}}</td>
              <td>
                <a href="{{route('cars.edit', $c->id)}}" class="btn btn-outline-dark btn-sm">Edit</a>
                <form action="{{route('cars.duplicate', $c->id)}}" method="post">
                  {{csrf_field()}}
                  <input type="submit" class="btn btn-outline-dark btn-sm" value="Duplicate">
                </form>
                {{-- <a href="{{route('cars.duplicate', $c->id)}}" class="btn btn-outline-dark btn-sm">Duplicate</a> --}}
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
  <div class="card-footer small text-muted">All Cars List</div>
</div>
</div>
