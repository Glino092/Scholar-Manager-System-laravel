@extends('layouts.main', [
    'class' => '',
    'elementActive' => 'grupoMateria'
])

@section('content')

<div class="header pb-8 pt-5 pt-lg-8 d-flex align-items-center" style="background-image: url(../img/banners/banner12.jpg); background-size: cover; background-position: center top; filter: brightness(60%);">
    <!-- Header container -->
    <div class="container-fluid d-flex align-items-center">
        <div class="row">
            <div class="col-md-12 {{ $class ?? '' }}" >
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
<div class="card-header bg-transparent border-0" style="background-color: #fff;"> 
                <div class="col text-center">
                    <h2 class="card-title">Asignar Grupos</h2>                
                </div>
            </div>
             <div class="card-body shadow" >
              <div class="card-header bg-transparent border-0" style="background-color: #fff;"> 
                <div class="col text-right">
                
                    <a href="{{ url('grupo_materia/create') }}" class="btn btn-primary" style="background-color:#008a8a; color:#fff"> 
                        Registrar Asignación
                    </a>                          
                  </div>
              </div>

              <div class="table-responsive"  style="overflow: hidden; ">
               <table id="tbasignados" class="table table-bordered table-hover dt-responsive nowrap display" style="width:100%">
                              <thead style="background-color: #008a8a">
                    <tr>
                        <th scope="col" class="sort"  style="color:#fff" data-sort="budget">Profesor</th>
                        <th scope="col" class="sort"  style="color:#fff" data-sort="budget">Materia</th>
                        <th scope="col" class="sort"  style="color:#fff" data-sort="budget">Grupo</th>
                  
                  
                        <th scope="col" style="color:#fff">Acciones</th>
                    </tr>

                  </thead>
                  <tbody class="list">
                    @foreach($grupo_materias as $grupo_materia)

                    <tr>
                      <td class="budget text-center">
                            {{ $grupo_materia->empleado->nombre }} {{ $grupo_materia->empleado->ap_paterno }} {{ $grupo_materia->empleado->ap_materno }} 
                      </td> 
                      <td class="budget text-center" >
                            {{ $grupo_materia->materia->nombre }}
                      </td>
                      <td class="budget text-center" >
                            {{ $grupo_materia->grupo->nombre }}
                      </td>
                      
                      <td class="text-center">
                        <div class="dropdown">

                        @if(@Auth::user()->hasRole('Administrador') || @Auth::user()->hasRole('Control Escolar'))
                        <a class='editar btn btn-warning' href="{{ url('/grupo_materia/'.$grupo_materia->id.'/edit') }}" title="Editar Datos">
                            <i class="fa fa-edit"></i>
                        </a>
                        @endif

                        @if (@auth()->user()->perfil == "Administrador")
                        <form action="{{ url('/grupo_materia/'.$grupo_materia->id) }}" class="d-inline form-delete" method='POST'>
                            {{ method_field('DELETE') }}   
                            @csrf
                                <button type="submit" 
                                  
                                    class='eliminar btn btn-danger' title="Eliminar Registro">
                                        <i class="far fa-trash-alt"></i>
                                </button>
                        </form>
                        @endif
                        
                        </div>

                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
                {!! $grupo_materias->links() !!}
              </div>
            </div>
          </div>

          

@endsection

@section('js')

<script type="text/javascript">

@if (Session::get('eliminar') == 'ok')
        Swal.fire(
            'Borrado',
            'Se ha eliminado correctamente',
            'success'
            )
@endif




   $('.form-delete').submit(
        function (e){
            e.preventDefault();
            
        
        Swal.fire({
                title: '¿Desea eliminar esta asignación?',
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