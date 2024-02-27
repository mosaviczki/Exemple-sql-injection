<?php
include('protect.php');
?>
<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="./css/home.css" />
    <script src="https://kit.fontawesome.com/069a3296de.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap');

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

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
    .header{
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    .main {
        width: 80%;
        height: 100%;
        background-color: #002A40;
        padding: 20px 10px;
    }

    .container-card {
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    .card {
        width: 30%;
        height: 100%;
        min-height: 130px;
        background-color: rgba(200, 200, 250, 0.1);
        border-radius: 10px;
        padding: 5px 10px;
        text-align: center;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        gap: 30px;
    }

    .card h1 {
        font-size: 30px;
        color: gainsboro;
    }

    .card h2 {
        font-size: 26px;
        color: #fff
    }

    .container-graph-line-one {
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin-top: 20px;
    }

    .donuts {
        width: 250px;
        height: 350px;
    }

    .graph-mix {
        width: 65%;
        height: 100%;
        min-height: 130px;
        background-color: rgba(200, 200, 250, 0.1);
        border-radius: 10px;
        padding: 5px 10px;
        text-align: center;
    }

    .graph-line {
        width: 100%;
        height: 100%;
        min-height: 130px;
        background-color: rgba(200, 200, 250, 0.1);
        border-radius: 10px;
        padding: 5px 10px;
        text-align: center;
        margin-top: 20px;
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
        <div class="header">
            <h1 style="color: #fff;">DASHBOARD</h1>
            <p style="color: #fff; font-size: 18px"><span style="font-weight: 600;">Bem vindo:</span>  <?php echo $_SESSION['email']; ?></p>
        </div>
        
        <div class="container-card">
            <div class="card">
                <h1><i class="fa-solid fa-dollar-sign"></i> Faturamento</h1>
                <h2>R$ 5.2M</h2>
            </div>
            <div class="card">
                <h1><i class="fa-solid fa-money-bill"></i> Despesas</h1>
                <h2>R$1.38M</h2>
            </div>
            <div class="card">
                <h1><i class="fa-solid fa-sack-dollar"></i> Lucro</h1>
                <h2>R$3.82M</h2>
            </div>
        </div>

        <div class="container-graph-line-one">
            <div class="card">
                <div class="graph-donuts">
                    <canvas id="myDonutChart" width="200" height="200"></canvas>
                    <script>
                        // Obtenha o contexto do canvas
                        var ctx = document.getElementById('myDonutChart').getContext('2d');

                        // Defina os dados para o gráfico de donut
                        var data = {
                            labels: ['Meta Total', 'Meta Atingida'],
                            datasets: [{
                                data: [84.5, 15.5], // Valores percentuais para cada categoria
                                backgroundColor: ['#002A40', '#00547F'], // Cores para cada fatia
                                hoverOffset: 4, // Espaçamento ao passar o mouse sobre as fatias
                            }]
                        };

                        // Configure as opções do gráfico
                        var options = {
                            responsive: true,
                            maintainAspectRatio: false,
                            cutout: '60%', // Tamanho do "buraco" no centro (70% cria um donut)
                            title: {
                                display: true,
                                text: 'Margem Lucro Liquido'
                            },
                            plugins:{
                                legend: {
                                    display: true,
                                    position: 'top',
                                    align:'start',
                                    labels: {
                                        color: '#fff'
                                    }
                                }
                            }
                        };

                        // Crie o gráfico de donut
                        var myDonutChart = new Chart(ctx, {
                            type: 'doughnut',
                            data: data,
                            options: options
                        });
                    </script>
                </div>
            </div>

            <div class="graph-mix">
                <canvas id="mixedChart" width="200" height="200"></canvas>

                <script>
                    // Obtenha o contexto do canvas
                    var ctx = document.getElementById('mixedChart').getContext('2d');

                    // Defina os dados para o gráfico misto
                    var data = {
                        labels: ['JAN', 'FEV', 'MAR', 'ABR', 'MAI', 'JUN', 'JUL', 'AGO', 'SET', 'OUT', 'NOV', 'DEZ'],
                        datasets: [{
                            label: 'Barras',
                            data: [10, 20, 15, 25, 30, 20, 15, 40, 28, 30, 20, 11],
                            backgroundColor: 'rgba(75, 192, 192, 0.5)', // Cor das barras
                            borderColor: 'rgba(75, 192, 192, 1)', // Cor da borda das barras
                            borderWidth: 1,
                            type: 'bar' // Tipo de gráfico (barras)
                        }, {
                            label: 'Linha',
                            data: [5, 15, 10, 20, 25, 15, 20, 44, 30, 40, 15, 20],
                            fill: false,
                            borderColor: '#93F205', // Cor da linha
                            borderWidth: 2,
                            type: 'line' // Tipo de gráfico (linha)
                        }]
                    };

                    // Configure as opções do gráfico
                    var options = {
                        responsive: true,
                        maintainAspectRatio: false,
                        scales: {
                            y: {
                                display: false, // Esta opção oculta os rótulos do eixo Y
                                beginAtZero: true,
                            }
                        },
                        plugins:{
                                legend: {
                                    display: true,
                                    position: 'top',
                                    align:'center',
                                    labels: {
                                        color: '#fff'
                                    }
                                }
                            }
                    };

                    // Crie o gráfico misto
                    var mixedChart = new Chart(ctx, {
                        type: 'bar',
                        data: data,
                        options: options
                    });
                </script>
            </div>
        </div>
        <div class="graph-line">
            <canvas id="lineChart" width="200" height="200"></canvas>

            <script>
                // Obtenha o contexto do canvas
                var ctx = document.getElementById('lineChart').getContext('2d');

                // Defina os dados para o gráfico de linha com bolinhas
                var data = {
                    labels: ['JAN', 'FEV', 'MAR', 'ABR', 'MAI', 'JUN', 'JUL', 'AGO', 'SET', 'OUT', 'NOV', 'DEZ'],
                    datasets: [{
                        label: 'Dados',
                        data: [5, 15, 10, 20, 25, 15, 20, 44, 30, 40, 15, 20],
                        borderColor: 'rgba(75, 192, 192, 1)', // Cor da linha
                        borderWidth: 2,
                        fill: false,
                        pointRadius: 5, // Tamanho da bolinha
                        pointBackgroundColor: 'rgba(75, 192, 192, 1)', // Cor da bolinha
                        pointBorderColor: 'rgba(75, 192, 192, 1)', // Cor da borda da bolinha
                        pointStyle: 'circle' // Estilo da bolinha (circle, cross, crossRot, etc.)
                    }]
                };

                // Configure as opções do gráfico
                var options = {
                    responsive: true,
                    maintainAspectRatio: false,
                    scales: {
                        y: {
                            display: false,
                            beginAtZero: true
                        }
                    },
                    plugins:{
                                legend: {
                                    display: true,
                                    position: 'top',
                                    align:'start',
                                    labels: {
                                        color: '#fff'
                                    }
                                }
                            }
                };

                // Crie o gráfico de linha com bolinhas
                var lineChart = new Chart(ctx, {
                    type: 'line',
                    data: data,
                    options: options
                });
            </script>
        </div>
    </div>

</body>

</html>