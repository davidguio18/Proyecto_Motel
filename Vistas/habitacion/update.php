<?php include_once ("Vistas/cabecera.php"); ?>

<div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row" style="margin-left: 60px;">
                            <div class="col-lg-11">
                                <div class="card">
                                    <div class="card-header">
                                        <strong>Actualizar</strong> Habitaciones
                                    </div>
                                    <div class="card-body card-block">
                                        <form action="" method="post" class="">
                                            <div class="form-group">
                                                <label for="nf-email" class="form-control-label">N&uacute;mero Habitaci&oacute;n</label>
                                                <input type="text" id="nf-email" name= "habitaciones[numero]" placeholder="Ingrese N&uacute;mero de Habitaci&oacute;n.." class="form-control" required onkeypress="return valida(event)" minlength="3" maxlength="3" value="<?= $habitacion->numero?>">
                                            </div>
                                             <div class="form-group">
                                                <label for="nf-email" class=" form-control-label">Tipo</label>
                                                <select  name="habitaciones[tipo]" class="form-control" required>
                                                <option value="Premium" <?= ($habitacion->tipo=="Premium")? 'selected="selected"' : ''?>>Premium</option>
                                                  <option value = "Basica" <?= ($habitacion->tipo=="Basica")? 'selected="selected"' : ''?>>Basica</option>
                                                  </select>
                                                </select>
                                            </div>
                                             <div class="form-group">
                                                <label for="nf-email" class="form-control-label">Valor</label>
                                                <input type="text" id="nf-email" name="habitaciones[valor_noche]" placeholder="Valor Habitación.." class="form-control" required onkeypress="return valida(event)" value="<?= $habitacion->valor_noche?>">
                                            </div>
                                             <div class="form-group">
                                                <label for="nf-email" class=" form-control-label">Estado</label>
                                                <select name="habitaciones[estado]" class="form-control" required>
                                                     <option value="">Seleccione</option>
                                                     <option value="Activo" <?= ($habitacion->estado=="Activo")? 'selected="selected"' : ''?>>Activo</option>
                                                     <option value = "Inactivo" <?= ($habitacion->estado=="Inactivo")? 'selected="selected"' : ''?>>Inactivo</option>
                                                 </select>
                                            </div>
                                             <div class="card-footer">
                                                 <button type="submit" class="btn btn-primary btn-sm">
                                                    <i class="fa fa-dot-circle-o"></i> Editar
                                                </button>
                                                <button type="reset" class="btn btn-danger btn-sm">
                                                    <i class="fa fa-ban"></i> Limpiar
                                                </button>
                                    </div>
                                        </form>

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
</script>
                                    </div>
                                    
                                </div>
                               
                                
                                </div>
                            </div>

                            </div>
                        </div>
 <?php require_once("Vistas/footer.php"); ?>