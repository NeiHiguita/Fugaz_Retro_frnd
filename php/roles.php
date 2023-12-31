<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/Fugaz_Retro/css/dashboard.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="js/dashboard-scripts.js"></script>
    <title>Dashboard - FUGAZ-RETRO</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
</head>

<body>
    <div class="sidebar"style="
    position: fixed;
    top: 0;
    left: 0;
    width: 290px;
    height: 100%;
    background-color: #874e4c;
    color: #000;
    padding: 20px;">
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
                <a href="#"><img class="icn" src="/Fugaz_Retro/icons/cog-solid-84.png" height="20" alt="" style="position: absolute;
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
                    <li><a href="#">Clientes</a></li>
                    <li><a href="#">Pedido</a></li>
                    <li><a href="#">Producto</a></li>
                    <li><a href="#">Perdida insumo</a></li>
                    <li><a href="#">Ventas</a></li>
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
    <div class="content"style="margin-top:10px;">
        <!-- Contenido específico para la gestión de roles -->
        <h1>Gestión de Roles</h1>
        <!-- Aquí se mostrarían los datos y formularios relacionados con roles -->
    </div>
    <style>
        .tab{
            margin-top: -50px;
            margin-left: 320px;
        }
    </style>
<div class="tab">
        <button class="btn btn-primary agregar" data-bs-toggle="modal" data-bs-target="#modal">Agregar Rol</button>

        <!-- Modal -->
        <div class="modal fade" id="modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Agregar Rol</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form id="rolForm" action="roles.php" method="post">
                            <div class="mb-3">
                                <label for="nombre" class="form-label">Nombre:</label>
                                <input type="text" class="form-control" id="nombre" name="nombre" required>
                            </div>

                            <div class="mb-3">
                                <label for="permisos" class="form-label">Permisos:</label>
                                <input type="text" class="form-control" id="permisos" name="permisos" required>
                            </div>

                            <div class="mb-3">
                                <label for="estado" class="form-label">Estado:</label>
                                <select class="form-select" id="estado" name="estado" required>
                                    <option value="Activo">Activo</option>
                                    <option value="Inactivo">Inactivo</option>
                                </select>
                            </div>

                            <button type="submit" class="btn btn-primary">Agregar Rol</button>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>
      <!-- Tabla para mostrar las categorías -->
        <table id="Table">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Permisos</th>
                    <th>Estado</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Administrador</td>
                    <td>Asignar permisos</td>
                    <td>Activo</td>
                    <td>
                        <button class="editar" onclick="openModal()">Editar</button>
                    </td>
                    <td>
                        <button class="eliminar">Eliminar</button>
                    </td>
                </tr>
                <tr>
                    <td>Cliente</td>
                    <td>añadir productos</td>
                    <td>Inactivo</td>
                    <td>
                        <button class="editar" onclick="openModal()">Editar</button>
                    </td>
                    <td>
                        <button class="eliminar">Eliminar</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <button class="report-button">Generar Reporte</button>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            closeModal();
        });

        function openModal() {
            document.getElementById('modal').style.display = 'block';
        }

        function closeModal() {
            document.getElementById('modal').style.display = 'none';
        }
    </script>
</body>
</html>