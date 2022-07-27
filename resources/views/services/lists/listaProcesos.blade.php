<div class="col-sm-6 col-md-3 offset-md-2 col-lg-2 offset-lg-0">
    <div class="margenes-botones">
        <input class="form-check-input" value="1" type="radio" name="formselector" onClick="displayFormListaProcesos(this)" id="checkAactualizar" checked>
        <label class="form-check-label" for="checkActualizar">
            Update
        </label>  
        
        <input class="form-check-input" value="2" type="radio" name="formselector" onClick="displayFormListaProcesos(this)" id="checkRegistrar">
        <label class="form-check-label" for="checkRegistrar">
            Register
        </label>
    </div>

    <div id="requestFormListaProcesos">
        {!! Form::open(['url' => 'listaProcesos/actualizar', 'method' => 'post']) !!}
        <table id="listaProcesos" class="listaProcesos-tabla table table-bordered">
            <thead>
                <tr>
                    <th scope="col">PROCESO</th>
                </tr>
            </thead>
            <tbody style="border-color: #5b9bd5">
                @foreach ($listaProcesos as $listaProceso)
                <tr>
                    <input hidden name="id[]" value="<?php echo $listaProceso->id ?>">
                    <td><input class="form-control listaProcesostextolista tamano-texto-cuerpo-lista" name="nombre[<?php echo $listaProceso->id ?>]" value="<?php echo $listaProceso->nombre ?>"></td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <button type="submit" name="actualizarListaProceso" class="btn btn-warning boton-actualizar tamano-texto-cuerpo-boton">Update<?php echo "<br/>" ?>Procesos</button>
        {!! Form::close() !!}
    </div>

    <div style="display:none" id="memberFormListaProcesos">
        <form action="{{route('listas.registrarlistaProcesos')}}" method="POST">
            @csrf
            <table class="listaProcesos-tabla table table-bordered" id="tablaListaProcesos">
                <tr class="fila-fija-listaProcesos">
                    <td><input required name="nombre[]" placeholder="Nombre" class="form-control tamano-texto-cuerpo-lista"/></td>
                </tr>
            </table>
            <div class="btn-der">
                <button type="submit" name="insertarListaProcesos" class="btn btn-info tamano-texto-cuerpo-boton">Insert<?php echo "<br/>" ?>Processes</button>
                <button id="adicionalListaProcesos" name="adicionalListaProcesos" type="button" class="btn btn-warning"> More + </button>
                <button id="eliminarListaProcesos" name="eliminarListaProcesos" type="button" class="btn btn-danger"> Less - </button>
            </div>
        </form>
    </div>
</div>