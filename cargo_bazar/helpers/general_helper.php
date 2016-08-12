<?php

/**
 * CodeIgniter
 *
 * An open source application development framework for PHP
 *
 * This content is released under the MIT License (MIT)
 *
 * Copyright (c) 2014 - 2016, British Columbia Institute of Technology
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 *
 * @package	CodeIgniter
 * @author	EllisLab Dev Team
 * @copyright	Copyright (c) 2008 - 2014, EllisLab, Inc. (https://ellislab.com/)
 * @copyright	Copyright (c) 2014 - 2016, British Columbia Institute of Technology (http://bcit.ca/)
 * @license	http://opensource.org/licenses/MIT	MIT License
 * @link	https://codeigniter.com
 * @since	Version 1.0.0
 * @filesource
 */
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * CodeIgniter Form Helpers
 *
 * @package		CodeIgniter
 * @subpackage	Helpers
 * @category	Helpers
 * @author		EllisLab Dev Team
 * @link		https://codeigniter.com/user_guide/helpers/form_helper.html
 */
// ------------------------------------------------------------------------
if (!function_exists('is_logged_in')) {

    function is_logged_in() {
        $CI = & get_instance();
        $is_logged_in = $CI->session->userdata('is_logged_in');
        if (!isset($is_logged_in) || $is_logged_in != true) {
            redirect('users/users/login');
        }
    }

}

if (!function_exists('chkLogedin')) {

    function chkLogedin() {
        $CI = & get_instance();
        $is_logged_in = $CI->session->userdata('is_logged_in');
        if (!isset($is_logged_in) || $is_logged_in != true) {
            return false;
        } else {
            return true;
        }
    }

}
if (!function_exists('logedInUserType')) {

    function logedInUserType() {
        is_logged_in();
        $CI = & get_instance();
        //echo $CI->session->userdata['user']->user_type; die();
        return $CI->session->userdata['user']->user_type;
    }

}
if (!function_exists('logedInCompanyName')) {

    function logedInCompanyName() {
        is_logged_in();
        $CI = & get_instance();
        return $CI->session->userdata['user']->company_name;
    }

}

if (!function_exists('logedInUserId')) {

    function logedInUserId() {
        is_logged_in();
        $CI = & get_instance();
        return $CI->session->userdata['user']->id;
    }

}

function CUSTOM_DATE_FORMAT($string) {

    $GlobalInst = & get_instance();
    $GlobalInst->db->select('date_format');
    $data = $GlobalInst->db->get('tbl_institute');
    $dateFormat = $data->row();
    $strToTime = strtotime($string);
    if ($dateFormat->date_format == 1) {
        $newDate = date('d-m-Y', $strToTime);
    } else if ($dateFormat->date_format == 2) {
        $newDate = date('m-d-Y', $strToTime);
    } else if ($dateFormat->date_format == 3) {
        $newDate = date('Y-m-d', $strToTime);
    } else {
        
    }

    return $newDate;
}

function JQX_DATE_FORMAT_CUSTOM() {

    $GlobalInst = & get_instance();
    $GlobalInst->db->select('date_format');
    $data = $GlobalInst->db->get('tbl_institute');
    $dateFormat = $data->row();

    if ($dateFormat->date_format == 1) {
        echo 'dd-MM-yyyy';
    } else if ($dateFormat->date_format == 2) {
        echo 'MM-dd-yyyy';
    } else if ($dateFormat->date_format == 3) {
        echo 'yyyy-MM-dd';
    } else {
        
    }
}

function DATABASE_DATE_FORMAT($string) {

    $strToTime = strtotime($string);

    $newDate = date('Y-m-d', $strToTime);
    return $newDate;
}
function DATABASE_TIME_FORMAT($string) {

    $strToTime = strtotime($string);

    $newDate = date('H:i:00', $strToTime);
    return $newDate;
}

function randomDigitNumber() {

    $num = sprintf("%06d", rand(1, 999999)); // zero filled 6 digits
    return $num;
}

function sentenseCase($string) {

    $new_string = ucfirst($string);
    return $new_string;
}

function monthName($number) {

    $monthName = date('F', mktime(0, 0, 0, $number, 10));
    return $monthName;
}

function calculateAge($birthDate = NULL) {

    $strToTime = strtotime($birthDate);

    $birthDate = date('m/d/Y', $strToTime);

    //date in mm/dd/yyyy format; or it can be in other formats as well
    //$birthDate = "19/07/1991";
    //explode the date to get month, day and year
    $birthDate = explode("/", $birthDate);

    //get age from date or birthdate
    $age = (date("md", date("U", mktime(0, 0, 0, $birthDate[0], $birthDate[1], $birthDate[2]))) > date("md") ? ((date("Y") - $birthDate[2]) - 1) : (date("Y") - $birthDate[2]));

    return $age;
}

function aksort($numbers) {

    rsort($numbers);

    $arrlength = count($numbers);
    for ($x = 0; $x < $arrlength; $x++) {

        $arr[] = $numbers[$x];
    }


    array_unshift($arr, "");
    unset($arr[0]);

    return $arr;
}
