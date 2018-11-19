<?php include_once ("Vistas/cabecera.php"); ?>

<div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <strong>Ingresar </strong> Usuario
                                    </div>
                                    <div class="card-body card-block">
                                        <form action="" method="post" class="" autocomplete="off">
                                            <div class="form-group">
                                                <label for="nf-email" class=" form-control-label">Nombres</label>
                                                <input type="text" id="nf-email" name= "Usuarios[nombres]" placeholder="Ingrese Nombre de Usuario.." class="form-control" required>
                                            </div>
                                             <div class="form-group">
                                                <label for="nf-email" class=" form-control-label">Apellidos</label>
                                                <input type="text" id="nf-email" name="Usuarios[apellidos]" placeholder="Ingrese Apellidos" class="form-control" required>
                                            </div>
                                             <div class="form-group">
                                                <label for="nf-email" class=" form-control-label">Tipo de Usuario</label>
                                                <select name="Usuarios[perfil];"  class="form-control" required>
                                                    <option value="">Selecci&oacute;n</option>
                                                    <option value="Administrador">Administrador</option>
                                                    <option value="Vendedor">Vendedor</option>
                                                </select>
                                            </div>
                                             <div class="form-group">
                                                <label for="nf-email" class=" form-control-label">Documento</label>
                                                <input type="number" id="nf-email" placeholder="Ingrese Numero de Documento.." class="form-control" required name="Usuarios[documento]" onkeypress="return valida(event)">
                                            </div>
                                             <div class="form-group">
                                                <label for="nf-email" class=" form-control-label">Contraseña</label>
                                                <input type="password" id="nf-email" name="Usuarios[contrasena]" placeholder="Ingrese una Contraseña" class="form-control" required>
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