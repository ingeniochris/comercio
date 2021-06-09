<?php include('db.php')?>
<?php include('includes/header.php')?>

<?php include('includes/messageAlert.php')?>
<div class="container pt-4 d-flex justify-content-center">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h2>Agregar Producto</h2>
                </div>
                <div class="card-body">
                    <form action="save_products.php" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <input type="text" name="nombre" class="form-control" placeholder="Nombre">
                        </div>
                        <div class="form-group">
                            <textarea type="text" name="descripcion" class="form-control"
                                placeholder="Descripcion"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="text" name="precio" class="form-control" placeholder="Precio">
                        </div>
                        <div class="form-group">
                            <input type="text" name="idProveedor" class="form-control" placeholder="Id Proveedor">
                        </div>
                        <div class="form-group">
                        <input 
                            class="form-control"
                            type="file"
                            name="uploadfile"
                            value="" />
                        </div>
                        <div class="form-group">
                            <input type="text" name="cantidad" class="form-control" placeholder="Cantidad">
                        </div>
                        <input type="submit" class="btn btn-success btn-block " name="save_product" value="Guardar Producto">
                    </form>
                </div>
            </div>
        </div>


        
    </div>
</div>


<?php include('includes/footer.php')?>