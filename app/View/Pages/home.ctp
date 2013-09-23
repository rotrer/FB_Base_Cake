<script type="text/javascript">
    var comunas = JSON.parse('<?php echo json_encode($comunas, JSON_HEX_QUOT | JSON_HEX_APOS ); ?>');
</script>
<div id="registro" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

    <form name="data" id="data" method="post" action="" class="form-horizontal">

            <div class="modal-header text-center">
                    <h1 id="myModalLabel">¡Registrate Y GANA!</h1>
                    <p style="margin-top:80px;">Lorem ipsun dolor et...</p>

                    <div class="hide alert alert-error error" style="margin-top:10px;">
                            <p class="text-center"></p>
                    </div>

            </div>

            <div class="container-fluid modal-body">

                    <div class="row-fluid control-group">

                            <div class="span8 offset2 input-prepend">
                                    <label class="control-label text-right" for="inputNomb">Nombre</label>
                                    <input type="text" name="firstname" id="firstname" value="" class="required text" text="Ingresa tu nombre">
                            </div>

                    </div>

                    <div class="row-fluid control-group">

                            <div class="span8 offset2 input-prepend">
                                    <label class="control-label text-right" for="inputApel">Apellido</label>
                                    <input type="text" name="lastname" id="lastname" value="" class="required text" text="Ingresa tu apellido">
                            </div>

                    </div>

                    <div class="row-fluid control-group">

                            <div class="span8 offset2 input-prepend">
                                    <label class="control-label text-right" for="inputRut">RUT</label>
                                    <input type="text" name="rut" id="rut" value="" class="required rut" text="Ingresa tu rut">
                            </div>

                    </div>

                    <div class="row-fluid control-group">

                            <div class="span8 offset2 input-prepend">
                                    <label class="control-label text-right" for="inputEmail">E-Mail</label>
                                    <input type="text" name="email" id="email" value="" class="required email" text="Ingresa tu email">
                            </div>

                    </div>

                    <div class="row-fluid control-group">

                            <div class="span8 offset2 input-prepend">
                                    <label class="control-label text-right" for="inputCelu">Celular</label>
                                    <input type="text" name="phone" id="phone" value="" class="required phone" text="Ingresa tu celular">
                            </div>

                    </div>

                    <div class="row-fluid control-group">

                            <div class="span8 offset2 input-prepend">
                                    <label class="control-label text-right" for="inputDirec">Dirección</label>
                                    <input type="text" name="address" id="address" value="" class="required notempty" text="Ingresa tu dirección">
                            </div>

                    </div>

                    <div class="row-fluid control-group">

                            <div class="span8 offset2 input-prepend">
                                    <label class="control-label text-right" for="inputDirec">Región</label>
                                    <div class="arr_select">
                                            <select name="region_id" id="region_id" class="required select" text="Selecciona tu región">
                                                    <option value="">Selecciona</option>
                                                    <?php foreach ( $regiones as $region ) { ?>
                                                    <option value="<?php print $region['Regione']['id']; ?>"><?php print $region['Regione']['name']; ?></option>
                                                    <?php } ?>
                                            </select>
                                    </div>

                            </div>

                    </div>

                    <div class="row-fluid control-group">

                            <div class="span8 offset2 input-prepend">
                                    <label class="control-label text-right" for="inputDirec">Comuna</label>
                                    <div class="arr_select">
                                            <select name="comuna_id" id="comuna_id" class="required select" text="Selecciona tu comuna">
                                                    <option value="">Selecciona</option>
                                            </select>
                                    </div>
                            </div>

                    </div>

                    <div class="row-fluid control-group">

                            <div class="span8 offset2 input-prepend">
                                    <label class="control-label text-right" for="inputThmblr">Usuario Tumblr</label>
                                    <input type="text" name="usuariotumblr" id="usuariotumblr" value="" class="required text" text="Ingresa tu usuario thumblr">
                            </div>

                    </div>
                    <div style="color:#660066;margin-top:10px;" class="row-fluid control-group text-center">

                            <input type="checkbox" style="vertical-align: top; border: 1px solid rgb(102, 0, 102); height: auto ! important; width: auto ! important;" class="required checkbox" text="Debes aceptar las bases." id=""> He leído y acepto las <a target="_blank" style="color:#660066;text-decoration:underline;" href="#">bases</a> del concurso.

                    </div>
            <div class="clearfix"></div>
            </div>

            <div class="modal-footer">

                    <a id="enviar" href="" data-dismiss="modal" aria-hidden="true" class="text-center">REGISTRARSE</a>

            </div>

    <div id="cont_success" class="registroOk hide" style="display:none;">

            <div class="modal-header text-center">

                    <h1 id="myModalLabel">registro finalizado</h1>

            </div>

            <div class="modal-footer text-center">
                    <a id="cerrar_modal" href="" data-dismiss="modal" aria-hidden="true" class="text-center">Cerrar</a>
            </div>

    </div>

    </form>
</div>