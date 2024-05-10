@extends('layouts.app')

@section('template_title')
    @auth
        Dashboard
    @else
        {{ config('app.name', 'Laravel') }}
    @endauth
@endsection

@section('content')
<style>
    #cards {
    padding: 20px;
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    
}

.card {
    padding: 10px;
    background-color: #FFFFFF;
    position: relative;
    width: 90%; 
    max-width: 350px; 
    height: 130px;
    overflow: hidden;
    cursor: pointer;
    box-shadow: 2px 4px 6px 2px #888888;
    box-sizing: border-box;
    transition: transform 0.5s ease;
}


.icon-card {
    position: absolute;
    bottom: 30px;
    right: 30px;
    font-size: 80px; 
    color: #ccc; 
    opacity: 0.9; 
    z-index: 1;
}

.card .tooltip-content {
    width: 60%;
    overflow: hidden;
    font-size: 12px;
    visibility: hidden;
    padding: 10px;
    background-color: #333;
    color: #fff;
    position: absolute;
    z-index: 1;
    margin-top: 20px;
    opacity: 0;
    transition: visibility 0s, opacity 0.3s ease;
}

.card:hover .tooltip-content {
    visibility: visible;
    opacity: 1;
}

.card h6 {
    font-weight: bold;
    color: #007bff;
}

.card h2 {
    font-weight: bold;
}

#citasPendientes {
    border-left: 5px solid #2196F3; 
}

#proximasCitas {
    border-left: 5px solid #a5d6ff;
}

#pacientes {
    border-left: 5px solid #FF9800;
}

/* GRAFICA ESTADISTICA */

#grafica {
    text-align: center;
    display: block;
    margin: 0 auto;
    margin-top: 20px;
    max-width: 70%;
    height: auto; 
}
</style>
<div class="container-fluid">
    <div class="container">
    @auth
    <h1>Dashboard</h1>
    <div id="cards">
        <div id="citasPendientes" class="card" onclick="desplazamiento(this);">
            <h6 class="text-uppercase">Citas pendientes</h6>
            <div class="info-card">
                <h2 class="number-card">
                    <span id="cantCitasPendientes"></span>
                    <span class="tooltip-content">Citas pendientes</span>{{ $cantidadesCards['cantCitasPendientes'] }}
                    <i class="icon-card fas fa-clock"></i>
                </h2>
            </div>
        </div>
        <div id="proximasCitas" class="card" onclick="desplazamiento(this);">
            <h6 class="text-uppercase">Próximas Citas</h6>
            <div class="info-card">
                <h2 class="number-card">
                    <span id="cantProximasCitas"></span>
                    <i class="icon-card fas fa-calendar"></i>{{ $cantidadesCards['cantProximasCitas'] }}
                    <span class="tooltip-content">Próximas Citas</span>
                </h2>
            </div>
        </div>
        <div id="pacientes" class="card" onclick="desplazamiento(this);" style="transform: translateY(10px);">
            <h6 class="text-uppercase">Pacientes</h6>
            <div class="info-card">
                <h2 class="number-card">
                    <span id="cantPacientes"></span>
                    <i class="icon-card fas fa-users"></i>{{ $cantidadesCards['cantPacientes'] }}
                    <span class="tooltip-content">Pacientes</span>
                </h2>
            </div>
        </div>
    </div>
    <br>
    <div id="grafica" class="jumbotron dashb1 col-md-8">
        <h2 id="titulografica">Solicitudes</h2>
        {{-- <p>Modificar: {{ $cantSolicitudes['modificar'] }}</p>
        <p>Cancelar: {{ $cantSolicitudes['cancelar'] }}</p> --}}
        <canvas id="myChart"></canvas>
        <br>
        <h2 id="titulografica">Medios de comunicación más usados</h2>
        {{-- <p>WhatsApp: {{ $cantMediosComunicacion['whatsapp'] }}</p>
        <p>Teléfono: {{ $cantMediosComunicacion['telefono'] }}</p>
        <p>Correo Electrónico: {{ $cantMediosComunicacion['correo'] }}</p> --}}
        <canvas id="myChart2"></canvas>
    </div>
    
    
    
    @else
        <h1>Bienvenido a HealthAlerts</h1>
    @endauth
    </div>
</div>
@endsection

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>

function desplazamiento(card) {
    var cards = document.querySelectorAll('.card');
    cards.forEach(function(card) {
        card.style.transform = 'translateY(0)';
    });

    card.style.transform = 'translateY(10px)';
}

document.addEventListener('DOMContentLoaded', function() {

    var ctx = document.getElementById('myChart').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Modificar', 'Cancelar'],
            datasets: [{
                label: 'Citas Pendientes',
                data: [
                    {{ $cantSolicitudes['modificar'] }},
                    {{ $cantSolicitudes['cancelar'] }}
                ],
                backgroundColor: [
                    'rgba(33, 150, 243, 0.5)', 
                    'rgba(255, 152, 0, 0.5)'
                ],
                borderColor: [
                    'rgba(33, 150, 243, 1)',
                    'rgba(255, 152, 0, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });

    var ctx2 = document.getElementById('myChart2').getContext('2d');
    var myChart2 = new Chart(ctx2, {
        type: 'bar',
        data: {
            labels: ['WhatsApp', 'Teléfono', 'Correo Electrónico'],
            datasets: [{
                label: 'Medios de Comunicación',
                data: [
                    {{ $cantMediosComunicacion['whatsapp'] }},
                    {{ $cantMediosComunicacion['telefono'] }},
                    {{ $cantMediosComunicacion['correo'] }}
                ],
                backgroundColor: [
                    'rgb(60, 179, 113, 0.5)',
                    'rgba(33, 150, 243, 0.5)',
                    'rgba(255, 206, 86, 0.2)'
                ],
                borderColor: [
                    'rgb(60, 179, 113, 1)',
                    'rgba(33, 150, 243, 1)',
                    'rgba(255, 206, 86, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
});
</script>