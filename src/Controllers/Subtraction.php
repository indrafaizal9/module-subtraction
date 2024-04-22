<?php


namespace Indra\ModuleSubtraction\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SubtractionController extends Controller
{
    public function subtract(Request $request)
    {
        $num1 = $request->input('num1');
        $num2 = $request->input('num2');
        $sum = $num1 - $num2;

        if($num1 == null && $num2 == null){
            $sum = 50;
        }
        return response()->json(['sum' => $sum]);
    }
}
