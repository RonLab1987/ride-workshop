<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//use  Illuminate\Validation\ValidationServiceProvider;
use App\Http\Requests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use App\Http\Controllers\Controller;

use App\PublicOrder;
use \Session;
use Validator;
use Mail;


class PublicController extends Controller
{
    /**
     * 
     * 
     * Главная страница Катай.рф
     * 
     */
    public function index()
    {
        return view('public.homepage');
    }
    
    /**
     * 
     * 
     *  Страница Цены-на-работу
     */
    public function priceList()
    {
        return view('public.price-list');
    }
    
    /**
     * 
     * 
     *  Формирую массив для валидатора
     */
    public function validateData($input)
    {   
        
       //$input = $request->all();
       
       if(strlen($input['phone'])>0){
           $validatePhone = $input['phone'];
        
        // dd($validatePhone);
        $validatePhoneCrop="";

         for($i=0; $i < strlen($validatePhone); $i++){
             if(is_numeric($validatePhone[$i])){
                 $validatePhoneCrop .= $validatePhone[$i];
             }
         }

         if(strlen($validatePhoneCrop) == 6){
             $validatePhoneCrop = "(833)2" . $validatePhoneCrop;
             $input['phone'] = $validatePhoneCrop;
         }
         // dd($validatePhoneCrop);
       }
       
        $rules = array(
            'name' => 'required',
            'phone' => array('required','phone:RU'));
        $messages = array(
            'name.required' => 'Вы не указали ваше имя',
            'phone.required' => 'Вы не указали ваш телефон',
            'phone.phone' => 'Укажите телефон в федеральном формате. Например 9123370770 или (833)243-45-95'
        );
        
        $validateData= array('input'=>$input, 'rules' => $rules, 'messages'=>$messages);
        return $validateData;
    }
    
    public function orderEmail($input){
       Mail::send('email.new-order',['input' => $input], function($message){
            $message->to('ride43@yandex.ru')->subject('Новая заявка');
        });
        /*
        Mail::raw("Test message",function($message){
            //$message->from('me@ride43.ru','me');
            $message->to('roman@artnetdesign.ru')->subject('Новая заявка');
        } );*/
        
     /*if(mail("ronlab@yandex.ru", "test", $input['phone'])){
         echo "send";
     };*/
    }

    

    /**
     * 
     * В случае ошибки валидации формы заявки 
     * вывожу страницу /исправьте-данные 
     * с ошибками и старым вводом
     * 
     */
    public function validateError(Request $request)
    {   //dd($request->old());
        Session::reflash();
        return view('public.validate-error',['oldInput'=>$request->old()]);
        
    }

    

    /**
     * Сохранение данных заявки
     * с предварительной валидацией данных
     * 
     */
    public function store(PublicOrder $publicOrder,Request $request)
    {   
        
        Session::reflash();
        
        $input = $request->all();
        $validateData = $this->validateData($input);
        
        $validation = Validator::make($validateData['input'], $validateData['rules'], $validateData['messages']);
        
        if($validation->fails()){
            return redirect()->route('validateError')->withInput()->withErrors($validation);
        }
       
        $validateData['input']['phone'] = phone_format($validateData['input']['phone'],'RU');
        //$publicOrder->saveOrder($validateData['input']);            
        $this->orderEmail($validateData['input']);
        
        
        return view('public.thanks',['input'=>$validateData['input']]);
        
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
