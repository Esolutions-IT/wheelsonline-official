<?php



namespace App\Http\Controllers;



use App\orders;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use App\User;
use function Sodium\compare;


class SearchController extends Controller
{
    public function index()

    {
        $users= DB::table('users')->paginate(14);
        $online = User::all();
        return view('admin-portal.users', compact('online'))->with('users', $users);
    }

    public function userdata($id)

    {
        $userdata= DB::table('users')->where('id', $id)->get();
        $orderdata= DB::table('orders')->where('user_id', $id)->get();

        $count_orders = orders::where('user_id', $id)->count();

        return view('admin-portal.userdata')->with('userdata', $userdata)->with('orderdata', $orderdata)->with('count_orders', $count_orders);
    }

    public function update(Request $request){
        $data = ['name'=>$request->first_name,
                 'lastname'=>$request->last_name,
                 'telefoon'=>$request->phone,
                 'email'=>$request->email,
                 'straat'=>$request->straat,
                 'plaats'=>$request->plaats,
                 'postcode'=>$request->postcode,
                 'actief'=>$request->actief,
                 'nieuwsbrief'=>$request->nieuw,
                 'btw_vrijgesteld'=>$request->btw];

        DB::table('users')->where('id', $request->id)->update($data);
        return redirect('/admin-portal/users/' .$request->id);
    }
    public function delete(Request $request){
        DB::table('users')->where('id', $request->id)->delete();
        return redirect('/admin-portal/users');
    }

    public function search(Request $request)

    {

        if($request->ajax())

        {

            $output="";

            $products= DB::table('users')->where('name','LIKE','%'.$request->search."%")->orWhere('lastname','LIKE','%'.$request->search."%")->orWhere('id','LIKE','%'.$request->search."%")->orWhere('plaats','LIKE','%'.$request->search."%")->orWhere('user_level','LIKE','%'.$request->search."%")->paginate(14);

            if($products)

            {

                foreach ($products as $key => $product) {

                    $output.='<tr>'.

                        '<td>'.$product->id.'</td>'.

                        '<td>'.$product->name. ' ' .$product->lastname. '</td>'.

                        '<td>'.$product->telefoon.'</td>'.

                        '<td>'.$product->email.'</td>'.

                        '<td>'.$product->straat.'</td>'.

                        '<td>'.$product->plaats. ', ' .$product->postcode. '</td>'.

                        '<td>'.$product->user_level.'</td>'.

                        '<td>'.$product->created_at.'</td>'.

                        '<td>
                            <span class="input-group-btn">
                                                        <button class="btn btn-default" type="submit">
                                                            <i class="glyphicon glyphicon-pencil"></i>
                                                        </button>
                                                    </span>
                                                    <span class="input-group-btn">
                                                        <button class="btn btn-default" type="submit">
                                                            <i class="glyphicon glyphicon-trash"></i>
                                                        </button>
                                                    </span>
                                                
                        </td>'.

                        '</tr>';

                }
                return Response($output);



                }



            }



    }
}