<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class DataController extends Controller {

   /**
     * Show the profile for the given user.
     *
     * @return Response
     */

   
    public function index()
    {
         return View('inc.index');

    }
}