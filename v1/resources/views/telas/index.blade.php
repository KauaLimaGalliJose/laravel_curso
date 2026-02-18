@extends('layouts.cabecalho.cabecalho')

@section('div_conteiner')
    <div class="d-lg-flex min-vh-100">

        <!-- LADO ESQUERDO (FORM) -->
        <div class="contents d-flex align-items-center justify-content-center w-100">

            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-8 col-lg-6 col-xl-6 d-flex justify-content-center align-items-center">

                        <form class="card shadow p-4 w-100 m-3 v" action="index.php" method="post">

                            <h4 class="mb-4 text-center">Acesso ao Sistema</h4>

                            <div class="mb-3">
                                <label class="form-label">Usuário</label>
                                <input type="text" class="form-control" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Local</label>
                                <select class="form-select">
                                    <option>Escritório</option>
                                    <option>Operação</option>
                                    <option>Administrador</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Token</label>
                                <input type="number" class="form-control" id="tokenInput" placeholder="Escreva aqui..."
                                    required>
                            </div>

                            <button class="btn btn-primary w-100 mb-3 py-2 mt-3" type="submit">
                                Enviar
                            </button>

                            <!-- Teclado Numérico -->
                            <div id="numeros_div" class="d-flex row w-100 ">
                                <div class="d-flex align-items-center justify-content-center  py-2" >

                                    <button type="button" class="btn btn-outline-primary me-3 ms-3 col-4 py-4 "onclick="numeroBtn(1)">1</button>
                                    <button type="button" class="btn btn-outline-primary me-3 col-4 py-4" onclick="numeroBtn(2)">2</button>
                                    <button type="button" class="btn btn-outline-primary col-4 py-4"  onclick="numeroBtn(3)">3</button>

                                </div>

                                <div class="d-flex align-items-center justify-content-center  py-2">
                                    <button type="button" class="btn btn-outline-primary me-3 ms-3 col-4 py-4"  onclick="numeroBtn(4)">4</button>
                                    <button type="button" class="btn btn-outline-primary me-3 col-4 py-4"  onclick="numeroBtn(5)">5</button>
                                    <button type="button" class="btn btn-outline-primary  col-4 py-4" onclick="numeroBtn(6)">6</button>

                                </div>

                                <div class="d-flex align-items-center justify-content-center  py-2">
                                    <button type="button" class="btn btn-outline-primary me-3 ms-3 col-4 py-4" onclick="numeroBtn(7)">7</button>
                                    <button type="button" class="btn btn-outline-primary me-3 col-4 py-4" onclick="numeroBtn(8)">8</button>
                                    <button type="button" class="btn btn-outline-primary col-4 py-4" onclick="numeroBtn(9)">9</button>

                                </div>

                                <div class="d-flex align-items-center justify-content-center  py-2">
                                    <button type="button" class="btn btn-outline-primary col-6 py-4" onclick="numeroBtn(0)">0</button>
                                </div>

                                <div class="d-flex align-items-center justify-content-center ">
                                    <button type="button" class="btn btn-danger col-12 mt-3" onclick="limparBtn()">Limpar Tudo</button>
                                </div>
                            </div>

                        </form>

                    </div>
                </div>
            </div>

        </div>

        <!-- LADO DIREITO -->
        <div class="bg-light d-none d-lg-flex w-100 align-items-center justify-content-center">
            <h3>Criar um Modelo em 3D</h3>
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
