<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Http\FormRequeset;
use App\Magazine;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;


class DataController extends Controller {

   /**
     * Show the profile for the given user.
     *
     * @return Response
     */

   
    public function index()
    {
        return View('inc.index')
        ->with('magazines', Magazine::all());

    }

   /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return Response
     */

    public function create()
    {
        return View::make('inc\create');
    }

       /**
     * Show the profile for the given user.
     *
     * @return Response
     */


    public function store() {
        //validate
    $rules=array(
            'Name'      =>'required',
            'Price'     => 'required',
            'Cover'     => 'required',
            'Colour'    => 'required', 
            'Size'      => 'required',
            'Theme'     => 'required'        
        );
        $validator = Validator::make(Input::all(),$rules);

        if($validator->fails()){
            return Redirect::to('inc')
                ->withErrors($validator);
        } else {
            //store
            $magazine = new Magazine;
            $magazine->Name       = Input::get('Name');
            $magazine->Price      = Input::get('Price');
            $magazine->Cover      = Input::get('Cover');
            $magazine->Colour     = Input::get('Colour');
            $magazine ->Size      = Input::get('Size');
            $magazine ->Theme     = Input::get('Theme');
            $magazine->save();

            //redirect
            
            return Redirect::to('inc');
            }

    }

    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return Response
     */

     public function destroy($id)
    {
        $book = Magazine::find($id);
        $book->delete();

        // redirect
        return Redirect::to('inc');
    }


}