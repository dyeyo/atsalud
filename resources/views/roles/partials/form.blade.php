<div class="card">
    <div class="card-body">
        <div class="form-group">
                {{ Form::label('name', 'Nombre rol') }}
                {{ Form::text('name', null, ['class' => 'form-control', 'id' => 'name']) }}
            </div>
        <div class="form-group">
            {{ Form::label('slug', 'URL Amigable') }}
            {{ Form::text('slug', null, ['class' => 'form-control', 'id' => 'slug']) }}
        </div>
        <div class="form-group">
            {{ Form::label('description', 'Descripción') }}
            {{ Form::textarea('description', null, ['class' => 'form-control', 'rows' => 2]) }}
        </div>
        <h3>Permiso especial</h3>
        <div class="form-group">
            <label>{{ Form::radio('special', 'all-access') }} Acceso total</label>
            <label>{{ Form::radio('special', 'no-access') }} Ningún acceso</label>
        </div>
    </div>
</div>
<div class="card">
    <div class="card-body">
        <h3>Lista de permisos</h3>
        <div class="form-group">
            <ul class="list-unstyled">
                @foreach($permissions as $permission)
                    <li>
                        <label>
                            {{ Form::checkbox('permissions[]', $permission->id) }}
                            {{ $permission->name }}
                            <em>({{ $permission->description }})</em>
                        </label>
                    </li>
                @endforeach
            </ul>
        </div>       
        <div class="form-group">
          {{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
        </div>
    </div>
</div>
