<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\JornalEntryDetails;

class JornalEntry extends Model
{
    protected $table="jouranl_entraies";
     protected $fillable = [
        'ref_no',
        'date',
        'discription',
    ];
public function journalEntryDetalis()
    {
        return $this->hasMany(JornalEntryDetails::class);
    }
}
