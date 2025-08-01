<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JornalEntry;
use App\Models\JornalEntryDetails;
use App\Http\Requests\JornalEntryRequest;

class JornalEntryController extends Controller
{
    public function index() {
      $journalentries = JornalEntry::with(['JornalEntryDetails']) // custom columns from userInformation table
    ->paginate(20);

        return response()->json($journalentries);
}
public function store(JornalEntryRequest $request){
$JornalEntry =JornalEntry::create([
    'ref_no'=>$request->ref_no,
    'date'=>$request->date,
    'discription'=>$request->discription,
]);
if($JornalEntry){
    foreach ($request->account_name as $index=>$account_name){
JornalEntryDetails::create([
 'jouranl_entraies_id'=>$JornalEntry->id,
        'account_name'=>$account_name,
        'debit'=>$request->debit[$index],
        'crdit'=>$request->crdit[$index],
        'notes'=>$request->notes[$index],
]);
}
}
        return response()->json($JornalEntry);
    }
    public function update(Request $request,JornalEntry $jouranl_entraie){
        // dd($request->all());
$JornalEntry =$jouranl_entraie->update([
    'ref_no'=>$request->ref_no,
    'date'=>$request->date,
    'discription'=>$request->discription,

]);
 foreach ($request->account_name as $index=>$account_name){
JornalEntryDetails::create([
 'jouranl_entraies_id'=>$jouranl_entraie->id,
        'account_name'=>$account_name,
        'debit'=>$request->debit[$index],
        'crdit'=>$request->crdit[$index],
        'notes'=>$request->notes[$index],
]);
}
        return response()->json($jouranl_entraie);
}
}
