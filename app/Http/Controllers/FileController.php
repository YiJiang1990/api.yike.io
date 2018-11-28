<?php

namespace App\Http\Controllers;

use App\File;
use App\Handlers\ImageUploadHandler;
use Illuminate\Http\Request;
use Auth;
class FileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api');
    }

    public function upload(Request $request,ImageUploadHandler $uploader)
    {


        // 初始化返回数据，默认是失败的
        $data = [
            'success'   => false,
            'msg'       => '上传失败!',
            'file_path' => ''
        ];
        if ($request->file('image')) {
            $uploader->save($request->file('image'),'threads',Auth::id(),2048);
        }

         return $data;

    }
}
