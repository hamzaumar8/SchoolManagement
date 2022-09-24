<?php

namespace APP\Helpers;

use App\Models\Student;
use Carbon\Carbon;

class Helper
{


    public static function ADMGenerator($model, $trow, $prefix, $length = 6)
    {
        $currYear = Carbon::now()->year;
        $prefix = $prefix . $currYear;
        $data = $model::orderBy('id', 'desc')->first();
        if (!$data) {
            $og_length = ((int)$length - 1);
            $last_number = 1;
        } else {
            $code = substr($data->$trow, strlen($prefix));
            $actial_last_number = ($code / 1) * 1;
            $increment_last_number = ((int)$actial_last_number) + 1;
            $last_number_length = strlen($increment_last_number);
            $og_length = $length - $last_number_length;
            $last_number = $increment_last_number;
        }
        $zeros = "";
        for ($i = 0; $i < $og_length; $i++) {
            $zeros .= "0";
        }
        return $prefix . $zeros . $last_number;
    }

    public static function IndexNumberGenerator()
    {

        // $startOfYear = Carbon::now()->startOfYear();
        // $endOfYear = Carbon::now()->endOfYear();
        // $currYear = Carbon::now()->format('y');
        // $std = Student::where('created_at', '>', $startOfYear)->where('created_at', '<', $endOfYear)->count();

        // $prfx = 'UBS';
        // if ($addmission->campus === 'north') {
        //     $prfx .= 'A';
        // }

        // return $prfx . '/' . $currYear . '/' . str_pad($std + 1, 5, '0', STR_PAD_LEFT);
    }
}