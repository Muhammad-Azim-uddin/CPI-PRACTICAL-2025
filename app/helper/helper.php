<?php

if (!function_exists('ganaral_status')) {
    function ganaral_status($status)
    {
        if ($status === 1) {
            return '<span class="badge bg-success">Active</span>';
        } else {
            return '<span class="badge bg-danger">Inactive</span>';
        }
    }
}