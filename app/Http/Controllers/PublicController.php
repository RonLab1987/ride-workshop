<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//use  Illuminate\Validation\ValidationServiceProvider;
use App\Http\Requests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use App\Http\Controllers\Controller;

use App\PublicOrder;
use Validator;

class PublicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('public.homepage');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function priceList()
    {
        return view('public.price-list');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function inputValidator(PublicOrder $publicOrder,Request $request)
    {   //dd($request->all());
       //$input = $request->only('phone','name');
        $rules = array(
            'name' => 'required',
            'phone' => array('required','phone:RU'));
        $messages = array(
            'name.required' => 'Вы не указали ваше имя',
            'phone.required' => 'Вы не указали ваш телефон',
            'phone.phone' => 'Неверный формат телефона.'
        );
        $validation = Validator::make($request->all(), $rules, $messages);
        
        if($validation->fails()){
            //$er = $validation->messages();
            //dd('Ашибкама',$input, $er->all(), $validation->messages(), $validation->failed());
            //$url = route('validateError');
            return redirect()->route('validateError')->withInput()->withErrors($validation);
        }
        else{
            //$formatedPhone = phone_format($request['phone'],'RU');
            //$this->store($publicOrder,$request);
            //dd('прокатило',$validation->fails(), $request->all());
            return redirect()->route('orderStore')->withInput();
        }
    }
    
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function validateError(Request $request)
    {   //dd($request->old());
        return view('public.validate-error',['oldInput'=>$request->old()]);
        
    }

    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PublicOrder $publicOrder,Request $request)
    {   //$formatedPhone = phone_format($request->old('phone'),'RU');
        //dd('прокатило', $request->old(), $request->old('phone'),$formatedPhone, $input);
        //return view('public.thanks',['input'=>$request->old(), 'phone' =>$formatedPhone]);
        return view('public.thanks');
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
