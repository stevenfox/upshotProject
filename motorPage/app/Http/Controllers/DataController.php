<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Owner;
use Illuminate\Foundation\Http\FormRequeset;
use App\Motorbike;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;


class DataController extends Controller {

    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return Response
     */
    public function index()
    {
        return View('home')
        ->with('motorbikes', Motorbike::all())
        ->with('owners', Owner::all());

    }

    public function create()
    {
        return View::make('inc\create');
    }

    public function store() {
        //validate

    $rules=array(
        'Brand'      =>'required',
        'Colour'     => 'required',
        'Model_Year' => 'required'
    );
    $validator = Validator::make(Input::all(),$rules);

    if($validator->fails()){
        return Redirect::to('/')
            ->withErrors($validator);
    } else {
        //store
        $motorbike = new Motorbike;
        $motorbike->Brand       = Input::get('Brand');
        $motorbike->Colour      = Input::get('Colour');
        $motorbike ->Model_Year = Input::get('Model_Year');
        $motorbike->save();

        //redirect
        
        return Redirect::to('/');
        }


    }



}