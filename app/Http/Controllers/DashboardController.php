<?php

namespace App\Http\Controllers;

use App\Models\CitasPendiente;
use App\Models\Paciente;
use App\Models\ProximasCita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $cantCitasPendientes = CitasPendiente::count();
        $cantPacientes = Paciente::count();
        $cantProximasCitas = ProximasCita::count();

        $cantidadesCards = [
            'cantCitasPendientes' => $cantCitasPendientes,
            'cantPacientes' => $cantPacientes,
            'cantProximasCitas' => $cantProximasCitas,
        ];

        $solicitudes = DB::table('citas_pendientes')
            ->select('solicitud')
            ->whereIn('solicitud', ['Modificar', 'Cancelar'])
            ->get();

        $cantSolicitudes = [
            'modificar' => $solicitudes->where('solicitud', 'Modificar')->count(),
            'cancelar' => $solicitudes->where('solicitud', 'Cancelar')->count(),
        ];

        $mediosComunicacion = DB::table('registros')
            ->select('medioComunicacion')
            ->whereIn('medioComunicacion', ['WhatsApp', 'Teléfono', 'Correo electrónico'])
            ->get();  
            
        $cantMediosComunicacion = [
            'whatsapp' => $mediosComunicacion->where('medioComunicacion', 'WhatsApp')->count(),
            'telefono' => $mediosComunicacion->where('medioComunicacion', 'Teléfono')->count(),
            'correo' => $mediosComunicacion->where('medioComunicacion', 'Correo electrónico')->count(),
        ];    

        return view('dashboard', compact('cantidadesCards', 'cantSolicitudes', 'cantMediosComunicacion'));
    }
}
