<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\product;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('function.addproduct');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('function.addproduct');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request,['proj_type_id' => 'required','proj_name' => 'required','proj_price' => 'required','proj_price' => 'required','proj_amount' => 'required','proj_detail' => 'required']);
        $product = new Product(
            [
                'proj_type_id' =>$request->get('proj_type_id'),
                'proj_name' =>$request->get('proj_name'),
                'proj_price' =>$request->get('proj_price'),
                'proj_amounr' =>$request->get('proj_amount'),
                'proj_detail' =>$request->get('proj_detail')
            ]);
        $product->save();
        return redirect()->route('')->with('success','บันทึกข้อมูลเรียบร้อย');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
