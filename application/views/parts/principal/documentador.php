<div class="row contentPrincipal hidden">
    <div class="col col-md-12 p-t-20">
        <button type="button" class="btn btn-primary"><span class="fa fa-fw fa-plus-circle"></span>&nbsp;</button>
    </div>
    <div class="col col-md-12">
        <hr/>
        <input type="hidden" value="<?= Auth::getRole() ?>" id="rol">
        <table id="tablaPrincipal" class="table table-hover table-condensed table-striped"></table>
    </div>
</div>
