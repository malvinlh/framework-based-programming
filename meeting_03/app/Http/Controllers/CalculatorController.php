<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    // Show the calculator form
    public function index()
    {
        return view('BikinKalkulator4');
    }

    // Handle the calculation logic
    public function calculate(Request $request)
    {
        $request->validate([
            'nilaia' => 'required|numeric',
            'nilaib' => 'required|numeric',
            'operator' => 'required'
        ]);

        $n1 = $request->input('nilaia');
        $n2 = $request->input('nilaib');
        $operator = $request->input('operator');

        switch ($operator) {
            case '+':
                $result = $n1 + $n2;
                break;
            case '-':
                $result = $n1 - $n2;
                break;
            case '*':
                $result = $n1 * $n2;
                break;
            case '/':
                if ($n2 != 0) {
                    $result = $n1 / $n2;
                } else {
                    $result = "Division by zero is not allowed";
                }
                break;
            default:
                $result = "Invalid operator";
                break;
        }

        return view('BikinKalkulator4', compact('result', 'n1', 'n2', 'operator'));
    }
}