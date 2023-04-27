<h3>Termos de Estágio</h3>

<form action="termo.php" method="post" class="d-flex flex-column justify-content-center align-items-center mt-5">
  
    <div>

        <h4>Cadastro de curso</h4>

        <div class="container_inputs">

            <div class="m-3">
                <label class="form-label" for="nome">Nome do curso:</label>
                <input type="text" name="nome" id="nome" class="form-control rounded-0 input_longo" placeholder="Digite o nome curso">
            </div>

            <div class="m-3">
                <label class="form-label" for="tipo">Tipo do curso</label>
                <select name="tipo" id="tipo" class="form-select rounded-0 input_menor">
                    <option value="bacharelado">Bacharelado</option>
                    <option value="licenciatura">Licenciatura</option>
                    <option value="tecnologos">Tecnólogos</option>
                    <option value="sequenciais">Sequenciais</option>
                </select>
            </div>

            <div class="m-3">
                <label class="form-label" for="campus">Campus autorizado a ofertar o curso:</label>
                <input type="text" name="campus" id="campus" class="form-control rounded-0 input_longo" placeholder="Digite o nome do campus">
            </div>

            <div class="m-3">
                <label class="form-label" for="carga-horaria">Carga Horária:</label>
                <input type="number" name="carga-horaria" id="carga-horaria" class="form-control rounded-0 input_menor" placeholder="Digite carga horária">
            </div>

            <div class="m-3">
                <label class="form-label" for="duracao">Duração:</label>
                <input type="number" name="duracao" id="duracao" class="form-control rounded-0 input_menor" placeholder="Digite a duração em anos">
            </div>

        </div>

        <button type="submit" class="btn btn-success mt-3 float-end">Cadastrar</button>

    </div>

</form>