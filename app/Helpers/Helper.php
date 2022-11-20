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


    public static function grade_no($total)
    {
        // if ($this->continious_assesment() == 'IC') {
        //     $remark = 'IC';
        // } else
        if ($total >= 70) {
            $remark = '1';
        } elseif ($total >= 75) {
            $remark = '2';
        } elseif ($total >= 70) {
            $remark = '3';
        } elseif ($total >= 65) {
            $remark = '4';
        } elseif ($total >= 60) {
            $remark = '5';
        } elseif ($total >= 55) {
            $remark = '6';
        } elseif ($total >= 50) {
            $remark = '7';
        } elseif ($total >= 40) {
            $remark = '8';
        } else {
            $remark = '9';
        }
        return $remark;
    }
}