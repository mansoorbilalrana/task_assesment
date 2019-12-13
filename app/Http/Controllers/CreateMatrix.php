<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

class CreateMatrix extends Controller
{
    /**
     * @param request
     * @return view 
     */
    public function index(Request $request)
    {
       if($request->first_matrix_columns != $request->second_matrix_rows){
            Session::flash('message', 'The column count in the first matrix should be equal to the row count of the second matrix'); 
            return view('home');
        }

       $matrixAttributes = [
           'firstMatrixRows' => $request->first_matrix_rows,
           'firstMatrixColumns' => $request->first_matrix_columns,
           'secondMatrixRows' => $request->second_matrix_rows,
           'secondMatrixColumns' => $request->second_matrix_columns
       ];

       return view('matrixView', $matrixAttributes);
    }
    
    /**
     * @param request
     * @return view 
     */
    public function matrixResult(Request $request)
    {   
        $result=array();
        for ($i=1; $i <= $request->firstMatrixRows; $i++){
            for($j=1; $j <= $request->secondMatrixColumns; $j++){
                $result[$i][$j] = 0;
                for($k=1; $k <= $request->secondMatrixRows; $k++){
                    $result[$i][$j] += $request->{'A'.$i .$k} * $request->{'B'. $k .$j};
                }
            }
        }
        
        return response()->json($result);

    }
}
