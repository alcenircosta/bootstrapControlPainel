<?php  
require_once ('lib/includes.php');
$pdo = new PDO('mysql:host='.$host.';dbname='.$dbname,$user,$password);
$sobre = $pdo->prepare("SELECT * FROM `tb_sobre`");
$sobre->execute();
$sobre = $sobre->fetch()['sobre'];
 
if(isset($_POST['id_delete'])){deletar($pdo, $_POST['id_delete']);}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <title>Painel de Controle</title>
  <!-- Bootstrap -->
  <link href="_css/bootstrap.css" rel="stylesheet">
  <link href="_css/style.css" rel="stylesheet">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Site desenvolvido para por em pratica conhecimentos adquiridos no curso de bootstrap" />
  <meta name="keywords" content="bootstrap, desenvolvimento web, analise de sistemas" />
  <meta name="author" content="Alcenir da Costa"/>
</head>
<body>
  <nav class="navbar navbar-expand-sm fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">Painel de controle</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <svg class="bi bi-justify" width="30px" height="30px" viewBox="0 0 20 20" fill="currentColor" xmlns="http://www.w3.org/2000/svg"></svg>
          <path fill-rule="evenodd" d="M4 14.5a.5.5 0 01.5-.5h11a.5.5 0 010 1h-11a.5.5 0 01-.5-.5zm0-3a.5.5 0 01.5-.5h11a.5.5 0 010 1h-11a.5.5 0 01-.5-.5zm0-3a.5.5 0 01.5-.5h11a.5.5 0 010 1h-11a.5.5 0 01-.5-.5zm0-3a.5.5 0 01.5-.5h11a.5.5 0 010 1h-11a.5.5 0 01-.5-.5z" clip-rule="evenodd"></path>
        </button>
        <div class=" navbar-brand collapse navbar-collapse" id="navbarsExampleDefault">
          <ul  id="menu_principal" class="navbar-nav mr-auto">
            <li class="nav-item active" ref_sys="sobre">
              <a class="nav-link" href="#" >Editar Sobre</a>
            </li>
            <li class="nav-item" ref_sys="cadastrar_equipe">
              <a class="nav-link" href="equipe" > Cadastrar Equipe </a>
            </li>
            <li class="nav-item" ref_sys="listar_equipe">
              <a class="nav-link" href="sobre" > Listar Equipe</a>
            </li>
          </ul>
          <ul class="navbar-nav navbar-right">
            <li class="nav-item"><a class="nav-link" href="?sair"><svg class="bi bi-arrow-bar-right" width="24px" height="24px" viewBox="0 0 20 20" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M12.146 6.646a.5.5 0 01.708 0l3 3a.5.5 0 010 .708l-3 3a.5.5 0 01-.708-.708L14.793 10l-2.647-2.646a.5.5 0 010-.708z" clip-rule="evenodd"></path>
              <path fill-rule="evenodd" d="M8 10a.5.5 0 01.5-.5H15a.5.5 0 010 1H8.5A.5.5 0 018 10zm-2.5 6a.5.5 0 01-.5-.5v-11a.5.5 0 011 0v11a.5.5 0 01-.5.5z" clip-rule="evenodd"></path>
            </svg> Sair</a></li>
          </ul>
        </div>
      </div><!--container-->
    </nav>
    <div style="position:relative;top:70px;" class="box">
      <header id="header">
        <div class="container">
          <div class="row">
            <div class="col-md-10">
              <h2><svg class="bi bi-gear-fill" width="1em" height="1em" viewBox="0 0 20 20" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M11.405 3.05c-.413-1.4-2.397-1.4-2.81 0l-.1.34a1.464 1.464 0 01-2.105.872l-.31-.17c-1.283-.698-2.686.705-1.987 1.987l.169.311c.446.82.023 1.841-.872 2.105l-.34.1c-1.4.413-1.4 2.397 0 2.81l.34.1a1.464 1.464 0 01.872 2.105l-.17.31c-.698 1.283.705 2.686 1.987 1.987l.311-.169a1.464 1.464 0 012.105.872l.1.34c.413 1.4 2.397 1.4 2.81 0l.1-.34a1.464 1.464 0 012.105-.872l.31.17c1.283.698 2.686-.705 1.987-1.987l-.169-.311a1.464 1.464 0 01.872-2.105l.34-.1c1.4-.413 1.4-2.397 0-2.81l-.34-.1a1.464 1.464 0 01-.872-2.105l.17-.31c.698-1.283-.705-2.686-1.987-1.987l-.311.169a1.464 1.464 0 01-2.105-.872l-.1-.34zM10 12.93a2.929 2.929 0 100-5.858 2.929 2.929 0 000 5.858z" clip-rule="evenodd"></path>
              </svg> Painel de Controle</h2>
            </div>
            <div class="col-md-2">
              <p><svg class="bi bi-clock-fill" width="1em" height="1em" viewBox="0 0 20 20" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zM5.5 9.5h4v-5a.5.5 0 011 0V10a.5.5 0 01-.5.5H5.5a.5.5 0 010-1z" clip-rule="evenodd"></path>
              </svg> Último acesso em: 18/04/2019</p>
            </div>
          </div>
        </div>  
      </header>
      <section class="bread">
        <div  class="container">
          <nav  aria-label="breadcrumb">
            <ol style="background:white;" class="breadcrumb">
              <li class="breadcrumb-item active" aria-current="page">Home</li>
            </ol>
          </nav>
        </div>
      </section>
      <section class="principal">
        <div class="container">
          <div class="row">
            <div class="col-md-3">
              <ul  class="list-group">
                <li class="list-group-item cor_padrao" ref_sys="sobre"><a class="list_a" href="sobre" ><svg class="bi bi-brush" width="20px" height="20px" viewBox="0 0 20 20" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path d="M17.213 3.018a.572.572 0 01.755.05.57.57 0 01.058.746c-.941 1.268-3.982 5.293-6.426 7.736a12.89 12.89 0 01-1.952 1.596c-.508.339-1.167.234-1.599-.197-.416-.416-.53-1.047-.213-1.543.347-.542.888-1.273 1.643-1.977 2.521-2.35 6.476-5.44 7.734-6.411z"></path>
                  <path d="M9 14a2 2 0 01-2 2c-1 0-2 0-3.5-.5s.5-1 1-1.5 1.395-2 2.5-2a2 2 0 012 2z"></path>
                </svg> Sobre</a></li>
                <li class="list-group-item" ref_sys="cadastrar_equipe"><a class="list_a" href="cadastrar_equipe" ><svg class="bi bi-brush" width="20px" height="20px" viewBox="0 0 20 20" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path d="M17.213 3.018a.572.572 0 01.755.05.57.57 0 01.058.746c-.941 1.268-3.982 5.293-6.426 7.736a12.89 12.89 0 01-1.952 1.596c-.508.339-1.167.234-1.599-.197-.416-.416-.53-1.047-.213-1.543.347-.542.888-1.273 1.643-1.977 2.521-2.35 6.476-5.44 7.734-6.411z"></path>
                  <path d="M9 14a2 2 0 01-2 2c-1 0-2 0-3.5-.5s.5-1 1-1.5 1.395-2 2.5-2a2 2 0 012 2z"></path>
                </svg> Cadastrar Equipe</a></li>
                <li class="list-group-item" ref_sys="listar_equipe"><a class="list_a" href="listar_equipe" >
                </svg> Lista Equipe</a></li> 
              </ul>
            </div>
            <div id="sobre_section" class="col-md-9">
              <?php  
                cadastrar_equipe($pdo);
              ?>
              <div  class="card margin_down pd_15" >
                <div class="card-header cor_padrao">
                  Sobre:
                </div>
                <form method="post">
                  <div style="padding: 15px;" class="form-group">
                    <label>Código HTML:</label>
                    <textarea name="sobre" style="height: 140px; resize:vertical;margin: 15px 0;" class="form-control"><?php echo $sobre; ?></textarea>
                    <input type="hidden" name="editar_sobre" value=""/>
                    <button  type="submit" name="acao" class="btn btn-primary">Enviar</button>
                  </div>
                </form>
              </div>
              <div id="cadastrar_equipe_section" class="card margin_down pd_15" >
                <div class="card-header cor_padrao">
                  Cadastrar Equipe:
                </div>
                <form method="post">
                  <div style="padding: 15px;" class="form-group">
                    <label>Nome do Membro:</label>
                    <input class="form-control" type="text" name="nome_membro" />
                    <label>Descrição do Membro:</label>
                    <textarea name="descricao" style="height: 100px; resize:vertical;margin: 15px 0;" class="form-control"></textarea>
                    <input type="hidden" name="cadastrar_equipe" />
                    <button type="submit" class="btn btn-primary">Enviar</button>
                  </div>
                </form>
              </div>
              <div id="listar_equipe_section" class="card margin_down pd_15" >
                <div class="card-header cor_padrao">
                  Membros da Equipe:
                </div>
                <div class="panel-body">
                  <table style="border: 1px solid #ccc; " class="table">
                    <thead>
                      <tr>
                        <th>Id:</th>
                        <th>Nome do Membro:</th>
                        <th><svg class="bi bi-trash" width="24px" height="24px" viewBox="0 0 20 20" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                          <path d="M7.5 7.5A.5.5 0 018 8v6a.5.5 0 01-1 0V8a.5.5 0 01.5-.5zm2.5 0a.5.5 0 01.5.5v6a.5.5 0 01-1 0V8a.5.5 0 01.5-.5zm3 .5a.5.5 0 00-1 0v6a.5.5 0 001 0V8z"></path>
                          <path fill-rule="evenodd" d="M16.5 5a1 1 0 01-1 1H15v9a2 2 0 01-2 2H7a2 2 0 01-2-2V6h-.5a1 1 0 01-1-1V4a1 1 0 011-1H8a1 1 0 011-1h2a1 1 0 011 1h3.5a1 1 0 011 1v1zM6.118 6L6 6.059V15a1 1 0 001 1h6a1 1 0 001-1V6.059L13.882 6H6.118zM4.5 5V4h11v1h-11z" clip-rule="evenodd"></path>
                        </svg></th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php 
                      $selecionarMembros = $pdo->prepare("SELECT * FROM `tb_equipe`");
                      $selecionarMembros->execute();
                      $membros = $selecionarMembros->fetchAll();
                      foreach ($membros as $key => $value) {
                       ?>
                       <tr>
                        <td><?php echo $value['id']; ?></td>
                        <td><?php echo $value['nome_membro']; ?></td>
                        <td>
                          <form method="post">
                            <input type="hidden" name="id_delete" value="<?php echo $value['id']; ?>" />
                            <input value="Excluir" type="submit" class="btn btn-danger deletar-membro"/>
                        </form>
                      </td>
                      </tr>
                    <?php  } ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div><!--box-->
    <!-- Scripts -->
    <script src="_js/jquery.js"></script>
    <script src="_js/bootstrap.js"></script>
    <script src="_js/functions.js"></script>
  </body>
  </html>