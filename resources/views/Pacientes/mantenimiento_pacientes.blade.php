@extends('principal')

@section('Mantenimiento')
<div class="col-lg-12">
    <div class="panel panel-default">
        <div class="panel-heading" style="height:60px;">
          <i class="fa fa-gear fa-fw"></i>
          <a1 class="titulo"><font size=5>Mantenimiento de Pacientes</font></a1>
            <div class="pull-right">
              <div class="btn-group">
                <button type="button" class="btn btn-primary btn-md"
                onClick="location.href='/pacientes/create'">NUEVO PACIENTE</button>
                <button type="button" class="btn btn-primary btn-md"
                onClick="location.href='/pacientes/create2/'">NUEVO PACIENTE EXTERNO</button>
                <button type="button" class="btn btn-info btn-md"
                onClick="location.href='/pacientes'">INDICE</button>
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
