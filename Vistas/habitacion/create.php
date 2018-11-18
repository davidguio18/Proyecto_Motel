<?php include_once ("Vistas/cabecera.php"); ?>

<div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-6">
                                
                                <div class="card">
                                    <div class="card-header">
                                        <strong>Ingresar </strong> Habitaciones
                                    </div>
                                    <div class="card-body card-block">
                                        <form action="" method="post" class="" autocomplete="off">
                                            <div class="form-group">
                                                <label for="nf-email" class=" form-control-label">N&uacute;mero</label>
                                                <input type="text" id="nf-email" name= "habitaciones[numero]" placeholder="Ingrese N&uacute;mero de Hatación.." class="form-control" required onkeypress="return valida(event)" required  minlength="3" maxlength="3">
                                            </div>
                                             <div class="form-group">
                                                <label for="nf-email" class=" form-control-label">Tipo</label>
                                                <select  name="habitaciones[tipo]">
                                                    <option value="">Seleccione</option>
                                                    <option value="Premium">Premium</option>
                                                    <option value="Basica">Basica</option>
                                                </select>
                                            </div>
                                            
                                             <div class="form-group">
                                                <label for="nf-email" class=" form-control-label">Valor</label>
                                                <input type="text" id="nf-email" name="habitaciones[valor_noche]" placeholder="Ingrese Valor de Habitación.." class="form-control" required onkeypress="return valida(event)">
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