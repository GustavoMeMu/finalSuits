<?php 
if (!isset($_SESSION['usuario'])) {
    header("location: login");
    exit;
}
?>

    <div class="row justify-content-center">
        <div class="col-6 p-4">
            <form action="./index.php" method="post" class="p-4">
                <h2 class="text-center mb-4">Registrar Producto</h2>
                <div class="input-group mt-3 c-input px-2 p-1 rounded-3">
                    <span class="input-group-text"><i class="bi bi-box"></i></span>
                    <input type="text" class="form-control" id="nombre" placeholder="Ingrese el nombre del producto" name="nombre_p" value="">
                </div>
                <div class="input-group mt-3 c-input px-2 p-1 rounded-3">
                    <span class="input-group-text"><i class="bi bi-currency-dollar"></i></span>
                    <input type="text" class="form-control" id="precio" placeholder="Ingrese el precio del producto" name="precio_p" value="">
                </div>
                <div class="input-group mt-3 c-input px-2 p-1 rounded-3">
                    <span class="input-group-text"><i class="bi bi-clipboard"></i></span>
                    <input type="text" class="form-control" id="cantidad" placeholder="Ingrese la cantidad del producto" name="cantidad_p" value="">
                </div>
                <div class="mt-3 d-flex justify-content-center">
                    <button type="button" id="btn-registrar-producto" class="btn btn-success fs-4 registrar_producto">Registrar producto</button>
                </div>
            </form>
        </div>
    </div>


    <table id="myTable" class="display">
                <thead>
                    <tr style="background-color:#d14ee2">
                        <th scope="col">Nombre</th>
                        <th scope="col">Precio</th>
                        <th scope="col">Cantidad</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody id="tabla_productos">
                    <tr>
                        
                    </tr>
                </tbody>
            </table>

    <div class="modal fade" id="editarUsuarioModal" tabindex="-1" aria-labelledby="editarUsuarioModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editarUsuarioModalLabel">Editar Usuario</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="editNombre" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="editNombre" placeholder="Nombre">
                    </div>
                    <div class="mb-3">
                        <label for="editApellido" class="form-label">Apellido</label>
                        <input type="text" class="form-control" id="editApellido" placeholder="Apellido">
                    </div>
                    <div class="mb-3">
                        <label for="editEmail" class="form-label">Email</label>
                        <input type="email" class="form-control" id="editEmail" placeholder="Email">
                    </div>
                    <div class="mb-3">
                        <label for="editPassword" class="form-label">Nueva Contraseña</label>
                        <input type="password" class="form-control" id="editPassword" placeholder="Contraseña Actual" value="">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-success" id="guardarCambios">Guardar Cambios</button>
                </div>
            </div>
        </div>
    </div>
