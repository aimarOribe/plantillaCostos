<div class="col-sm-6 col-md-3 offset-md-2 col-lg-2 offset-lg-0">
    <div class="margenes-botones">
        <input class="form-check-input" value="1" type="radio" name="formselector" onClick="displayFormListaUnidadConsumo(this)" id="checkAactualizar" checked>
        <label class="form-check-label" for="checkActualizar">
            Update
        </label>  
        
        <input class="form-check-input" value="2" type="radio" name="formselector" onClick="displayFormListaUnidadConsumo(this)" id="checkRegistrar">
        <label class="form-check-label" for="checkRegistrar">
            Register
        </label>
    </div>

    <div id="requestFormListaUnidadConsumo">
        {!! Form::open(['url' => 'listaUnidadConsumo/actualizar', 'method' => 'post']) !!}
        <table id="listaUnidadConsumos" class="listaUnidadConsumos-tabla table table-bordered">
            <thead>
                <tr>
                    <th scope="col">UNIDAD DE CONSUMO</th>
                </tr>
            </thead>
            <tbody style="border-color: #5b9bd5">
                @foreach ($listaUnidadConsumos as $listaUnidadConsumo)
                <tr>
                    <input hidden name="id[]" value="<?php echo $listaUnidadConsumo->id ?>">
                    <td><input class="form-control listaUnidadConsumoStextolista tamano-texto-cuerpo-lista" name="nombre[<?php echo $listaUnidadConsumo->id ?>]" value="<?php echo $listaUnidadConsumo->nombre ?>"></td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <button type="submit" name="actualizarListaUnidadConsumo" class="btn btn-warning tamano-texto-cuerpo-boton boton-actualizar">Update Unidad<?php echo "<br/>" ?>de Consumo</button>
        {!! Form::close() !!}
    </div>

    <div style="display:none" id="memberFormListaUnidadConsumo">
        <form action="{{route('listas.registrarlistaUnidadConsumo')}}" method="POST">
            @csrf
            <table class="listaUnidadConsumos-tabla table table-bordered" id="tablaListaUnidadConsumos">
                <tr class="fila-fija-listaUnidadConsumos">
                    <td><input required name="nombre[]" placeholder="Nombre" class="form-control tamano-texto-cuerpo-lista"/></td>
                </tr>
            </table>
            <div class="btn-der">
                <button type="submit" name="insertarListaUnidadConsumos" class="btn btn-info tamano-texto-cuerpo-boton">Insert Consumption<?php echo "<br/>" ?>Units</button>
                <button id="adicionalListaUnidadConsumos" name="adicionalListaUnidadConsumos" type="button" class="btn btn-warning"> More + </button>
                <button id="eliminarListaUnidadConsumos" name="eliminarListaUnidadConsumos" type="button" class="btn btn-danger"> Less - </button>
            </div>
        </form>
    </div>
</div>