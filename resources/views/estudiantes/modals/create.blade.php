<!-- Modal -->
<div class="modal animated zoomIn" id="createMdl" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-inspinia text-primary" id="exampleModalLabel">Nuevo Estudiante</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('estudiantes.store')}}" role="form" method="POST" id="createProductFrm">
                    {{csrf_field()}}
                    {!!Form::open(array('url'=>'estudiantes','method'=>'POST','autocomplete'=>'off'))!!}
                    {{Form::token()}}
                    <div class="row">
                        <div class="col-lg-6 form-group">
                            <div>
                                <label for="id_persona" class="form-fields">Id Persona</label>
                                <label class="mandatory-field">*</label>
                                <input type="text" name="id_persona" id="id_persona"
                                    class="form-control {{$errors->has('id_persona') ? 'is-invalid' : ''}}"
                                    placeholder="-" value="{{old('id_persona')}}">
                                @if($errors->has('id_persona'))
                                <span class="text-danger">{{$errors->first('id_persona')}}</span>
                                @endif
                            </div>
                        </div>
                        <div class="col-lg-6 form-group">
                            <div>
                                <label for="id_acudiente_" class="form-fields">Id Acudiente</label>
                                <label class="mandatory-field">*</label>
                                <input type="number" name="id_acudiente_" id="id_acudiente"
                                    class="form-control {{$errors->has('id_acudiente_') ? 'is-invalid' : ''}}"
                                    placeholder="-" value="{{old('id_acudiente_')}}">
                                @if($errors->has('id_acudiente_'))
                                <span class="text-danger">{{$errors->first('id_acudiente_')}}</span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 form-group">
                            <div>
                                <label for="id_rol" class="form-fields">Rol</label>
                                <label class="mandatory-field">*</label>
                                <input type="text" name="id_rol" id="id_rol"
                                    class="form-control {{$errors->has('id_rol') ? 'is-invalid' : ''}}" placeholder="-"
                                    value="{{old('id_rol')}}">
                                @if($errors->has('id_rol'))
                                <span class="text-danger">{{$errors->first('id_rol')}}</span>
                                @endif
                            </div>
                        </div>
                        <div class="col-lg-6 form-group">
                            <div>
                                <label for="genero" class="form-fields">Genero</label>
                                <label class="mandatory-field">*</label>
                                <input type="text" name="genero" id="genero"
                                    class="form-control {{$errors->has('genero') ? 'is-invalid' : ''}}" placeholder="-"
                                    value="{{old('genero')}}">
                                @if($errors->has('genero'))
                                <span class="text-danger">{{$errors->first('genero')}}</span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 form-group justify-content-center">
                            <div>
                                <label for="fecha_nacimiento" class="form-fields">Fecha de Nacimiento</label>
                                <label class="mandatory-field">*</label>
                                <input type="text" name="fecha_nacimiento" id="fecha_nacimiento"
                                    class="form-control {{$errors->has('fecha_nacimiento') ? 'is-invalid' : ''}}"
                                    placeholder="-" value="{{old('fecha_nacimiento')}}">
                                @if($errors->has('fecha_nacimiento'))
                                <span class="text-danger">{{$errors->first('fecha_nacimiento')}}</span>
                                @endif
                            </div>
                        </div>
                        <div class="col-lg-6 form-group justify-content-center">
                            <div>
                                <label for="edad" class="form-fields">Edad</label>
                                <label class="mandatory-field">*</label>
                                <input type="text" name="edad" id="edad"
                                    class="form-control {{$errors->has('edad') ? 'is-invalid' : ''}}" placeholder="-"
                                    value="{{old('edad')}}">
                                @if($errors->has('edad'))
                                <span class="text-danger">{{$errors->first('edad')}}</span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 form-group justify-content-center">
                            <div>
                                <label for="nombre_padre" class="form-fields">Nombre del Padre</label>
                                <label class="mandatory-field">*</label>
                                <input type="text" name="nombre_padre" id="nombre_padre"
                                    class="form-control {{$errors->has('nombre_padre') ? 'is-invalid' : ''}}"
                                    placeholder="-" value="{{old('nombre_padre')}}">
                                @if($errors->has('nombre_padre'))
                                <span class="text-danger">{{$errors->first('nombre_padre')}}</span>
                                @endif
                            </div>
                        </div>
                        <div class="col-lg-6 form-group justify-content-center">
                            <div>
                                <label for="nombre_madre" class="form-fields">Nombre del Madre</label>
                                <label class="mandatory-field">*</label>
                                <input type="text" name="nombre_madre" id="nombre_madre"
                                    class="form-control {{$errors->has('nombre_madre') ? 'is-invalid' : ''}}"
                                    placeholder="-" value="{{old('nombre_madre')}}">
                                @if($errors->has('nombre_madre'))
                                <span class="text-danger">{{$errors->first('nombre_madre')}}</span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 form-group justify-content-center">
                            <div>
                                <label for="estado" class="form-fields">Estado</label>
                                <label class="mandatory-field">*</label>
                                <input type="text" name="estado" id="estado"
                                    class="form-control {{$errors->has('estado') ? 'is-invalid' : ''}}" placeholder="-"
                                    value="{{old('estado')}}">
                                @if($errors->has('estado'))
                                <span class="text-danger">{{$errors->first('estado')}}</span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <hr class="sidebar-divider">
                    <div class="buttons-form-submit d-flex justify-content-end">
                        <button type="button" class="btn btn-secondary mr-1" data-dismiss="modal">Cerrar</button>
                        <button type="submit" href="#" class="btn btn-primary">
                            Guardar
                            <i class="fas fa-spinner fa-spin d-none"></i>
                        </button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
{!!Form::close()!!}