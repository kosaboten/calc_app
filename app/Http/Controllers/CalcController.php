<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalcController extends Controller
{
    public function calcs($num1, $operator, $num2)
    {
        switch ($operator){
            case 'addition':
                $answer = $num1 + $num2;
                break;
            case 'subtraction':
                $answer = $num1 - $num2;
                break;
            case 'multiplication':
                $answer = $num1 * $num2;
                break;
            case 'division':
                $answer = $num1 / $num2;
                break;
            default:
                $answer = '入力が間違っています。';
        }
        
        return view('addition', ['answer' => $answer]);
    }
}
