<?php



namespace App\Http\Controllers;



use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use function Sodium\compare;


class SearchController extends Controller
{
    public function index()

    {
        $producten= DB::table('users')->paginate(14);
        return view('admin-portal.users')->with('producten', $producten);
    }

    public function search(Request $request)

    {

        if($request->ajax())

        {

            $output="";

            $products= DB::table('users')->where('name','LIKE','%'.$request->search."%")->orWhere('id','LIKE','%'.$request->search."%")->orWhere('plaats','LIKE','%'.$request->search."%")->paginate(14);

            if($products)

            {

                foreach ($products as $key => $product) {

                    $output.='<tr>'.

                        '<td>'.$product->id.'</td>'.

                        '<td>'.$product->name.'</td>'.

                        '<td>'.$product->telefoon.'</td>'.

                        '<td>'.$product->email.'</td>'.

                        '<td>'.$product->straat.'</td>'.

                        '<td>'.$product->plaats. ', ' .$product->postcode. '</td>'.

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