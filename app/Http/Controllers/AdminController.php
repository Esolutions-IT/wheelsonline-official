<?php

namespace App\Http\Controllers;

use App\orders;
use App\products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Surat;
use Carbon;
use App\User;
use Illuminate\Support\Facades\URL;

class AdminController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index($id){

        $category_producten = DB::table('producten_category')->get();
        $producten_velgen = DB::table('producten_velgen')->where('tags', $id)->get();

        return view('admin.admin', compact('producten_velgen', 'category_producten', 'id'));
    }

    public function adminportal(){
        $count = Surat::count();
        $count_products = products::count();
        $count_orders = orders::count();

        $count_werknemers = Surat::where('user_level', 'Werknemer')->count();

        $category_producten = DB::table('producten_category')->paginate(5);
        $orders = DB::table('orders')->paginate(2);
        $rols = DB::table('rollen')->get();
        $producten = DB::table('producten_velgen')->paginate(2);


        $date = new Carbon\Carbon;
        $date->subWeek();
        $week = DB::table('users')->paginate(5);
        return view('admin-portal.home', compact('category_producten', 'producten'))->with('count', $count)->with('count_products', $count_products)->with('week', $week)->with('count_werknemers', $count_werknemers)->with('count_orders', $count_orders)->with('orders', $orders)->with('rols', $rols);
}

    public function create_user(){
        $count = Surat::count();
        $count_products = products::count();
        $count_orders = orders::count();

        $count_werknemers = Surat::where('user_level', 'Werknemer')->count();

        $category_producten = DB::table('producten_category')->paginate(5);
        $orders = DB::table('orders')->paginate(2);
        $rols = DB::table('rollen')->get();
        $producten = DB::table('producten_velgen')->paginate(2);


        $date = new Carbon\Carbon;
        $date->subWeek();
        $week = DB::table('users')->paginate(5);
        return view('admin-portal.create_users', compact('category_producten', 'producten'))->with('count', $count)->with('count_products', $count_products)->with('week', $week)->with('count_werknemers', $count_werknemers)->with('count_orders', $count_orders)->with('orders', $orders)->with('rols', $rols);
    }

    public function save_user(Request $request){
        $data = ['name'=>$request->firstname, 'lastname'=>$request->lastname, 'geboorte_datum'=>$request->gdatum, 'user_level'=>$request->rol, 'gender'=>$request->gender, 'btw_vrijgesteld'=>$request->btw, 'nieuwsbrief'=>$request->nieuw, 'actief'=>$request->actief, 'telefoon'=>$request->telefoon, 'mobiel'=>$request->mobiel, 'email'=>$request->email, 'website'=>$request->website, 'profile_picture'=>'./resources/assets/images/profile_picture/profiel.png', 'straat'=>$request->straat, 'plaats'=>$request->plaats, 'postcode'=>$request->postcode];

        DB::table('users')->insert($data);
        return redirect('/admin-portal/users');
    }

    public function admin_users(){
        $count = Surat::count();
        $count_products = products::count();
        $count_orders = orders::count();

        $count_werknemers = Surat::where('user_level', 'Werknemer')->count();

        $category_producten = DB::table('producten_category')->paginate(5);
        $orders = DB::table('orders')->paginate(2);
        $rols = DB::table('rollen')->get();
        $producten = DB::table('producten_velgen')->paginate(2);


        $date = new Carbon\Carbon;
        $date->subWeek();
        $week = DB::table('users')->paginate(5);
        return view('admin-portal.users', compact('category_producten', 'producten'))->with('count', $count)->with('count_products', $count_products)->with('week', $week)->with('count_werknemers', $count_werknemers)->with('count_orders', $count_orders)->with('orders', $orders)->with('rols', $rols);
    }

    public function rollen(){
        $count = Surat::count();
        $count_products = products::count();
        $count_orders = orders::count();

        $count_werknemers = Surat::where('user_level', 'Werknemer')->count();

        $category_producten = DB::table('producten_category')->paginate(5);
        $orders = DB::table('orders')->paginate(2);
        $rols = DB::table('rollen')->get();
        $producten = DB::table('producten_velgen')->paginate(2);


        $date = new Carbon\Carbon;
        $date->subWeek();
        $week = DB::table('users')->paginate(5);
        return view('admin-portal.rollen', compact('category_producten', 'producten'))->with('count', $count)->with('count_products', $count_products)->with('week', $week)->with('count_werknemers', $count_werknemers)->with('count_orders', $count_orders)->with('orders', $orders)->with('rols', $rols);
    }

    public function create_rollen(){
        $count = Surat::count();
        $count_products = products::count();
        $count_orders = orders::count();

        $count_werknemers = Surat::where('user_level', 'Werknemer')->count();

        $category_producten = DB::table('producten_category')->paginate(5);
        $orders = DB::table('orders')->paginate(2);
        $rols = DB::table('rollen')->get();
        $producten = DB::table('producten_velgen')->paginate(2);


        $date = new Carbon\Carbon;
        $date->subWeek();
        $week = DB::table('users')->paginate(5);
        return view('admin-portal.create_rol', compact('category_producten', 'producten'))->with('count', $count)->with('count_products', $count_products)->with('week', $week)->with('count_werknemers', $count_werknemers)->with('count_orders', $count_orders)->with('orders', $orders)->with('rols', $rols);
    }

    public function created_rollen(Request $request){
        $data = ['rol_naam'=>$request->rol, 'gratis_verzending'=>$request->gratis_verzending, 'btw_uitzondering'=>$request->btw_uitzondering, 'actief'=>$request->actief, 'in_systeem_rol'=>$request->is_systeem_rol];

        DB::table('rollen')->insert($data);

        return redirect('/admin-portal/rollen');
    }
    public function edit_rol($id)

    {
        $roldata= DB::table('rollen')->where('rol_id', $id)->get();

        return view('admin-portal.edit_rols')->with('roldata', $roldata);
    }

    public function edited_rol(Request $request)

    {
        $data=['rol_naam'=>$request->rol, 'gratis_verzending'=>$request->gratis_verzending, 'btw_uitzondering'=>$request->btw_uitzondering, 'actief'=>$request->actief, 'in_systeem_rol'=>$request->is_systeem_rol];

        DB::table('rollen')->where('rol_id', $request->id)->update($data);

        return redirect('/admin-portal/rollen');
    }

    public function categorie(){

        $category_producten = DB::table('producten_category')->get();

        return view('admin.categories', compact('category_producten'));
    }
    public function users(){

        $category_producten = DB::table('producten_category')->get();
        $users = DB::table('users')->get();



        return view('admin.users', compact('category_producten', 'users'));
    }

    public function adminusers(){

        $category_producten = DB::table('producten_category')->get();
        $users = DB::table('users')->get();

        $adminusers = DB::table('users')->where('user_level', 'admin')->get();

        return view('admin.adminusers', compact('category_producten', 'users', 'adminusers'));
    }

    public function gebruikerusers(){

        $category_producten = DB::table('producten_category')->get();
        $users = DB::table('users')->get();

        $gebruikerusers = DB::table('users')->where('user_level', 'gebruiker')->get();

        return view('admin.gebruikerusers', compact('category_producten', 'users', 'gebruikerusers'));
    }

    public function velgen_opslaan(Request $request){
        $velgennaam = $request->input("velgennaam");
        $aantalvelgen = $request->input("aantal_velgen");
        $prijsvelgen = $request->input("prijs_velgen");

        $category_producten = DB::table('producten_category')->get();
        $producten_velgen = DB::table('producten_velgen')->get();
        $id_velgen = $request->input('id');
        $data = array('product_name' => $velgennaam, 'tags' => $id_velgen, 'aantal' => $aantalvelgen, 'prijs' =>'€ '.$prijsvelgen);
        DB::table('producten_velgen')->insert($data);

        return view('admin.velg-opslaan', compact('producten_velgen', 'category_producten'));
    }
    public function users_opslaan(Request $request){
        $naam = $request->input("naam");
        $email = $request->input("email");
        $telefoon = $request->input("telefoon");

        $category_producten = DB::table('producten_category')->get();
        $producten_velgen = DB::table('producten_velgen')->get();

        $data = array('name' => $naam, 'email' => $email, 'telefoon' => $telefoon);
        DB::table('users')->insert($data);

        return view('admin.velg-opslaan', compact('producten_velgen', 'category_producten'));
    }
    public function categorie_opslaan(Request $request){
        $categorie = $request->input("categorie");

        $category_producten = DB::table('producten_category')->get();
        $producten_velgen = DB::table('producten_velgen')->get();

        $data = array('category_name' => $categorie);
        DB::table('producten_category')->insert($data);

        return view('admin.velg-opslaan', compact('producten_velgen', 'category_producten'));
    }

}

