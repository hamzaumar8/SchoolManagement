<?php

class Helper
{
    public static function getStatus()
    {
        return [
            "" => "Select Status",
            constStatus::Active => "Active",
            constStatus::InActive => "InActive",
        ];
    }

    public static function getStatusClass($status)
    {
        switch ($status) {
            case constStatus::InActive:
                return "badge bage-danger";
                break;

            case constStatus::Archive:
                return "badge bage-warning";
                break;

            default:
                return "badge bage-success";
                break;
        }
    }

    public static function getStatusValue($status)
    {
        switch ($status) {
            case constStatus::InActive:
                return "InActive";
                break;

            case constStatus::Archive:
                return "Archive";
                break;

            default:
                return "Active";
                break;
        }
    }
}