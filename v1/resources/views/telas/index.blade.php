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
                                <input name="usuario" type="text" class="form-control @error('usuario') is-invalid @enderror " value="{{ old('usuario') }}">
                                
                                {{-- Erros de Validação --}}
                                @error('usuario')
                                    <label class="text-danger">{{ $message }}</label>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Local</label>
                                <select name="local" class="form-select @error('local') is-invalid @enderror">
                                    <option>Escritório</option>
                                    <option>Operação</option>
                                    <option>Administrador</option>
                                </select>

                                {{-- Erros de Validação --}}
                                @error('local')
                                    <label class="text-danger">{{ $message }}</label>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Token</label>
                                <input name="token" type="number"
                                    class="form-control @error('token') is-invalid @enderror" id="tokenInput"
                                    value="{{ old('token') }}" placeholder="Escreva aqui..." min="0">

                                {{-- Erros de Validação --}}
                                @error('token')
                                    <label class="text-danger">{{ $message }}</label>
                                @enderror
                            </div>

                            <button class="btn btn-primary w-100 mb-3 py-2 mt-3" type="submit">
                                Enviar
                            </button>

                            <!-- Teclado Numérico -->
                            <div id="numeros_div" class="d-flex row w-100 ">
                                <div class="d-flex align-items-center justify-content-center  py-2">

                                    <button type="button"
                                        class="btn btn-outline-primary me-3 ms-3 col-4 py-4 "onclick="numeroBtn(1)">1</button>
                                    <button type="button" class="btn btn-outline-primary me-3 col-4 py-4"
                                        onclick="numeroBtn(2)">2</button>
                                    <button type="button" class="btn btn-outline-primary col-4 py-4"
                                        onclick="numeroBtn(3)">3</button>

                                </div>

                                <div class="d-flex align-items-center justify-content-center  py-2">
                                    <button type="button" class="btn btn-outline-primary me-3 ms-3 col-4 py-4"
                                        onclick="numeroBtn(4)">4</button>
                                    <button type="button" class="btn btn-outline-primary me-3 col-4 py-4"
                                        onclick="numeroBtn(5)">5</button>
                                    <button type="button" class="btn btn-outline-primary  col-4 py-4"
                                        onclick="numeroBtn(6)">6</button>

                                </div>

                                <div class="d-flex align-items-center justify-content-center  py-2">
                                    <button type="button" class="btn btn-outline-primary me-3 ms-3 col-4 py-4"
                                        onclick="numeroBtn(7)">7</button>
                                    <button type="button" class="btn btn-outline-primary me-3 col-4 py-4"
                                        onclick="numeroBtn(8)">8</button>
                                    <button type="button" class="btn btn-outline-primary col-4 py-4"
                                        onclick="numeroBtn(9)">9</button>

                                </div>

                                <div class="d-flex align-items-center justify-content-center  py-2">
                                    <button type="button" class="btn btn-outline-primary ms-3 col-6 py-4"
                                        onclick="numeroBtn(0)">0</button>
                                    <button type="button" class="btn btn-danger col-6 ms-3 py-4"
                                        onclick="limparBtn()">Limpar Tudo</button>
                                </div>
                            </div>

                        </form>

                    </div>
                </div>
            </div>

        </div>

        <!-- LADO DIREITO -->
        <div id="modelo3D" class="bg-light d-none d-lg-flex w-100 align-items-center justify-content-center">

        </div>

    </div>

    <script>
        function numeroBtn(numero) {
            const input = document.getElementById('tokenInput');
            input.value += numero;
        }

        function limparBtn() {
            document.getElementById('tokenInput').value = '';
        }
    </script>
@endsection
