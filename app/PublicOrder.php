<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PublicOrder extends Model
{
    protected $fillable = ['phone','name','comment','order_type'];
    
    public function saveOrder($input){
        $this->phone = $input['phone'];
        $this->name = $input['name'];
        $this->comment = $input['comment'];
        $this->order_type = $input['order-type'];
        $this->save();
    }
}
