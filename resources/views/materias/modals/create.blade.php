<!-- Modal -->
<div class="modal animated zoomIn" id="createMdl" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-inspinia text-primary" id="exampleModalLabel">Nueva Materia</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('materias.store')}}" role="form" method="POST" id="createMateriasFrm">
                    {{csrf_field()}}
                    {!!Form::open(array('url'=>'Materias','method'=>'POST','autocomplete'=>'off'))!!}
                    {{Form::token()}}
                    <div class="row">
                        <div class="col-lg-12 form-group">
                            <div>
                                <label for="id" class="form-fields">Id</label>
                                <label class="mandatory-field">*</label>
                                <input type="text" name="id" id="id"
                                    class="form-control {{$errors->has('id') ? 'is-invalid' : ''}}" placeholder="-"
                                    value="{{old('id')}}">
                                @if($errors->has('id'))
                                <span class="text-danger">{{$errors->first('id')}}</span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 form-group">
                            <div>
                            <label for="nombre" class="form-fields">Nombre</label>
                                <label class="mandatory-field">*</label>
                                <input type="text" name="nombre" id="nombre"
                                    class="form-control {{$errors->has('Nombre') ? 'is-invalid' : ''}}" placeholder="-"
                                    value="{{old('nombre')}}">
                                @if($errors->has('nombre'))
                                <span class="text-danger">{{$errors->first('nombre')}}</span>
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