<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Stmt\TryCatch;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = DB::table('orders AS ordn')
            ->select(
                [
                    'ordn.id',
                    'cl.name',
                    'ordn.created_at AS fecha_pedido',
                    'ordn.delivery_date AS fecha_entrega'
                ]
            )->join('clients AS cl', 'cl.id', 'ordn.client_id')
            ->get();
        if ($orders) {
            return response()->json([
                'status' => 200,
                'orders' => $orders,
            ]);
        } else {
            return response('No se encontraron los datos solicitados', 500);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $orders = DB::table('orders AS ordn')
            ->select([
                'pd.id',
                'pd.name AS nombre',
                'pd.trade_mark AS marca',
                'pd.description AS descripcion',
                'pdo.amount_ordered AS cantidad_solicitada',
                'pd.amount AS cantidad_disponible'
            ])
            ->join('product_orders AS pdo', 'pdo.order_id', 'ordn.id')
            ->join('products AS pd', 'pd.id', 'pdo.product_id')
            ->where('ordn.id',$id)
            ->get();

        return $orders;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function getOrdersByDate(Request $request, $date)
    {
        var_dump($date);
        try {
            $orders = DB::table('orders AS ordn')
                ->select(
                    [
                        'ordn.id',
                        'cl.name',
                        'ordn.created_at AS fecha_pedido',
                        'ordn.delivery_date AS fecha_entrega'
                    ]
                )->join('clients AS cl', 'cl.id', 'ordn.client_id')
                ->whereDate('ordn.delivery_date', $request->date)
                ->get();
            return response()->json([
                'status' => 200,
                'orders' => $orders,
            ]);
        } catch (\Throwable $e) {
            report($e);
            $error = $e->getMessage();
            return $error;
        }
    }
}
