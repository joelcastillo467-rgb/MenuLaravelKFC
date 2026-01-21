<!DOCTYPE html>
<html lang="es">
<head>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Menú KFC Style</title>
</head>
<body>
    <nav class="navbar">
        <h1>SO GOOD MENU</h1>
        <div>
            <a href="#pollos" style="color:white; margin-right:15px;">Pollos</a>
            <a href="#hamburguesas" style="color:white;">Hamburguesas</a>
        </div>
    </nav>

    <header style="text-align:center; padding: 50px 0; background: white;">
        <h2 style="font-size: 3rem; color: var(--kfc-red);">¿QUÉ SE TE ANTOJA HOY?</h2>
    </header>

    <div class="menu-grid">
        @foreach($productos as $producto)
        <div class="card">
            <img src="{{ $producto->imagen }}" alt="{{ $producto->nombre }}">
            <div class="card-body">
                <span style="color: #777; font-size: 0.8rem;">{{ strtoupper($producto->categoria) }}</span>
                <h3>{{ $producto->nombre }}</h3>
                <p>{{ $producto->descripcion }}</p>
                <div style="display:flex; justify-content:space-between; align-items:center;">
                    <span class="price">${{ $producto->precio }}</span>
                    <button class="btn-kfc">Añadir</button>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</body>
</html>