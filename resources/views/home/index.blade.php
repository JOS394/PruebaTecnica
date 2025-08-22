@extends('layouts.app')

@section('title', 'Inicio - Prueba Técnica App')

@section('styles')
<style>
    .hero-section {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        min-height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        position: relative;
        overflow: hidden;
    }
    
    .hero-section::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="grain" width="100" height="100" patternUnits="userSpaceOnUse"><circle cx="50" cy="50" r="1" fill="rgba(255,255,255,0.1)"/></pattern></defs><rect width="100" height="100" fill="url(%23grain)"/></svg>');
        opacity: 0.3;
    }
    
    .hero-content {
        text-align: center;
        color: white;
        position: relative;
        z-index: 2;
        max-width: 800px;
        padding: 0 20px;
    }
    
    .hero-title {
        font-size: clamp(2.5rem, 6vw, 4rem);
        font-weight: 700;
        margin-bottom: 20px;
        text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
        animation: fadeInUp 1s ease-out;
    }
    
    .hero-subtitle {
        font-size: clamp(1.1rem, 3vw, 1.5rem);
        margin-bottom: 40px;
        opacity: 0.9;
        line-height: 1.6;
        animation: fadeInUp 1s ease-out 0.2s both;
    }
    
    .hero-buttons {
        display: flex;
        gap: 20px;
        justify-content: center;
        flex-wrap: wrap;
        animation: fadeInUp 1s ease-out 0.4s both;
    }
    
    .hero-btn {
        padding: 15px 30px;
        font-size: 1.1rem;
        font-weight: 600;
        text-decoration: none;
        border-radius: 50px;
        transition: all 0.3s ease;
        text-transform: uppercase;
        letter-spacing: 1px;
        position: relative;
        overflow: hidden;
        border: 2px solid transparent;
    }
    
    .hero-btn::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
        transition: left 0.5s;
    }
    
    .hero-btn:hover::before {
        left: 100%;
    }
    
    .hero-btn-primary {
        background: linear-gradient(45deg, #007bff, #0056b3);
        color: white;
        box-shadow: 0 5px 15px rgba(0,123,255,0.4);
    }
    
    .hero-btn-primary:hover {
        transform: translateY(-3px);
        box-shadow: 0 10px 25px rgba(0,123,255,0.6);
        color: white;
        text-decoration: none;
    }
    
    .hero-btn-secondary {
        background: transparent;
        color: white;
        border: 2px solid white;
    }
    
    .hero-btn-secondary:hover {
        background: white;
        color: #667eea;
        transform: translateY(-3px);
        box-shadow: 0 10px 25px rgba(255,255,255,0.3);
        text-decoration: none;
    }
    
    .features-section {
        padding: 80px 0;
        background: #f8f9fa;
    }
    
    .feature-card {
        text-align: center;
        padding: 40px 20px;
        background: white;
        border-radius: 15px;
        box-shadow: 0 5px 20px rgba(0,0,0,0.1);
        transition: transform 0.3s ease;
        height: 100%;
    }
    
    .feature-card:hover {
        transform: translateY(-10px);
    }
    
    .feature-icon {
        width: 80px;
        height: 80px;
        background: linear-gradient(45deg, #667eea, #764ba2);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 20px;
        color: white;
        font-size: 2rem;
    }
    
    .feature-title {
        font-size: 1.5rem;
        font-weight: 600;
        margin-bottom: 15px;
        color: #333;
    }
    
    .feature-description {
        color: #666;
        line-height: 1.6;
    }
    
    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(30px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
    
    .floating-shapes {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        overflow: hidden;
        z-index: 1;
    }
    
    .shape {
        position: absolute;
        background: rgba(255,255,255,0.1);
        border-radius: 50%;
        animation: float 6s ease-in-out infinite;
    }
    
    .shape:nth-child(1) {
        width: 80px;
        height: 80px;
        top: 20%;
        left: 10%;
        animation-delay: 0s;
    }
    
    .shape:nth-child(2) {
        width: 120px;
        height: 120px;
        top: 60%;
        right: 10%;
        animation-delay: 2s;
    }
    
    .shape:nth-child(3) {
        width: 60px;
        height: 60px;
        bottom: 20%;
        left: 20%;
        animation-delay: 4s;
    }
    
    @keyframes float {
        0%, 100% {
            transform: translateY(0px) rotate(0deg);
        }
        50% {
            transform: translateY(-20px) rotate(180deg);
        }
    }
    
    /* Responsive */
    @media (max-width: 768px) {
        .hero-buttons {
            flex-direction: column;
            align-items: center;
        }
        
        .hero-btn {
            width: 100%;
            max-width: 300px;
        }
        
        .features-section {
            padding: 60px 0;
        }
    }
</style>
@endsection

@section('content')
<!-- Hero Section -->
<section class="hero-section">
    <div class="floating-shapes">
        <div class="shape"></div>
        <div class="shape"></div>
        <div class="shape"></div>
    </div>
    
    <div class="hero-content">
        <h1 class="hero-title">Prueba Técnica App</h1>
        <p class="hero-subtitle">
            Bienvenido a nuestra aplicación de prueba técnica. 
            Explora las funcionalidades de consumo de API y registro de candidatos.
        </p>
        
        <div class="hero-buttons">
            <a href="{{ url('/menu-view') }}" class="hero-btn hero-btn-primary">
                <i class="fas fa-code mr-2"></i>
                Menú API
            </a>
            <a href="{{ url('/somos-emkt') }}" class="hero-btn hero-btn-secondary">
                <i class="fas fa-users mr-2"></i>
                Formulario
            </a>
        </div>
    </div>
</section>

<!-- Features Section -->
<section class="features-section">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-5">
                <h2 class="display-4 font-weight-bold text-dark">Funcionalidades</h2>
                <p class="lead text-muted">Descubre lo que puedes hacer con nuestra aplicación</p>
            </div>
        </div>
        
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-code"></i>
                    </div>
                    <h3 class="feature-title">Consumo de API</h3>
                    <p class="feature-description">
                        Prueba el consumo de datos JSON desde nuestro endpoint personalizado. 
                        Visualiza la estructura de datos de forma interactiva.
                    </p>
                </div>
            </div>
            
            <div class="col-md-4 mb-4">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-edit"></i>
                    </div>
                    <h3 class="feature-title">Formulario de Registro</h3>
                    <p class="feature-description">
                        Registra candidatos con validación completa. 
                        Almacena datos en base de datos con interfaz moderna.
                    </p>
                </div>
            </div>
            
            <div class="col-md-4 mb-4">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-mobile-alt"></i>
                    </div>
                    <h3 class="feature-title">Diseño Responsivo</h3>
                    <p class="feature-description">
                        Interfaz adaptativa que funciona perfectamente en 
                        dispositivos móviles, tablets y computadoras.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
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
    
    // Add hover effect to feature cards
    $('.feature-card').hover(
        function() {
            $(this).find('.feature-icon').css('transform', 'scale(1.1)');
        },
        function() {
            $(this).find('.feature-icon').css('transform', 'scale(1)');
        }
    );
});
</script>
@endsection
