@extends('layouts.admin')

@section('content')
  @include('partials.admin.brands._add-brand')

  <div class="container">
    <table class="table table-hover table-striped table-bordered table-dark" style="margin-top:5%;">
    <thead>
      <tr>
        <th scope="col">Brand Name</th>
        <th scope="col">Edit</th>
      </tr>
    </thead>
    <tbody>
      @foreach($brands as $b)
        <tr>
          <form action="{{route('brands.update', $b->id)}}" method="post">
            <td>
              <input type="text" value="{{$b->name}}" name="name" class="form-control">
            </td>
            <td>
                {{csrf_field()}}
                <input type="submit" class="btn btn-primary btn-sm" value="Change">
            </td>
        </form>
        </tr>
      @endforeach
    </tbody>
    </table>
  </div>

@endsection
