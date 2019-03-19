<div class="card">
    <div class="card-body">
        <div class="form-group">
            {{ Form::label('legal_representative', 'Reprensentante Legal') }}
            {{ Form::text('legal_representative', null, ['class' => 'form-control', 'id' => 'legal_representative']) }}
        </div>
        <div class="form-group">
            {{ Form::label('business_name', 'Nombre del Negocio') }}
            {{ Form::text('business_name', null, ['class' => 'form-control', 'id' => 'business_name']) }}
        </div>
        <div class="form-group">
            {{ Form::label('tradename', 'Nombre comercial') }}
            {{ Form::text('tradename', null, ['class' => 'form-control', 'id' => 'tradename']) }}
        </div>
        <div class="form-group">
            {{ Form::label('nit', 'NIT') }}
            {{ Form::text('nit', null, ['class' => 'form-control', 'id' => 'nit']) }}
        </div>
        <div class="form-group">
            {{ Form::label('address', 'Dirección') }}
            {{ Form::text('address', null, ['class' => 'form-control', 'id' => 'address']) }}
        </div>
        <div class="form-group">
            {{ Form::label('address', 'Dirección') }}
            {{ Form::text('address', null, ['class' => 'form-control', 'id' => 'address']) }}
        </div>
        <div class="form-group">
            {{ Form::label('phone', 'Teléfono') }}
            {{ Form::text('phone', null, ['class' => 'form-control', 'id' => 'phone']) }}
        </div>
        <div class="form-group">
            {{ Form::label('email', 'Correo Electronico') }}
            {{ Form::text('email', null, ['class' => 'form-control', 'id' => 'email']) }}
        </div>
        <div class="form-group">
            {{ Form::label('email', 'Correo Electronico') }}
            {{ Form::text('email', null, ['class' => 'form-control', 'id' => 'email']) }}
        </div>
        <div class="form-group">
            {{ Form::label('image', 'Foto de EPS') }}
            {{ Form::file('image', null, ['class' => 'form-control', 'id' => 'image']) }}
        </div>
        <h3 class="card-title">Ubicación</h3>
        <hr>
        <div class="row p-t-20">
            <div class="col-md-6">
                <div class="form-group">
                    <select name="departament_id" id="departament_id" class="select2 form-control custom-select" style="width: 100%; height:36px;" onchange="municipalities()">
                        <option value="-1">[Seleccione un Departamento]</option>
                        @foreach($departaments as $departament)
                            <option value="{{$departament->id}}">{{$departament->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <select name="municipality_id" id="municipality_id" class="select2 form-control custom-select" >
                        <option value="-1">[Seleccione un Municipio]</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="form-group">
            {{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
        </div>
    </div>
</div>
