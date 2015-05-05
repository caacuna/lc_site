<?php namespace App\Http\Controllers;

use App\Registration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{

    public function index()
    {
        return view('home');
    }

    public function registrations(Request $request)
    {
        $validator = Validator::make($request->all(),
            ['email' => 'required|unique:registrations'],
            ['email.unique' => 'Este correo ya se encuentra registrado.']
        );

        $response = ['success' => false, 'message' => ''];

        if ($validator->fails())
        {
            $response['message'] = $validator->messages()->first('email');
        } else if (Registration::create($request->all()))
        {
            $response['message'] = sprintf('¡Tu correo %s fue registrado exitosamente!, pronto recibirás noticias de LicitaChile.', $request->input('email'));
            $response['success'] = true;
        } else {
            $response['message'] = 'El registro no pudo ser creado, intente nuevamente.';
        }

        return response()->json($response);
    }
}