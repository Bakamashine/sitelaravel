<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tovars;
class BbsController extends Controller
{
    public function index()
    {
        // $bbs = Tovars::latest()->get();
        // $s = "Объявления \r\n\r\n";
        // foreach ($bbs as $bb)
        // {
        //     $s .= $bb->title . "\r\n\r\n";
        //     $s .= $bb->price . "\r\n\r\n";
        //     $s .= $bb->content . "\r\n\r\n";
        // }
        // return response($s)->header('Content-type', 'text/plain');
        $context = ['bbs' => Tovars::first()->get()];
        return view('index', $context);
    }
    public function detail(Tovars $bb)
    {
        // $s = "Объявления \r\n\r\n";
        // $s .= $bb->title . "\r\n";
        // $s .= $bb->price . "\r\n";
        // $s .= $bb->content . "\r\n";
        // return response($s)->header('Content-type', 'text/plain');
        return view('detail', ['bb' => $bb]);
    }
}
