<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Agradecimento</title>
</head>
<style>
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  text-decoration: none;
}
body{
    font-family: 'Poppins', sans-serif;
  scroll-behavior: smooth;
  text-rendering: optimizelegibility;
  -webkit-font-smoothing: antialiased;
  font-size: 16px;
}
.container {
    max-width: 1280px;
    display: grid;
    justify-content: center;
    align-items: center;
    margin: 0 auto;
    padding: 0;
    grid-template-columns: 1fr 1fr;
}
.message header{
    padding-bottom: 2rem;
}
    .button a {
    padding: 1rem 2rem;
    display: inline-block;
    border-radius: 3px;
    margin: 1rem 0px;
    background-color: #ff8906;
    color: #fff;
}
    .button {
        padding-top: 8px;
        border-top: 2px solid #ff8906;
    }
</style>
<body>
<div class="container">
    <div class="animation">
        <lottie-player src="/send-animation.json" background="transparent"  speed="1"  style="width: 90%; height: 90vh;"  loop autoplay></lottie-player>
    </div>
    <div class="message">
        <header>
            <h1> > OBRIGADO POR INSCREVER-SE!</h1>
        </header>
        <div class="button">
            <a class="button" href="/index.html">VOLTAR A PÁGINA INICIAL DO SITE</a>
        </div>
    <div>
        
    </div>
    </div>
</div>
<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
</body>
</html>