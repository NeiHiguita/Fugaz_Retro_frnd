<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - FUGAZ-RETRO</title>
    <link rel="stylesheet" href="/Fugaz_Retro/css/dashboard.css"> <!-- Enlaza tu archivo CSS -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script> <!-- Enlace a Chart.js -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
</head>

<body>
    <div class="sidebar">
        <div class="search-bar">
            <div class="logo">
                <h2>FUGAZ RETRO</h2>
            </div>
            <div class="search">
                <input type="text" placeholder="Buscar...">
                <span class="search-icon"><i class="bi bi-search"></i></span>
            </div>
        </div>
        <ul class="menu">
            <li><a href="/Fugaz_Retro/php/dashboard.php"><img class="icn" src="/Fugaz_Retro/icons/home-solid-24.png"
                        height="20" alt="" style="position: absolute;
                    margin-left: -24px;
                    margin-top: -2px;">Inicio
                </a>
            </li>
            <li>
                <a href="/Fugaz_Retro/php/dashboard.php"><img class="icn" src="/Fugaz_Retro/icons/cog-solid-84.png" height="20" alt="" style="position: absolute;
                    margin-left: -24px;
                    margin-top: -2px;">Configuración</a>
                <ul class="submenu">
                    <li><a href="/Fugaz_Retro/php/roles.php">Roles</a></li>
                </ul>
            </li>
            <li><a href="/Fugaz_Retro/php/usuario.php"><img class="icn" src="/Fugaz_Retro/icons/user-solid-84.png" height="20" alt="" style="position: absolute;
                    margin-left: -24px;
                    margin-top: -2px;">Usuarios
                </a>
            </li>
            <li>
                <a href="#">Compras</a>
                <ul class="submenu">
                    <li><a href="categoria.php">Categoría insumo</a></li>
                    <li><a href="insumo.php">Insumo</a></li>
                    <li><a href="proveedor.php">Proveedores</a></li>
                    <li><a href="compras.php">Compras</a></li>
                </ul>
            </li>
            <li>
                <a href="#">Ventas</a>
                <ul class="submenu">
                    <li><a href="/Fugaz_Retro/php/clientes.php">Clientes</a></li>
                    <li><a href="/Fugaz_Retro/php/pedido.php">Pedido</a></li>
                    <li><a href="/Fugaz_Retro/php/producto.php">Producto</a></li>
                    <li><a href="/Fugaz_Retro/php/perdida_insumo.php">Perdida insumo</a></li>
                    <li><a href="/Fugaz_Retro/php/venta.php">Ventas</a></li>
                </ul>
            </li>
        </ul>
    </div>
    <div class="topbar">
        <div class="navigation">
            <h2>Dashboard</h2>
        </div>
        <div class="profile">
            <p>Carolina Mazo</p>

            <!-- Puedes añadir más información del perfil si lo necesitas -->
        </div>
    </div>
    <div class="content">
        <!-- Contenido principal del dashboard -->
        <h1>Bienvenido al Panel de Administración</h1>

        <!-- Lienzo para el gráfico -->
        <canvas id="myChart" width="400" height="400"></canvas>
    </div>



    <script src="/Fugaz_Retro/js/dashboard.js"></script> <!-- Enlaza tu archivo JavaScript -->
    <!-- ... Otros scripts o librerías ... -->
</body>

</html>