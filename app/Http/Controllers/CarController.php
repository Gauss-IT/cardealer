<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Car;
use Image;
use File;

class CarController extends Controller
{
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

    public function root_index() {
      $cars = Car::all();
      return view('welcome')->with(compact('cars'));
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

        foreach($request->file as $gi){
          $filename = $gallery_count++ . time() . '.' . $gi->getClientOriginalExtension();
          File::exists(public_path() . '/images/cars/' . $car->id . '/') or
            File::makeDirectory(public_path() . '//images/cars/' . $car->id . '/', 0777, true);
          $location = public_path('images/cars/' . $car->id . '/' . $filename);
          Image::make($gi)->fit(800, 500)->save($location);
          $gallery_string .= $filename . ';';
        }

        $car->galleryimages = $gallery_string;

        $car->save();
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
        return view('cars.show')->with(compact('car'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
