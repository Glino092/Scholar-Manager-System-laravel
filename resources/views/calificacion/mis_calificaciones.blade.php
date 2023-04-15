@extends('layouts.main', [
'class' => '',
'elementActive' => 'carrera'
])

@section('content')

<div class="header pb-8 pt-5 pt-lg-8 d-flex align-items-center" style="background-image: url(../img/banners/banner13.jpg); background-size: cover; background-position: center top; filter: brightness(60%);">
    <!-- Header container -->
    <div class="container-fluid d-flex align-items-center">
        <div class="row">
            <div class="col-md-12 {{ $class ?? '' }}">
                <br><br><br><br><br><br>
            </div>
        </div>
    </div>
</div>

<div class="content">

    @if(Session::has('mensaje'))
    <div class="alert alert-success alert-dismissible" role="alert">

        <p style="font-size: 15px; color: black;"> {{ Session::get('mensaje') }} </p>

        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif


    <div class="card-body shadow">
        <div class="card-header bg-transparent border-0" style="background-color: #fff;">
            <div class="col text-right">

                @if(@Auth::user()->hasRole('Alumno'))

            </div>
        </div>

        <div class="table-responsive" style="overflow: hidden; ">
        <div class="card-header bg-transparent border-0" style="background-color: #fff;"> 
                <div class="col text-center">
                    <h2 class="card-title">Mis Calificaciones</h2>               
                </div>
            </div>
            @foreach($alumnos as $alumno)
            <h5>Alumno(a): {{$alumno->ap_p}} {{$alumno->ap_m}} {{$alumno->nombre}}</h5>
            <h5>Grupo: {{$nombre_grupo}}</h5>

            @endforeach
            <table id="tbasignados" class="table table-bordered table-hover dt-responsive nowrap display" style="width:100%">
                <thead style="background-color: #008a8a">
                    <tr>
                        <th scope="col" class="sort" style="color:#fff" data-sort="budget">Materia</th>
                        <th scope="col" class="sort" style="color:#fff" data-sort="budget">1er Parcial</th>
                        <th scope="col" class="sort" style="color:#fff" data-sort="budget">2do Parcial</th>
                        <th scope="col" class="sort" style="color:#fff" data-sort="budget">3er Parcial</th>
                        <th scope="col" class="sort" style="color:#fff" data-sort="budget">Evaluación Final</th>
                    </tr>
                </thead>

                <tbody class="list">
                    @foreach($grupo_materias as $grupo_materia)
                    <tr>
                        @foreach($materias as $materia)
                        @if(($grupo_materia->id_materia == $materia->id) && ($grupo_materia->id_grupo == $id_grupo))
                        <td class="budget text-center">
                            {{ $materia->nombre }}
                        </td>
                        @foreach($calificaciones as $calificacion)
                        @if(($calificacion->id_alumno == $id_alumno) && ($grupo_materia->id == $calificacion->id_grupo_materia))
                        @if($calificacion->parcial == "PRIMER PARCIAL")
                        <td class="budget text-center">
                            {{$calificacion->calificacion}}
                        </td>
                        @endif
                        @if($calificacion->parcial == "SEGUNDO PARCIAL")
                        <td class="budget text-center">
                            {{$calificacion->calificacion}}
                        </td>
                        @endif
                        @if($calificacion->parcial == "TERCER PARCIAL")
                        <td class="budget text-center">
                            {{$calificacion->calificacion}}
                        </td>
                        @endif
                        @endif
                        @endforeach

                        @foreach($calificacion_final as $calificacion_fin)
                        @if(($calificacion_fin->id_alumno == $id_alumno) && ($grupo_materia->id == $calificacion_fin->id_grupo_materia))
                        <td class="budget text-center">
                            {{$calificacion_fin->cal_fin}}
                        </td>
                        @endif
                        @endforeach


                        @endif
                        @endforeach


                    </tr>
                    @endforeach

                </tbody>
                @endif
            </table>
        </div>
    </div>
</div>


@endsection

@section('js')

<script type="text/javascript">
    @if(Session::get('eliminar') == 'ok')
    Swal.fire(
        'Borrado',
        'Se ha eliminado correctamente',
        'success'
    )
    @endif

    $('.form-delete').submit(
        function(e) {
            e.preventDefault();


            Swal.fire({
                title: '¿Desea eliminar dicho alumno?',
                text: "No podrá recuperarlo",
                icon: 'warning',
                showCancelButton: true,
                cancelButtonText: "Cancelar",
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Borrar'
            }).then((result) => {
                if (result.value) {
                    this.submit();
                } else {
                    Swal.fire({
                        position: 'top-end',
                        icon: 'success',
                        title: 'Operación cancelada',
                        showConfirmButton: false,
                        timer: 1500
                    })
                }
            })
        }
    );
</script>

@endsection