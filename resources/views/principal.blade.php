<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="icon" type="image/x-icon" href="/src/img/myfoodico.png">
    <link rel="icon" href="/public/src/img/my-food-bag-npv--600.png">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.6/flowbite.min.css" rel="stylesheet" />
    <title>@yield('titulo')</title>
    <style>
        /*HEADER*/

*{
    font-family: 'Roboto', sans-serif;
}

body{
    margin: 0 auto;
    margin-top: -1px;
    margin-left: -10px;
    margin-right: -10px;
    background: rgb(243,244,246);
    background: linear-gradient(180deg, rgba(243,244,246,1) 15%, rgba(255,255,255,1) 15%, rgba(255,255,255,1) 100%);
}

.container h1, .melhoresrestaurantes h1, #fonte {
    font-family: 'Mulish', sans-serif;
    font-weight: 600;
}
span{
    font-family: 'Roboto', sans-serif;
    color: red;
    font-weight: 600;
}

.cardleft, .cardright{
    width: 400px ;    
}
.cardleft:hover, .cardright:hover, .cardsmin:hover{
    transform: scale(1.025);
    transition-duration: 400ms;
    transition-delay: 100ms;  
    
}

.cards:hover, .cardleft:hover, .cardright:hover{
    box-shadow: 0px 4px 10px rgb(204, 204, 204);
}

.central{
    margin-top: 190px ;
}

.buscar svg{
    left: 380px;
}

header{
    margin-top: -5px;
}

.melhoresrestaurantes img, .cardbesrmarkets img{
    width: 50px;
}

.cardsbanners a:hover{
    transform: scale(1.05);
    transition-duration: 500ms;
    transition-delay: 100ms; 
    margin:5px; 
    box-shadow: 0px 4px 10px rgb(204, 204, 204);
    border-radius: 15px;
}


.leftentregador{
    background-image: url(/src/img/blob.svg);
    background-position: center;
    background-repeat: no-repeat;
}
.rightempresas{
    background-image: url(/src/img/blob2.svg);
    background-position: center;
    background-repeat: no-repeat;
}

.container h1, .melhoresrestaurantes h1, #fonte {
    font-family: 'Mulish', sans-serif;
    font-weight: 600;
}

.cardrestaurante img{
    width: 80px;
}

.star{
    width: 15px;
}

.restaurante:hover{
    transform: scale(1.025);
    transition-duration: 400ms;
    transition-delay: 100ms; 
    box-shadow: 0px 3px 10px rgb(226, 226, 226);
    border-radius: 8px;
}

.cardspastelao{
    width: 650px;
}

/*Resposnsive*/

/* .cardrestaurantes{
 display: flex;
 flex-wrap: wrap;
 justify-content: center;
} */


    </style>
</head>
<body class="w-full flex relative flex-col items-center m-0 box-border">
    <header id="page-header" class="burger cabecalho w-full fixed z-10 flex p-6 bg-gray-100 justify-between pr-20">
        <a href="/"><img src="/src/img/myfood.png" alt="" class=" flex w-24" id="logo"></a>
        <button class="btnMenuIcon" id="btnMenuIcon" onclick="AbrirMenu()">☰</button>
        <div class="divLinks hidden w-full flex" id='divLinks'>
            <ul class="boxlinksMenu w-full flex">
                <li><a href=""><p>Entregador</p></a></li>
                <li><a href="restaurantes"><p>Resturante e Mercado</p></a></li>
                <li><a href=""><p>Carreiras</p></a></li>
                <li><a href=""><p>MyFood Card</p></a></li>
            </ul>
            <div class="divLogin">
                <a href="" class="text-rose-600 font-medium hover:text-red-500">criar conta</a>
                <button class="bg-red-600 text-white font-medium rounded-md w-28 h-10 hover:bg-red-700">Entrar</button>
            </div>
        </div>

        <div class="divLinks2 hidden flex w-full h-auto relative" id='divLinks2'>
            <a href="/"><img src="/src/img/myfood.png" alt="" class="w-24 absolute"></a>
            <button class="btnMenuIcon absolute right-1 top-9" onclick="FecharMenu()">X</button>
            <div class="flex justify-center w-full" id='divLinks'>
                <ul class="boxlinksMenu flex flex-col mt-10 items-center gap-3">
                    <li><a href=""><p>Entregador</p></a></li>
                    <li><a href="restaurantes"><p>Resturante e Mercado</p></a></li>
                    <li><a href=""><p>Carreiras</p></a></li>
                    <li><a href=""><p>MyFood Card</p></a></li>
                    <div class="divMenuLogin flex flex-col items-center gap-2">
                    <a href="" class="text-rose-600 font-medium hover:text-red-500">criar conta</a>
                    <button class="bg-red-600 text-white font-medium rounded-md w-28 h-10 hover:bg-red-700">Entrar</button>
                    </div>                
                </ul>
            </div>
        </div>
    </header>


    
    <header id="page-header" class="cabecalho w-full fixed z-10 flex justify-around p-6 bg-gray-100 max-[1000px]:hidden pr-10">
        <div class="esq text-base flex items-center gap-12 text-slate-700">
            <a href="/"><img src="/src/img/myfood.png" alt="" class=" flex w-24"></a>
            <a href=""><p>Entregador</p></a>
            <a href="restaurantes"><p>Resturante e Mercado</p></a>
            <a href=""><p>Carreiras</p></a>
            <a href=""><p>MyFood Card</p></a>
        </div>
        <div class="dir flex items-center gap-8 max-[1000px]:hidden pr-3">
            <a href="" class="text-rose-600 font-medium hover:text-red-500">criar conta</a>
            <button class="bg-red-600 text-white font-medium rounded-md w-28 h-10 hover:bg-red-700">Entrar</button>
        </div>
    </header>
    

<!--burger cabecalho flex flex-col w-auto absolute left-0 top-0  z-10 flex justify-around p-6 bg-gray-100 -->



    <section>
        @yield('conteudo')
    </section>
    <!--FOOTER-->    
    <footer class="rodape text-xl flex flex-col text-stone-600 w-5/6 gap-5 p-10">
        <div class="explore flex flex-col">
            <div class="text flex w-full justify-between ">
                <h1 class="font-medium text-black">Explore por cidades</h1>
                <a class="text-rose-600 text-sm" href="">Ver todas</a>
            </div>
            <div class="explore flex w-full justify-between max-[850px]:hidden">  
                <div class="cidades ">
                    <a href=""> <p>Belo Horizonte</p></a>
                    <a href=""><p>Brasília</p></a>
                    <a href=""> <p>Campinas</p></a>
                    <a href=""><p>Curitiba</p></a>
                    <a href=""><p>Goiânia</p></a>
                </div>
                <div class="cidades">
                    <a href=""><p>Guarulhos</p></a>
                    <a href=""><p>João Pessoa</p></a>
                    <a href=""><p>Natal</p></a>
                    <a href=""><p>Niterói</p></a>
                    <a href=""><p>Porto Alegre</p></a>
                </div>
                <div class="cidades">
                    <a href=""><p>Ribeirão Preto</p></a>
                    <a href=""><p>Rio de Janeiro</p></a>
                    <a href=""><p>Salvado</p></a>
                    <a href=""><p>Santo André</p></a>
                    <a href=""><p>Santos</p></a>
                </div>
                <div class="cidades">
                    <a href=""><p>São Bernardo do Campo</p></a>
                    <a href=""><p>São Caetano do Sul</p></a>
                    <a href=""><p>São Paulo</p></a>
                </div>
            </div> 
        </div>
       
        <hr class="w-10/12 flex self-center">
        <!--MYFOOD FLEX-->
        <div class="myfood flex w-12/12 justify-between mr-80 gap-5 max-[1000px]:mr-0  max-[768px]:flex-col gap-5 ">
            <div class="myfood flex flex-col">
                <h1 class="myfood text-black font-medium">Myfood</h1>
                <div class="myfood">
                    <a href=""><p>Site institucional</p></a>
                    <a href=""><p>Fale conosco</p></a>
                    <a href=""><p>Carreiras</p></a>
                    <a href=""><p>MyFood Eua</p></a>
                </div>
            </div>

            <!--DESCUBRA-->
            <div class="descubra">
                <h1 class="myfood text-black font-medium">Descubra</h1>
                <a href=""><p>Cadastre seu Restaurante ou Mercado</p></a>
                <a href=""><p>Myfood Shop</p></a>
                <a href=""><p>Myfood Card</p></a>
                <a href=""><p>Blog Myfood Empresas</p></a>
            </div>

            <!--SOCIAL-->
            <div class="social flex flex-col">
                <h1 class="myfood text-black font-medium">Social</h1>
 		        <div class="social flex gap-3 mt-2">
                	<a class="FB" href=""><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm3 8h-1.35c-.538 0-.65.221-.65.778v1.222h2l-.209 2h-1.791v7h-3v-7h-2v-2h2v-2.308c0-1.769.931-2.692 3.029-2.692h1.971v3z"/></svg></a>
                	<a class="TW" href=""><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm6.066 9.645c.183 4.04-2.83 8.544-8.164 8.544-1.622 0-3.131-.476-4.402-1.291 1.524.18 3.045-.244 4.252-1.189-1.256-.023-2.317-.854-2.684-1.995.451.086.895.061 1.298-.049-1.381-.278-2.335-1.522-2.304-2.853.388.215.83.344 1.301.359-1.279-.855-1.641-2.544-.889-3.835 1.416 1.738 3.533 2.881 5.92 3.001-.419-1.796.944-3.527 2.799-3.527.825 0 1.572.349 2.096.907.654-.128 1.27-.368 1.824-.697-.215.671-.67 1.233-1.263 1.589.581-.07 1.135-.224 1.649-.453-.384.578-.87 1.084-1.433 1.489z"/></svg></a>
                	<a class="YT" href=""><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm4.441 16.892c-2.102.144-6.784.144-8.883 0-2.276-.156-2.541-1.27-2.558-4.892.017-3.629.285-4.736 2.558-4.892 2.099-.144 6.782-.144 8.883 0 2.277.156 2.541 1.27 2.559 4.892-.018 3.629-.285 4.736-2.559 4.892zm-6.441-7.234l4.917 2.338-4.917 2.346v-4.684z"/></svg></a>
                	<a class="INSTA" href=""><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M14.829 6.302c-.738-.034-.96-.04-2.829-.04s-2.09.007-2.828.04c-1.899.087-2.783.986-2.87 2.87-.033.738-.041.959-.041 2.828s.008 2.09.041 2.829c.087 1.879.967 2.783 2.87 2.87.737.033.959.041 2.828.041 1.87 0 2.091-.007 2.829-.041 1.899-.086 2.782-.988 2.87-2.87.033-.738.04-.96.04-2.829s-.007-2.09-.04-2.828c-.088-1.883-.973-2.783-2.87-2.87zm-2.829 9.293c-1.985 0-3.595-1.609-3.595-3.595 0-1.985 1.61-3.594 3.595-3.594s3.595 1.609 3.595 3.594c0 1.985-1.61 3.595-3.595 3.595zm3.737-6.491c-.464 0-.84-.376-.84-.84 0-.464.376-.84.84-.84.464 0 .84.376.84.84 0 .463-.376.84-.84.84zm-1.404 2.896c0 1.289-1.045 2.333-2.333 2.333s-2.333-1.044-2.333-2.333c0-1.289 1.045-2.333 2.333-2.333s2.333 1.044 2.333 2.333zm-2.333-12c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm6.958 14.886c-.115 2.545-1.532 3.955-4.071 4.072-.747.034-.986.042-2.887.042s-2.139-.008-2.886-.042c-2.544-.117-3.955-1.529-4.072-4.072-.034-.746-.042-.985-.042-2.886 0-1.901.008-2.139.042-2.886.117-2.544 1.529-3.955 4.072-4.071.747-.035.985-.043 2.886-.043s2.14.008 2.887.043c2.545.117 3.957 1.532 4.071 4.071.034.747.042.985.042 2.886 0 1.901-.008 2.14-.042 2.886z"/></svg></a>   
		        </div>
            </div>
        </div>
    </footer>

    <!-- SCRIPTS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
    function AbrirMenu() {
        document.getElementById("divLinks2").style.display = "block";
        document.getElementById("btnMenuIcon").style.display = "none";
        document.getElementById("divLinks").style.display="none";
        document.getElementById("logo").style.display="none";
        }
    function FecharMenu() {
        document.getElementById("divLinks2").style.display = "none";
        document.getElementById("btnMenuIcon").style.display = "block";
        document.getElementById("logo").style.display="block";
    }


    function ExpandirLista() {
        document.getElementById("MaisRestaurantes").style.display = "block";
        document.getElementById("VerMaisRestaurantes").style.display = "none";
        }
    function FecharLista() {
        document.getElementById("MaisRestaurantes").style.display = "none";
        document.getElementById("VerMenosRestaurantes").style.display = "block";   
        document.getElementById("VerMaisRestaurantes").style.display = "block";    
    }

    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.6/flowbite.min.js"></script>
</body>
</html>