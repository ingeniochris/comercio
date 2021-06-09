<?php
function validar($nombre,$descripcion,$precio,$idProveedor,$uploadfile,$cantidad){
    $validation=false;
    if(trim($nombre)=== ''|| trim($descripcion)===''|| trim($precio)===''
    || trim($idProveedor)===''|| trim($cantidad)===''
    ){
        return $validation =true;
    }
    return $validation=false;
}

  function newTask($nombre,$descripcion,$precio,$idProveedor,$uploadfile,$cantidad) {
    
    $filename = $_FILES["uploadfile"]["name"];
    $tempname = $_FILES["uploadfile"]["tmp_name"];   
        $folder = "image/".$filename;

    include('db.php');
    if(validar($nombre,$descripcion,$precio,$idProveedor,$uploadfile,$cantidad) == 1){
    $_SESSION['message'] = 'Llene todos los campos';
    $_SESSION['message_type'] = 'danger';
   return  header('Location: addProducts.php'); 
   }
    $query = "INSERT INTO productos(nombre, descripcion,precio,idProveedor,img,cantidad) VALUES ('$nombre', '$descripcion', '$precio', '$idProveedor', '$filename', '$cantidad')";
    $resultQuery = mysqli_query($conn, $query);
    if (move_uploaded_file($tempname, $folder))  {
        $msg = "Image uploaded successfully";
    }else{
        $msg = "Failed to upload image";
    }
    if(!$resultQuery && move_uploaded_file($tempname, $folder)){
        die('Query failed');
        $_SESSION['message'] = 'Imagen no cargo';
    }
    $_SESSION['message'] = 'Tarea guardada';
    $_SESSION['message_type'] = 'success';
   return  header('Location: addProducts.php');
   
}; 

//verificar si llega los datos a save_task.php
if(isset($_POST['save_product'])){
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $precio = $_POST['precio']; 
    $idProveedor = $_POST['idProveedor']; 
    $uploadfile = $_POST['uploadfile']; 
    $cantidad = $_POST['descripcion'];  
    newTask($nombre,$descripcion,$precio,$idProveedor,$uploadfile,$cantidad);
}
?>