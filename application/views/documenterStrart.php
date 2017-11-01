<!DOCTYPE html>
<html lang="en">
    <?php $this->load->view('parts/generic/head'); ?>
    <body data-base="<?php URL::base() ?>">
        <?php $this->load->view('parts/generic/header'); ?>
        <div class="container">

            <!--asignacion-->
            <div class='tab-content' id='tab1'><br><br>

                <div class='container'>
                    <form class= 'well form-horizontal' action='' method='post'  id='assignService' name='assignServie' enctype= 'multipart/form-data'>
                        <fieldset>
                            <legend>Asignacion</legend>
                            <!--Text input-->
                            <div class= 'form-group'>
                                <label class= 'col-md-4 control-label'>Elegir Archivo</label>
                                <div class= 'col-md-6 inputGroupContainer'>
                                    <div class= 'input-group'>
                                        <span class= 'input-group-addon'><i class= 'fa fa-fw fa-envelope-open'></i></span>
                                        <input  name= 'idarchivo' class= 'src-file'  type= 'file'>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>

            <div class='tab-content' id='tab3'>
                <div class="container">
                    <form class="well form-horizontal" action=" " method="post"  id="assignService" name="assignServie">
                        <legend >Asignar Actividad</legend>
                        <fieldset class="col-md-6 control-label">
                            <!-- Input Text -->
                            <div class="form-group">
                                <label class="col-md-3 control-label">Estacion</label>
                                <div class="col-md-8 selectContainer">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-fw fa-street-view"></i></span>
                                        <select name="estacion" id="estacion" class="form-control selectpicker" onchange="editTextCityRegional()" required>
                                            <option value="" >Seleccione la estación</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <!-- Select Basic -->
                            <div class="form-group">
                                <label class="col-md-3 control-label">Banda</label>
                                <div class="col-md-8 selectContainer">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-fw fa-signal"></i></span>
                                        <select name="banda" id="banda" class="form-control selectpicker" required>
                                            <option value="" >Seleccione la banda</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <!-- Select Basic -->
                            <div class="form-group">
                                <label class="col-md-3 control-label">Regional</label>
                                <div class="col-md-8 selectContainer">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-fw fa-globe"></i></span>
                                        <input type='text' name="regional" id="regional" class="form-control" value='' required>

                                    </div>
                                </div>
                            </div>
                        </fieldset>
                        <!--  fin seccion izquierda form---->

                        <!--  inicio seccion derecha form---->
                        <fieldset >
                            <!-- Select Basic -->
                            <div class="form-group">
                                <label class="col-md-3 control-label">Tecnologia</label>
                                <div class="col-md-8 selectContainer">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-fw fa-tablet"></i></span>
                                        <select name="tecnologia" id="tecnologia" class="form-control selectpicker" required>
                                            <option value="" >Seleccione la tecnologia</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <!-- Select Basic -->
                            <div class="form-group">
                                <label class="col-md-3 control-label">Tipo de trabajo</label>
                                <div class="col-md-8 selectContainer">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-fw fa-briefcase"></i></span>
                                        <select name="tipotrabajo" id="tipotrabajo" class="form-control selectpicker" required>
                                            <option value="" >Seleccione el tipo de trabajo</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <!-- Select Basic -->
                            <div class="form-group">
                                <label class="col-md-3 control-label">Ciudad</label>
                                <div class="col-md-8 selectContainer">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-fw fa-location-arrow"></i></span>
                                        <input type='text' name="ciudad" id="ciudad" class="form-control" value='' required>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                        <!--   fin seccion derecha---->

                        <!-- Button -->
                        <center>
                            <div class="form-group">
                                <label class="col-md-12 control-label"></label>
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-primary" onclick = "this.form.action = 'http://localhost/Datafill_OT/index.php/SpecificService/saveServiceS'">Guardar <span class="fa fa-fw fa-floppy-o"></span></button>
                                </div>
                            </div>
                        </center>
                    </form>
                </div>
            </div>
        </div>
        <!--footer Section -->
        <div class="for-full-back" id="footer">
            Zolid By ZTE Colombia | All Right Reserved
        </div>
        <?php $this->load->view('parts/generic/scripts'); ?>
        <!-- CUSTOM SCRIPT   -->
        <script src="<?= URL::to('assets/js/modules/principal.js') ?>" type="text/javascript"></script>

        <div class="incorrect-type info-box error-msg" style="display: none;">
          Sorry, the file you selected is not MSG type
        </div>

        <div class="file-api-not-available info-box error-msg" style="display: none;">
          Sorry, your browser isn't supported
        </div>

        <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="<?= URL::to('assets/js/DataStream.js') ?>"></script>
        <script type="text/javascript" src="<?= URL::to('assets/js/msg.reader.js') ?>"></script>


        <script>
          function isSupportedFileAPI() {
            return window.File && window.FileReader && window.FileList && window.Blob;
          }

          function formatEmail(data) {
            return data.name ? data.name + " [" + data.email + "]" : data.email;
          }

          $(function () {
            var info = <?php echo $respuesta; ?>;
            for (var j = 0; j < info.bands.data.length; j++){
              $('#banda').append($('<option>', {
                  value: info.bands.data[j].k_id_band,
                  text: info.bands.data[j].n_name_band
              }));
            }
            for (var j = 0; j < info.technologies.data.length; j++){
              $('#tecnologia').append($('<option>', {
                  value: info.technologies.data[j].k_id_technology,
                  text: info.technologies.data[j].n_name_technology
              }));
            }
            for (var j = 0; j < info.works.data.length; j++){
              $('#tipotrabajo').append($('<option>', {
                  value: info.works.data[j].k_id_work,
                  text: info.works.data[j].n_name_ork
              }));
            }
            for (var j = 0; j < info.stations.data.length; j++){
              $('#estacion').append($('<option>', {
                  value: info.stations.data[j].k_id_station,
                  text: info.stations.data[j].n_name_station
              }));
            }

            if (isSupportedFileAPI()) {
              $('.src-file').change(function () {
                var srqs = "";

                for(var counter = 0; counter < this.files.length; counter++){
                  var selectedFile = this.files[counter];
                  if (!selectedFile) {
                    $('.msg-info, .incorrect-type').hide();
                    return;
                  }
                  if (selectedFile.name.indexOf('.msg') == -1) {
                    $('.msg-info').hide();
                    $('.incorrect-type').show();
                    return;
                  }
                  $('.msg-example .msg-file-name').html(selectedFile.name);
                  $('.incorrect-type').hide();

                  // read file...
                  var fileReader = new FileReader();
                  fileReader.onload = function (evt) {

                    var buffer = evt.target.result;
                    var msgReader = new MSGReader(buffer);
                    var fileData = msgReader.getFileData();
                    if (!fileData.error) {
                      // $('.msg-example .msg-from').html(formatEmail({name: fileData.senderName, email: fileData.senderEmail}));
                      // $('.msg-example .msg-subject').html(fileData.subject);
                      // $('.msg-example .msg-body').html(
                      //     fileData.body ? fileData.body.substring(0, Math.min(600000, fileData.body.length))
                      //     + (fileData.body.length > 600000 ? '...' : '') : '');
                      // $('.msg-example .msg-attachment').html(jQuery.map(fileData.attachments, function (attachment, i) {
                      //   return attachment.fileName + ' [' + attachment.contentLength + 'bytes]' +
                      //       (attachment.pidContentId ? '; ID = ' + attachment.pidContentId : '');
                      // }).join('<br/>'));
                      // $('.msg-info').show();

                      var info = <?php echo $respuesta; ?>;

                      console.log(info);
                      for(var i = 0; i < info.stations.data.length; i++){
                        if(info.stations.data[i].n_name_station.toLowerCase().split(".").length == 2){
                          if(fileData.subject.toLowerCase().search(info.stations.data[i].n_name_station.toLowerCase().split(".")[0]) != -1 && fileData.subject.toLowerCase().search(info.stations.data[i].n_name_station.toLowerCase().split(".")[1]) != -1){
                            console.log(info.stations.data[i].n_name_station);
                          }
                        } else {
                          if(info.stations.data[i].n_name_station.toLowerCase().split(".").length == 3){
                            if(fileData.subject.toLowerCase().search(info.stations.data[i].n_name_station.toLowerCase().split(".")[0]) != -1 && fileData.subject.toLowerCase().search(info.stations.data[i].n_name_station.toLowerCase().split(".")[1] +". "+ info.stations.data[i].n_name_station.toLowerCase().split(".")[2]) != -1){
                              console.log(info.stations.data[i].n_name_station);
                            }
                          }
                        }
                      }
                      // if(fileData.body.search("CRQ") != -1){
                      //   if(fileData.body.substring(fileData.body.search("CRQ")+5, fileData.body.search("CRQ")+20).search("CRQ") != -1){
                      //     console.log(fileData.subject+": "+fileData.body.substring(fileData.body.search("CRQ")+4, fileData.body.search("CRQ")+20));
                      //     if(fileData.subject.toLowerCase().search("no exitoso") != -1){
                      //       console.log("Escalado");
                      //     }
                      //     if (fileData.subject.toLowerCase().search("exitoso") != -1){
                      //       if (fileData.subject.toLowerCase().search("no") == -1){
                      //         if (fileData.subject.toLowerCase().search("12h") != -1){
                      //           console.log("Seguimiento FO");
                      //         }
                      //         if (fileData.subject.toLowerCase().search("24h") != -1){
                      //           console.log("Seguimiento FO");
                      //         }
                      //         if (fileData.subject.toLowerCase().search("36h") != -1 && fileData.subject.toLowerCase().search("inicio") == -1){
                      //           console.log("Produccion");
                      //         }
                      //       }
                      //     }
                      //     if(fileData.subject.toLowerCase().search("precheck no exitoso") != -1){
                      //       console.log("Escalado");
                      //     }
                      //     if(fileData.subject.toLowerCase().search("standby") != -1 || fileData.subject.toLowerCase().search("prorroga") != -1){
                      //       console.log("queda igual");
                      //     }
                      //     if(fileData.subject.toLowerCase().search("reinicio") != -1){
                      //       console.log("Seguimiento FO");
                      //     }
                      //
                      //   } else {
                      //     console.log(fileData.subject+": "+"crq no valido");
                      //   }
                      // } else {
                      //   console.log(fileData.subject+": "+"Correo sin crq");
                      // }

                      // Use msgReader.getAttachment to access attachment content ...
                      // msgReader.getAttachment(0) or msgReader.getAttachment(fileData.attachments[0])
                    } else {
                      $('.msg-info').hide();
                      $('.incorrect-type').show();
                    }
                  };
                  fileReader.readAsArrayBuffer(selectedFile);
                }
              });
            } else {
              $('.msg-example').hide();
              $('.file-api-not-available').show();
            }
          });
        </script>

        <script>
          function editTextCityRegional(){
            var estacion = $( "#estacion" ).val();
            var info = <?php echo $respuesta; ?>;
            for (var j = 0; j < info.stations.data.length; j++){
              if(info.stations.data[j].k_id_station == estacion){
              //  $('regional').val('000000');
                $('input[name=ciudad]').val(info.stations.data[j].k_id_city);
              }
            }
          }
        </script>



    </body>
</html>
