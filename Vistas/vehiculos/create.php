<?php
    if ($_SESSION["Perfil"] == "Administrador"){
        include_once ("Vistas/cabecera.php");
    }else if ($_SESSION["Perfil"] == "Vendedor"){
        include_once ("Vistas/cabeceraVendedor.php");
    }
?>

<div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row" style="margin-left: 60px;">
                            <div class="col-lg-11">
                            <div class="col-lg-12">
                                
                                <div class="card">
                                    <div class="card-header">
                                        <strong>Registrar </strong> Vehiculo
                                    </div>
                                    <div class="card-body card-block">
                                        <form action="" method="post" class="">
                                            <div class="form-group">
                                                <label for="nf-email" class=" form-control-label">Placa</label>
                                              <input type="text" id="nf-email" name="Vehiculos[placa]"  placeholder="Ingrese la placa" class="form-control" required  minlength="3" maxlength="6">
                                            </div>
                                             <div class="form-group">
                                                <label for="nf-email" class=" form-control-label">Marca</label>
                                                <input type="text" id="nf-email" name="Vehiculos[marca]"  placeholder="Ingrese la marca " class="form-control"  required  minlength="3" maxlength="20">
                                            </div>
                                            <div class="form-group">
                                                <label for="nf-email" class=" form-control-label">Servicio</label>
                                                <select name="Vehiculos[servicio]" required class="form-control">
                                                     <option value="">Seleccione</option>
                                                     <option value="Particular" >Particular</option>
                                                     <option value="Publico" >Publico</option>
                                                 </select>
                                            </div>
                                             <div class="form-group">
                                                <label for="nf-email" class=" form-control-label">Registro</label>
                                                 <input type="date" id="nf-email" name="Vehiculos[registro]" placeholder="Ingrese el registro" class="form-control" required onkeypress="return valida(event)">

                                            </div>
                                            
                                            </div>
                                             
                                             
                                             <div class="card-footer">
                                                 <button type="submit" class="btn btn-primary btn-sm">
                                                    <i class="fa fa-dot-circle-o"></i> Registrar
                                                </button>
                                                <button type="reset" class="btn btn-danger btn-sm">
                                                    <i class="fa fa-ban"></i> Limpiar
                                                </button>
                                            </div>
                                         
                                        </form>

 <?php 
          if(isset($_GET["error"])){
        echo "<h4>Habitacion ya registrada</h4>";
         }



 ?>


<script>
function valida(e){
    tecla = (document.all) ? e.keyCode : e.which;

    //Tecla de retroceso para borrar, siempre la permite
    if (tecla==8){
        return true;
    }
        
    // Patron de entrada, en este caso solo acepta numeros
    patron =/[0-9]/;
    tecla_final = String.fromCharCode(tecla);
    return patron.test(tecla_final);
}

function Validacion(e){
    if($("#id option:selected").val() == 0){
        alert("Debe Seleccionar una categoria");
        return false;
    }
}
</script>
                                    </div>
                                    
                                </div>
                               
                                
                                </div>
                            </div>

                            </div>
                        </div>
 <?php require_once("Vistas/footer.php"); ?>