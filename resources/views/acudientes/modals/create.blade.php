<!-- Modal -->
<div class="modal animated zoomIn" id="createMdl" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-inspinia text-primary" id="exampleModalLabel">Nuevo Docente</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('docentes.store')}}" role="form" method="POST" id="createProductFrm">
                    {{csrf_field()}}
                    {!!Form::open(array('url'=>'docentes','method'=>'POST','autocomplete'=>'off'))!!}
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
                                <label for="id_rol" class="form-fields">Rol</label>
                                <label class="mandatory-field">*</label>
                                <input type="number" name="id_rol" id="id_rol"
                                    class="form-control {{$errors->has('id_rol') ? 'is-invalid' : ''}}" placeholder="-"
                                    value="{{old('id_rol')}}">
                                @if($errors->has('id_rol'))
                                <span class="text-danger">{{$errors->first('id_rol')}}</span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 form-group">
                            <div>
                                <label for="direccion" class="form-fields">Dirección</label>
                                <label class="mandatory-field">*</label>
                                <input type="text" name="direccion" id="direccion"
                                    class="form-control {{$errors->has('direccion') ? 'is-invalid' : ''}}"
                                    placeholder="-" value="{{old('direccion')}}">
                                @if($errors->has('direccion'))
                                <span class="text-danger">{{$errors->first('direccion')}}</span>
                                @endif
                            </div>
                        </div>
                        <div class="col-lg-6 form-group">
                            <div>
                                <label for="celular" class="form-fields">Celular</label>
                                <label class="mandatory-field">*</label>
                                <input type="text" name="celular" id="celular"
                                    class="form-control {{$errors->has('celular') ? 'is-invalid' : ''}}" placeholder="-"
                                    value="{{old('celular')}}">
                                @if($errors->has('celular'))
                                <span class="text-danger">{{$errors->first('celular')}}</span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 form-group justify-content-center">
                            <div>
                                <label for="telefono_fijo" class="form-fields">Telefono Fijo</label>
                                <label class="mandatory-field">*</label>
                                <input type="text" name="telefono_fijo" id="telefono_fijo"
                                    class="form-control {{$errors->has('telefono_fijo') ? 'is-invalid' : ''}}"
                                    placeholder="-" value="{{old('telefono_fijo')}}">
                                @if($errors->has('telefono_fijo'))
                                <span class="text-danger">{{$errors->first('telefono_fijo')}}</span>
                                @endif
                            </div>
                        </div>
                        <div class="col-lg-6 form-group justify-content-center">
                            <div>
                                <label for="email" class="form-fields">Correo</label>
                                <label class="mandatory-field">*</label>
                                <input type="text" name="email" id="email"
                                    class="form-control {{$errors->has('email') ? 'is-invalid' : ''}}" placeholder="-"
                                    value="{{old('email')}}">
                                @if($errors->has('email'))
                                <span class="text-danger">{{$errors->first('email')}}</span>
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