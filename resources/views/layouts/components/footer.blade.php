<footer class="footer bg-dark text-light">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4 d-flex flex-column justify-content-center align-items-center">
                <img src="{{ asset('/images/slogan.png') }}" alt="Logo de {{ config('app.name', 'Laravel') }}" class="img-fluid" style="max-height: 250px; height:100%;">
            </div>
            
            <div class="col-md-4">
                <h5>Contacto</h5>
                <p>Teléfono: <a href="tel:+573157298442">(+57) 3157298442</a></p>
                <p>Correo electrónico: <a href="mailto:healthalerts@gmail.com">healthalerts@gmail.com</a></p>
            </div>
            <div class="col-md-4">
                <h5>Más Información</h5>
                <ul class="list-unstyled">
                    <li><a href="{{ route('politicas')}}">Políticas de privacidad</a></li>
                    <li><a href="{{route('pqrs')}}">PQRS</a></li>
                </ul>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-md-12">
                <div class="d-flex justify-content-center">
                    <a href="#" class="me-3" target="__blank"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="me-3" target="__blank"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="me-3" target="__blank"><i class="fab fa-whatsapp"></i></a>
                </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-md-12">
                <p class="text-center">© {{ date('Y') }} {{ config('app.name', 'Laravel') }}. Todos los derechos reservados.</p>
            </div>
        </div>
    </div>
</footer>
