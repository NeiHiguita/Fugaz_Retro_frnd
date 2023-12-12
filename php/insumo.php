<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Encabezado y enlaces a CSS y otros archivos -->
    <link rel="stylesheet" href="/Fugaz_Retro/css/dashboard.css">
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
            <li>
                <a href="#">Configuración</a>
                <ul class="submenu">
                    <li><a href="#">Roles</a></li>
                </ul>
            </li>
            <li><a href="#">Usuarios</a></li>
            <li>
                <a href="#">Compras</a>
                <ul class="submenu">
                    <li><a href="categoria.php">Categoría insumo</a></li>
                    <li><a href="insumo.php">Insumo</a></li>
                    <li><a href="proveedor.php">Proveedores</a></li>
                    <li><a href="compra.php">Compras</a></li>
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
           <a href="dashboard.php"><h2>Dashboard</h2></a> 
        </div>
        <div class="profile">
            <p>Carolina Mazo</p>
            <!-- Puedes añadir más información del perfil si lo necesitas -->
        </div>
    </div>

    <div class="content1">
        <!-- Contenido principal del dashboard -->
        <div class="search-box">
        <h1>Insumos</h1>
        <div class="search">
            <input type="text" placeholder="Buscar...">
            <span class="search-icon"><i class="bi bi-search"></i></span>
        </div>
    </div>

        <button class="agregar" onclick="openAddModal()">Agregar Insumo</button>

        <!-- Tabla para mostrar las categorías -->
        <table id="Table">
            <thead>
                <tr>
                    <th>Categoría insumo</th>
                    <th>Nombre</th>
                    <th>Unidad de medida</th>
                    <th>Descripcion</th>
                    <th>Stock</th>
                    <th>Precio unitario</th>
                    <th>Estado</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Hilos</td>
                    <td>Hilo seda</td>
                    <td>Calibre/Yardas</td>
                    <td>Hilo color negro</td>
                    <td>5</td>
                    <td>$ 8.000</td>
                    <td>Disponible</td>
                    <td>
                    <button class="editar" onclick="openModal()">Editar</button>
                    </td>
                    <td>
                    <button class="eliminar">Eliminar</button>
                    </td>
                </tr>
                <tr>
                    <td>Telas tejido de punto</td>
                    <td>Tela satín</td>
                    <td>Metros</td>
                    <td>Tela satín color rojo</td>
                    <td>30</td>
                    <td>$ 12.000</td>
                    <td>Agotado</td>
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
      <!-- Modal para agregar categorías -->
      <div id="modal" class="modal">
            <div class="modal-content">
                <span class="close" onclick="closeModal()">&times;</span>
                <h2>Registrar Categoría</h2>
                <form id="addCategoryForm">
                    <label for="categoryName">Nombre:</label>
                    <input type="text" id="categoryName" name="categoryName"><br><br>
                    <label for="categoryStatus">Estado:</label>
                    <select id="categoryStatus" name="categoryStatus">
                        <option value="Activa">Activa</option>
                        <option value="Inactiva">Inactiva</option>
                    </select><br><br>
                    <button type="button" onclick="submitCategory()">Guardar</button>
                </form>
            </div>
        </div>
        <button class="report-button">Generar Reporte</button>


        <script src="/Fugaz_Retro/js/dashboard.js"></script>
    
</body>
</html>
