<?php
include('db.php');
include('save_products.php');

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $query = "SELECT * FROM task WHERE id = $id";
    $result = mysqli_query($conn, $query);

  

     if(mysqli_num_rows($result) == 1){
        $row = mysqli_fetch_array($result);
        $title = $row['title'];
        $description = $row['description'];
        
    } 

}

 if(isset($_POST['update'])){
     $title = $_POST['title'];
     $description = $_POST['description'];
     if(validar($title,$description) == 1){
        $_SESSION['message'] = 'Llene todos los campos';
        $_SESSION['message_type'] = 'danger';
       return  header('Location: index.php'); 
       }
     $query = "UPDATE task SET title='$title' , description='$description' WHERE id= $id ";
     $result = mysqli_query($conn,$query);

     if(!$result){
         die('error en actualizar');
     }

     $_SESSION['message'] = 'Tarea actualizada';
     $_SESSION['message_type'] = 'info';
    return header('Location:index.php');
 }
?>


<?php include('includes/header.php')?>

<div class="container pt-4 d-flex justify-content-center">
    <div class="row">
        <div class="col-md-12 mx-auto">
            <div class="card">
                <div class="card-header">
                    <h2>Editar tarea</h2>
                </div>
                <div class="card-body">
                    <form action="edit.php?id=<?php echo $_GET['id'] ?>" method="POST">
                        <div class="form-group">
                            <input type="text" name="title" value="<?php echo $title;?>" class="form-control"
                                placeholder="Actualiza titulo">
                        </div>
                        <div class="form-group">
                            <textarea type="text" row="2" name="description" class="form-control"
                                placeholder="Actualiza la descripción"><?php echo $description;?></textarea>
                        </div>
                        <button type="submit" class="btn btn-success" name="update">Actualizar</button>
                    </form>
                    <form  action="edit.php?id=<?php echo $_GET['idProducto'] ?>" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <input type="text" name="nombre" class="form-control" value="<?php echo $nombre;?>" placeholder="Actualiza nombre">
                        </div>
                        <div class="form-group">
                            <textarea type="text" name="descripcion" class="form-control"
                            value="<?php echo $descripcion;?>" placeholder="Actualiza descripcion"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="text" name="precio" class="form-control" value="<?php echo $precio;?>" placeholder="Actualiza precio">
                        </div>
                        <div class="form-group">
                            <input type="text" name="idProveedor" class="form-control" value="<?php echo $idProveedor;?>" placeholder="Actualiza Id Proveedor">
                        </div>
                        <div class="form-group">
                        <input 
                            class="form-control"
                            type="file"
                            name="uploadfile"
                            value="<?php echo $uploadfile;?>" />
                        </div>
                        <div class="form-group">
                            <input type="text" name="cantidad" class="form-control" value="<?php echo $cantidad;?>" placeholder="Actualiza cantidad">
                        </div>
                        <input type="submit" class="btn btn-success btn-block " name="update" value="Editar Producto">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<?php include('includes/footer.php')?>