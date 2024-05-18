<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CitasPendiente;
use App\Models\ProximasCita;
use App\Models\Paciente;
use App\Models\Registro;
use App\Models\Role;
use App\Models\User;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\CitasPendientesExport;
use App\Exports\ProximasCitasExport;
use App\Exports\PacientesExport;
use App\Exports\RegistrosExport;
use App\Exports\RolesExport;
use App\Exports\UsersExport;
use Barryvdh\DomPDF\Facade\Pdf;

class ReportesController extends Controller
{
    public function __invoke()
    {
        return view('reportes.index');
    }

    public function backup()
    {
        return view('backup.index');
    }
    public function exportCitasPendientes($format)
    {
        $export = new CitasPendientesExport;
        return $this->exportByFormat($export, 'citas_pendientes', $format);
    }

    public function exportProximasCitas($format)
    {
        $export = new ProximasCitasExport;
        return $this->exportByFormat($export, 'proximas_citas', $format);
    }

    public function exportPacientes($format)
    {
        $export = new PacientesExport;
        return $this->exportByFormat($export, 'pacientes', $format);
    }

    public function exportRegistros($format)
    {
        $export = new RegistrosExport;
        return $this->exportByFormat($export, 'registros', $format);
    }

    public function exportRoles($format)
    {
        $export = new RolesExport;
        return $this->exportByFormat($export, 'roles', $format);
    }

    public function exportUsers($format)
    {
        $export = new UsersExport;
        return $this->exportByFormat($export, 'users', $format);
    }

    private function exportByFormat($export, $filename, $format)
    {
        switch ($format) {
            case 'xlsx':
                return Excel::download($export, "{$filename}.xlsx");
            case 'csv':
                return Excel::download($export, "{$filename}.csv");
            case 'pdf':
                return $this->exportToPDF($filename);
            default:
                // Manejar formato inválido
                abort(404);
        }
    }

    private function exportToPDF($filename)
    {
        $data = $this->getDataForExport($filename);
        $view = "pdf_view";
        $title = ucfirst(str_replace('_', ' ', $filename)); // Convertir "reporte_pacientes" a "Reporte Pacientes"

        $pdf = Pdf::loadView($view, ['data' => $data, 'title' => $title]);
        return $pdf->download("{$filename}.pdf");
    }


    private function getDataForExport($filename)
    {
        switch ($filename) {
            case 'citas_pendientes':
                return CitasPendiente::all();
            case 'proximas_citas':
                return ProximasCita::all();
            case 'pacientes':
                return Paciente::all();
            case 'registros':
                return Registro::all();
            case 'roles':
                return Role::all();
            case 'users':
                return User::all();
            default:
                // Manejar nombre de archivo inválido
                abort(404);
        }
    }
}
