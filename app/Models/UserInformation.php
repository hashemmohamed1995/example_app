<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserInformation extends Model
{
    protected $table = 'user_information';

    public function user()  {
        return $this->belongsTo(User::class);
    }
}
