@extends('layouts.main', [
    'class' => '',
    'elementActive' => 'carrera/form'
])

@section('content')

<div class="header pb-8 pt-5 pt-lg-8 d-flex align-items-center" style="background-image: url(../img/banners/banner9.jpg); background-size: cover; background-position: center top; filter: brightness(60%);">
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
             <div class="card-body shadow" >
              <div class="card-header bg-transparent border-0" style="background-color: #fff;"> 
                <div class="col text-center">
                    <h2>{{ $modo }} Carrera</h2>                       
                  </div>
              </div>



        @if(count($errors)>0)
        <div class="alert alert-danger" role="alert">
            <ul>
                @foreach($errors->all() as $error)
                <li> {{$error}} </li>
                @endforeach
            </ul>
        </div>

        @endif

            <div class="card-body border-primary">
            <form action="{{ asset('/Carrera/create/') }}" method="post">
                @csrf
                <div class="form row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="nombre">Nombre</label>
                            <select name="nombre" id="nombre" class="form-control">

                                <option selected="true" value="{{ isset($carrera->nombre)?$carrera->nombre:old('nombre') }}"> {{ isset($carrera->nombre)?$carrera->nombre:old('nombre') }} </option>
                                <option value="default">-- Seleccione la Carrera --</option>
                                
                                    <optgroup label="---- LICENCIATURAS ----">
                                    <option value="Administración de Empresas">Administración de Empresas</option>
                                    <option value="Administración de Empresas Turísticas">Administración de Empresas Turísticas</option>
                                    <option value="Ciencias de la Comunicación">Ciencias de la Comunicación</option>
                                    <option value="Ciencias del Deporte">Ciencias del Deporte</option>
                                    <option value="Ciencias de la Educación">Ciencias de la Educación</option>
                                    <option value="Contaduría">Contaduría</option>
                                    <option value="Criminología">Criminología</option>
                                    <option value="Derecho">Derecho</option>
                                    <option value="Educación">Educación</option>
                                    <option value="Educación Artística">Educación Artística</option>
                                    <option value="Gastronomía">Gastronomía</option>
                                    <option value="Lengua y Letras Modernas">Lengua y Letras Modernas</option>
                                    <option value="Lengua y Literatura Inglesa">Lengua y Literatura Inglesa</option>
                                    <option value="Pedagogía">Pedagogía</option>
                                    <option value="Psicología">Psicología</option>
                                    <option value="Psicopedagogía">Psicopedagogía</option>
                                    <option value="Seguridad Pública">Seguridad Pública</option>
                                    <option value="Turismo">Turismo</option>

                                    <optgroup label="---- INGENIERIAS ----">
                                    <option value="Ingeniería Civil">Ingeniería Civil</option>
                                    <option value="Ingeniería Eléctrica">Ingeniería Eléctrica</option>
                                    <option value="Ing. en Sist. Computacionales">Ing. en Sist. Computacionales</option>
                                    <option value="Ingeniería Industrial">Ingeniería Industrial</option>
                                    <option value="Ingeniería Mecánica Automotriz">Ingeniería Mecánica Automotriz</option>
                                    <option value="Ingeniería en Seguridad Petrolera">Ingeniería en Seguridad Petrolera</option>

                                    <optgroup label="---- MAESTRIAS ----">
                                    <option value="Administración y Alta Dirección">Administración y Alta Dirección</option>
                                    <option value="Ciencia Jurídicas"> Ciencia Jurídicas</option>
                                    <option value="Derecho Procesal">Derecho Procesal</option>
                                    <option value="Educación">Educación</option>
                                    <option value="Gobierno y Administración Pública">Gobierno y Administración Pública</option>
                                    <option value="Gestión de los Servicios de Salud">Gestión de los Servicios de Salud</option>
                                    <option value="Impuestos y Defensa Fiscal">Impuestos y Defensa Fiscal</option>
                                    <option value="Juicios Orales">Juicios Orales</option>

                                    <optgroup label="---- ESPECIALIDADES ----">
                                    <option value="Administración Educativa">Administración Educativa</option>
                                    <option value="Docencia">Docencia</option>
                                    <option value="Educación">Educación</option>

                                    <optgroup label="---- DOCTORADOS ----">
                                    <option value="Ciencias de la Educación">Ciencias de la Educación</option>
                                    <option value="Derecho">Derecho</option>

                            </select>
                        </div>
                    </div>

                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="siglas">Siglas</label>
                            <input class="form-control" type="siglas" name="siglas" value="{{ isset($carrera->siglas)?$carrera->siglas:old('siglas') }}" id="siglas"><br>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="descripcion">Descripción</label>
                            <input class="form-control" type="descripcion" name="descripcion" value="{{ isset($carrera->descripcion)?$carrera->descripcion:old('descripcion') }}" id="descripcion"><br>
                        </div>
                    </div>


                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="duracion">Duración de la carrera</label>
                            <input class="form-control" type="duracion" name="duracion" value="{{ isset($carrera->duracion)?$carrera->duracion:old('duracion') }}" id="duracion"><br>
                        </div>
                    </div>


                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="plan_educativo">Plan educativo</label>
                            <input class="form-control" type="plan_educativo" name="plan_educativo" value="{{ isset($carrera->plan_educativo)?$carrera->plan_educativo:old('plan_educativo') }}" id="plan_educativo"><br>
                        </div>
                    </div>


                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="nivel_educativo">Nivel Educativo</label>
                                <select name="nivel_educativo" id="nivel_educativo" class="form-control">

                                    <option selected="true" value="{{ isset($carrera->nivel_educativo)?$carrera->nivel_educativo:old('nivel_educativo') }}"> {{ isset($carrera->nivel_educativo)?$carrera->nivel_educativo:old('nivel_educativo') }} </option>
                                    <option value="default">-- Seleccione el Nivel Educativo --</option>

                                    <option value="LICENCIATURA">LICENCIATURA</option>
                                    <option value="INGENIERÍA">INGENIERÍA</option>
                                    <option value="MAESTRÍA">MAESTRÍA</option>
                                    <option value="ESPECIALIDAD">ESPECIALIDAD</option>
                                    <option value="DOCTORADO">DOCTORADO</option>
                                </select>
                        </div>
                    </div>


                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="plantel">Plantel</label>
                                <select class="form-control" name="id_plantel" id="id_plantel">

                                    <option value="">-- Seleccione el Plantel --</option>
                                    @foreach ($plantels as $plantel) 
                                    @if($vol != 0)
                                    @if($plantel->id == $carrera->id_plantel)
                                    <option value="{{$plantel->id}}" selected> {{ $plantel->nombre }}</option>
                                    @else
                                    <option value="{{$plantel->id}}"> {{ $plantel->nombre }}</option>
                                    @endif
                                    @else
                                    <option value="{{$plantel->id}}"> {{ $plantel->nombre }}</option>
                                    @endif

                                    @endforeach
                                </select>
                        </div>
                    </div>


                </div>
                <input type="submit" value="{{ $modo }} Datos" class="btn btn-success">
                    <a href="{{ url('carrera/') }}" class="btn btn-primary">Regresar</a>
                <br>
            </div>
            
                </form>
</div>
</div>

@endsection


