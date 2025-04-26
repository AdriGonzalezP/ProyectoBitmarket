<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BitMarket, tu tienda online</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&display=swap" >
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
     <?php
            include 'database_connect.php';
            
            $sql = "SELECT * FROM ventas";
            $result = $conn->query($sql);

            include 'database_dispose.php';
        ?>
    
    <header>
        <div class="logo">
            <img src="images/logo.jpg" alt="Logo BitMarket">
        </div>
        <nav>
            <ul class="menu-principal">
                <li>
                    <a href="#">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2">
                            <path d="M4 6h16M4 12h16M4 18h16"/>
                        </svg>
                        CATEGORÍAS
                    </a>
                    <ul class="submenu">
                        <li><a href="#">Ordenadores</a></li>
                        <li><a href="#">Componentes</a></li>
                        <li><a href="#">Periféricos</a></li>
                        <li><a href="#">Software</a></li>
                    </ul>
                </li>
                <li><a href="#">CONTACTO</a></li>
            </ul>
        </nav>
        <div class="buscador">
            <input type="search" placeholder="Buscar productos...">
            <span class="icono-lupa">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#747474" stroke-width="2">
                    <circle cx="11" cy="11" r="8"/><path d="M21 21l-4.35-4.35"/>
                </svg>
            </span>
        </div>
        <div class="acciones-usuario">
            <a href="login.html" class="btn-header">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2">
                    <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/>
                </svg>
                Iniciar sesión
            </a>
            <a href="cesta.html" class="btn-header">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2">
                    <path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"/><path d="M3 6h18"/><path d="M16 10a4 4 0 0 1-8 0"/>
                </svg>
                Mi cesta
            </a>
        </div>
    </header>
    <section class="frase-introductoria">
        <p><span class="resaltado">Calidad y experiencia</span>tecnológica,con un solo clic.</p>
    </section>
    <section class="banner-principal">
        <img src="images/banner.jpg" alt="Banner promocional">
    </section>
    <main>
        <section class="productos-destacados">
            <h2>Productos Destacados</h2>
            <div class="productos-grid">
                <div class="producto-card">
                    <img src="images/producto1.jpg" alt="Producto 1">
                    <h3>Teclado RGB</h3>
                    <p class="precio">45,00€</p>
                    <button class="btn-cesta">Añadir a la cesta</button>
                </div>
                <div class="producto-card">
                    <img src="images/producto2.png" alt="Producto 2">
                    <h3>Ratón Gaming</h3>
                    <p class="precio">25,00€</p>
                    <button class="btn-cesta">Añadir a la cesta</button>
                </div>
            </div>
        </section>
    </main>
    <footer class="footer">
        <p>&copy; 2025 BitMarket. Todos los derechos reservados.</p>
    </footer>
</body>
</html>
