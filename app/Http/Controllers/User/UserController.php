<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Validator;
use DataTables;

use App\User;
use App\Imc;


class UserController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function createIMC()
    {
        return view('users.createImc');
    }

    public function showHistorical(Request $request)
    {

        if (request()->ajax()) {
            return datatables()->of(Imc::where('user_id', auth()->user()->id))
                ->editColumn('imc', function ($data) {
                    return number_format($data->imc, 2);
                })
                ->filterColumn('created_at', function ($query, $keyword) {
                    $query->whereRaw("DATE_FORMAT(created_at,'%d/%m/%y %H:%i') like ?", ["%$keyword%"]);
                })
                ->addIndexColumn()
                ->make(true);
        }

        $imc = Imc::where('user_id', auth()->user()->id)->get();

        return view('users.showHistorical', compact('imc'));
    }

    public function storeIMC(Request $request)
    {
        /** @var inputs guardamos lo que viene en el request */
        $inputs = $request->all();

        /** @var validator realizamos la validacion para comprobar todos los campos de la peticion */
        $validator = Validator::make($inputs, [
            'weight' => 'required|string',
            'height' => 'required|string'
        ]);

        // Si pasa la validación guardamos el imc.
        if ($validator->passes()) {

            /** @var imc creamos un nuevo imc */
            $imc = new Imc();

            // guarda el dato en la base de datos
            $imc->weight = $inputs['weight'];
            $imc->height = $inputs['height'];
            $imc->user_id = auth()->user()->id;
            $imc->imc = ($imc->weight / ($imc->height / 100 * $imc->height / 100));
            if ($imc->imc < 16.00) {
                $imc->result = Imc::iMC_DELGADEZ;
            } elseif ($imc->imc > 18.5 && $imc->imc < 24.99) {
                $imc->result = Imc::iMC_NORMAL;
            } elseif ($imc->imc >= 30.00) {
                $imc->result = Imc::iMC_OBESIDAD;
            } else {
                $imc->result = Imc::iMC_ETC;
            }


            $imc->save();


            return response()->json(['success' => 'Added new IMC.']);
        }


        return response()->json(['error' => $validator->errors()]);
    }
}
