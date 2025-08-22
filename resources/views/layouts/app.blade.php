<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Prueba Técnica App')</title>
    
    <!-- Bootstrap 4 CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <!-- Font Awesome para iconos -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    
    @include('layouts.partials.style')
    
    @yield('styles')
</head>
<body>
    <!-- Header -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="{{ asset('assets/img/logo-emkt-company.webp') }}" alt="E-MKT Company" style="height: 30px;">
            </a>
            
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/menu-view') }}">Menú API</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('emkt.index') }}">Formulario</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-toggle="modal" data-target="#contactModal">Contacto</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="main-content">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <div class="footer-logo">
                        <img src="{{ asset('assets/img/logo-emkt-company.webp') }}" alt="E-MKT Company" class="logo-img">
                    </div>
                    <p class="company-description">
                        <span style="font-weight: 600; color: #fff;">Transformamos ideas</span> en soluciones digitales innovadoras que impulsan el <span style="color: #00d4ff;">crecimiento</span> de tu negocio.
                    </p>
                </div>
                
                <div class="footer-section">
                    <h4 class="footer-title">
                        <span>Contacto</span>
                    </h4>
                    <div class="contact-info">
                        <p><i class="fas fa-envelope"></i> <a href="mailto:info@e-mktcompany.com">info@e-mktcompany.com</a></p>
                        <p><i class="fas fa-phone"></i> <a href="tel:+1234567890">+1 234 567 890</a></p>
                        <p><i class="fas fa-map-marker-alt"></i> El Salvador, San Salvador</p>
                    </div>
                </div>
                
                <div class="footer-section">
                    <h4 class="footer-title">
                        <span>Síguenos</span>
                    </h4>
                    <div class="social-icons">
                        <a href="https://www.facebook.com/e-mktcompany" target="_blank" class="social-link">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="https://www.instagram.com/emkt_company" target="_blank" class="social-link">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="https://www.linkedin.com/company/emkt-company/" target="_blank" class="social-link">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a href="https://twitter.com/emkt_company" target="_blank" class="social-link">
                            <i class="fab fa-twitter"></i>
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="footer-bottom" style="border-top: 1px solid #333a; padding: 18px 0 8px; text-align: center; margin-top: 10px;">
                <div class="footer-divider" style="height: 2px; width: 80px; background: linear-gradient(90deg, #007bff, #00d4ff); margin: 0 auto 12px; border-radius: 2px;"></div>
                <div class="copyright" style="color: #b0b0b0; font-size: 0.98em;">
                    <p style="margin: 0;">&copy; 2025 <span style="color: #00d4ff; font-weight: 600;">E-MKT Company</span>. Todos los derechos reservados.</p>
                    <p style="margin: 0;">Desarrollado por: <span style="color: #00d4ff; font-weight: 600;">Jose España</span></p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Contact Modal -->
    <div class="modal fade" id="contactModal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Contacto</h5>
                    <button type="button" class="close" data-dismiss="modal">
                        <span>&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <ul class="nav nav-tabs" id="contactTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="company-tab" data-toggle="tab" href="#companyContact" role="tab" aria-controls="companyContact" aria-selected="true">
                                Compañía
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="dev-tab" data-toggle="tab" href="#devContact" role="tab" aria-controls="devContact" aria-selected="false">
                                Desarrollador
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content mt-3" id="contactTabContent">
                        <div class="tab-pane fade show active" id="companyContact" role="tabpanel" aria-labelledby="company-tab">
                            <p>¿Tienes alguna pregunta? ¡Contáctanos!</p>
                            <p><strong>Email:</strong> info@e-mktcompany.com</p>
                            <p><strong>Teléfono:</strong> +1 234 567 890</p>
                        </div>
                        <div class="tab-pane fade" id="devContact" role="tabpanel" aria-labelledby="dev-tab">
                            <p>¿Tienes alguna pregunta? ¡Contáctame!</p>
                            <p><strong>Email:</strong> joseespana@gmail.com</p>
                            <p><strong>Teléfono:</strong> +503 7731-0930</p>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap 4 JS -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    
    @yield('scripts')
</body>
</html>
