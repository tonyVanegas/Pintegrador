<!-- Modal -->
<div class="modal animated zoomIn" id="createMdl" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-inspinia text-primary" id="exampleModalLabel">Nueva persona</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('personas.store')}}" role="form" method="POST" id="createProductFrm">
                    {{csrf_field()}}
                    {!!Form::open(array('url'=>'personas','method'=>'POST','autocomplete'=>'off'))!!}
                    {{Form::token()}}
                    <div class="row">
                        <div class="col-lg-12 form-group">
                            <div>
                                <label for="tipo documento" class="form-fields">Tipo de Documento</label>
                                <label class="mandatory-field">*</label>
                                <input type="text" name="tipo_documento" id="tipo_documento"
                                    class="form-control {{$errors->has('tipo_documento') ? 'is-invalid' : ''}}"
                                    placeholder="-" value="{{old('tipo_documento')}}">
                                @if($errors->has('tipo_documento'))
                                <span class="text-danger">{{$errors->first('tipo_documento')}}</span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 form-group">
                            <div>
                                <label for="numero documento" class="form-fields">Numero Documento</label>
                                <label class="mandatory-field">*</label>
                                <input type="number" name="numero_documento" id="numero_documento"
                                    class="form-control {{$errors->has('numero_documento') ? 'is-invalid' : ''}}"
                                    placeholder="-" value="{{old('numero_documento')}}">
                                @if($errors->has('numero_documento'))
                                <span class="text-danger">{{$errors->first('numero_documento')}}</span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 form-group">
                            <div>
                                <label for="nombres" class="form-fields">Nombres</label>
                                <label class="mandatory-field">*</label>
                                <input type="text" name="nombres" id="nombres"
                                    class="form-control {{$errors->has('Nombres') ? 'is-invalid' : ''}}" placeholder="-"
                                    value="{{old('nombres')}}">
                                @if($errors->has('nombres'))
                                <span class="text-danger">{{$errors->first('nombres')}}</span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 form-group">
                            <div>
                                <label for="primer apellido" class="form-fields">Primer Apellido</label>
                                <label class="mandatory-field">*</label>
                                <input type="text" name="primer_apellido" id="primer_apellido"
                                    class="form-control {{$errors->has('primer_apellido') ? 'is-invalid' : ''}}"
                                    placeholder="-" value="{{old('primer_apellido')}}">
                                @if($errors->has('primer_apellido'))
                                <span class="text-danger">{{$errors->first('primer_apellido')}}</span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 form-group justify-content-center">
                            <div>
                                <label for="segundo apellido" class="form-fields">Segundo Apellido</label>
                                <label class="mandatory-field">*</label>
                                <input type="text" name="segundo_apellido" id="segundo_apellido"
                                    class="form-control {{$errors->has('segundo_apellido') ? 'is-invalid' : ''}}"
                                    placeholder="-" value="{{old('segundo_apellido')}}">
                                @if($errors->has('segundo_apellido'))
                                <span class="text-danger">{{$errors->first('segundo_apellido')}}</span>
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