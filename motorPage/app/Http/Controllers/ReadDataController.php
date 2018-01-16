<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Owner;
use App\Motorbike;

class ReadDataController extends Controller {

    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return Response
     */
    public function showData()
    {
        return View('home')
        ->with('motorbikes', Motorbike::all())
        ->with('owners', Owner::all());

}
}