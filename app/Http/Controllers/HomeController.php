<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Gallery;
use App\Monitor;
use App\News;
use App\Prestation as Pres;

class HomeController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    public function index(){
        $user = Auth::user()->role;

        if($user == 2)
            return redirect('/admin');
        else if($user > 0)
            return view('home.index', [
                'data' => News::getUserData(2, Auth::user()->id),
                'sauce' => url('/home/add/schedule'),
                'name' => 'Agenda'
            ]);
        else
            return redirect('/');
    }
    public function articles(){
        return view('home.index', [
            'data' => News::getUserData(1, Auth::user()->id),
            'sauce' => url('/home/add/article'),
            'name' => 'Artikel'
        ]);
    }
    public function news(){
        return view('home.index', [
            'data' => News::getUserData(0, Auth::user()->id),
            'sauce' => url('/home/add/news'),
            'name' => 'Berita'
        ]);
    }
    public function prestations(){
        return view('home.index', [
            'data' => Pres::where('user_id', Auth::user()->id)->orderBy('id', 'desc')->paginate(10),
            'sauce' => url('/home/add/prestation'),
            'name' => 'Prestasi'
        ]);
    }
    public function gallery(){
        return view('home.index', [
            'data' => Gallery::where('user_id', Auth::user()->id)->orderBy('id', 'desc')->paginate(10),
            'sauce' => url('/home/add/gallery'),
            'name' => 'Galeri'
        ]);
    }
    public function addNews(){
        return $this->addView(0, 'Berita');
    }
    public function addArt(){
        return $this->addView(1, 'Artikel');
    }
    public function addSch(){
        return $this->addView(2, 'Agenda');
    }
    public function addPres(){
        return $this->addView(3, 'Prestasi');
    }
    public function addGal(){
        return view('home.img');
    }

    public function editNews($id){
        return $this->addView(0, 'Berita', $id);
    }
    public function editArt($id){
        return $this->addView(1, 'Artikel', $id);
    }
    public function editSch($id){
        return $this->addView(2, 'Agenda', $id);
    }
    public function editPres($id){
        return $this->addView(3, 'Prestasi', $id);
    }
    private function addView($info, $name, $id = 0){
        $data = [
            'i' => $info,
            'name' => $name
        ];
        if($id > 0){
            $user = Auth::user()->id;

            if($info === 3)
                $data['data'] = Pres::where('id', $id)->where('user_id', $user)->first();
            else
                $data['data'] = News::where('id', $id)->where('user_id', $user)->first();
        }
        return view('home.add', $data);
    }
    private function msg($status, $type, $ttl, $edit = ''){
        Monitor::create([
            'desc' => Auth::user()->name.' '.$status.' '.$type.' "'.$ttl.'"'.($edit != '' && $edit != $ttl ? ' with new title "'.$edit.'"' : ''),
            'user_id' => Auth::user()->id
        ]);
    }
    public function newsAdd(Request $req){
        $req->validate([
            'lang' => 'numeric|min:0|max:1|required',
            'title' => 'string|required',
            'desc' => 'required|min:12',
            'image' => 'required|max:2048000|mimes:jpeg,jpg,png'
        ],[
            'desc.min' => 'desc is required.'
        ]);

        News::create([
            'lang' => $req->lang,
            'type' => $req->type,
            'title' => $req->title,
            'desc' => $req->desc,
            'path' => url('/').'/'.$req->file('image')->store('storage','public_upload'),
            'user_id' => Auth::user()->id
        ]);
        
        $this->msg('created', $req->type == 0 ? 'news' : 'article', $req->title);

        return redirect((Auth::user()->role == 2 ? 'admin/post' : 'home').'/'.($req->type == 0 ? 'news' : 'articles'));
    }
    public function schAdd(Request $req){
        $req->validate([
            'lang' => 'numeric|min:0|max:1|required',
            'title' => 'string|required',
            'desc' => 'required|min:12',
            'image' => 'required|max:2048000|mimes:jpeg,jpg,png',
            'date' => 'required|string'
        ],[
            'desc.min' => 'desc is required.'
        ]);

        News::create([
            'lang' => $req->lang,
            'type' => $req->type,
            'title' => $req->title,
            'desc' => $req->desc,
            'path' => url('/').'/'.$req->file('image')->store('storage','public_upload'),
            'user_id' => Auth::user()->id,
            'schedule' => $req->date
        ]);
        
        $this->msg('created', 'schedule', $req->title);

        return redirect((Auth::user()->role == 2 ? 'admin/post' : 'home').'/schedules');
    }
    public function presAdd(Request $req){
        $req->validate([
            'lang' => 'numeric|min:0|max:1|required',
            'title' => 'string|required',
            'desc' => 'required|min:12',
            'image' => 'required|max:2048000|mimes:jpeg,jpg,png',
            'date' => 'required|string',
            'location' => 'required|string',
            'rank' => 'required|string',
            'title_competition' => 'required|string'
        ],[
            'desc.min' => 'desc is required.'
        ]);

        Pres::create([
            'lang' => $req->lang,
            'date_competition' => $req->date,
            'location' => $req->location,
            'rank' => $req->rank,
            'title_competition' => $req->title_competition,
            'title' => $req->title,
            'desc' => $req->desc,
            'path' => url('/').'/'.$req->file('image')->store('storage','public_upload'),
            'user_id' => Auth::user()->id,
        ]);

        $this->msg('created', 'prestation', $req->title);

        return redirect((Auth::user()->role == 2 ? 'admin/post' : 'home').'/prestations');
    }
    public function galAdd(Request $req){
        $req->validate([
            'image.*' => 'required|max:2048000|mimes:jpeg,jpg,png'
        ]);

        foreach($req->file('image') as $key) $data[] = [
            'path' => url('/').'/'.$key->store('storage', 'public_upload'),
            'user_id' => Auth::user()->id,
            'created_at' => now(),
            'updated_at' => now()
        ];

        Gallery::insert($data);
        $this->msg('created', 'gallery with', count($data).' files');

        return redirect((Auth::user()->role == 2 ? 'admin/post' : 'home').'/gallery');
    }

    public function newsEdit($id, Request $req){
        $req->validate([
            'lang' => 'numeric|min:0|max:1|required',
            'title' => 'string|required',
            'desc' => 'required|min:12',
            'image' => 'nullable|max:2048000|mimes:jpeg,jpg,png'
        ],[
            'desc.min' => 'desc is required.'
        ]);

        $update = News::find($id);

        if(!empty($req->file('image'))){
            Storage::disk('public_upload')->delete(str_replace(url('/').'/','', $update->path));
            
            $img = url('/').'/'.$req->file('image')->store('storage','public_upload');
        }else $img = $update->path;
        
        $update->update([
            'lang' => $req->lang,
            'title' => $req->title,
            'desc' => $req->desc,
            'path' => $img
        ]);

        $this->msg('updated', $req->type == 0 ? 'news' : 'article', $req->oldTitle, $req->title);

        return redirect((Auth::user()->role == 2 ? 'admin/post' : 'home').'/'.($req->type == 0 ? 'news' : 'articles'));
    }
    public function schEdit($id, Request $req){
        $req->validate([
            'lang' => 'numeric|min:0|max:1|required',
            'title' => 'string|required',
            'desc' => 'required|min:12',
            'image' => 'nullable|max:2048000|mimes:jpeg,jpg,png',
            'date' => 'required|string'
        ],[
            'desc.min' => 'desc is required.'
        ]);

        $update = News::find($id);

        if(!empty($req->file('image'))){
            Storage::disk('public_upload')->delete(str_replace(url('/').'/','', $update->path));
            
            $img = url('/').'/'.$req->file('image')->store('storage','public_upload');
        }else $img = $update->path;

        $update->update([
            'lang' => $req->lang,
            'title' => $req->title,
            'desc' => $req->desc,
            'path' => $img,
            'schedule' => $req->date
        ]);

        $this->msg('updated', 'schedule', $req->oldTitle, $req->title);
        
        return redirect((Auth::user()->role == 2 ? 'admin/post' : 'home').'/schedules');
    }
    public function presEdit($id, Request $req){
        $req->validate([
            'lang' => 'numeric|min:0|max:1|required',
            'title' => 'string|required',
            'desc' => 'required|min:12',
            'image' => 'nullable|max:2048000|mimes:jpeg,jpg,png',
            'date' => 'required|string',
            'location' => 'required|string',
            'rank' => 'required|string',
            'title_competition' => 'required|string'
        ],[
            'desc.min' => 'desc is required.'
        ]);

        $update = Pres::find($id);

        if(!empty($req->file('image'))){
            Storage::disk('public_upload')->delete(str_replace(url('/').'/','', $update->path));
            
            $img = url('/').'/'.$req->file('image')->store('storage','public_upload');
        }else $img = $update->path;

        $update->update([
            'lang' => $req->lang,
            'date_competition' => $req->date,
            'location' => $req->location,
            'rank' => $req->rank,
            'title_competition' => $req->title_competition,
            'title' => $req->title,
            'desc' => $req->desc,
            'path' => $img,
        ]);

        $this->msg('updated', 'prestation', $req->oldTitle, $req->title);

        return redirect((Auth::user()->role == 2 ? 'admin/post' : 'home').'/prestations');
    }
    public function newsDel($id, Request $req){
        $del = News::find($id);

        Storage::disk('public_upload')->delete(str_replace(url('/').'/','', $del->path));
        $del->delete();

        $this->msg('deleted', $req->type == 0 ? 'news' : ($req->type == 1 ? 'article' : 'schedule'), $req->title);
        
        return back();
    }
    public function presDel($id, Request $req){
        $del = Pres::find($id);
        
        Storage::disk('public_upload')->delete(str_replace(url('/').'/','', $del->path));
        $del->delete();

        $this->msg('deleted', 'prestation', $req->title);

        return back();
    }
    public function galDel($id){
        $del = Gallery::find($id);

        Storage::disk('public_upload')->delete(str_replace(url('/').'/','', $del->path));
        $del->delete();
        
        $this->msg('deleted', 'some', 'image');

        return back();
    }
    public function homeNotif(){
        $data = Monitor::where('user_id', Auth::user()->id);

        return view('home.notif', [
            'data' => $data->where('type', 1)->orderBy('id', 'desc')->paginate(10),
            'total' => $data->count()
        ]);
    }
    public function getNotif(){
        return response()->json(Monitor::where('user_id', Auth::user()->id)->where('type', 1)->where('status', 0)->count());
    }
    public function readNotif($id){
        Monitor::find($id)->update(['status' => 1]);

        return $this->getNotif();
    }
}
