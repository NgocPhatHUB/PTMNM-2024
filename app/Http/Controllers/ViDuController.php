<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViDuController extends Controller
{
  
    function vidu1(){
        $name = "HUB";
        //return view('vidu1',["name1"=>$name]);
        return view('vidu1',compact ("name"));
    }
    function vidu2(){
        return view('vidu2');
    }

    function tinhtong(Request $request)
    {
    $so_a = $request->input("so_a");
    $so_b = $request->input("so_b");
    $ket_qua = $so_a+$so_b;
    return "Kết quả là: ".$ket_qua;
    }
  

    /*
    function baithuchanh1()
    {
        return view('baithuchanh1');
    }

    function convert(Request $request)
    {
        $inputString = $request->input('string');
        $convertedString = mb_strtoupper($inputString);

        return "Kết quả là: ".$convertedString;
    }
    */

    /*
    function baithuchanh2()
    {
        return view('baithuchanh2');
    }
    
    function ketquaMinMax(Request $request)
    {
        $numbers = explode(',', $request->input('numbers'));
        $numbers = array_map('intval', $numbers);
    
        $min = min($numbers);
        $max = max($numbers);
    
        return view("timMinMax", ['max' => $max, 'min' => $min]);
    }
    
    /*
    function printNumbers()
    {
        // Chuyển dãy số thành mảng
        $numberArray = explode(',', $numbers);

        // Tạo biến chứa chuỗi HTML kết quả
        $result = '';

        // Duyệt qua từng số trong mảng
        foreach ($numberArray as $number) {
            // Kiểm tra số chẵn hay lẻ
            if ($number % 2 == 0) {
                // Nếu là số chẵn, in màu đỏ
                $result .= '<span style="color: red;">' . $number . '</span>, ';
            } else {
                // Nếu là số lẻ, in màu xanh
                $result .= '<span style="color: blue;">' . $number . '</span>, ';
            }
        }

        return view('BTH3.printNumbers', ['numbersArray' => $numbersArray]);
    }

    function formbai4()
    {
        return view("BTH4.form");
    }

    function inthongtinsv(Request $request)
    {
        $thong_tin_sv = $request->input("thong_tin_sv"); #MaSV1_HoTenSV1; MaSV2_HoTenSV2; MaSV3_HoTen SV3
        $sinh_vien = explode(";", $thong_tin_sv); //["MaSV1_HoTenSV1", "MaSV2_HoTenSV2",...]
        $list_sx = [];

    foreach($sinh_vien as $sv)
    {
        $tmp = explode("_",$sv); //["MaSV1", "HoTenSV1"]
        $list_sv[] = $tmp; #//[["MaSV1","HoTenSV1"], ["MaSV2", "HoTenSV2"],...]
    }

    return view("BTH4.ket_qua", compact("list_sv"));
    }
    */
}


