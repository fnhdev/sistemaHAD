{!! Form::label('Numero de legajo') !!}
{!! Form::number('legajo',null,['placeholder'=>'00005','min'=>'1'])!!}

{!! Form::label('Nombres') !!}
{!! Form::text('nombre',null,['placeholder'=>'Juan Francisco','pattern'=>'[A-Za-z]{4-20}','title'=>'No puede ingresar un nombre tan corto']) !!}

{!! Form::label('Apellidos') !!}
{!! Form::text('apellido',null,['placeholder'=>'Hernandez']) !!}

{!! Form::label('Telefono') !!}
{!! Form::number('telefono',null,['placeholder'=>'4322388','min'=>'1'])!!}

{!! Form::label('DNI') !!}
{!! Form::number('DNI',null,['placeholder'=>'37657098'])!!}

{!! Form::label('Direccion') !!}
{!! Form::text('direccion',null,['placeholder'=>'Av. Independencia 2015']) !!}

{!! Form::label('Adelanto de dinero $:') !!}
{!! Form::text('advanced',null,['placeholder'=>'Ej: 30']) !!}

{!! Form::label('Tipo de empleado') !!}
{!! Form::select('puesto',['fijo'=>'Fijo','supervisor'=>'Supervisor','relevo'=>'Relevo']) !!}
   <br>
   <br>
{!! Form::label('Fotografia de empleado') !!}
{!! Form::file('path') !!}

{!! Form::label('Nota:') !!}
{!! Form::textarea('notes',null,['placeholder'=>'Ej: Notas que quizás sean importantes']) !!}