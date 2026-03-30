<link rel="stylesheet" href="<?= URL ?>/assets/css/pages/admin.css">


<div class="container-fluid">
  <section id="dashboard">
    <div class="row g-4">
      <div class="col-lg-3 col-12">
        <div class="card card-dashboard shadow-sm border-0">
          <div class="card-body p-4">
            <div class="d-flex align-items-start justify-content-between">
              <div>
                <h2>Total de Funcionários</h2>
                <span class="text-muted fs-2">
                  4
                </span>
              </div>

              <div class="card-icon">
                <i class="ri-group-line fs-1"></i>
              </div>
            </div>

            <hr>

            <div class="d-flex align-items-center justify-content-between">
              <a href="#" class="text-decoration-underline text-danger fs-5">Visualizar</a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-12">
        <div class="card card-dashboard shadow-sm border-0">
          <div class="card-body p-4">
            <div class="d-flex align-items-start justify-content-between">
              <div>
                <h2>Total de Pacientes</h2>
                <span class="text-muted fs-2">
                  2
                </span>
              </div>

              <div class="card-icon">
                <i class="ri-team-line fs-1"></i>
              </div>
            </div>

            <hr>

            <div class="d-flex align-items-center justify-content-between">
              <a href="#" class="text-decoration-underline text-danger fs-5">Visualizar</a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-12">
        <div class="card card-dashboard shadow-sm border-0">
          <div class="card-body p-4">
            <div class="d-flex align-items-start justify-content-between">
              <div>
                <h2>Valor do Mês</h2>
                <span class="text-muted fs-2">18.000,00kz</span>
              </div>

              <div class="card-icon">
                <i class="ri-wallet-3-line fs-1"></i>
              </div>
            </div>

            <hr>

            <div class="d-flex align-items-center justify-content-between">
              <a href="#" class="text-decoration-underline text-danger fs-5">Visualizar</a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-12">
        <div class="card card-dashboard shadow-sm border-0">
          <div class="card-body p-4">
            <div class="d-flex align-items-start justify-content-between">
              <div>
                <h2>Relatório Gerados</h2>
                <span class="text-muted fs-2">18</span>
              </div>

              <div class="card-icon">
                <i class="ri-draft-line fs-1"></i>
              </div>
            </div>

            <hr>

            <div class="d-flex align-items-center justify-content-between">
              <a href="#" class="text-decoration-underline text-danger fs-5">Visualizar</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <section id="grafico">
    <div class="row mt-2 g-4">
      <div class="col-12 col-md-8 d-flex">
        <div class="card shadow-sm p-4 w-100">
          <h2>Desempenho</h2>
          <div id="grafico-coluna"></div>
        </div>
      </div>

      <div class="col-12 col-md-4 d-flex">
        <div class="card shadow-sm p-4 w-100">
          <h2>Total Mensal</h2>
          <div id="grafico-torta"></div>
        </div>
      </div>
    </div>
  </section>


  <section id="tabela-pessoa" class="mt-4">
    <div class="row">
      <div class="col-12">
        <div class="card shadow-sm border-0 mt-4">
          <div class="card-header bg-white border-0 py-3">
            <div class="d-flex justify-content-between align-items-center flex-wrap gap-3">
              <div>
                <h3 class="fs-3">
                  <i class="ri-group-line me-2 fs-2"></i>
                  Pessoas no Sistema
                </h3>
              </div>

              <div class="d-flex align-items-center gap-4">
                <div class="position-relative">
                  <i class="ri-search-line search-icon fs-4"></i>
                  <input type="search" class="form-control search-input" placeholder="Buscar...">
                </div>

                <select name="" id="filtroTipo" class="form-select w-auto fs-5">
                  <option value="">Todos</option>
                  <option value="1">Administrador</option>
                  <option value="2">Funcionários</option>
                  <option value="paciente">Pacientes</option>
                </select>

                <div class="dropdown">
                  <button class="btn btn-success fs-4 dropdown-toggle" type="button" data-bs-toggle="dropdown">
                    <i class="ri-add-line"></i>
                    Novo Cadastro
                  </button>

                  <ul class="dropdown-menu dropdown-menu-end shadow-lg fs-5">
                    <li>
                      <a class="dropdown-item fs-4 d-flex align-items-center gap-2" href="#">
                        <i class="ri-user-line"></i>
                        Funcionário
                      </a>
                    </li>

                    <li>
                      <a class="dropdown-item fs-4 d-flex align-items-center gap-2" href="#">
                        <i class="ri-user-heart-line"></i>
                        Paciente
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>

          <div class="card-body">
            <div class="table-responsive">
              <table class="table text-center mt-3 table-bordered align-middle">
                <thead class="table-light">
                  <tr class="text-center bg-tabela">
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Data de Nascimento</th>
                    <th>Classificação</th>
                    <th>Criado em</th>
                    <th>Criado Por</th>
                    <th>Ações</th>
                  </tr>
                </thead>

                <tbody>
                  <tr>
                    <td>1</td>
                    <td>Sophia</td>
                    <td>02/12/1999</td>
                    <td>Funcionário/a</td>
                    <td>10/11/2079</td>
                    <td>Daisy Luna</td>

                    <td>
                      <div class="d-flex justify-content-center gap-2">
                        <a href="#" class="btn btn-secondary btn-sm fs-6">
                          <i class="ri-eye-line"></i>
                        </a>

                        <a href="#" class="btn btn-success btn-sm fs-6">
                          <i class="ri-edit-line"></i>
                        </a>

                        <a href="#" class="btn btn-danger btn-sm fs-6" onclick="return confirm('Tem certeza?')">
                          <i class="ri-delete-bin-line"></i>
                        </a>

                      </div>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>