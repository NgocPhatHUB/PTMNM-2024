<?php

namespace App\Http\Controllers;
 
use App\Models\Book;
use App\Models\Category;


class BookController extends Controller
{

    function laythongtintheloai()
    {
        /*
        #Thêm dữ liệu
        $data = ["id" =>4, "ten_the_loai" =>"Trinh thám"];
        Category::create($data);

        #Sửa dữ liệu
        $data = ["ten_the_loai"=>"Văn học"];
        DB::table("dm_the_loai")->where("id",4)
                                ->update($data);
        
        #Thêm dữ liệu lần nữa
        $data = ["ten_the_loai"=> "Văn học"];
        Category::where("id",4)->update($data);
        
        
        #Xóa dữ liệu
        $data = ["ten_the_loai"=>"Văn học"];
        DB::table("dm_the_loai")->where("id",4)
                                ->delete();
        */
        
        Category::where("id",4)->delete;
        $the_loai_sach = Category::all();
        return view("qlsach.the_loai",compact("the_loai_sach"));
    }

    function laythongtinsach(){
        $sach = Book::where("nha_xuat_ban","Văn Học")->get();
        return view("qlsach.thong_tin_sach",compact("sach"));
    }
}