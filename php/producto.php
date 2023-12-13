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
        <h1>Productos</h1>
        <div class="search">
            <input type="text" placeholder="Buscar...">
            <span class="search-icon"><i class="bi bi-search"></i></span>
        </div>
        

        <button class="agregar" onclick="openAddModal()">Registrar productos</button>

        <!-- Tabla para mostrar las categorías -->
        <table id="Table">
            <thead>
                <tr>
                    <th>Nombre del producto</th>
                    <th>Talla</th>
                    <th>Color</th>
                    <th>Foto</th>
                    <td>Precio de la venta</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Camisa</td>
                    <td>M</td>
                    <td>Negra</td>
                    <td>Foto</td>
                    <td>80.000</td>
                    
                    <td>
                        <button class="editar" onclick="openModal()">Editar</button>
                    </td>
                    <td>
                    <button class="eliminar">Eliminar</button>
                    </td>
                </tr>
                <tr>
                   
                    <td>Jean</td>
                    <td>L</td>
                    <td>Blanco</td>
                    <td>Foto</td>
                    <td>100.000</td>
                    
                
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
      <!-- Modal para agregar productos -->
<div id="addProductModal" class="modal">
    <div class="modal-content">
        <span class="close" onclick="closeAddProductModal()">&times;</span>
        <h2>Registrar Producto</h2>
        <form id="addProductForm">
            <label for="productName">Nombre del Producto:</label>
            <input type="text" id="productName" name="productName" required><br><br>
            <label for="productSize">Talla:</label>
            <input type="text" id="productSize" name="productSize" required><br><br>
            <label for="productColor">Color:</label>
            <input type="text" id="productColor" name="productColor" required><br><br>
            <label for="productPhoto">Foto:</label>
            <input type="text" id="productPhoto" name="productPhoto" required><br><br>
            <label for="productPrice">Precio de la Venta:</label>
            <input type="text" id="productPrice" name="productPrice" required><br><br>
            <button type="button" onclick="submitProduct()">Guardar</button>
        </form>
    </div>
</div>

</div>

</div>


        <script src="/Fugaz_Retro/js/dashboard.js"></script>
    
</body>
</html>