@extends('layouts.template')

@section('title','Listas')

@section('css')
    <link rel="stylesheet" href="{{asset('css/lista.css')}}">
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.3.0/css/responsive.bootstrap5.min.css"> --}}
@endsection

@section('content')
    <div class="container margen-listas">
        <div class="row">
            
            @include('services.lists.listaUnidadesMedida')

            @include('services.lists.listaProcesos')

            @include('services.lists.listaClasificacions')

            @include('services.lists.listaUnidadConsumo')

            @include('services.lists.listaFamiliasMateriales')

        </div>
    </div>
@endsection

@section('js')
    <script type="text/javascript" src="{{asset('js/lista.js')}}"></script>
    {{-- <script type="text/javascript" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/responsive/2.3.0/js/dataTables.responsive.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/responsive/2.3.0/js/responsive.bootstrap5.min.js"></script>
    <script>
        $('#unidadMedidas').DataTable({
            searching: false,
            responsive: true,
            autoWidth: false
        });
    </script> --}}
@endsection