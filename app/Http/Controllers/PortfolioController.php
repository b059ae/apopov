<?php

namespace App\Http\Controllers;

use App\Portfolio;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PortfolioController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id, Request $request)
    {
        $portfolio = Portfolio::findOrFail($id);

        if($request->ajax()){
            return view('portfolio.ajax.view', compact(['portfolio']));
        }
        return view('portfolio.view', compact(['portfolio']));
    }
}
