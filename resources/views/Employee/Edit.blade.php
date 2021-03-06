@extends('layouts.admin')
    @section('content')
        @if (count($errors) > 0)
            <div class="alert alert-danger alert-dismissible" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <ul>
                  @foreach ($errors->all() as $error)
                      <li><i class="glyphicon glyphicon-fire"></i> <strong>{{ $error }}</strong></li>
                  @endforeach
              </ul>
            </div>
        @endif
        <!--  Section Content Yield-->
            <section class="content over">
                <div class="jumbotron">
                    <div class="row">
                        <!--  Formulario CREATE or UPDATE-->
                        <div class="box-crud__container">
                            <h1> Alta Empleados</h1>

                             <div class="col-sm-6 col-sm-offset-3">
                                    {{-- Formulario --}}
                                    {{-- {!! Form::model($movie,['route'=>['movie.update',$movie->id],'method'=>'PUT','files'=>true]) !!} --}}
                                    {!!Form::model($employee,['route'=>['empleados.update',$employee->id],'method'=>'PUT','files'=>true]) !!}
                                        @include('partials.forms.employeeForm')
                                        {!! Form::submit('Dar de alta',['class'=>'btn btn-success'])!!}
                                    {!! Form::Close()!!}
                                    {{-- Formulario --}}
                            </div>
                        </div>
                        <!--  Formulario CREATE or UPDATE-->
                    </div>
                </div>
            </section>
    @endsection
