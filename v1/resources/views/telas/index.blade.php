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

{{-- Erros de Validação Senha --}}
@error('senha')
    @php
        $senha = $message;
        $estilo_In_Senha = 'is-invalid';
    @endphp
@enderror

{{-- Erros de Validação Usuario --}}
@error('usuario')
    @php
        $user = $message;
        $estilo_In_User = 'is-invalid';
    @endphp
@enderror

{{-- Erros de Validação Local --}}
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
    <div class="d-lg-flex min-vh-100">

        <!-- LADO ESQUERDO (FORM) -->
        <div class="contents d-flex align-items-center justify-content-center w-100">

            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-8 col-lg-6 col-xl-6 d-flex justify-content-center align-items-center">

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
                                <input name="senha" type="text"
                                    class="form-control bg-secondary bg-opacity-10 border-2 {{ $estilo_In_Senha }}"
                                    id="tokenInput" value="{{ old('senha') }}" placeholder="">

                                {{-- Erros Senha --}}
                                <label class="text-danger ">{{ $senha }}</label>
                                <label class="text-danger ">{{ $erroSession }}</label>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Local</label>
                                <select name="local" class="form-select bg-secondary bg-opacity-10 border-2 {{ $estilo_In_Local }}">

                                    <option class="form-select" value="escritorio" {{ old('local') == 'escritorio' ? 'selected' : '' }}>
                                        Escritório
                                    </option>

                                    <option class="form-select" value="operacao" {{ old('local') == 'operacao' ? 'selected' : '' }}>
                                        Operação
                                    </option>

                                    <option class="form-select" value="adm" {{ old('local') == 'adm' ? 'selected' : '' }}>
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
        <div id="modelo3D" class=" d-flex d-lg-flex w-100 align-items-center justify-content-center">

        </div>

    </div>
@endsection
