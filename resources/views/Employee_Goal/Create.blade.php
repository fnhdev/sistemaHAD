@extends('layouts.admin')
    @section('content')
            <section class="content over">
                <div class="jumbotron">
                    <div class="row">
                        <!--  Formulario CREATE or UPDATE-->
                        <div class="box-crud__container">
                            <h2> Creando relacion Objetivo/Empleado</h2>

                             <div class="col-sm-6 col-sm-offset-3">
                                 {!! Form::open(['route'=>'relacionEG.store','method'=>'POST','class'=>'form-group']) !!}
                                {{-- Include --}}
                                    @include('partials.forms.employee_goalForm')
                                {{-- Include --}}
                                    {!! Form::submit('Crear relacion',['class'=>'btn btn-danger']) !!}
                                {!! Form::close() !!}
                             </div>
                         </div>
                             <!--  Formulario CREATE or UPDATE-->
                    </div>
                </div>
            </section>
    @endsection
