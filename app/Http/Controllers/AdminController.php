<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Gallery;
use App\Monitor;
use App\News;
use App\Prestation as Pres;
use App\User;

class AdminController extends Controller
{
    public function __construct(){
        $this->middleware('admin');
    }
    public function index(){
        return view('admin.index', ['data' => Monitor::where('type', 0)->orderBy('id', 'desc')->paginate(10)]);
    }
    public function msgRead($id){
        Monitor::find($id)->update(['status' => 1]);

        return response()->json(['msg' => 'done']);
    }
    public function msgDel($id){
        Monitor::destroy($id);

        return response()->json(['msg' => 'done']);
    }
    public function notif(){
        return view('admin.msg', ['data' => Monitor::getNotif()]);
    }
    public function notifAdd(){
        return view('admin.add', ['data' => User::where('id', '!=', 1)->get()]);
    }
    public function addNotif(Request $req){
        if($req->user_id == 'all'){
            foreach(User::where('id', '!=', 1)->get() as $key) $data[] = [
                'desc' => $req->desc,
                'user_id' => $key->id,
                'type' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ];
            Monitor::insert($data);
        }else
            Monitor::create($req->all());
        
        return redirect('admin/messages');
    }
    public function schedule(){
        return view('home.index', [
            'data' => News::getUserData(2, Auth::user()->id),
            'sauce' => url('/admin/add/schedule'),
            'name' => 'Agenda'
        ]);
    }
    public function article(){
        return view('home.index', [
            'data' => News::getUserData(1, Auth::user()->id),
            'sauce' => url('/admin/add/article'),
            'name' => 'Artikel'
        ]);
    }
    public function news(){
        return view('home.index', [
            'data' => News::getUserData(0, Auth::user()->id),
            'sauce' => url('/admin/add/news'),
            'name' => 'Berita'
        ]);
    }
    public function prestation(){
        return view('home.index', [
            'data' => Pres::where('user_id', Auth::user()->id)->orderBy('id', 'desc')->paginate(10),
            'sauce' => url('/admin/add/prestation'),
            'name' => 'Prestasi'
        ]);
    }
    public function gallery(){
        return view('home.index', [
            'data' => Gallery::where('user_id', Auth::user()->id)->orderBy('id', 'desc')->paginate(10),
            'sauce' => url('/admin/add/gallery'),
            'name' => 'Galeri'
        ]);
    }
    public function viewSch(){
        return view('admin.view', ['data' => News::getData(2), 'name' => 'Agenda', 'info' => 'schedules']);
    }
    public function viewArt(){
        return view('admin.view', ['data' => News::getData(1), 'name' => 'Artikel', 'info' => 'articles']);
    }
    public function viewNews(){
        return view('admin.view', ['data' => News::getData(0), 'name' => 'Berita', 'info' => 'news']);
    }
    public function viewPres(){
        return view('admin.view', ['data' => Pres::getData(), 'name' => 'Prestasi', 'info' => 'prestations']);
    }
    public function viewGal(){
        return view('admin.img', ['data' => Gallery::getData()]);
    }
    public function units(){
        return view('admin.unit', ['data' => User::orderBy('id', 'desc')->get()]);
    }
    public function getEdit($id){
        return response()->json(User::find($id));
    }
    public function editUnit($id, Request $req){
        $req->validate([
            'name' => 'required|string',
            'email' => 'required|unique:users,email,'.$id,
            'password' => 'nullable|string|min:8'
        ]);

        User::find($id)->update([
            'name' => $req->name,
            'email' => $req->email,
            'password' => $req->password ? Hash::make($req->password) : User::find($id)->password
        ]);

        return back();
    }
}
