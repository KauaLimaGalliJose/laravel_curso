@extends('layouts.cabecalho.cabecalho')

@section('div_conteiner')

<div class="conteiner-fluid text-center ">

    <div class="row w-100 vh-100 fundo_Gratinante_menu">

        @include('layouts.menus.menu_Superior')
        @include('layouts.menus.menu_Lateral')
        @include('conteudos.conteudo_Home')

    </div>

</div>

@endsection
