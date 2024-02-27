<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error</title>
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap');
    *{
        padding: 0;
        margin: 0;
        box-sizing: border-box;
        font-family: 'Roboto', sans-serif;
    }
    body{
        width: 100%;
        height: 100%;
        max-width: 1440px;
        margin: 0 auto;
    }
    .header-logo{
        width: 100%;
        height: 100px;
    }
    .header-logo img{
        width: 170px;
    }
    .content-main{
        width: 100%;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }

    .content-main h1{
        font-size: 28px;
        width: 500px;
        color: #185dff;
        text-align: center;
    }

    .content-main img{
        width: 350px;
    }

    .btn-login{
        width: 180px;
        height:  50px;
        background-color: #185dff;
        cursor: pointer;
        border-radius: 15px;
        border: none;
        outline: none;
        margin-bottom: 20px;
    }

    .btn-login a{
        font-size: 18px;
        font-weight: 600;
        color: white;
        text-decoration: none;
    }

</style>
<body>
    <div class="header-logo">
        <img  src="./img/logoAzul.png" alt="logo" />
    </div>
    <div class="content-main">
    <h1>Você não tem permissão para acessar a página</h1>
    <img src="./img/Security On-bro.svg" alt="blocked" />
    <button class="btn-login"><a href="/">Página inicial</a></button>
    </div>
    
    
</body>
</html>