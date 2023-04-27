<h3>Termos de Estágio</h3>

<form action="termo.php" method="post" class="d-flex flex-column justify-content-center align-items-center mt-5">

    <div id="dadosEstagiario">

        <h5>Dados do(a) estagiário(a)</h5>

        <div class="container_inputs mt-3">

            <div class="m-3 item1">
                <label class="form-label" for="nome">Nome completo:</label>
                <input type="text" name="nome" id="nome" class="form-control rounded-0 input_longo" placeholder="Digite seu nome completo">
            </div>

            <div class="m-3">
                <label class="form-label" for="data-de-nascimento">Data de nascimento:</label>
                <input type="date" name="data-de-nascimento" id="data-de-nascimento" class="form-control rounded-0 input_menor" placeholder="Número RG">
            </div>

            <div class="m-3">
                <label class="form-label" for="cpf">CPF:</label>
                <input type="text" name="cpf" id="cpf" class="form-control rounded-0 input_menor" placeholder="Digite o número do CPF">
            </div>

            <div class="m-3">
                <label class="form-label" for="rg">RG:</label>
                <input type="text" name="rg" id="rg" class="form-control rounded-0 input_menor" placeholder="Digite o número do RG">
            </div>


            <div class="m-3">
                <label class="form-label" for="orgao-expedidor">Orgão expedidor:</label>
                <input type="text" name="orgao-expedidor" id="orgao-expedidor" class="form-control rounded-0 input_menor" placeholder="Orgão Expedidor">

            </div>

            <div class="m-3">
                <label class="form-label" for="cep">CEP:</label>
                <input type="text" name="cep" id="cep" class="form-control rounded-0 input_menor" placeholder="Digite o CEP">
            </div>

            <div class="m-3 item1">
                <label class="form-label" for="rua">Logradouro</label>
                <input type="text" name="rua" id="rua" class="form-control rounded-0 input_longo" placeholder="Avenida, Rua, Travessa, etc...">
            </div>

            <div class="m-3">
                <label class="form-label" for="numero">Número do endereço:</label>
                <input type="text" name="numero" id="numero" class="form-control rounded-0 input_menor" placeholder="Digite o número do seu endereço">
            </div>

            <div class="m-3">
                <label class="form-label" for="bairro">Bairro:</label>
                <input type="text" name="bairro" id="bairro" class="form-control rounded-0 input_menor" placeholder="Digite o nome do bairro">
            </div>

            <div class="m-3">
                <label class="form-label" for="cidade">Cidade:</label>
                <input type="text" name="cidade" id="cidade" class="form-control rounded-0 input_menor" placeholder="Digite o nome da cidade">
            </div>

            <div class="m-3">
                <label class="form-label" for="uf">UF (Estado):</label>
                <select name="uf" id="uf" class="form-select  rounded-0 input_menor">
                    <option value="PE">PE</option>
                    <option value="BA">BA</option>
                </select>
            </div>

            <div class="m-3">
                <label class="form-label" for="telefone">Seu celular:</label>
                <input type="text" name="telefone" id="telefone" class="form-control rounded-0 input_menor" placeholder="Digite o número de seu celular">
            </div>

            <div class="m-3">
                <label class="form-label" for="email">Seu e-mail:</label>
                <input type="email" name="email" id="email" class="form-control rounded-0 input_menor" placeholder="Digite seu e-mail institucional">
            </div>

        </div>

        <div class="mt-3 d-flex flex-row float-end mt-3 me-1 ms-1">
            <button type="submit" class="btn btn-success me-2">Cadastrar</button>
            <button onclick="mostrarFormEstagio()" type="button" class="btn btn-outline-secondary d-flex align-items-center">
                <span>Próximo</span>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                </svg>
            </button>
        </div>

    </div>

    <div class="mt-3" id="dadosEstagio">

        <h5>Informações do estágio</h5>

        <div class="container_inputs">

            <div class="m-3">
                <label class="form-label" for="seu-curso">Seu curso:</label>
                <div class="d-flex flex-row input_menor">
                    <select name="seu-curso" class="form-select rounded-0 input_menor" id="seu-curso">
                        <option value="sistemas-para-internet">Sistemas para Internet</option>
                        <option value="alimentos">Alimentos</option>
                    </select>
                    <a href="/pi4/curso/cadastro.php" class="btn btn-success rounded-1 ms-2" title="Cadastrar curso">+</a>
                </div>
            </div>

            <div class="m-3">
                <label class="form-label" for="periodo">Período:</label>
                <select name="periodo" class="form-select  rounded-0 input_menor" id="periodo">
                    <option value="1">1º período</option>
                    <option value="2">2º período</option>
                    <option value="3">3º período</option>
                </select>
            </div>

            <div class="m-3">
                <label class="form-label" for="empresa-concedente">Empresa concedente:</label>
                <div class="d-flex flex-row input_menor">
                    <select name="empresa-concedente" class="form-select rounded-0" id="empresa-concedente">
                        <option value="google">Google</option>
                        <option value="facebook">Facebook</option>
                    </select>
                    <a href="/pi4/termo/cadastrar-empresa.php" class="btn btn-success rounded-1 ms-2" title="Cadastrar empresa">+</a>
                </div>
            </div>

            <div class="m-3">
                <label class="form-label" for="tipo-de-estagio">Tipo de estágio:</label>
                <select name="tipo-de-estagio" class="form-select rounded-0 input_menor" id="tipo-de-estagio">
                    <option value="remunerado">Remunerado</option>
                    <option value="sem-remuneracao">Sem remuneração</option>
                </select>
            </div>

            <div class="m-3">
                <label class="form-label" for="data-de-inicio">Data de início:</label>
                <input type="date" name="data-de-inicio" id="data-de-inicio" class="form-control rounded-0 input_menor">
            </div>

            <div class="m-3">
                <label class="form-label" for="data-prevista-para-termino">Data prevista para término:</label>
                <input type="date" name="data-prevista-para-termino" id="data-prevista-para-termino" class="form-control rounded-0 input_menor">
            </div>


            <div class="m-3">
                <label class="form-label" for="nome-da-seguradora">Nome da seguradora:</label>
                <input type="text" name="nome-da-seguradora" id="nome-da-seguradora" class="form-control rounded-0 input_longo" placeholder="Informe o nome da seguradora">
            </div>

            <div class="m-3">
                <label class="form-label" for="numero-do-contrato">Nº do contrato:</label>
                <input type="text" name="numero-do-contrato" id="numero-do-contrato" class="form-control rounded-0 input_menor" placeholder="Informe o número do contrato">
            </div>

            <div class="m-3">
                <label class="form-label" for="professor-orientador">Professor(a) orientador(a)</label>
                <select name="professor-orientador" class="form-select rounded-0 input_longo" id="professor-orientador">
                    <option value="0" aria-checked="true">Selecione o orientador</option>
                    <option value="Marcelo">Marcelo</option>
                    <option value="Orlando">Orlando</option>
                </select>
            </div>

        </div>

        <div class="d-flex flex-row justify-content-between me-1 ms-1">

            <button onclick="mostrarFormEstagiario()" type="button" class="btn btn-outline-secondary mt-3 d-flex align-items-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-left" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z" />
                </svg>
                <span>Voltar</span>
            </button>

            <div class="mt-3 d-flex flex-row">
                <button type="submit" class="btn btn-success me-2">Cadastrar</button>
                <button onclick="mostrarHoarios()" type="button" class="btn btn-outline-secondary d-flex align-items-center">
                    <span>Próximo</span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                    </svg>
                </button>
            </div>

        </div>

    </div>

    <div id="dadosHorarios">

        <p><strong>Informações dos horários do estágio</strong></p>

        <div style="width: 97vw;">

            <div style="overflow-x: auto;">

                <table class="table table-striped table-hover" style="min-width: 97vw;">
                    <thead>
                        <tr>
                            <th scope="col">Segunda-feira</th>
                            <th scope="col">Terça-feira</th>
                            <th scope="col">Quarta-feira</th>
                            <th scope="col">Quinta-feira</th>
                            <th scope="col">Sexta-feira</th>
                            <th scope="col">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="linha-horarios">
                            <td>
                                <div class="d-flex flex-row">
                                    <label for="entrada-segunda">Entrada:</label> <input class="form-control rounded-0" type="time" name="entrada-segunda" id="entrada-segunda">
                                </div>
                                <div class="d-flex flex-row  mt-2">
                                    <label for="saida-segunda">Saída:</label> <input class="form-control rounded-0" type="time" name="saida-segunda" id="saida-segunda">
                                </div>
                            </td>
                            <td>
                                <div class="d-flex flex-row">
                                    <label for="entrada-terca">Entrada:</label> <input class="form-control rounded-0" type="time" name="entrada-terca" id="entrada-terca">
                                </div>
                                <div class="d-flex flex-row  mt-2">
                                    <label for="saida-terca">Saída:</label> <input class="form-control rounded-0" type="time" name="saida-terca" id="saida-terca">
                                </div>
                            </td>
                            <td>
                                <div class="d-flex flex-row">
                                    <label for="entrada-quarta"> Entrada:</label> <input class="form-control rounded-0" type="time" name="entrada-quarta" id="entrada-quarta">
                                </div>
                                <div class="d-flex flex-row  mt-2">
                                    <label for="saida-quarta"> Saída:</label> <input class="form-control rounded-0" type="time" name="saida-quarta" id="saida-quarta">
                                </div>
                            </td>
                            <td>
                                <div class="d-flex flex-row">
                                    <label for="entrada-quinta"> Entrada:</label> <input class="form-control rounded-0" type="time" name="entrada-quinta" id="entrada-quinta">
                                </div>
                                <div class="d-flex flex-row  mt-2">
                                    <label for="saida-quinta"> Saída:</label> <input class="form-control rounded-0" type="time" name="saida-quinta" id="saida-quinta">
                                </div>
                            </td>
                            <td>
                                <div class="d-flex flex-row">
                                    <label for="entrada-sexta"> Entrada:</label> <input class="form-control rounded-0" type="time" name="entrada-sexta" id="entrada-sexta">
                                </div>
                                <div class="d-flex flex-row  mt-2">
                                    <label for="saida-sexta"> Saída:</label> <input class="form-control rounded-0" type="time" name="saida-sexta" id="saida-sexta">
                                </div>
                            </td>
                            <td>
                                <div class="btn-group-vertical" role="group" aria-label="Vertical button group">
                                    <button class="btn btn-outline-secondary rounded-0">Editar</button>
                                    <button class="btn btn-danger rounded-0 mt-2">Excluir</button>
                                    <button class="btn btn-success rounded-0 mt-2">Novo</button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>

            </div>

        </div>

        <div class="d-flex flex-row justify-content-between me-1 ms-1">

            <button onclick="mostrarFormEstagio()" type="button" class="btn btn-outline-secondary mt-3 d-flex align-items-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-left" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z" />
                </svg>
                <span>Voltar</span>
            </button>

            <button type="submit" class="btn btn-success  mt-3">Cadastrar</button>

        </div>

    </div>

</form>