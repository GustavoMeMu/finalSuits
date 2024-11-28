<style>/* Cambiar el color de fondo de los encabezados */
#myTable thead tr {
    background-color: #4e73df; /* Azul oscuro */
    color: white; /* Texto blanco */
}

/* Modificar el estilo de las filas */
#myTable tbody tr {
    background-color: #f4f4f4; /* Fondo gris claro */
    color: #333; /* Texto gris oscuro */
}

/* Estilo para las filas al pasar el mouse */
#myTable tbody tr:hover {
    background-color: #e2e6ea; /* Fondo más claro al hacer hover */
}

/* Estilo para las celdas */
#myTable td {
    padding: 8px;
    text-align: center;
    border: 1px solid #ccc; /* Borde entre celdas */
}

/* Opcional: Cambiar el color de las acciones */
#myTable tbody td:last-child {
    background-color: #ffcccb; /* Fondo rosa claro */
}
</style>
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