<h3>Dashboard</h3>

<div class="d-flex flex-row justify-content-between flex-wrap-reverse mt-5">
    <div>
        <select name="" id="">
            <?php
            for ($c = 1; $c <= 10; $c++) {
                echo "<option value=\"$c\">$c</option>";
            }
            ?>
        </select>
        <label for=""> Resultados por páginas</label>
    </div>
    <div>
        <label for="">Buscar</label>
        <input type="search">
    </div>
</div>

<div style="overflow-x: auto;">
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th scope="col">Nome</th>
                <th scope="col">Curso</th>
                <th scope="col">Concedente</th>
                <th scope="col">Orientador(a)</th>
                <th scope="col">Situação</th>
                <th scope="col">Ações</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Francisco Mozar Rodrigues Junior</td>
                <td>Sistemas para Internet</td>
                <td>Empresa X</td>
                <td>Marcelo Santos</td>
                <td>Para análise</td>
                <td>
                    <button class="btn">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots-vertical" viewBox="0 0 16 16">
                            <path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z" />
                        </svg>
                    </button>
                </td>
            </tr>
            <tr>
                <td>Francisco Mozar Rodrigues Junior</td>
                <td>Sistemas para Internet</td>
                <td>Empresa X</td>
                <td>Marcelo Santos</td>
                <td>Para análise</td>
                <td>
                    <button class="btn">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots-vertical" viewBox="0 0 16 16">
                            <path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z" />
                        </svg>
                    </button>
                </td>
            </tr>
        </tbody>
    </table>
</div>

<div class="d-flex flex-row justify-content-between flex-wrap mt-2 mb-5">
    <span class="fw-bold">Mostrando 1 a 7 de 60 registros</span>
    <div class="d-flex flex-row">
        <button class="d-flex btn btn-success rounded-circle align-items-center me-1">1</button>
        <button class="d-flex btn btn-outline-dark rounded-circle align-items-center me-1">2</button>
        <button class="d-flex btn btn-outline-dark rounded-circle align-items-center me-1">3</button>
        <button class="d-flex btn btn-outline-dark rounded-circle align-items-center me-1">...</button>
        <button class="d-flex btn btn-outline-dark rounded-pill align-items-center me-1">Último</button>
    </div>
            
</div>

<a href="../pi4/termo/cadastrar-termo.php" class="btn btn-success shadow-lg" title="Cadastre um novo estágio" style="position: fixed; bottom: 70px; right: 30px;">Cadastrar estágio</a>