<?php

namespace App\Http\Controllers;

class Soal2Controller extends Controller
{
    public function index()
    {
        $data = [45, 13, 10, 2];
        $sum = 0;
        $count = count($data);

        for ($i = 0; $i < $count; $i++) {
            $sum += $data[$i];
        }

        $average = $sum / $count;
        return view("Soal.soal2", [
            'data' => $data,
            'average' => $average,
        ]);
    }
}
