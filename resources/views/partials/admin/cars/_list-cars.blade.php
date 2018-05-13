<div class="card mb-3">
  <div class="card-header">
    <i class="fa fa-table"></i> All Cars </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>Motor Capacity</th>
            <th>Power</th>
            <th>Model</th>
            <th>Body Type</th>
            <th>Gearbox Type</th>
            <th>CO2 Emmision</th>
            <th>Top Speed</th>
            <th>Acceleration</th>
            <th>Location</th>
            <th>Color</th>
            <th>Edit</th>
          </tr>
        </thead>
        <tfoot>
          <tr>
            <th>Motor Capacity</th>
            <th>Power</th>
            <th>Model</th>
            <th>Body Type</th>
            <th>Gearbox Type</th>
            <th>CO2 Emmision</th>
            <th>Top Speed</th>
            <th>Acceleration</th>
            <th>Location</th>
            <th>Color</th>
            <th>Edit</th>
          </tr>
        </tfoot>
        <tbody>
          @foreach($cars as $c)
            <tr>
              <td>{{$c->motorcapacity}}</td>
              <td>{{$c->power}}</td>
              <td>{{$c->model}}</td>
              <td>{{$c->bodytype}}</td>
              <td>{{$c->gearboxtype}}</td>
              <td>{{$c->co2emmision}}</td>
              <td>{{ isset($c->topspeed) ? $c->topspeed . 'km/h' : 'N/A' }}</td>
              <td>{{ isset($c->acceleration) ? '0-100 in ' . $c->acceleration . ' sec' : 'N/A' }}</td>
              <td>{{$c->location}}</td>
              <td>{{$c->color}}</td>
              <td>
                <a href="{{route('cars.edit', $c->id)}}" class="btn btn-outline-dark btn-sm">Edit</a>
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
