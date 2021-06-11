<?php include('db.php')?>
<?php include('includes/header.php')?>

<?php include('includes/messageAlert.php')?>

<div class="container pt-4 d-flex justify-content-center">

<div class="col-md-12">
            <table class="table ">
            <div class="title">
                    <h2>Productos</h2>
                </div>
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Descripcion</th>
                        <th scope="col">Precio</th>
                        <th scope="col">Id Provedor</th>
                        <th scope="col">Imagen</th>
                        <th scope="col">Existencias</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                            $query = 'SELECT * FROM productos';
                            $result_task = mysqli_query($conn, $query);
                            while($row = mysqli_fetch_array($result_task)){ ?>
                    <tr>

                        <th><button type="button" class="btn btn-outline-info" data-container="body"
                                data-toggle="popover" data-placement="top"
                                data-content="Creada el: <?php echo $row['current']?>">
                                <?php echo $row['idProducto']?>
                            </button>
                        </th>
                        <td><?php echo $row['nombre']?></td>
                        <td><?php echo $row['descripcion']?></td>
                        <td><?php echo $row['precio']?></td>
                        <td><?php echo $row['idProveedor']?></td>
                        <td><img class="container-sm"  src="image/<?php echo $row['img']; ?>"></td>
                        <td><?php echo $row['cantidad']?></td>
                            <!-- <td>
                                <a class="btn btn-light" href="edit.php?id=<?php echo $row['idProducto']?>"><img
                                        src="https://img.icons8.com/cute-clipart/25/000000/edit.png"></a>
                                <a class="btn btn-light" href="delete_task.php?id=<?php echo $row['idProducto']?>"><img
                                        src="https://img.icons8.com/cute-clipart/25/000000/delete-forever.png"></a>
                            </td> -->
                    </tr>
                    <?php  }?>
                </tbody>
            </table>
        </div>
</div>

        <?php include('includes/footer.php')?>