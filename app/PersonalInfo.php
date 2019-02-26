<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PersonalInfo extends Model
{
    protected $fillable = [
        'user_id', 'first_name', 'middle_name','last_name', 'birth_date', 'birth_place',
        'gender', 'civil_status', 'citizenship','address1', 'address2', 'barangay',
        'city', 'province', 'zip_code','height', 'weight', 'blood_type',
        'pagibig', 'philhealth', 'sss','tin', 'mobile', 'telephone'
    ];

    public function user() {
        return $this->belongsTo('App\User');
    }
}
