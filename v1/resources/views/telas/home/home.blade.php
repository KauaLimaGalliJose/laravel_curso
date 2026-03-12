@extends('layouts.cabecalho.cabecalho')

@section('div_conteiner')
    <div class="container-fluid text-center vh-100">

        <div class="row h-100 fundo_Gratinante_menu">

            {{-- Aqui Barra Superior --}}
            <div class = "col-12 z-2 shadow "  style="height: 5%">
                @include('layouts.menus.menu_Superior')
            </div>

            {{-- Aqui Barra Lateral e Conteudo --}}
            <div class = "col-12 " style="height: 95%">

                <div class = "row h-100">

                    <div class = "col-1 z-3 shadow-right">
                        @include('layouts.menus.menu_Lateral')
                    </div>
                    <div class="col-11 bg-body z-1" style="border-top-left-radius:30px;" >
                        @include('conteudos.conteudo_Home')
                    </div>

                </div>

            </div>

        </div>

    </div>
@endsection
