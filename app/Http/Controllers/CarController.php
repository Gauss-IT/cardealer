<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Car;
use Image;
use File;
use Session;
use App\Brand;

class CarController extends Controller
{

    public function __constructor() {
      $this->middleware('auth', ['only' => ['list', 'store', 'create', 'edit', 'update', 'destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cars = Car::all();
        return view('cars.index')->with(compact('cars'));
    }

    public function indexL2()
    {
        $cars = Car::all();
        return view('cars.listing2')->with(compact('cars'));
    }

    public function root_index() {
      $cars = Car::all();
      return view('welcome')->with(compact('cars'));
    }

    public function list() {
      $cars = Car::all();
      return view('admin.list-cars')->with(compact('cars'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
          'motorCapacity' => 'required',
          'power' => 'required',
          'model' => 'required',
          'bodyType' => 'required',
          'gearboxType' => 'required',
          'co2emmision' => 'required',
          'location' => 'required',
          'color' => 'required',
          'featuredImage' => 'required|image'
        ]);

        $car = new Car();
        $car->motorCapacity = $request->motorCapacity;
        $car->power = $request->power;
        $car->brand_id = $request->brand;
        $car->model = $request->model;
        if($request->topspeed)
          $car->topspeed = $request->topspeed;
        if($request->acceleration)
          $car->acceleration = $request->acceleration;
        $car->bodytype = $request->bodyType;
        $car->gearboxtype = $request->gearboxType;
        $car->co2emmision = $request->co2emmision;
        $car->location = $request->location;
        $car->color = $request->color;
        if($request->hasFile('featuredImage')){
          $image = $request->file('featuredImage');
          $filename = time() . '.' . $image->getClientOriginalExtension();
          File::exists(public_path() . '/images/cars') or File::makeDirectory(public_path() . '/images/cars', 0777, true);
          $location = public_path('images/cars/' . $filename);
          Image::make($image)->fit(800, 500)->save($location);

          $car->featuredimage = $filename;
        }

        // $gallery_images = $request->file('file');
        $gallery_count = 0;
        $gallery_string = '';

        if($request->file){
          foreach($request->file as $gi){
            var_dump($gi);
            $filename = $gallery_count++ . time() . '.' . $gi->getClientOriginalExtension();
            File::exists(public_path() . '/images/cars/' . $car->id . '/') or
              File::makeDirectory(public_path() . '/images/cars/' . $car->id . '/', 0777, true);
            $location = public_path('images/cars/' . $car->id . '/' . $filename);
            Image::make($gi)->fit(800, 500)->save($location);
            $gallery_string .= $filename . ';';
          }
        }

        $car->galleryimages = $gallery_string;

        $car->save();
        Session::flash('success', 'This car was successfully saved.');

        return redirect()->route('admin.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $car = Car::find($id);
        $galleryimages = [];
        if(isset($car->galleryimages))
          $galleryimages = explode(';', $car->galleryimages);
        return view('cars.show')->with(compact('car', 'galleryimages'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $car = Car::find($id);
        $brands = Brand::all();
        return view('admin.car-edit')->with(compact('car', 'brands'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $this->validate($request, [
        'motorCapacity' => 'required',
        'power' => 'required',
        'model' => 'required',
        'bodyType' => 'required',
        'gearboxType' => 'required',
        'co2emmision' => 'required',
        'location' => 'required',
        'color' => 'required',
        'featuredImage' => 'sometimes|image'
      ]);

      $car = Car::find($id);
      $car->motorCapacity = $request->motorCapacity;
      $car->power = $request->power;
      $car->brand_id = $request->brand;
      if($request->topspeed)
        $car->topspeed = $request->topspeed;
      if($request->acceleration)
        $car->acceleration = $request->acceleration;
      $car->model = $request->model;
      $car->bodytype = $request->bodyType;
      $car->gearboxtype = $request->gearboxType;
      $car->co2emmision = $request->co2emmision;
      $car->location = $request->location;
      $car->color = $request->color;
      if($request->hasFile('featuredImage')){
        $image = $request->file('featuredImage');
        $filename = time() . '.' . $image->getClientOriginalExtension();
        File::exists(public_path() . '/images/cars') or File::makeDirectory(public_path() . '/images/cars', 0777, true);
        $location = public_path('images/cars/' . $filename);
        Image::make($image)->fit(800, 500)->save($location);

        $car->featuredimage = $filename;
      }

      // $gallery_images = $request->file('file');
      $gallery_count = 0;
      $gallery_string = '';

      if($request->file){
        foreach($request->file as $gi){
          $filename = $gallery_count++ . time() . '.' . $gi->getClientOriginalExtension();
          File::exists(public_path() . '/images/cars/' . $car->id . '/') or
            File::makeDirectory(public_path() . '//images/cars/' . $car->id . '/', 0777, true);
          $location = public_path('images/cars/' . $car->id . '/' . $filename);
          Image::make($gi)->fit(800, 500)->save($location);
          $gallery_string .= $filename . ';';
        }
      }

      $car->galleryimages = $gallery_string;

      $car->save();
      Session::flash('success', 'This car was successfully updated.');

      return redirect()->route('cars.list');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $c = Car::find($id);
        $c->delete();
        Session::flash('success', 'This car was successfully deleted.');
        return redirect('/admin');
    }
}
