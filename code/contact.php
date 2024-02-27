<?php
include('protect.php');
?>
<!DOCTYPE html>
<html lang="pt">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://kit.fontawesome.com/069a3296de.js" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <title>Contatos</title>
</head>

<style>
  .body {
    display: flex;
    width: 100%;
    max-width: 1440px;
    height: 100%;
    min-height: 100vh;
    font-family: Roboto, sans-serif;
  }

  .sidebar {
    width: 20%;
    background-color: #00547F;
    color: #fff;
    display: flex;
    flex-direction: column;
    justify-content: flex-start;
    align-items: center;
    gap: 40px;
    padding: 15px 10px 0px 10px;
  }

  .sidebar li {
    list-style: none;
    margin: 0;
  }

  .img-sidebar {
    margin: 10px auto;
  }

  .content-sidebar {
    width: 100%;
    padding: 15px 20px;
    cursor: pointer;
    transition: all .3;
  }

  .content-sidebar a {
    color: #fff;
    text-decoration: none;
    display: flex;
    gap: 20px;
    align-items: center;
    justify-content: flex-start;
  }

  .content-sidebar:hover {
    border-radius: 10px;
    background-color: #185dff;
  }

  /* Body */
  .main {
    width: 80%;
    height: 100%;
    min-height: 100vh;
    background-color: #002A40;
    padding: 20px 10px;
  }

  .main h1 {
    color: #fff;
  }

  .container-table {
    width: 100%;
    height: 100%;
    min-height: 130px;
    background-color: rgba(200, 200, 250, 0.1);
    border-radius: 10px;
    padding: 10px 20px;
    color: #fff;
  }

  table {
    background-color: transparent;
  }

  tr {
    height: 40px;
    border-bottom: 1px solid rgba(200, 200, 250, 0.3);
  }
</style>

<body class="body">
<div class="sidebar">
        <li class="img-sidebar">
            <a href="/">
                <img src="img/logoTech.png" alt="logo" width="150px" />
            </a>
        </li>
        <li class="content-sidebar">
            <a href="/home.php">
                <i class="fa-solid fa-gauge"></i>
                Dashboard
            </a>
        </li>
        <li class="content-sidebar">
            <a href="/contact.php">
                <i class="fa-regular fa-address-book"></i>
                Contacts
            </a>
        </li>
        
        <li class="content-sidebar">
            <a href="/logout.php">
                <i class="fa-solid fa-arrow-right-from-bracket"></i>
                Logout
            </a>
        </li>
    </div>
  <div class="main">
    <h1>Clientes</h1>
    <div class="container-table">
      <table>
        <thead>
          <tr>
            <th width="200px" height="40px">Clientes</th>
            <th width="200px">Telefone</th>
            <th width="300px">E-mail</th>
            <th width="250px">Empresa</td>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Maria Oliveira</td>
            <td>(21) 9876-5432</td>
            <td>maria.oliveira@email.com</td>
            <td>TechSoft Solutions</td>
          </tr>
          <tr>
            <td>João Silva</td>
            <td>(11) 1234-5678</td>
            <td>joao.silva@email.com</td>
            <td>DataTech Innovations</td>
          </tr>
          <tr>
            <td>Pedro Santos</td>
            <td>(31) 8765-4321</td>
            <td>pedro.santos@email.com</td>
            <td>Cyber Systems</td>
          </tr>
          <tr>
            <td>Ana Souza</td>
            <td>(41) 2345-6789</td>
            <td>ana.souza@email.com</td>
            <td>Quantum Tech</td>
          </tr>
          <tr>
            <td>Lucas Lima</td>
            <td>(51) 5432-1098</td>
            <td>lucas.lima@email.com</td>
            <td>CodeWave Solutions</td>
          </tr>
          <tr>
            <td>Juliana Pereira</td>
            <td>(61) 7654-3210</td>
            <td>juliana.pereira@email.com</td>
            <td>ByteBlast Technologies</td>
          </tr>
          <tr>
            <td>Rafaela Costa</td>
            <td>(71) 2109-8765</td>
            <td>rafaela.costa@email.com</td>
            <td>Pixel Innovations</td>
          </tr>
          <tr>
            <td>Carlos Rodrigues</td>
            <td>(81) 1098-7654</td>
            <td>carlos.rodrigues@email.com</td>
            <td>LogicSphere Solutions</td>
          </tr>
          <tr>
            <td>Fernanda Almeida</td>
            <td>(91) 8765-4321</td>
            <td>fernanda.almeida@email.com</td>
            <td>TechnoGlobe Innovators</td>
          </tr>
          <tr>
            <td>Marcos Santos</td>
            <td>(101) 2345-6789</td>
            <td>marcos.santos@email.com</td>
            <td>Quantum Solutions</td>
          </tr>
          <tr>
            <td>Luiza Oliveira</td>
            <td>(111) 5432-1098</td>
            <td>luiza.oliveira@email.com</td>
            <td>CodeCraft Innovations</td>
          </tr>
          <tr>
            <td>Guilherme Lima</td>
            <td>(121) 7654-3210</td>
            <td>guilherme.lima@email.com</td>
            <td>DataFlow Technologies</td>
          </tr>
          <tr>
            <td>Isabela Pereira</td>
            <td>(131) 2109-8765</td>
            <td>isabela.pereira@email.com</td>
            <td>TechFusion Solutions</td>
          </tr>
          <tr>
            <td>Diego Costa</td>
            <td>(141) 1098-7654</td>
            <td>diego.costa@email.com</td>
            <td>ByteMatrix Innovations</td>
          </tr>
          <tr>
            <td>Camila Alves</td>
            <td>(151) 8765-4321</td>
            <td>camila.alves@email.com</td>
            <td>LogicHub Technologies</td>
          </tr>
          <!-- Adicione mais linhas conforme necessário -->
        </tbody>
      </table>
    </div>

  </div>
</body>

</html>