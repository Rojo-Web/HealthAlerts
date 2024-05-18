

@extends('layouts.app')

@section('template_title')
    @auth
        Políticas de privacidad
    @else
        {{ config('app.name', 'Laravel') }}
    @endauth
@endsection

<style>
    .card{
        cursor: pointer;
    }
    .card-header{
        border-left: 5px solid #0fb066;
    }
</style>

@section('content')
<h1 class="mb-4">Políticas de privacidad</h1>
<div class="card w-100 mb-3">
    <div class="card-header" data-toggle="collapse" data-target="#collapse1">
        <h3 class="mb-0">Tratamiento de Datos en HealthAlerts</h3>
    </div>
    <div id="collapse1" class="collapse">
        <div class="card-body">
            <p class="card-text">En HealthAlerts, nos tomamos muy en serio la protección y privacidad de tus datos personales. A continuación, te explicamos cómo tratamos la información que nos proporcionas al utilizar nuestra aplicación.</p>
        </div>
    </div>
</div>
<div class="card w-100 mb-3">
    <div class="card-header" data-toggle="collapse" data-target="#collapse1">
        <h3 class="mb-0">Recopilación de Datos</h3>
    </div>
    <div id="collapse1" class="collapse">
        <div class="card-body">
            <p class="card-text">Al registrarte en HealthAlerts, recopilamos información personal como tu nombre, dirección de correo electrónico, número de teléfono y detalles de las citas médicas. Esta información es necesaria para brindarte un servicio personalizado y eficiente.</p>
        </div>
    </div>
</div>
<div class="card w-100 mb-3">
    <div class="card-header" data-toggle="collapse" data-target="#collapse1">
        <h3 class="mb-0">Uso de los Datos</h3>
    </div>
    <div id="collapse1" class="collapse">
        <div class="card-body">
            <p class="card-text">Los datos recopilados en HealthAlerts se utilizan exclusivamente para enviar recordatorios de citas a través de llamadas, mensajes de WhatsApp o correos electrónicos, según tus preferencias. No compartimos esta información con terceros sin tu consentimiento.</p>
        </div>
    </div>
</div>
<div class="card w-100 mb-3">
    <div class="card-header" data-toggle="collapse" data-target="#collapse1">
        <h3 class="mb-0">Seguridad de los Datos</h3>
    </div>
    <div id="collapse1" class="collapse">
        <div class="card-body">
            <p class="card-text">Implementamos medidas de seguridad avanzadas para proteger tus datos personales contra accesos no autorizados, pérdida o alteración. Utilizamos protocolos seguros para garantizar la confidencialidad y integridad de la información que nos confías.</p>
        </div>
    </div>
</div>
<div class="card w-100 mb-3">
    <div class="card-header" data-toggle="collapse" data-target="#collapse1">
        <h3 class="mb-0">Derechos del Usuario</h3>
    </div>
    <div id="collapse1" class="collapse">
        <div class="card-body">
            <p class="card-text">Como usuario de HealthAlerts, tienes derecho a acceder, rectificar o eliminar tus datos personales en cualquier momento. Puedes gestionar tus preferencias de comunicación y actualizar tu información personal desde la aplicación.</p>
        </div>
    </div>
</div>
<div class="card w-100 mb-3">
    <div class="card-header" data-toggle="collapse" data-target="#collapse1">
        <h3 class="mb-0">Consentimiento</h3>
    </div>
    <div id="collapse1" class="collapse">
        <div class="card-body">
            <p class="card-text">Al utilizar HealthAlerts, aceptas el tratamiento de tus datos personales conforme a las políticas y condiciones establecidas. Tu consentimiento es fundamental para garantizar una experiencia segura y personalizada en nuestra plataforma.</p>
        </div>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    $(document).ready(function(){
        // Al hacer clic en un card-header, se desplegará o colapsará el contenido
        $('.card-header').click(function(){
            $(this).next('.collapse').collapse('toggle');
        });
    });
</script>
@endsection




