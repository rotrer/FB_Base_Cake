<script type="text/javascript">
    var comunas = JSON.parse('<?php echo json_encode($comunas, JSON_HEX_QUOT | JSON_HEX_APOS ); ?>');
</script>

<div id="registro">

    <form name="data" id="data" method="post" action="<?php echo $this->Html->url(array('controller' => 'usuarios', 'action' => 'save'), true); ?>" role="form">

        <div class="container text-center">
            <h1>¡Registrate Y GANA!</h1>
            <p>Lorem ipsun dolor et...</p>

            <div class="alert alert-error error" style="margin-top:10px;">
                <p class="text-center"></p>
            </div>

        </div>

        <div class="container">

                <div class="row">

                    <div class="col-sm-12">

                        <div class="form-group">
                            <label class="text-right" for="inputNomb">Nombre</label>
                            <input type="text" name="firstname" id="firstname" value="<?php if($userData["firstname"]) echo $userData["firstname"] ?>" class="required text form-control" text="Ingresa tu nombre">
                        </div>
                        <div class="form-group">
                            <label class="text-right" for="inputApel">Apellido</label>
                            <input type="text" name="lastname" id="lastname" value="<?php if($userData["lastname"]) echo $userData["lastname"] ?>" class="required text form-control" text="Ingresa tu apellido">
                        </div>
                        <div class="form-group">
                            <label class="text-right" for="inputRut">RUT</label>
                            <input type="text" name="rut" id="rut" value="" class="required rut form-control" text="Ingresa tu rut">
                        </div>
                        <div class="form-group">
                            <label class="text-right" for="inputEmail">E-Mail</label>
                            <input type="text" name="email" id="email" value="<?php if($userData["email"]) echo $userData["email"] ?>" class="required email form-control" text="Ingresa tu email">
                        </div>
                        <div class="form-group">
                            <label class="text-right" for="inputCelu">Celular</label>
                            <input type="text" name="phone" id="phone" value="" class="required phone form-control" text="Ingresa tu celular">
                        </div>
                        <div class="form-group">
                            <label class="text-right" for="inputDirec">Dirección</label>
                            <input type="text" name="address" id="address" value="" class="required notempty form-control" text="Ingresa tu dirección">
                        </div>
                        <div class="form-group">
                            <label class="text-right" for="inputDirec">Región</label>
                            <select name="region_id" id="region_id" class="required select form-control" text="Selecciona tu región">
                                    <option value="">Selecciona</option>
                                    <?php foreach ( $regiones as $region ) { ?>
                                    <option value="<?php print $region['Regione']['id']; ?>"><?php print $region['Regione']['name']; ?></option>
                                    <?php } ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="text-right" for="inputDirec">Comuna</label>
                            <select name="comuna_id" id="comuna_id" class="required select form-control" text="Selecciona tu comuna">
                                    <option value="">Selecciona</option>
                            </select>
                        </div>

                    </div>

                </div>

                <div class="row text-center bases_concurso">
                    <div class="col-sm-12">
                        <label for="checkbox" class="checkbox-inline">
                            <input type="checkbox" class="required checkbox" text="Debes aceptar las bases." id="bases" name="bases">
                            He leído y acepto las <a target="_blank" href="#">bases</a> del concurso.
                        </label>
                        
                        <div class="clearfix"></div>    
                        
                        <a id="enviar" href="" data-dismiss="modal" aria-hidden="true" class="text-center">REGISTRARSE</a>
                    </div>
                </div>

                

        </div>

        <div id="cont_success" class="container registroOk" style="display:none;">

            <div class="row text-center">

                registro finalizado

            </div>

        </div>

    </form>
</div>