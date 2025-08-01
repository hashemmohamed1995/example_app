<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\journalEntry;
class JornalEntryDetails extends Model
{
        protected $table="jouranl_entraie_details";
        protected $fillable = [
        'jouranl_entraies_id',
        'account_name',
        'debit',
        'crdit',
        'notes',
    ];
    public function journalEntry()  {
        return $this->belongsTo(JornalEntry::class);
    }
}
