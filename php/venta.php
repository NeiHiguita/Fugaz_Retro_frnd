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
                    <li><a href="/Fugaz_Retro/php/clientes.php">Clientes</a></li>
                    <li><a href="/Fugaz_Retro/php/pedido.php">Pedido</a></li>
                    <li><a href="/Fugaz_Retro/php/producto.php">Producto</a></li>
                    <li><a href="#">Perdida insumo</a></li>
                    <li><a href="/Fugaz_Retro/php/venta.php">Ventas</a></li>
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
        <h1>Ventas</h1>
        <div class="search">
            <input type="text" placeholder="Buscar...">
            <span class="search-icon"><i class="bi bi-search"></i></span>
        </div>
        

        <button class="agregar" onclick="openAddModal()">Registrar venta</button>

        <!-- Tabla para mostrar las categorías -->
        <table id="Table">
            <thead>
                <tr>
                    <th>Subtoal</th>
                    <th>Iva</th>
                    <th>Descuento</th>
                    <th>Total venta</th>
                    
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>92.000</td>
                    <td>19%</td>
                    <td>Ninguno</td>
                    <td>100.000</td>
                    
                    <td>
                        <button class="editar" onclick="openModal()">Editar</button>
                    </td>
                    <td>
                    <button class="eliminar">Eliminar</button>
                    </td>
                </tr>
                <tr>
                    <td>120.000</td>
                    <td>19%</td>
                    <td>Ninguno</td>
                    <td>120.000</td>
                    
                
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
    <!-- Modal para agregar ventas -->
<div id="addVentaModal" class="modal">
    <div class="modal-content">
        <span class="close" onclick="closeAddVentaModal()">&times;</span>
        <h2>Registrar Venta</h2>
        <form id="addVentaForm">
            <label for="ventaSubtotal">Subtotal:</label>
            <input type="text" id="ventaSubtotal" name="ventaSubtotal" required><br><br>
            <label for="ventaIva">Iva:</label>
            <input type="text" id="ventaIva" name="ventaIva" required><br><br>
            <label for="ventaDescuento">Descuento:</label>
            <input type="text" id="ventaDescuento" name="ventaDescuento" required><br><br>
            <label for="ventaTotal">Total Venta:</label>
            <input type="text" id="ventaTotal" name="ventaTotal" required><br><br>
            <button type="button" onclick="submitVenta()">Guardar</button>
        </form>
    </div>
</div>

</div>

</div>


        <script src="/Fugaz_Retro/js/dashboard.js"></script>
    
</body>
</html>