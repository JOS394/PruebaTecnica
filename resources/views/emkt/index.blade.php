@extends('layouts.app')

@section('title', 'Somos EMKT - Prueba Técnica')

@section('styles')
<style>
    .hero-slider {
        position: relative;
        width: 100%;
        height: 60vh;
        min-height: 400px;
        max-height: 600px;
        overflow: hidden;
        box-shadow: 0 5px 20px rgba(0,0,0,0.1);
    }
    
    .hero-slider .carousel,
    .hero-slider .carousel-inner,
    .hero-slider .carousel-item {
        width: 100%;
        height: 100%;
    }
    
    .hero-slider .carousel-item {
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        position: relative;
    }
    
    .hero-slider .carousel-item::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: linear-gradient(135deg, 
            rgba(0,0,0,0.7) 0%, 
            rgba(0,0,0,0.4) 50%, 
            rgba(0,0,0,0.2) 100%);
        z-index: 1;
    }
    
    .hero-slider .carousel-item:nth-child(1)::before {
        background: linear-gradient(135deg, 
            rgba(0,123,255,0.8) 0%, 
            rgba(0,123,255,0.4) 50%, 
            rgba(0,0,0,0.3) 100%);
    }
    
    .hero-slider .carousel-item:nth-child(2)::before {
        background: linear-gradient(135deg, 
            rgba(40,167,69,0.8) 0%, 
            rgba(40,167,69,0.4) 50%, 
            rgba(0,0,0,0.3) 100%);
    }
    
    .hero-slider .carousel-item:nth-child(3)::before {
        background: linear-gradient(135deg, 
            rgba(220,53,69,0.8) 0%, 
            rgba(220,53,69,0.4) 50%, 
            rgba(0,0,0,0.3) 100%);
    }
    
    .hero-slider .carousel-caption {
        position: absolute;
        z-index: 2;
        text-align: center;
        padding: 0 20px;
        width: 100%;
        max-width: 800px;
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%);
    }
    
    .hero-slider .carousel-caption h1 {
        font-size: clamp(1.5rem, 4vw, 2.5rem);
        font-weight: 700;
        margin-bottom: 15px;
        color: white;
        text-shadow: 2px 2px 4px rgba(0,0,0,0.7);
        line-height: 1.2;
    }
    
    .hero-slider .carousel-caption p {
        font-size: clamp(0.9rem, 2.5vw, 1.1rem);
        line-height: 1.6;
        margin-bottom: 25px;
        color: rgba(255,255,255,0.9);
        text-shadow: 1px 1px 2px rgba(0,0,0,0.5);
    }
    
    .hero-slider .carousel-caption .btn {
        font-size: clamp(0.8rem, 2vw, 1rem);
        padding: 10px 20px;
        border-radius: 25px;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        transition: all 0.3s ease;
        border: 2px solid transparent;
        white-space: nowrap;
    }
    
    .hero-slider .carousel-caption .btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(0,0,0,0.3);
    }
    
    .hero-slider .carousel-control-prev,
    .hero-slider .carousel-control-next {
        width: clamp(40px, 8vw, 50px);
        height: clamp(40px, 8vw, 50px);
        background: rgba(0,0,0,0.3);
        border-radius: 50%;
        top: 50%;
        transform: translateY(-50%);
        margin: 0 clamp(10px, 2vw, 15px);
        transition: all 0.3s ease;
        border: none;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    
    .hero-slider .carousel-control-prev:hover,
    .hero-slider .carousel-control-next:hover {
        background: rgba(0,0,0,0.6);
        transform: translateY(-50%) scale(1.05);
    }
    
    .hero-slider .carousel-indicators {
        bottom: clamp(15px, 3vw, 20px);
        margin-bottom: 0;
    }
    
    .hero-slider .carousel-indicators li {
        width: clamp(8px, 2vw, 10px);
        height: clamp(8px, 2vw, 10px);
        border-radius: 50%;
        margin: 0 clamp(3px, 1vw, 4px);
        background: rgba(255,255,255,0.6);
        border: none;
        transition: all 0.3s ease;
    }
    
    .hero-slider .carousel-indicators li.active {
        background: #007bff;
        transform: scale(1.2);
    }
    
    /* Responsive adjustments */
    @media (max-width: 768px) {
        .hero-slider {
            height: 50vh;
            min-height: 300px;
        }
        
        .hero-slider .carousel-caption {
            padding: 0 15px;
        }
    }
    
    @media (max-width: 576px) {
        .hero-slider {
            height: 40vh;
            min-height: 250px;
        }
        
        .hero-slider .carousel-caption {
            padding: 0 10px;
        }
        
        .hero-slider .carousel-caption .btn {
            padding: 8px 16px;
            font-size: 0.8rem;
        }
    }
    
    @media (max-width: 480px) {
        .hero-slider {
            height: 35vh;
            min-height: 200px;
        }
        
        .hero-slider .carousel-caption h1 {
            margin-bottom: 10px;
        }
        
        .hero-slider .carousel-caption p {
            margin-bottom: 15px;
        }
    }
    
    .services-grid {
        padding: 80px 0;
        background: #f8f9fa;
    }
    
    .service-card {
        text-align: center;
        padding: 30px 20px;
        background: white;
        border-radius: 10px;
        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        transition: transform 0.3s ease;
        height: 100%;
    }
    
    .service-card:hover {
        transform: translateY(-10px);
    }
    
    .service-card img {
        width: 80px;
        height: 80px;
        object-fit: cover;
        border-radius: 50%;
        margin-bottom: 20px;
    }
    
    .service-card h3 {
        color: #333;
        margin-bottom: 15px;
        font-size: 1.5rem;
    }
    
    .service-card p {
        color: #666;
        line-height: 1.6;
    }
    
    .cover-section {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
        padding: 100px 0;
        text-align: center;
        cursor: pointer;
        transition: all 0.3s ease;
    }
    
    .cover-section:hover {
        background: linear-gradient(135deg, #764ba2 0%, #667eea 100%);
    }
    
    .cover-section h2 {
        font-size: 3rem;
        margin-bottom: 20px;
    }
    
    .cover-section p {
        font-size: 1.2rem;
        margin-bottom: 30px;
    }
    
    .form-section {
        padding: 80px 0;
        background: white;
    }
    
    .form-container {
        max-width: 600px;
        margin: 0 auto;
        background: #f8f9fa;
        padding: 40px;
        border-radius: 15px;
        box-shadow: 0 10px 30px rgba(0,0,0,0.1);
    }
    
    .form-title {
        text-align: center;
        margin-bottom: 30px;
        color: #333;
    }
    
    .alert {
        display: none;
        margin-bottom: 20px;
    }
    
    .loading {
        display: none;
    }
</style>
@endsection

@section('content')
<!-- Hero Slider -->
<div class="container-fluid px-0 mb-5">
    <div class="row no-gutters">
        <div class="col-12">
            <div id="heroSlider" class="carousel slide hero-slider" data-ride="carousel" data-interval="4000">
    <ol class="carousel-indicators">
        <li data-target="#heroSlider" data-slide-to="0" class="active"></li>
        <li data-target="#heroSlider" data-slide-to="1"></li>
        <li data-target="#heroSlider" data-slide-to="2"></li>
    </ol>
    
    <div class="carousel-inner">
        <div class="carousel-item active">
            <div style="background-image: url('https://images.unsplash.com/photo-1518709268805-4e9042af2176?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80')"></div>
            <div class="carousel-caption">
                <h1>Innovación Digital</h1>
                <p>Transformamos ideas en soluciones tecnológicas que revolucionan tu negocio</p>
                <a href="#services" class="btn btn-primary">Descubre Más</a>
            </div>
        </div>
        <div class="carousel-item">
            <div style="background-image: url('https://images.unsplash.com/photo-1460925895917-afdab827c52f?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80')"></div>
            <div class="carousel-caption">
                <h1>Desarrollo Web</h1>
                <p>Creamos aplicaciones web modernas y escalables con las últimas tecnologías</p>
                <a href="#contact" class="btn btn-success">Solicitar Cotización</a>
            </div>
        </div>
        <div class="carousel-item">
            <div style="background-image: url('https://images.unsplash.com/photo-1557838923-2985c318be48?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80')"></div>
            <div class="carousel-caption">
                <h1>Marketing Digital</h1>
                <p>Estrategias digitales que aumentan tu presencia online y generan resultados</p>
                <a href="#form-section" class="btn btn-warning">Únete a Nosotros</a>
            </div>
        </div>
    </div>
    
    <a class="carousel-control-prev" href="#heroSlider" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#heroSlider" role="button" data-slide="next">
        <span class="carousel-control-next-icon"></span>
    </a>
</div>
            </div>
        </div>
    </div>
</div>

<!-- Services Grid -->
<section class="services-grid">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-5">
                <h2>Nuestros Servicios</h2>
                <p class="lead">Ofrecemos soluciones integrales para tu negocio</p>
            </div>
        </div>
        
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="service-card text-center">
                    <span style="display: inline-block; background: linear-gradient(135deg, #007bff 60%, #00d4ff 100%); border-radius: 50%; padding: 22px; box-shadow: 0 4px 16px #007bff22;">
                        <i class="fas fa-laptop-code fa-3x" style="color: #fff;"></i>
                    </span>
                    <h3 class="mt-3">Desarrollo Web</h3>
                    <p>Creamos sitios web modernos, responsivos y optimizados para SEO que convierten visitantes en clientes.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="service-card text-center">
                    <span style="display: inline-block; background: linear-gradient(135deg, #007bff 60%, #00d4ff 100%); border-radius: 50%; padding: 22px; box-shadow: 0 4px 16px #007bff22;">
                        <i class="fas fa-mobile fa-3x" style="color: #fff;padding-inline: 10px;"></i>
                    </span>
                    <h3 class="mt-3">Aplicaciones Móviles</h3>
                    <p>Desarrollamos aplicaciones móviles nativas e híbridas que ofrecen experiencias de usuario excepcionales.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="service-card text-center">
                    <span style="display: inline-block; background: linear-gradient(135deg, #dc3545 60%, #ff7675 100%); border-radius: 50%; padding: 22px; box-shadow: 0 4px 16px #dc354522;">
                        <i class="fas fa-bullhorn fa-3x" style="color: #fff;"></i>
                    </span>
                    <h3 class="mt-3">Marketing Digital</h3>
                    <p>Implementamos estrategias de marketing digital efectivas que aumentan tu presencia online y generan leads.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Cover Section (100% width) -->
<section class="cover-section" data-toggle="modal" data-target="#coverModal">
    <div class="container">
        <h2>¿Listo para transformar tu negocio?</h2>
        <p>Descubre cómo podemos ayudarte a alcanzar tus objetivos digitales</p>
        <button class="btn btn-light btn-lg">Conoce Más</button>
    </div>
</section>

<!-- Form Section -->
<section class="form-section">
    <div class="container">
        <div class="form-container">
            <h2 class="form-title">Registro de Candidatos</h2>
            
            <div class="alert alert-success" id="successAlert">
                <i class="fas fa-check-circle"></i> <span id="successMessage"></span>
            </div>
            
            <div class="alert alert-danger" id="errorAlert">
                <i class="fas fa-exclamation-circle"></i> <span id="errorMessage"></span>
            </div>
            
            <form id="candidateForm">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="nombre">Nombre *</label>
                            <input type="text" class="form-control" id="nombre" name="nombre" required>
                            <div class="invalid-feedback" id="nombre-error"></div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="apellido">Apellido *</label>
                            <input type="text" class="form-control" id="apellido" name="apellido" required>
                            <div class="invalid-feedback" id="apellido-error"></div>
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="edad">Edad *</label>
                            <input type="number" class="form-control" id="edad" name="edad" min="18" max="100" required>
                            <div class="invalid-feedback" id="edad-error"></div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="email">Email *</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                            <div class="invalid-feedback" id="email-error"></div>
                        </div>
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="habilidades">Habilidades *</label>
                    <select class="form-control" id="habilidades" name="habilidades" required>
                        <option value="">Selecciona una habilidad</option>
                        @foreach($habilidades as $key => $value)
                            <option value="{{ $key }}">{{ $value }}</option>
                        @endforeach
                    </select>
                    <div class="invalid-feedback" id="habilidades-error"></div>
                </div>
                
                <div class="text-center">
                    <button type="submit" class="btn btn-primary btn-lg">
                        <span class="loading">
                            <i class="fas fa-spinner fa-spin"></i> Enviando...
                        </span>
                        <span class="normal-text">
                            <i class="fas fa-paper-plane"></i> Enviar Registro
                        </span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</section>

<!-- Cover Modal -->
<div class="modal fade" id="coverModal" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Transforma tu Negocio con EMKT</h5>
                <button type="button" class="close" data-dismiss="modal">
                    <span>&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6">
                        <img src="https://via.placeholder.com/400x300/007bff/ffffff?text=EMKT" class="img-fluid rounded" alt="EMKT">
                    </div>
                    <div class="col-md-6">
                        <h4>¿Por qué elegirnos?</h4>
                        <ul class="list-unstyled">
                            <li><i class="fas fa-check text-success"></i> Más de 10 años de experiencia</li>
                            <li><i class="fas fa-check text-success"></i> Equipo de expertos certificados</li>
                            <li><i class="fas fa-check text-success"></i> Soluciones personalizadas</li>
                            <li><i class="fas fa-check text-success"></i> Soporte 24/7</li>
                            <li><i class="fas fa-check text-success"></i> Resultados garantizados</li>
                        </ul>
                        <p class="mt-3">
                            En EMKT, nos especializamos en crear soluciones digitales innovadoras 
                            que impulsan el crecimiento de tu negocio. Nuestro equipo de expertos 
                            trabaja contigo para entender tus necesidades y desarrollar estrategias 
                            que generen resultados reales.
                        </p>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <a href="#form-section" class="btn btn-primary" data-dismiss="modal">Registrarse</a>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
$(document).ready(function() {
    // Smooth scrolling for anchor links
    $('a[href^="#"]').on('click', function(event) {
        var target = $(this.getAttribute('href'));
        if( target.length ) {
            event.preventDefault();
            $('html, body').stop().animate({
                scrollTop: target.offset().top - 80
            }, 800);
        }
    });
    
    // Form submission
    $('#candidateForm').on('submit', function(e) {
        e.preventDefault();
        
        // Reset previous errors
        $('.is-invalid').removeClass('is-invalid');
        $('.alert').hide();
        
        // Show loading
        $('.loading').show();
        $('.normal-text').hide();
        
        $.ajax({
            url: '{{ route("emkt.store") }}',
            method: 'POST',
            data: $(this).serialize(),
            success: function(response) {
                if (response.success) {
                    $('#successMessage').text(response.message);
                    $('#successAlert').show();
                    $('#candidateForm')[0].reset();
                }
            },
            error: function(xhr) {
                if (xhr.status === 422) {
                    // Validation errors
                    const errors = xhr.responseJSON.errors;
                    Object.keys(errors).forEach(function(field) {
                        $('#' + field).addClass('is-invalid');
                        $('#' + field + '-error').text(errors[field][0]);
                    });
                } else {
                    // Other errors
                    $('#errorMessage').text('Error al procesar la solicitud');
                    $('#errorAlert').show();
                }
            },
            complete: function() {
                // Hide loading
                $('.loading').hide();
                $('.normal-text').show();
            }
        });
    });
    
    // Auto-hide alerts after 5 seconds
    setTimeout(function() {
        $('.alert').fadeOut();
    }, 5000);
});
</script>
@endsection
