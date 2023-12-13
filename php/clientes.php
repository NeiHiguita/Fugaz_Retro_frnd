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
            <input type="text" placeholder="Buscar...">
            <button type="button">Buscar</button>
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
                    <li><a href="/Fugaz_Retro/php/cliente.php">Clientes</a></li>
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
        <h1>Clientes</h1>
        <div class="search">
            <input type="text" placeholder="Buscar...">
            <span class="search-icon"><i class="bi bi-search"></i></span>
        </div>
        

        <button class="agregar" onclick="openAddModal()">Registrar clientes</button>

        <!-- Tabla para mostrar las categorías -->
        <table id="Table">
            <thead>
                <tr>
                    <th>Documento</th>
                    <th>Dirección</th>
                    <th>Teléfono</th>
                    <th>Ciudad</th>
                    <td></td>
                    <td></td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>12345678</td>
                    <td>Calle b07</td>
                    <td>5722285</td>
                    <td>Medellín</td>
                    
                    <td>
                        <button class="editar" onclick="openModal()">Editar</button>
                    </td>
                    <td>
                    <button class="eliminar">Eliminar</button>
                    </td>
                </tr>
                <tr>
                    <td>1017234740</td>
                    <td>cra24a</td>
                    <td>3014199345</td>
                    <td>Calí</td>
                    
                
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
      <!-- Modal para agregar clintes -->
      <div id="addClientModal" class="modal">
    <div class="modal-content">
        <span class="close" onclick="closeAddModal()">&times;</span>
        <h2>Registrar Cliente</h2>
        <form id="addClientForm">
            <label for="clientDocument">Documento:</label>
            <input type="text" id="clientDocument" name="clientDocument" required><br><br>
            <label for="clientAddress">Dirección:</label>
            <input type="text" id="clientAddress" name="clientAddress" required><br><br>
            <label for="clientPhone">Teléfono:</label>
            <input type="text" id="clientPhone" name="clientPhone" required><br><br>
            <label for="clientCity">Ciudad:</label>
            <input type="text" id="clientCity" name="clientCity" required><br><br>
            <button type="button" onclick="submitClient()">Guardar</button>
        </form>
    </div>
</div>


        <script src="/Fugaz_Retro/js/dashboard.js"></script>
    
</body>
</html>