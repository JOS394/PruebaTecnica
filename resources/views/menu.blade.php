@extends('layouts.app')

@section('title', 'Consumo de Menú API')

@section('styles')
@include('partials.menu.style')
@endsection

@section('content')
<div class="menu-page">
    <div class="menu-container">
        <div class="header">
            <h1>Consumo de Menú API</h1>
            <p>Consumiendo datos desde el endpoint /menu con JavaScript</p>
        </div>

        <div class="menu-content-wrapper">
            <div id="loading" class="loading">Cargando menú...</div>
            <div id="error" class="error" style="display: none;"></div>
            <div id="menu-content"></div>
        </div>

        <div class="json-display">
            <div class="json-title">📄 Datos JSON Originales:</div>
            <div id="json-content" class="json-content">Esperando datos...</div>
        </div>

        <div style="text-align: center; margin-top: 20px;">
            <button class="button" onclick="loadMenu()">🔄 Recargar Menú</button>
            <button class="button" onclick="clearMenu()">🗑️ Limpiar</button>
        </div>
    </div>
</div>
@endsection

@section('scripts')
@include('partials.menu.scripts')
@endsection
