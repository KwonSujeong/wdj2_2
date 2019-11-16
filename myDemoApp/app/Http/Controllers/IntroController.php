<?php

namespace App\Http\Controllers;

use App\Intro;
use Illuminate\Http\Request;
use League\Flysystem\Filesystem;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Illuminate\Support\Facades\Storage;

class IntroController extends Controller
{
    //
    public function index() {
        $intro=Intro::all();
        return view('intro.index', [
            'intro'=>$intro
        ]);
    }

    public function create() {
        return view('intro.create');
    }

    public function store(Request $request) {
        
        // $datas = $request->all();
        // $file = $datas['uploadFile']->store('image', ['disks' => 'public']);

        $datas = $request->all();
        $file = $datas['uploadFile']->storeAs('image',"{$datas['intro_name']}.jpg",['disks'=>'public']);
        Intro::create([
            'name' => $datas['intro_name'],
            'comment' => $datas['intro_comment'],
            'imgUrl'=>"/image/".$datas['intro_name'].'.jpg'
        ]);
        return redirect('intro');
    }

    public function alter()
    {
        $user=auth()->user();
        return view('intro.update',$user);
    }
}