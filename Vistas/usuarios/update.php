<?php include_once ("Vistas/cabecera.php"); ?>

<div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-6">
                                
                                <div class="card">
                                    <div class="card-header">
                                        <strong>Actualizar</strong> Usuario  <?= $usuario->nombres ?>
                                    </div>
                                    <div class="card-body card-block">
                                        <form action="" method="post" class="" autocomplete="off">
                                            <div class="form-group">
                                                <label for="nf-email" class=" form-control-label">Nombres</label>
                                                <input type="text" id="nf-email" name= "Usuarios[nombres]" placeholder="Ingrese Nombre de Usuario.." class="form-control"  value="<?= $usuario->nombres ?>" >
                                            </div>
                                             <div class="form-group">
                                                <label for="nf-email" class=" form-control-label">Apellidos</label>
                                                <input type="text" id="nf-email" name="Usuarios[apellidos]" placeholder="Ingrese Marca de Producto.." class="form-control"  value="<?= $usuario->apellidos ?>" >
                                            </div>
                                             <div class="form-group">
                                                <label for="nf-email" class=" form-control-label">Tipo de Usuario</label>
                                               <select name="Usuarios[perfil]" required>
                                                     <option value="Administrador" <?= ($usuario->perfil=="Administrador") ? 'selected="selected"' : '' ?>> Administrador </option>
                                                      <option value="Vendedor"<?= ($usuario->perfil=="Vendedor") ? 'selected="selected"' : '' ?>> Vendedor </option>
                                               </select>
                                            </div>
                                             <div class="form-group">
                                                <label for="nf-email" class=" form-control-label">Documento</label>
                                                <input type="number" id="nf-email" placeholder="Ingrese Numero de Documento.." class="form-control"  name="Usuarios[documento]" onkeypress="return valida(event)"  value="<?= $usuario->documento ?>">
                                            </div>

                                             <div class="form-group">
                                                <label for="nf-email" class=" form-control-label">Contraseña</label>
                                                <input type="password" id="nf-email" name="Usuarios[contrasena]" placeholder="Ingrese Marca de Producto.." class="form-control" value="<?= $usuario->contrasena ?>" >
                                            </div>

                                             <div class="card-footer">
                                                 <button type="submit" class="btn btn-primary btn-sm">
                                                    <i class="fa fa-dot-circle-o"></i> Actualizar
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