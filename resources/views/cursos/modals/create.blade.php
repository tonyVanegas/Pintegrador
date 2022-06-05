<!-- Modal -->
<div class="modal animated zoomIn" id="createMdl" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-inspinia text-primary" id="exampleModalLabel">Nuevo curso</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('cursos.store')}}" role="form" method="POST" id="createProductFrm">
                    {{csrf_field()}}
                    {!!Form::open(array('url'=>'cursos','method'=>'POST','autocomplete'=>'off'))!!}
                    {{Form::token()}}
                    <div class="row">
                        <div class="col-lg-12 form-group">
                            <div>
                                <label for="tipo documento" class="form-fields">Grado</label>
                                <label class="mandatory-field">*</label>
                                <input type="text" name="grado" id="grado"
                                    class="form-control {{$errors->has('grado') ? 'is-invalid' : ''}}"
                                    placeholder="-" value="{{old('grado')}}">
                                @if($errors->has('grado'))
                                <span class="text-danger">{{$errors->first('grado')}}</span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 form-group">
                            <div>
                                <label for="numero documento" class="form-fields">Año Lectivo</label>
                                <label class="mandatory-field">*</label>
                                <input type="number" name="anio_lectivo" id="anio_lectivo"
                                    class="form-control {{$errors->has('anio_lectivo') ? 'is-invalid' : ''}}"
                                    placeholder="-" value="{{old('anio_lectivo')}}">
                                @if($errors->has('anio_lectivo'))
                                <span class="text-danger">{{$errors->first('anio_lectivo')}}</span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 form-group">
                            <div>
                                <label for="nombres" class="form-fields">Consecutivo</label>
                                <label class="mandatory-field">*</label>
                                <input type="text" name="consecutivo" id="consecutivo"
                                    class="form-control {{$errors->has('consecutivo') ? 'is-invalid' : ''}}" placeholder="-"
                                    value="{{old('consecutivo')}}">
                                @if($errors->has('consecutivo'))
                                <span class="text-danger">{{$errors->first('consecutivo')}}</span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 form-group">
                            <div>
                                <label for="primer apellido" class="form-fields">Estado</label>
                                <label class="mandatory-field">*</label>
                                <input type="text" name="estado" id="estado"
                                    class="form-control {{$errors->has('estado') ? 'is-invalid' : ''}}"
                                    placeholder="-" value="{{old('estado')}}">
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