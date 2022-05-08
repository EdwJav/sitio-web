<?php include("../template/cabecera.php") ?>
<?php 
$txtID=(isset($_POST['txtID'])) ? $_POST['txtID']:"";
$textNombre=(isset($_POST['textNombre'])) ? $_POST['textNombre']:"";
$Imagen=(isset($_FILES['Imagen']['name'])) ? $_FILES['Imagen']['name']:"";
$accion=(isset($_POST['accion'])) ? $_POST['accion']:"";
echo $accion."<br/>"; 
echo $txtID."<br/>";
echo $textNombre."<br/>";
echo $Imagen."<br/>";

switch ($accion){
    case 'agregar':
        echo "presionado el boton agregar";
        break;
    case 'Modificar':
        echo "presionado modificar";
        break;
    case 'cancelar':
        echo "presionado cancelar";
        break;
}
?>
    <div class="col-md-5">
        <div class="card">
            <div class="card-header">
                Datos de libros
            </div>
            <div class="card-body">
                <form method="POST" enctype="multipart/form-data">  
                    <div class = "form-group">
                        <label for="txtID">ID</label>
                        <input type="text" class="form-control" name="txtID" id="txtID" placeholder="ID">
                    </div>

                    <div class = "form-group">
                        <label for="textNombre">Nombre</label>
                        <input type="text" class="form-control" name="textNombre" id="textNombre" placeholder="Nombre">
                    </div>

                    <div class = "form-group">
                        <label for="Imagen">Imagen</label>
                        <input type="file" class="form-control" name="Imagen" id="Imagen" placeholder="Imagen">
                    </div>
                    

                    <div class="btn-group" role="group" aria-label="">
                        <button type="button" name="accion" value="agregar" class="btn btn-success">Agregar</button>
                        <button type="button" name="accion" value="Modificar" class="btn btn-warning">Modificar</button>
                        <button type="button" name="accion" value="Cancelar" class="btn btn-info">Cancelar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="col-md-7">
        <table class="table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Imagen</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>2</td>
                    <td>aprende como aprender</td>
                    <td>imagen</td>
                    <td>seleccionar! borrar</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>fisica 1</td>
                    <td>imagen</td>
                    <td>seleccionar! borrar</td>
                </tr>
            </tbody>
        </table>
    </div>
<?php include("../template/pie.php") ?>