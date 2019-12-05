<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    //
    public function welcome()
    {
       return view('welcome');
    }
    public function BlogPost($id,$welcome=1)
    {
        $pages=
        [
            1 => [
                'title' => ' page1'
            ],
            2 =>[
                'title' => ' page2'
            ]
        ];
        $welcomes=[1 => 'welcome',2=>'hello'];
        return view('test',[
            'data' => $pages[$id],
            'welcome'=>$welcomes[$welcome]
            ]);
    }
}
