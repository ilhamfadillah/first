<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;

class UpdateProduct extends FormRequest {
    public function authorize() {
        return true;
    }
    
    public function rules() {        
        $validation = array();
        $validation['name'] = 'required';
        $validation['price'] = 'required';
        $validation['stock'] = 'required';
        $validation['photo'] = 'required';
        
        return $validation;
    }
    
    public function messages() {
        $validationMessage = array();
        
        $validationMessage['name.required'] = "Please Input Product Name";
        $validationMessage['price.required'] = "Please Input Product Price";
        $validationMessage['stock.required'] = "Please Input Product Stock";
        $validationMessage['photo.required'] = "Please Input Product Photo";
        
        return $validationMessage;
    }
}