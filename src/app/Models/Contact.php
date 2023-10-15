<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
        protected $fillable = [
            //contactsテーブルのカラムで、操作可能とするものをモデルで指定
            //protected を使用することで、非公開ですが、継承が可能な状態
            'fullname',
            'gender',
            'email',
            'postcode',
            'address',
            'building_name',
            'opinion'
        ];
}
