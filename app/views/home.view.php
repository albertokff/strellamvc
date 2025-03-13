
  <div class="box">
    <section class="banner">
      <div class="overlay"></div>
      <div class="container chamada-banner">
        <div class="row">
          <div class="col-md-12 text-center">
            <h2>Strella</h2>
            <p><?= $this->arrDados['banco']['title'] ?></p>
            <a href="">Saiba Mais!</a>
          </div>          
        </div>
      </div>
    </section>
    <section class="cadastro-lead">
      <div class="container">
        <div class="row text-center">
          <div class="col-md-6">
            <h2><i class="bi bi-bookmarks"></i>
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bookmarks" viewBox="0 0 16 16">
              <path d="M2 4a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v11.5a.5.5 0 0 1-.777.416L7 13.101l-4.223 2.815A.5.5 0 0 1 2 15.5V4zm2-1a1 1 0 0 0-1 1v10.566l3.723-2.482a.5.5 0 0 1 .554 0L11 14.566V4a1 1 0 0 0-1-1H4z"/>
              <path d="M4.268 1H12a1 1 0 0 1 1 1v11.768l.223.148A.5.5 0 0 0 14 13.5V2a2 2 0 0 0-2-2H6a2 2 0 0 0-1.732 1z"/>
            </svg>
              Entre na nossa lista!            
            </h2>
          </div>
          <div class="col-md-6">
            <form method="post">
              <input type="text" name="nome" /><input type="submit" value="Enviar" />
            </form>
          </div>
        </div>
      </div>
    </section>
    <section class="depoimento text-center">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h2>Depoimento</h2>
            <blockquote>
              <p class="mb-0">"O marketing nos dias atuais é um cenário fascinante e dinâmico. Com a ascensão das mídias sociais e o advento da tecnologia, as empresas têm novas oportunidades para se conectar com seu público-alvo. A personalização se tornou a chave para o sucesso, permitindo que as marcas ofereçam experiências sob medida para cada cliente. A análise de dados desempenha um papel crucial, fornecendo insights valiosos para tomada de decisões estratégicas. No entanto, a concorrência está mais acirrada do que nunca, tornando a criatividade e a inovação aspectos essenciais para se destacar no mercado atual. É um emocionante desafio que continua a evoluir a cada dia."</p>
            </blockquote>
          </div>
        </div>
      </div>
    </section>
    <section class="diferenciais text-center">
      <h2>Conheça nossa empresa!</h2>
      <div class="container">
        <div class="row">
        </div>
      </div>
    </section>  
    <section class="equipe">
      <h2>Equipe</h2>
      <div class="container equipe-container">
        <div class="row">
          
          <div class="col-md-6">
            <div class="equipe-single">
              <div class="row">
                <div class="col-md-2">
                  <div class="user-picture">
                    <div class="user-picture-child"></div>
                  </div>
                </div>
                <div class="col-md-10">

                </div>
              </div>
            </div>
          </div>  

          
        </div>
      </div>
    </section>
    <section class="final-site">
      <div class="container">
        <div class="row">

          <div class="col-md-6">
            <h2>Fale conosco</h2>
            <form>
              <div class="form-group">
                <label for="email">Nome:</label>
                <input type="text" name="nome" class="form-control" id="nome">
              </div>

              <div class="form-group">
                <label for="email">E-mail:</label>
                <input type="email" name="email" class="form-control" id="email">
              </div>              

              <div class="form-group">
                <label for="email">Mensagem:</label>
                <textarea class="form-control"></textarea>
              </div>

              <button type="submit" class="btn btn-primary">Enviar!</button>
            </form>
          </div>
          <div class="col-md-6">
            <h2>Nossos planos</h2>
              <table class="table">
                <thead>
                  <tr>
                    <th>Plano Mensal</th>
                    <th>Plano Trimestral</th>
                    <th>Plano Anual</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>R$ 20,00</td>
                    <td>R$ 55,00</td>
                    <td>R$ 200,00</td>
                  </tr>
                  <tr>
                    <td>R$ 20,00</td>
                    <td>R$ 55,00</td>
                    <td>R$ 200,00</td>
                  </tr>
                  <tr>
                    <td>R$ 20,00</td>
                    <td>R$ 55,00</td>
                    <td>R$ 200,00</td>
                  </tr>
                </tbody>
              </table>
          </div>
        </div>
      </div>
    </section>

  </div>  
<?php
  include('templates/footer.php');

?>