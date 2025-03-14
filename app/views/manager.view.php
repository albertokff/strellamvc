<div style="position: relative;top:50px;" class="box">
    <header id="header">
      <div class="container">
          <div class="row">
              <div class="col-md-9">
                <h2><span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Painel de controle</h2>
              </div>
              <div class="col-md-3">
                  <p><span class="glyphicon glyphicon-time"></span> Seu último login foi em: 12/06/2019</p>
              </div>
          </div>
      </div>
    </header>

    <section class="bread">
      <div class="container">
        <ol class="breadcrumb">
          <li class="active">Home</li>
        </ol>
      </div>
    </section>

    <section class="principal">
        
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                  <div class="list-group">
                    <a href="#" class="list-group-item active cor-padrao" ref_sys="sobre"><span class="glyphicon glyphicon-pencil"></span> Sobre</a>
                      <a href="#" class="list-group-item" ref_sys="cadastrar_equipe"><span class="glyphicon glyphicon-pencil"></span>Cadastrar Equipe</a>
                   <a href="#" class="list-group-item" ref_sys="lista_equipe">
                     <span class="glyphicon glyphicon-list-alt"></span> Lista Equipe <span class="badge">2</span></a>
                  </div>

                </div>

                <div class="col-md-9">
                    <?php
                      if(isset($_POST['editar_sobre'])){
                        $sobre = $_POST['sobre'];
                        $pdo->exec("DELETE FROM tb_sobre");
                        $sql = $pdo->prepare("INSERT INTO tb_sobre VALUES (DEFAULT, ?)");
                        $sql->execute(array($sobre));
                        echo '<div class="alert alert-success" role="alert">O código HTML <b>Sobre</b> foi editado com sucesso!</div>';
                        $sobre = $pdo->prepare("SELECT * FROM tb_sobre");
                        $sobre->execute();
                        $sobre = $sobre->fetch()['sobre'];
                      } else if (isset($_POST['cadastrar_equipe'])) {
                        $nome = $_POST['nome_membro']; 
                        $descricao = $_POST['descricao'];
                        $sql = $pdo->prepare("INSERT INTO tb_equipe VALUES (DEFAULT, ?, ?)");
                        $sql->execute(array($nome, $descricao));
                        echo '<div class="alert alert-success" role="alert">O <span>Cadastro de Equipe</span> foi cadastrado com sucesso!</div>';
                      }
                    ?>
                   <div id="sobre_section" class="panel panel-default">
                          <div class="panel-heading cor-padrao">
                            <h3 class="panel-title">Sobre</h3>
                          </div>
                          <div class="panel-body">
                            <form method="post">
                              <div class="form-group">
                                <label for="email">Código HTML:</label>
                                <textarea name="sobre" style="height: 140px;resize: vertical;" class="form-control"><?php echo $sobre; ?></textarea>
                              </div>
                              <input type="hidden" name="editar_sobre" value="">
                              <button type="submit" name="acao" class="btn btn-default">Submit</button>
                            </form>


                          </div>
                  </div> 

                        <div id="cadastrar_equipe_section" class="panel panel-default">
                          <div class="panel-heading cor-padrao">
                            <h3 class="panel-title">Cadastrar Equipe:</h3>
                          </div>
                          <div class="panel-body">
                            <form method="post">
                               <div class="form-group">
                                <label for="email">Nome do membro:</label>
                                <input type="text" name="nome_membro" class="form-control" />
                              </div>
                              <div class="form-group">
                                <label for="email">Descrição do membro:</label>
                                <textarea name="descricao" style="height: 140px;resize: vertical;" class="form-control"></textarea>
                              </div>
                              <input type="hidden" name="cadastrar_equipe" />

                              <button type="submit" class="btn btn-default">Submit</button>
                            </form>


                          </div>
                  </div> 


                      <div id="lista_equipe_section" class="panel panel-default">
                          <div class="panel-heading cor-padrao">
                            <h3 class="panel-title">Membros da equipe:</h3>
                          </div>
                          <div class="panel-body">
                            <table class="table">
                              <thead>
                                <tr>
                                  <th>ID:</th>
                                  <th>Nome do membro</th>
                                  <th>#</th>
                                </tr>
                              </thead>
                              <tbody>
                                
                                <tr>
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