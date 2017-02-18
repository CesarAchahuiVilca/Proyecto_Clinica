@extends('principal')

@section('Mantenimiento')
<div class="col-lg-12">
    <div class="panel panel-default">
        <div class="panel-heading" style="height:60px;">
              @yield('Titulo')
              <div class="pull-right">
                <div class="btn-group">
                  <button type="button" class="btn btn-primary btn-md"
                  onClick="location.href='/historiales_medicos_detalles/create'">NUEVO HISTORIAL MEDICO DETALLE</button>
                  <button type="button" class="btn btn-info btn-md"
                  onClick="location.href='/historial_medico'">INDICE</button>
                </div>
              </div>
        </div>
        <!-- /.panel-heading -->
        <div class="panel-body">
            <div >
                @yield('Contenido')
            </div>
        </div>
        <!-- /.panel-body -->
    </div>
    <!-- /.panel -->
</div>
@endsection

@section('js')
  @yield('js')
@endsection

@section('js_scripts')
  @yield('js_scripts')
@endsection
