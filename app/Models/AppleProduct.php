<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;

class AppleProduct extends Model
{
    use HasFactory;
    protected $rules = ['sku' => 'required|unique'];
    protected $table = 'apple_products';
    protected $guarded = [];

    public function validate($inputs) {
        $v = Validator::make($inputs, $this->rules);
        if($v->passes()) return true;
        $this->errors = $v->messages();
        return false;
    }
}
