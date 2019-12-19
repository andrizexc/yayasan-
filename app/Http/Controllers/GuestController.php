<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gallery;
use App\News;
use App\Prestation as Pres;

class GuestController extends Controller
{
    public function home(){
        return view('welcome');
    }
    public function about(){
        return view('about');
    }
    public function history(){
        return view('history');
    }
    public function facility(){
        return view('facility');
    }
    public function contact(){
        return view('contact');
    }
    public function news(){
        return view('news');
    }
    public function prestations(){
        return view('prestations');
    }
    public function articles(){
        return view('articles');
    }
    public function schedules(){
        return view('schedules');
    }
    public function gallery(){
        return view('gallery', ['data' => Gallery::orderBy('id', 'desc')->take(7)->get()]);
    }
    private function getDetail($id, $name, $type){
        return [
            'data' => News::getInfo($id),
            'random' => News::getRandom(0),
            'name' => $name
        ];
    }
    public function getNews($id){
        return view('detail', $this->getDetail($id, 'Berita', 0));
    }
    public function getArt($id){
        return view('detail', $this->getDetail($id, 'Artikel', 1));
    }
    public function getSch($id){
        return view('detail', $this->getDetail($id, 'Agenda', 2));
    }
    public function getPres($id){
        return view('detail', [
            'data' => Pres::getDetail($id),
            'random' => Pres::getRandom(),
            'name' => 'Prestasi'
        ]);
    }
    public function footer(){
        return response()->json([
            'gallery' => Gallery::footer(),
            'article' => News::footer(1, 6),
            'schedule' => News::footer(2, 3)
        ]);
    }
    public function welcome(){
        return response()->json([
            'news' => News::welcome(0, 6),
            'article' => News::welcome(1, 3),
            'schedule' => News::welcome(2, 4),
            'prestation' => Pres::welcome()
        ]);
    }
    public function respGal($skip){
        return response()->json(Gallery::orderBy('id', 'desc')->skip($skip)->take(7)->get());
    }
    public function respNews($type, $skip = 0, $take = 0){
        return response()->json(News::resp($type, $skip, $take));
    }
    public function respPres($skip = 0){
        return response()->json(Pres::resp($skip));
    }
}
