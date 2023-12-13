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
        <h1>Pedidos</h1>
        <div class="search">
            <input type="text" placeholder="Buscar...">
            <span class="search-icon"><i class="bi bi-search"></i></span>
        </div>
        

        <button class="agregar" onclick="openAddModal()">Registrar pedidos</button>

        <!-- Tabla para mostrar las categorías -->
        <table id="Table">
            <thead>
                <tr>
                    <th>Estado</th>
                    <th>Metodo de pago</th>
                    <th>Fecha del pedido</th>
                    <th>Fecha de entrega</th>
                    <td>Costo pedido</td>
                    <td>Costo de envio</td>
                    <td>Subtotal</td>
                    <td>Iva</td>
                    <td>Descuento</td>
                    <td>Comprobante de pago</td>
                    <td>Total del pedido</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Enviado</td>
                    <td>Transferencia</td>
                    <td>10/12/2023</td>
                    <td>15/12/2023</td>
                    <td>80.000</td>
                    <td>12.000</td>
                    <td>92.000</td>
                    <td>19%</td>
                    <td>Ninguno</td>
                    <td>Foto</td>
                    <td>92.000</td>
                    
                    <td>
                        <button class="editar" onclick="openModal()">Editar</button>
                    </td>
                    <td>
                    <button class="eliminar">Eliminar</button>
                    </td>
                </tr>
                <tr>
                    <td>Pendiente</td>
                    <td>Contraentrega</td>
                    <td>10/12/2023</td>
                    <td>15/12/2023</td>
                    <td>90.000</td>
                    <td>12.000</td>
                    <td>102.000</td>
                    <td>19%</td>
                    <td>Ninguno</td>
                    <td>Foto</td>
                    <td>102.000</td>
                    
                
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
     
     <!-- Modal para agregar pedidos -->
    <!-- Modal para agregar pedidos -->
<div id="addPedidoModal" class="modal">
    <div class="modal-content">
        <span class="close" onclick="closeAddPedidoModal()">&times;</span>
        <h2>Registrar Pedido</h2>
        <form id="addPedidoForm">
            <label for="pedidoEstado">Estado:</label>
            <select id="pedidoEstado" name="pedidoEstado" required>
                <option value="Enviado">Enviado</option>
                <option value="Pendiente">Pendiente</option>
                <option value="En proceso">En proceso</option>
                <!-- Agrega más opciones si es necesario -->
            </select><br><br>

            <label for="pedidoMetodoPago">Método de Pago:</label>
            <select id="pedidoMetodoPago" name="pedidoMetodoPago" required>
                <option value="Transferencia">Daviplata</option>
                <option value="Contraentrega">Bancolombia</option>
                <option value="Nequi">Nequi</option>
                
            </select><br><br>

            <label for="pedidoFechaPedido">Fecha del Pedido:</label>
            <input type="date" id="pedidoFechaPedido" name="pedidoFechaPedido" required><br><br>
            <label for="pedidoFechaEntrega">Fecha de Entrega:</label>
            <input type="date" id="pedidoFechaEntrega" name="pedidoFechaEntrega" required><br><br>
            <label for="pedidoCostoPedido">Costo del Pedido:</label>
            <input type="text" id="pedidoCostoPedido" name="pedidoCostoPedido" required><br><br>
            <label for="pedidoCostoEnvio">Costo de Envío:</label>
            <input type="text" id="pedidoCostoEnvio" name="pedidoCostoEnvio" required><br><br>
            <label for="pedidoSubtotal">Subtotal:</label>
            <input type="text" id="pedidoSubtotal" name="pedidoSubtotal" required><br><br>
            <label for="pedidoIva">Iva:</label>
            <input type="text" id="pedidoIva" name="pedidoIva" required><br><br>
            <label for="pedidoDescuento">Descuento:</label>
            <input type="text" id="pedidoDescuento" name="pedidoDescuento" required><br><br>
            <label for="pedidoComprobantePago">Comprobante de Pago:</label>
            <input type="file" id="pedidoComprobantePago" name="pedidoComprobantePago" accept="image/*"><br><br>
            <label for="pedidoTotal">Total del Pedido:</label>
            <input type="text" id="pedidoTotal" name="pedidoTotal" required><br><br>
            <button type="button" onclick="submitPedido()">Guardar</button>
        </form>
    </div>
</div>

</div>

</div>

</div>

        <script src="/Fugaz_Retro/js/dashboard.js"></script>
    
</body>
</html>