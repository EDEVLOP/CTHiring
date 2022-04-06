<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    use HasFactory;

    public function client_na()
    {

        return $this->belongsTo(client::class, 'client_name');
    }

    public function client_crm()
    {

        return $this->belongsTo(User::class, 'crm');

    }

    public function client_requiter()
    {

        return $this->belongsTo(User::class, 'recruiters');

    }

    public function position_create()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    // public function qualification_title()
    // {
    //     return $this->belongsTo(Qualification::class, 'qualification_name');
    // }

    // public function functional()
    // {
    //     return $this->belongsTo(FunctionalArea::class, 'functional');
    // }

    // public function indust()
    // {
    //     return $this->belongsTo(Industry::class, 'indust');
    // }

    // public function c_r_m()
    // {
    //     return $this->belongsTo(user::class, 'role_id');
    // }

}