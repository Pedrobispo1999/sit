<h3>Termos de Estágio</h3>

<form action="termo.php" method="post" class="d-flex flex-column justify-content-center align-items-center mt-5">

    <div>

        <h4>Informações da empresa concedente</h4>

        <div class="container_inputs">

            <div class="m-3">
                <label class="form-label" for="nome-da-empresa">Nome:</label>
                <input type="text" name="nome-da-empresa" id="nome-da-empresa" class="form-control rounded-0 input_longo" placeholder="Digite o nome da empresa">
            </div>

            <div class="m-3">
                <label class="form-label" for="cnpj">CNPJ:</label>
                <input type="number" name="cnpj" id="cnpj" class="form-control rounded-0 input_menor" placeholder="Digite o CNPJ">
            </div>

            <div class="m-3">
                <label class="form-label" for="natureza-juridica-cpf">Natureza jurídica:</label>
                <input type="text" name="natureza-juridica-cpf" id="natureza-juridica-cpf" class="form-control rounded-0 input_menor" placeholder="Digite o número do CPF">
            </div>

            <div class="m-3">
                <label class="form-label" for="representador">Representada por:</label>
                <input type="text" name="representador" id="representador" class="form-control rounded-0 input_longo" placeholder="Digite o nome do(a) representante da empresa">
            </div>

            <div class="m-3">
                <label class="form-label" for="cargo-do-representante">Cargo do(a) representante da empresa:</label>
                <input type="text" name="cargo-do-representante" id="cargo-do-representante" class="form-control rounded-0 input_longo" placeholder="Digite o cargo do(a) representante da empresa">
            </div>

            <div class="m-3">
                <label class="form-label" for="empresa-cep">CEP:</label>
                <input type="text" name="empresa-cep" id="empresa-cep" class="form-control rounded-0 input_menor" placeholder="Digite o CEP">
            </div>

            <div class="m-3 item1">
                <label class="form-label" for="empresa-rua">Logradouro</label>
                <input type="text" name="empresa-rua" id="empresa-rua" class="form-control rounded-0 input_longo" placeholder="Avenida, Rua, Travessa, etc...">
            </div>

            <div class="m-3">
                <label class="form-label" for="empresa-numero">Número do endereço:</label>
                <input type="text" name="empresa-numero" id="empresa-numero" class="form-control rounded-0 input_menor" placeholder="Digite o número do endereço">
            </div>

            <div class="m-3">
                <label class="form-label" for="empresa-bairro">Bairro:</label>
                <input type="text" name="empresa-bairro" id="empresa-bairro" class="form-control rounded-0 input_menor" placeholder="Digite o nome do bairro">
            </div>

            <div class="m-3">
                <label class="form-label" for="empresa-cidade">Cidade:</label>
                <input type="text" name="empresa-cidade" id="empresa-cidade" class="form-control rounded-0 input_menor" placeholder="Digite o nome da cidade">
            </div>

            <div class="m-3">
                <label class="form-label" for="empresa-uf">UF (Estado):</label>
                <select name="empresa-uf" id="empresa-uf" class="form-select  rounded-0 input_menor">
                    <option value="PE">PE</option>
                    <option value="BA">BA</option>
                </select>
            </div>

        </div>

        <button type="submit" class="btn btn-success mt-3 float-end">Cadastrar</button>

    </div>

</form>