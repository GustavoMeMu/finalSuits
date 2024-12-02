<?php
if (!isset($_SESSION)) {
    session_start();
}
?>
<style>
    nav {
        background-color: grey;
        padding: 1rem;
        display: flex;
        justify-content: space-between;
        align-items: center;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        border-radius: 5px;
        color: #333;
        flex-wrap: wrap;
        /* Permite que los elementos se acomoden en varias filas */
    }

    .text-center {
        display: flex;
        flex-direction: column;
        align-items: center;
        flex-grow: 1;
        margin-bottom: 0.5rem;
        /* Espacio entre elementos en pantallas pequeñas */
    }

    .text-center h3 {
        margin: 0;
        color: white;
        text-align: center;
    }

    .button-container {
        display: flex;
        gap: 0.5rem;
        flex-wrap: wrap;
        /* Permite que los botones se acomoden en varias filas */
        justify-content: center;
        /* Centra los botones en pantallas pequeñas */
    }

    /* Ajustes adicionales para pantallas pequeñas */
    @media (max-width: 576px) {
        nav {
            flex-direction: column;
            align-items: center;
            text-align: center;
        }

        .text-center h3 {
            margin-bottom: 0.5rem;
        }

        .button-container {
            width: 100%;
            justify-content: center;
        }
    }
</style>

<nav>
    <button class="btn btn-warning me-2" id="btn-inicio" onclick="window.location.href='inicio'">
        Inicio
    </button>
    <div class="text-center">
        <h3 class="m-0">Bienvenido</h3>
    </div>
    <div>
        <?php if (isset($_SESSION['usuario'])): ?>
            <p class="text-white" style="margin-left: -200%; font-size:300%;"><?= $_SESSION['usuario']['nombre'] ?></p>
        <?php endif; ?>
    </div>
    <?php if (!isset($_SESSION['usuario'])): ?>
        <button class="btn btn-warning me-2" id="btn-login" onclick="window.location.href='login'">
            Login
        </button>
    <?php endif; ?>
    <div class="button-container">
        <?php if (isset($_SESSION['usuario'])): ?>
            <?php if ($_SESSION['usuario']['email'] === 'admin@admin.com'): ?>
                <button class="btn btn-warning me-2" id="btn-inventario" onclick="window.location.href='inventario'">
                    Boletaje proximo evento
                </button>
            <?php else: ?>
                <button class="btn btn-warning me-2" id="btn-fechas" onclick="window.location.href='fechas_proximas'">
                    Boletaje proximo evento
                </button>
                <button class="btn btn-secondary me-2" id="btn-edita" data-bs-toggle="modal" data-bs-target="#editarUsuarioModal">
                    Editar Sesión
                </button>
            <?php endif; ?>
            </button>
            <button class="btn btn-danger" id="btn-cerrar">
                Cerrar sesión
            </button>
        <?php endif; ?>
    </div>
</nav>

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