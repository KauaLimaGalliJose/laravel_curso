{{-- Verifica Formulario --}}

@php
    //variaveis
    $senha = null;
    $user = null;
    $local = null;
    $erroSession = null;
    $erroSession_local = null;
    $ErroUsuarioDelete;

    //Inputs Estilos
    $estilo_In_Local = null;
    $estilo_In_User = null;
    $estilo_In_Senha = null;
@endphp

{{-- Erros  Senha --}}
@error('senha')
    @php
        $senha = $message;
        $estilo_In_Senha = 'is-invalid';
    @endphp
@enderror

{{-- Erros  Usuario --}}
@error('usuario')
    @php
        $user = $message;
        $estilo_In_User = 'is-invalid';
    @endphp
@enderror

{{-- Erros Local --}}
@error('local')
    @php
        $local = $message;
        $estilo_In_Local = 'is-invalid';
    @endphp
@enderror

{{-- Verificado Pelo Banco de Dados ------------------- --}}
@if (session('ErroLogin'))
    @php
        $erroSession = 'Senha ou Usuarios Incorretos ';
        $estilo_In_User = 'is-invalid';
        $estilo_In_Senha = 'is-invalid';
    @endphp
@endif

@if (session('ErroLocal'))
    @php
        $erroSession_local = 'Permição Negada';
        $estilo_In_Local = 'is-invalid';
    @endphp
@endif


@extends('layouts.cabecalho.cabecalho')

@section('div_conteiner')
    <div class=" fundo_Gratinante d-lg-flex min-vh-100 w-100">

        <!-- LADO ESQUERDO (FORM) -->
        <div class="contents d-flex align-items-center justify-content-center w-100">

            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-6 col-lg-8 col-xl-7 d-flex justify-content-center align-items-center">

                        <form class="card shadow p-4 w-100 m-3 v" action="/loginSubmit" method="post">
                            @csrf

                            <h4 class="mb-4 text-center">Acesso ao Sistema</h4>

                            <div class="mb-3">
                                <label class="form-label">Usuário</label>
                                <input name="usuario" type="text"
                                    class="form-control  bg-secondary bg-opacity-10 border-2 {{ $estilo_In_User }}"
                                    value="{{ old('usuario') }}">

                                {{-- Erros Usuario --}}
                                <label class="text-danger ">{{ $user }}</label>
                                <label class="text-danger ">{{ $erroSession }}</label>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Senha</label>
                                <input name="senha" type="password"
                                    class="form-control bg-secondary bg-opacity-10 border-2 {{ $estilo_In_Senha }}"
                                    id="tokenInput" value="{{ old('senha') }}" placeholder="">

                                {{-- Erros Senha --}}
                                <label class="text-danger ">{{ $senha }}</label>
                                <label class="text-danger ">{{ $erroSession }}</label>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Local</label>
                                <select name="local"
                                    class="form-select bg-secondary bg-opacity-10 border-2 {{ $estilo_In_Local }}">

                                    <option class="form-select" value="escritorio"
                                        {{ old('local') == 'escritorio' ? 'selected' : '' }}>
                                        Escritório
                                    </option>

                                    <option class="form-select" value="operacao"
                                        {{ old('local') == 'operacao' ? 'selected' : '' }}>
                                        Operação
                                    </option>

                                    <option class="form-select" value="adm"
                                        {{ old('local') == 'adm' ? 'selected' : '' }}>
                                        Administrador
                                    </option>

                                </select>
                                <label class="text-danger ">{{ $erroSession_local }}</label>
                            </div>

                            <button class="btn btn-primary w-100 mb-3 py-2 mt-3" type="submit">
                                Enviar
                            </button>

                        </form>

                    </div>
                </div>
            </div>

        </div>

        <!-- LADO DIREITO -->
        <div id="Logo" class="d-flex d-lg-flex w-100 align-items-center justify-content-center Logo">
            <svg id="Logo_coroa" width="500" height="400" fill="currentColor">

                {{-- Animação para o Titulo e Coroa SVG --}}
                <style>
                    .texto {
                        transform: translateX(300px);
                        opacity: 0;
                        animation: textoEntrar 1.5s ease forwards;
                    }

                    @keyframes textoEntrar {
                        to {
                            transform: translateX(0);
                            opacity: 1;
                        }
                    }

                    @media (max-width: 991px) {
                        
                        #Logo_coroa{
                            display: none;
                        }
                        .Logo !important{
                            display: none;
                        }
                    }
                </style>

                <!-- Coroa -->
                <g id="g9" fill="currentColor" transform="translate(-585.90172,-620.73042)">
                    <g id="g58" inkscape:export-filename="Logo_Rj.svg" inkscape:export-xdpi="96"
                        inkscape:export-ydpi="96" transform="translate(50.911688,-7.7781746)" fill="currentColor">
                        <rect fill="currentColor" id="rect11" width="72.482002" height="72.482002" x="921.42493"
                            y="-87.528809" transform="matrix(0.65937394,0.75181514,-0.65937394,0.75181514,0,0)"
                            ry="5.0624571" />
                        <g id="g56" transform="translate(132.64583,-101.24656)" fill="currentColor">
                            <path fill="currentColor"
                                d="m 403.04686,749.31211 33.96245,140.97622 51.90488,0.3204 39.72966,-41.01126 -5.76721,-7.04881 -38.12766,40.05006 -39.72966,-0.6408 -25.95244,-105.41177 1.2816,-0.6408 18.90363,16.98123 54.46809,50.30288 7.36921,-5.12641 -93.23655,-86.18774 c 0,0 -0.3204,-0.9612 -4.806,-2.5632 z"
                                id="path26" />
                            <path fill="currentColor"
                                d="m 662.21707,749.31211 -33.96245,140.97622 -51.90488,0.3204 -39.72966,-41.01126 5.76721,-7.04881 38.12766,40.05006 39.72966,-0.6408 25.95244,-105.41177 -1.2816,-0.6408 -18.90363,16.98123 -54.46809,50.30288 -7.36921,-5.12641 93.23655,-86.18774 c 0,0 0.3204,-0.9612 4.806,-2.5632 z"
                                id="path26-5" />
                        </g>
                    </g>
                </g>

                <!-- Texto -->
                <text x="20" y="250" class="texto" fill="currentColor" font-size="40">
                    Bem Vindo!!
                </text>

            </svg>
        </div>

    </div>
@endsection
