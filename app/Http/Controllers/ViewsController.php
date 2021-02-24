<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewsController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function index($shop)
    {
        if($shop == "teste"){
            return view('view.view-index');
        }
        else{
            return redirect()->route('/');
        }
    }
}
