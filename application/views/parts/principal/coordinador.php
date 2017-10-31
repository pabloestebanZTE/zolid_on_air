<div class="row">
    <div class="col col-md-12 p-t-40">
        <input type="hidden" value="<?= Auth::getRole() ?>" id="rol">
        <br/>
        <div class="row">
            <div class="col-md-12">
                <div class="panel with-nav-tabs panel-primary">
                    <div class="panel-heading">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#tab1default" data-toggle="tab">Pendientes</a></li>
                            <li><a href="#tab2default" data-toggle="tab">Ya asignados</a></li>
                        </ul>
                    </div>
                    <div class="panel-body">
                        <div class="tab-content">
                            <div class="tab-pane fade in active" id="tab1default">
                                <h1 class="m-t-0">Pendientes para revisión</h1>
                                <table id="tablaPrincipal" class="table table-hover table-condensed table-striped"></table>
                            </div>
                            <div class="tab-pane fade" id="tab2default">
                                <table id="tablaPrincipal" class="table table-hover table-condensed table-striped" data-toggle="table" data-search="true" data-sortable="true" data-pagination="true">
                                    <thead>
                                        <tr class="info">
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
                                                <div class="btn-group">
                                                    <a href="#" class="btn btn-primary btn-xs" data-toggle="tooltip" title="Detalle"><span class="fa fa-fw fa-eye"></span></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="no-found">
                                            <td colspan="8"><i class="fa fa-fw fa-warning"></i> No hay registros</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br/>
    </div>
</div>
