<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/Fugaz_Retro/css/dashboard.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="js/dashboard-scripts.js"></script>
    <title>Dashboard - FUGAZ-RETRO</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="sidebar" style="
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
        <ul class="menu" style="
        list-style: none;
        padding: 0;">
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
            <li><a href="#"><img class="icn" src="/Fugaz_Retro/icons/user-solid-84.png" height="20" alt="" style="position: absolute;
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
    <div class="content" style="margin-top:10px;">
        <!-- Contenido específico para la gestión de roles -->
        <h1>Gestión de Usuarios</h1>
        <!-- Aquí se mostrarían los datos y formularios relacionados con roles -->
    </div>
    <style>
        .tab {
            margin-top: -50px;
            margin-left: 320px;
        }
    </style>
<div class="tab">
        <button class="btn btn-primary agregar" data-bs-toggle="modal" data-bs-target="#modal">Agregar Usuario</button>

        <!-- Modal -->
        <div class="modal fade" id="modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Agregar Usuario</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form id="rolForm" action="usuario.php" method="post">
                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre de Usuario:</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" required>
                    </div>

                    <div class="mb-3">
                        <label for="correo" class="form-label">Correo:</label>
                        <input type="email" class="form-control" id="correo" name="correo" required>
                    </div>

                    <div class="mb-3">
                        <label for="contrasena" class="form-label">Contraseña:</label>
                        <input type="password" class="form-control" id="contrasena" name="contrasena" required>
                    </div>

                    <div class="mb-3">
                        <label for="estado" class="form-label">Estado:</label>
                        <select class="form-select" id="estado" name="estado" required>
                            <option value="Activo">Activo</option>
                            <option value="Inactivo">Inactivo</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="fecha_registro" class="form-label">Fecha de Registro:</label>
                        <input type="date" class="form-control" id="fecha_registro" name="fecha_registro" required>
                    </div>

                    <button type="submit" class="btn btn-primary">Agregar Usuario</button>
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
                    <th>Nombre de Usuario</th>
                    <th>Correo</th>
                    <th>Contraseña</th>
                    <th>Estado</th>
                    <th>Fecha de registro</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Neider Higuita</td>
                    <td>neiderhiguita13@gmail.com</td>
                    <td>********</td>
                    <td>Activo</td>
                    <td>13/12/2023</td>
                    <td>
                        <button class="editar" onclick="openModal()">Editar</button>
                    </td>
                </tr>
                <tr>
                    <td>Sara Mesa</td>
                    <td>sarlmesa@misena.com</td>
                    <td>********</td>
                    <td>Inactivo</td>
                    <td>14/12/2023</td>
                    <td>
                        <button class="editar" onclick="openModal()">Editar</button>
                    </td>
                </tr>
                <tr>
                    <td>Carolina Mazo</td>
                    <td>mazocaro14@gmail.com</td>
                    <td>********</td>
                    <td>Activo</td>
                    <td>14/12/2023</td>
                    <td>
                        <button class="editar" onclick="openModal()">Editar</button>
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

            const form = document.getElementById('rolForm');
            form.addEventListener('submit', function (event) {
                event.preventDefault();
                showAlert('Usuario agregado con éxito!');
                closeModal();
            });
        });

        function openModal() {
            document.getElementById('modal').style.display = 'flex';
        }

        function closeModal() {
            document.getElementById('modal').style.display = 'none';
        }

        function showAlert(message) {
            alert(message);
            // Puedes personalizar el tipo de alerta (puede ser una alerta de Bootstrap, SweetAlert, etc.)
        }

    </script>

</body>

</html>