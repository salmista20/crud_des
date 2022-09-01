<?php

    namespace App\Http\Controllers;
    use App\Http\Controllers\Controller;
    use App\Models\CreditoProducto;
    use Illuminate\Http\Request;
    
    class CreditoProductoController extends Controller
    {
        public function getAll()
        {
            $response = new \stdClass();
    
            $productos = CreditoProducto::all();
    
            $response->success = true;
            $response->data = $productos;
    
            return response()->json($response, 200);
        }
    
        public function getItem($id)
        {
            $response = new \stdClass();
    
            $producto = CreditoProducto::find($id);
    
            $response->success = true;
            $response->data = $producto;
    
            return response()->json($response, 200);
        }
    
        public function store(Request $request)
        {
            $response = new \stdClass();
    
            $producto = new CreditoProducto();
            $producto->producto = $request->sector;
            $producto->descripcion = $request->descripcion;
            $producto->habilitado = 1;
            $producto->save();
    
            $response->success = true;
            $response->data = $producto;
    
            return response()->json($response, 200);
        }
    
        public function updatePut(Request $request, $id)
        {
            $response = new \stdClass();
            $producto = CreditoProducto::find($id);
    
            $producto->producto= $request->producto;
            $producto->descripcion = $request->descripcion;
            $producto->habilitado = $request->habilitado;
            $producto->save();
    
            $response->success = true;
            $response->data = $producto;
    
            return response()->json($response, 200);
        }
    
    
        public function updatePatch(Request $request, $id)
        {
            $response = new \stdClass();
            $producto = CreditoProducto::find($id);
    
            if ($request->producto != null) {
                $producto->producto = $request->producto;
            }
    
            if ($request->descripcion != null) {
                $producto->descripcion = $request->descripcion;
            }
    
            if ($request->habilitado != null) {
                $producto->habilitado = $request->habilitado;
            }
    
            $producto->save();
    
            $response->success = true;
            $response->data = $producto;
    
            return response()->json($response, 200);
        }
    
        public function delete($id)
        {
            $response = new \stdClass();
    
            $producto= CreditoProducto::find($id);
            $producto->delete();
    
            $response->success = true;
    
            return response()->json($response, 200);
        }
    }
    

