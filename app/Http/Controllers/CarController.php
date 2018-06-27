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
        return view('cars.stocklist')->with(compact('cars'));
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

    public function duplicate($id){
      $c = Car::find($id);
      $car = new Car();
      $car->refNr = $c->refNr;
      $car->brand_id = $c->brand_id;
      $car->model = $c->model;
      $car->fuelType = $c->fuelType;
      $car->exterior = $c->exterior;
      $car->co2 = $c->co2;
      $car->interior = $c->interior;
      $car->hpkw = $c->hpkw;
      if($c->firstRegistration)
        $car->firstRegistration = $c->firstRegistration;
      if($c->KMs)
        $car->KMs = $c->KMs;
      $car->price = $c->price;
      $car->featuredImage = $c->featuredimage;
      $car->galleryimages = $c->galleryimages;

      $car->save();

      $cars = Car::all();
      Session::flash('success', 'Car Duplicated');
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
          'refNr' => 'required',
          'model' => 'required',
          'fuelType' => 'required',
          'exterior' => 'required',
          'co2' => 'required',
          'interior' => 'required',
          'hpkw' => 'required',
          'price' => 'required',
          'featuredImage' => 'required|image'
        ]);

        $car = new Car();
        $car->refNr = $request->refNr;
        $car->brand_id = $request->brand;
        $car->model = $request->model;
        $car->fuelType = $request->fuelType;
        $car->exterior = $request->exterior;
        $car->co2 = $request->co2;
        $car->interior = $request->interior;
        $car->hpkw = $request->hpkw;
        if($request->firstRegistration)
          $car->firstRegistration = $request->firstRegistration;
        if($request->KMs)
          $car->KMs = $request->KMs;
        $car->price = $request->price;
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

            if(!File::exists)
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
        return view('car.car');
        // $car = Car::find($id);
        // $galleryimages = [];
        // if(isset($car->galleryimages))
        //   $galleryimages = explode(';', $car->galleryimages);
        // return view('cars.show')->with(compact('car', 'galleryimages'));
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
        'refNr' => 'required',
        'model' => 'required',
        'fuelType' => 'required',
        'exterior' => 'required',
        'co2' => 'required',
        'interior' => 'required',
        'hpkw' => 'required',
        'price' => 'required',
        // 'featuredImage' => 'required|image'
      ]);

      $car = Car::find($id);
      $car->refNr = $request->refNr;
      $car->brand_id = $request->brand;
      $car->model = $request->model;
      $car->fuelType = $request->fuelType;
      $car->exterior = $request->exterior;
      $car->co2 = $request->co2;
      $car->interior = $request->interior;
      $car->hpkw = $request->hpkw;
      if($request->firstRegistration)
        $car->firstRegistration = $request->firstRegistration;
      if($request->KMs)
        $car->KMs = $request->KMs;
      $car->price = $request->price;
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
        $car->galleryimages = $gallery_string;
      }


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
