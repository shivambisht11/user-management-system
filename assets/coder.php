<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Code - Editor</title>
    <script src="https://kit.fontawesome.com/9720ec5bf6.js" crossorigin="anonymous"></script>
</head>

<style>
    
*{
    margin: 0;
    padding: 0;
    font-family: 'Poppins', sans-serif;
    box-sizing: border-box;
}

body{
    background: #454545;
    color: #fff;
}

.container{
    width: 100%;
    height: 100vh;
    padding: 20px;
    display: flex;
    gap: 15px;
}

/* .left{
    height: 10vw;
} */

.left , .right{
    flex-basis: 60%;
    padding: 10px;
    border: 2px solid #000;
    border-radius: 5px;
    overflow: hidden;
    color: #fff;
}


textarea{
    width: 100%;
    height: 25%;
    background: #1f1f1f;
    color: #fff;
    padding: 10px 20px;
    border: 0;
    outline: 0;
    font-size: 18px;
}

iframe{
    width: 100%;
    height: 95%;
    background: #1f1f1f;
    border: 0;
    outline: 0;
    color: #fff;
}

label{
    display: flex;
    align-items: center;
    background: #000;
    height: 30px;
}

label i{
    margin-right: 10px;
    margin-left: 10px;
}
</style>
<body>

<div class="container">

    <div class="left">
        <label><i class="fa-brands fa-html5"></i> HTML</label>
        <textarea id="html-code" onkeyup="run()"></textarea>

        <label><i class="fa-brands fa-css3-alt"></i> CSS</label>
        <textarea id="css-code" onkeyup="run()"></textarea>

        <label><i class="fa-brands fa-square-js"></i> JavaScript</label>
        <textarea id="js-code" onkeyup="run()"></textarea>
    </div>
    <div class="right">
        <label><i class="fa-solid fa-play"></i> Output</label>
        <iframe id="output"></iframe>
    </div>
</div>

<script>
    function run(){
        let = htmlCode = document.getElementById("html-code").value;
        let = cssCode = document.getElementById("css-code").value;
        let = jsCode = document.getElementById("js-code").value;
        let = output = document.getElementById("output");

        output.contentDocument.body.innerHTML = htmlCode +"<style>"+ cssCode+"</style>";
        output.contentWindow.eval(jsCode);
        output.contentWindow.document.body.style.color='white';

    }
</script>

</body>
</html>