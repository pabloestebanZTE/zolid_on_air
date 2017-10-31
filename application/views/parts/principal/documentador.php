<div class="row">
    <div class="col col-md-12 p-t-20">
        <button type="button" class="btn btn-primary m-t-50"><span class="fa fa-fw fa-plus-circle"></span>&nbsp;</button>
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
                        <div class="btn-group">
                            <a href="#" class="btn btn-primary btn-xs" data-toggle="tooltip" title="Detalle"><span class="fa fa-fw fa-eye"></span></a>
                            <a href="#" class="btn btn-primary btn-xs" data-toggle="tooltip" title="Documentación"><span class="fa fa-fw fa-file-archive-o"></span></a>
                            <a href="#" class="btn btn-primary btn-xs" data-toggle="tooltip" title="Asignar"><span class="fa fa-fw fa-sign-in"></span></a>
                        </div>
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
                        <div class="btn-group">
                            <a href="#" class="btn btn-primary btn-xs" data-toggle="tooltip" title="Detalle"><span class="fa fa-fw fa-eye"></span></a>
                            <a href="#" class="btn btn-primary btn-xs" data-toggle="tooltip" title="Documentación"><span class="fa fa-fw fa-file-archive-o"></span></a>
                            <a href="#" class="btn btn-primary btn-xs" data-toggle="tooltip" title="Asignar"><span class="fa fa-fw fa-sign-in"></span></a>
                        </div>
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
                        <div class="btn-group">
                            <a href="#" class="btn btn-primary btn-xs" data-toggle="tooltip" title="Detalle"><span class="fa fa-fw fa-eye"></span></a>
                            <a href="#" class="btn btn-primary btn-xs" data-toggle="tooltip" title="Documentación"><span class="fa fa-fw fa-file-archive-o"></span></a>
                            <a href="#" class="btn btn-primary btn-xs" data-toggle="tooltip" title="Asignar"><span class="fa fa-fw fa-sign-in"></span></a>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
        <br/>
    </div>
</div>