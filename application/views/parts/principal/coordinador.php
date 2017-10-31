<div class="row">
    <div class="col col-md-12 p-t-20">
        <?php if (Auth::isDocumentador()) { ?>
            <button type="button" class="btn btn-primary m-t-50">Asignar</button>
        <?php } ?>
    </div>
    <div class="col col-md-12">
        <input type="hidden" value="<?= Auth::getRole() ?>" id="rol">
        <table id="tablaPrincipal" class="table table-hover table-condensed table-striped" data-toggle="table" data-search="true" data-sortable="true" data-pagination="true">
            <thead>
                <tr>
                    <th>Sitio</th>
                    <th>Tipo de trabajo</th>
                    <th>Estado</th>
                    <th>Subestado</th>
                    <th>Tiempo</th>
                    <th>Tecnologia</th>
                    <th>Banda</th>
                    <th>Opciones</th>
                </tr>
            </thead>
            <tbody>
                <tr class="hidden" id="plantillaTd">
                    <td>Sitio</td>
                    <td>Tipo de trabajo</td>
                    <td>Estado</td>
                    <td>Subestado</td>
                    <td>Tiempo</td>
                    <td>Tecnologia</td>
                    <td>Banda</td>
                    <td>
                        <span class="fa fa-fw fa-eye">Detalle</span><br>
                        <span class="fa fa-fw fa-file-archive-o">Documentacion</span><br>
                        <span class="fa fa-fw fa-sign-in">Asignar</span><br>
                    </td>
                </tr>
                <tr>
                    <td>Sitio</td>
                    <td>Tipo de trabajo</td>
                    <td>Estado</td>
                    <td>Subestado</td>
                    <td>Tiempo</td>
                    <td>Tecnologia</td>
                    <td>Banda</td>
                    <td>
                        <span class="fa fa-fw fa-eye">Detalle</span><br>
                        <span class="fa fa-fw fa-file-archive-o">Documentacion</span><br>
                        <span class="fa fa-fw fa-sign-in">Asignar</span><br>
                    </td>
                </tr>
                <tr>
                    <td>Sitio</td>
                    <td>Tipo de trabajo</td>
                    <td>Estado</td>
                    <td>Subestado</td>
                    <td>Tiempo</td>
                    <td>Tecnologia</td>
                    <td>Banda</td>
                    <td>
                        <span class="fa fa-fw fa-eye">Detalle</span><br>
                        <span class="fa fa-fw fa-file-archive-o">Documentacion</span><br>
                        <span class="fa fa-fw fa-sign-in">Asignar</span><br>
                    </td>
                </tr>
            </tbody>
        </table>
        <br>
        <!--<div class="container">-->
        <div class="row">
            <div class="col-md-12">
                <div class="panel with-nav-tabs panel-primary">
                    <div class="panel-heading">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#tab1default" data-toggle="tab">Default 1</a></li>
                            <li><a href="#tab2default" data-toggle="tab">Default 2</a></li>
                        </ul>
                    </div>
                    <div class="panel-body">
                        <div class="tab-content">
                            <div class="tab-pane fade in active" id="tab1default">Default 1</div>
                            <div class="tab-pane fade" id="tab2default">Default 2</div>
                            <div class="tab-pane fade" id="tab3default">Default 3</div>
                            <div class="tab-pane fade" id="tab4default">Default 4</div>
                            <div class="tab-pane fade" id="tab5default">Default 5</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--</div>-->
        <br/>
    </div>
</div>