<?php

namespace App\Http\Controllers;

use App\Models\Inspections;
use Illuminate\Support\Facades\DB;


class TransactionController extends Controller
{
    public function getInspections(){
    $inspections = DB::select(
'SELECT
    inspections.*,
    inspector.name as inspector_name,
    owner.names as owner_name,
    restaurant.name as restaurant_name,
    violation.descr as violation_description
FROM inspections
INNER JOIN inspector ON inspector.id = inspections.inspector_id
INNER JOIN restaurant ON restaurant.id = inspections.restaurant_id
INNER JOIN violation ON violation.id = inspections.violation_id
INNER JOIN owner ON owner.id = restaurant.owner_id;');
        return response()->json(['success'=> true, 'inspections' =>$inspections],200);
    }

    public function getInspects(){
    $inspects = DB::table( 'inspections')
    -> select( 'inspector.*', 'inspector.name as inspector_name', 'owner.names as owner_name', 'restaurant.name as restaurant_name', 'violation.descr as violation_description')
    ->join('inspector', 'inspector.id','=','inspections.inspector_id')
    ->join('restaurant', 'restaurant.id','=','inspections.restaurant_id')
    ->join('violation', 'violation.id','=','inspections.violation_id')
    ->join('owner', 'owner.id','=','restaurant.owner_id')
    ->get();
    return response()->json(['success'=> true,'inspects'=>$inspects] ,200);
}

public function getInspectionChallenging()
{
    $challenging = Inspections::with(['inspector', 'owner', 'restaurant', 'violation'])->get();

    return response()->json(['success' => true, 'challenging' => $challenging], 200);
}



public function getInspectdiff()
{
    $diff = Inspections::with([
        'inspector' => function ($q) {
            $q->select('*');
        },
        'owner' => function ($q) {
            $q->select('*');
        },
        'restaurant' => function ($q) {
            $q->select('*');
        },
        'violation' => function ($q) {
            $q->select('*');
        }
    ])->get();

    return response()->json(['success' => true, 'diff' => $diff], 200);
}


}
