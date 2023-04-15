@extends('layouts.main', [
'class' => '',
'elementActive' => 'dashboard'
])

@if(@Auth::user()->hasRole('Administrador'))
@section('content')

<div class="content">
    <div class="row">
        <div class="col-lg-2 col-md-4">
            <div class="card card-stats">

                <div class="card-body ">
                    <div class="row">
                        <div class="col-5 col-md-4">
                            <div class="icon-big text-center icon-warning">
                                <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                            </div>
                        </div>

                        <div class="col-7 col-md-8">
                            <div class="numbers">
                                <p class="card-category">Alumnos</p>
                                <p class="card-title">{{$cantalum}}
                                <p>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="card-footer ">
                    <hr>
                    <div class="stats">
                        <a class="nav-link" href="{{ url('alumno/') }}">
                            <i class="fa fa-eye" aria-hidden="true"></i> Visualizar
                        </a>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-lg-2 col-md-4">
            <div class="card card-stats">
                <div class="card-body ">
                    <div class="row">
                        <div class="col-5 col-md-4">
                            <div class="icon-big text-center icon-warning">
                                <i class="fa fa-university" aria-hidden="true"></i>
                            </div>
                        </div>
                        <div class="col-7 col-md-8">
                            <div class="numbers">
                                <p class="card-category">Planteles</p>
                                <p class="card-title">{{$cantplan}}
                                <p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer ">
                    <hr>
                    <div class="stats">
                        <a class="nav-link" href="{{ url('plantel/') }}">
                            <i class="fa fa-eye" aria-hidden="true"></i> Visualizar
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-2 col-md-4">
            <div class="card card-stats">
                <div class="card-body ">
                    <div class="row">
                        <div class="col-5 col-md-4">
                            <div class="icon-big text-center icon-warning">
                                <i class="fa fa-users" aria-hidden="true"></i>
                            </div>
                        </div>
                        <div class="col-7 col-md-8">
                            <div class="numbers">
                                <p class="card-category">Grupos</p>
                                <p class="card-title">{{$cantgru}}
                                <p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer ">
                    <hr>
                    <div class="stats">
                        <a class="nav-link" href="{{ url('grupo/') }}">
                            <i class="fa fa-eye" aria-hidden="true"></i> Visualizar
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-2 col-md-4">
            <div class="card card-stats">
                <div class="card-body ">
                    <div class="row">
                        <div class="col-5 col-md-4">
                            <div class="icon-big text-center icon-warning">
                                <i class="fa fa-suitcase" aria-hidden="true"></i>
                            </div>
                        </div>
                        <div class="col-7 col-md-8">
                            <div class="numbers">
                                <p class="card-category">Personal</p>
                                <p class="card-title">{{$cantemp}}
                                <p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer ">
                    <hr>
                    <div class="stats">
                        <a class="nav-link" href="{{ url('empleado/') }}">
                            <i class="fa fa-eye" aria-hidden="true"></i> Visualizar
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-2 col-md-4">
            <div class="card card-stats">

                <div class="card-body ">
                    <div class="row">
                        <div class="col-5 col-md-4">
                            <div class="icon-big text-center icon-warning">
                                <i class="fa fa-flag-checkered" aria-hidden="true"></i>
                            </div>
                        </div>

                        <div class="col-7 col-md-8">
                            <div class="numbers">
                                <p class="card-category">Carreras</p>
                                <p class="card-title">{{$cantcarr}}
                                <p>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="card-footer ">
                    <hr>
                    <div class="stats">
                        <a class="nav-link" href="{{ url('carrera/') }}">
                            <i class="fa fa-eye" aria-hidden="true"></i> Visualizar
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-2 col-md-4">
            <div class="card card-stats">

                <div class="card-body ">
                    <div class="row">
                        <div class="col-5 col-md-4">
                            <div class="icon-big text-center icon-warning">
                                <i class="fa fa-book" aria-hidden="true"></i>
                            </div>
                        </div>

                        <div class="col-7 col-md-8">
                            <div class="numbers">
                                <p class="card-category">Materias</p>
                                <p class="card-title">{{$cantmat}}
                                <p>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="card-footer ">
                    <hr>
                    <div class="stats">
                        <a class="nav-link" href="{{ url('materia/') }}">
                            <i class="fa fa-eye" aria-hidden="true"></i> Visualizar
                        </a>
                    </div>
                </div>
            </div>
        </div>


    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card ">
                @include('evento.calendario')
                <br><br> <br><br>
            </div>
        </div>
    </div>

</div>
@endsection
@endif

@if(@Auth::user()->hasRole('Alumno'))
@section('content')
<div class="content " >
    <div class="row justify-content-center" >
        <div class="col-lg-3 col-md-6 col-sm-6 ">
            <div class="card card-stats">
                <div class="card-body ">
                    <div class="row">
                        <div class="col-5 col-md-4">
                            <div class="icon-big text-center icon-warning">
                                <i class="fa fa-address-card" aria-hidden="true"></i>
                            </div>
                        </div>

                        <div class="col-7 col-md-8 " >
                            <div class="numbers">

                                <form action="{{ url('/personalAlumno') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <input hidden="true" class="form-control" type="text" name="correoR" value="{{ auth()->user()->email }}" id="correoR">
                                    <input style="font-size: 12px" type="submit" value="Mis Datos" class="btn btn-primary">
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="card-footer ">
                    <hr>
                    <div class="stats">

                    </div>
                </div>
            </div>

        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
                <div class="card-body ">
                    <div class="row">
                        <div class="col-5 col-md-4">
                            <div class="icon-big text-center icon-warning">
                                <i class="fa fa-address-book" aria-hidden="true"></i>
                            </div>
                        </div>
                        <div class="col-7 col-md-8">
                            <div class="numbers">
                                <form action="{{ url('/contactosAlumno') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <input hidden="true" class="form-control" type="text" name="correoR" value="{{ auth()->user()->email }}" id="correoR">
                                    <input type="submit" style="font-size: 12px" value="Mis contactos" class="btn btn-primary">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer ">
                    <hr>
                    <div class="stats">

                    </div>
                </div>
            </div>
        </div>
        

        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
                <div class="card-body ">
                    <div class="row">
                        <div class="col-5 col-md-4">
                            <div class="icon-big text-center icon-warning">
                                <i class="fa fa-book" aria-hidden="true"></i>
                            </div>
                        </div>
                        <div class="col-7 col-md-8">
                            <div class="numbers">
                                
                                <a class="btn btn-primary" style="font-size: 12px" href="{{ url('/mis_calificaciones') }}" >Mis calificaciones</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer ">
                    <hr>
                    <div class="stats">

                    </div>
                </div>
            </div>
        </div>
        
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card ">
                @include('evento.calendario')
                <br><br> <br><br>
            </div>
        </div>
    </div>
</div>



@endsection
@endif

@if(@Auth::user()->hasRole('Profesor'))
@section('content')

<div class="content">
<div class="row justify-content-center" >
        
        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
                <div class="card-body ">
                    <div class="row">
                        <div class="col-5 col-md-4">
                            <div class="icon-big text-center icon-warning">
                                <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                            </div>
                        </div>
                        <div class="col-7 col-md-8">
                            <div class="numbers">
                                
                                <a class="btn btn-primary" style="font-size: 12px" href="{{ url('/calificacion') }}" >Calificaciones</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer ">
                    <hr>
                    <div class="stats">

                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
                <div class="card-body ">
                    <div class="row">
                        <div class="col-5 col-md-4">
                            <div class="icon-big text-center icon-warning">
                                <i class="fa fa-calendar" aria-hidden="true"></i>
                            </div>
                        </div>
                        <div class="col-7 col-md-8">
                            <div class="numbers">
                                
                                <a class="btn btn-primary" style="font-size: 12px" href="{{ url('/asistencia') }}" >Control de Asistencia</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer ">
                    <hr>
                    <div class="stats">

                    </div>
                </div>
            </div>
        </div>
        
    </div>
   

    <div class="row">
        <div class="col-md-12">
            <div class="card ">
                @include('evento.calendario')
                <br><br> <br><br>
            </div>
        </div>
    </div>

</div>
@endsection
@endif

@if(@Auth::user()->hasRole('Control Escolar'))
@section('content')
<div class="content">
<div class="row">
        <div class="col-md-12">
            <div class="card ">
                @include('evento.calendario')
                <br><br> <br><br>
            </div>
        </div>
    </div>
</div>
@endsection
@endif

@push('scripts')
<script>
    $(document).ready(function() {
        // Javascript method's body can be found in assets/assets-for-demo/js/demo.js
        demo.initChartsPages();
    });
</script>
@endpush