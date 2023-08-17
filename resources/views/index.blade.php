@extends('principal')
@section('titulo', 'Myfood')
@section('conteudo')
  
<section class="container w-full flex flex-col">

<!--TOPO-->
        <div class="central relative flex flex-col items-center gap-2 mt-48 max-[665px]:mt-36   ">
            <h1 class="text-4xl max-[665px]:text-xl">Tudo pra facilitar seu dia a dia</h1>
            <p class=" text-slate-500 max-[665px]:text-sm">O que você precisa está aqui. Peça e receba onde estiver.</p>
            <div class="buscar relative w-4/5 flex justify-center items-center gap-8 pt-5 max-[665px]:flex-col max-[665px]:w-full  max-[1500px]:w-full ">
                <input type="text" placeholder="Endereço de entrega e número" class="w-6/12 h-12 border pl-9 max-[665px]:w-full">
                <button  class="bg-red-600 text-white text-sm font-medium w-40 h-12 rounded hover:bg-red-700 max-[665px]:w-full max-[665px]:border-none">Buscar</button>
            </div>
        </div>

        {{-- <x-alert type='danger' message='usuário e/ou senha inválidos'/>
        <x-alert type='info' message='cadastro realizado com sucesso'/> --}}

<!--CARDS 1-->
        <div class="cards1 flex w-full justify-center gap-10 mt-10 ">
            <div class="cardleft relative rounded-2xl bg-red-600 text-white font-medium p-6 w-1/4 h-52 cursor-pointer hover:scale-105 max-[665px]:w-2/4 max-[1020px]:w-2/5 max-[1500px]:w-2/6 max-[1560px]:flex max-[665px]:justify-center">
                <a href="restaurantes">
                    <h1 class="text-4xl max-[1560px]:text-3xl max-[761px]:text-xl">Resturante</h1>
                    <a href="restaurantes" class="bg-red-700 p-2 rounded-xl absolute bottom-5">Ver opções ></a>
                    <img class="absolute bottom-0 right-0 max-[665px]:bottom-14 max-[665px]:right-20 max-[665px]:w-36 max-[1020px]:right-0 max-[1020px]:w-36  max-[1500px]:w-3/5  " src="https://static.ifood-static.com.br/image/upload/f_auto/webapp/landingV2/restaurant.png" alt="hambuger">
                    <!--src="/src/img/restaurant.webp"-->
                </a>
            </div>
           
            <div class="cardleft relative rounded-2xl bg-lime-400 text-white  font-medium p-6 w-1/4 h-52 cursor-pointer hover:scale-105 max-[665px]:w-2/4 max-[1020px]:w-2/5 max-[1500px]:w-2/6 max-[1560px]:flex max-[665px]:justify-center">
                <a href="" class="">
                    <h1 class="text-4xl max-[1560px]:text-3xl max-[761px]:text-xl">Mercado</h1>
                <a href="" class="bg-lime-500 p-2 rounded-xl absolute bottom-5">Buscar lojas ></a>
                <img class="absolute bottom-0 right-0 max-[665px]:bottom-14 max-[665px]:right-20 max-[665px]:w-36 max-[1020px]:right-0 max-[1020px]:w-36 max-[1700px]:w-56 " src="https://static.ifood-static.com.br/image/upload/f_auto/webapp/landingV2/market.png" alt="carrinho de compras">
                <!--src="/src/img/market.webp"-->
                </a>
            </div>
        </div>


<!--CARDS 2-->
        <div class="cards2 flex justify-center items-center w-full gap-32 mt-10 mb-24 max-[665px]:gap-12 max-[688px]:gap-10 max-[1200px]:gap-16 max-[1500px]:gap-44">
            <div class="cardsmin flex flex-col items-center mt-10 hover:scale-105 max-[665px]:w-auto">
                <a href="#">
                    <div class="cards relative flex flex-col items-center bg-yellow-500 h-12 w-44 rounded-md max-[665px]:h-8">
                        <img class=" absolute bottom-0 max-[665px]:w-24" src="https://static.ifood-static.com.br/image/upload/f_auto/webapp/landingV2/drinks.png">
                        <!--src="/src/img/market.webp"-->                    
                    </div>
                    <a href="" class="font-medium">Bebidas <span>></span></a>
                </a>
            </div>
            <div class="cardsmin flex flex-col items-center mt-10 hover:scale-105 max-[665px]:w-auto">
                <a href="#">
                    <div class="cards relative flex flex-col items-center bg-rose-400 h-12 w-44 rounded-md max-[665px]:h-8">
                        <img class=" absolute bottom-0 max-[665px]:w-20" src="https://static.ifood-static.com.br/image/upload/f_auto/webapp/landingV2/pharmacy.png">
                        <!--src="/src/img/market.webp"-->                    
                    </div>
                    <a href="" class="font-medium">Farmácia <span>></span></a>
                </a>
            </div>
            <div class="cardsmin flex flex-col items-center mt-10 hover:scale-105 max-[665px]:w-auto">
                <a href="#">
                    <div class="cards relative flex flex-col items-center bg-purple-600 h-12 w-44 rounded-md max-[665px]:h-8">
                        <img class=" absolute bottom-0 max-[665px]:w-24 " src="https://static.ifood-static.com.br/image/upload/f_auto/webapp/landingV2/petshop.png">
                        <!--src="/src/img/market.webp"-->        
                                    
                        </div>
                        <a href="" class="font-medium">Pet Shop  <span>></span></a>
                    </div>
                </a>
            </div>
        </div>

<hr class="w-10/12 flex self-center">


<!--MELHORES RESTAURANTES-->
        <div class="melhoresrestaurantes flex flex-col w-full mb-5 mt-5">
            <h1 class="text-3xl mt-10 mb-10 max-[800px]:self-center">Os melhores restaurantes</h1>
            <div class="cardrestaurantes flex gap-2 flex-wrap justify-center">
                <div>
                    <a href=""  class="restaurantes relative border-stone-300 hover:border-stone-400 border rounded-xl flex h-32 w-72 p-3 border-solid gap-4 items-center ">
                        <img src="/src/img/mcdonalds.webp" alt="" class="rounded-full w-16">
                        <div class="text">
                            <p id="fonte">Mcdonald's</p>
                            <p class="text-stone-500">Lanches</p>
                        </div>
                        <svg class="w-5 absolute left-64 bottom-24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path fill-rule="evenodd" clip-rule="evenodd" d="M21.007 8.27C22.194 9.125 23 10.45 23 12c0 1.55-.806 2.876-1.993 3.73.24 1.442-.134 2.958-1.227 4.05-1.095 1.095-2.61 1.459-4.046 1.225C14.883 22.196 13.546 23 12 23c-1.55 0-2.878-.807-3.731-1.996-1.438.235-2.954-.128-4.05-1.224-1.095-1.095-1.459-2.611-1.217-4.05C1.816 14.877 1 13.551 1 12s.816-2.878 2.002-3.73c-.242-1.439.122-2.955 1.218-4.05 1.093-1.094 2.61-1.467 4.057-1.227C9.125 1.804 10.453 1 12 1c1.545 0 2.88.803 3.732 1.993 1.442-.24 2.956.135 4.048 1.227 1.093 1.092 1.468 2.608 1.227 4.05Zm-4.426-.084a1 1 0 0 1 .233 1.395l-5 7a1 1 0 0 1-1.521.126l-3-3a1 1 0 0 1 1.414-1.414l2.165 2.165 4.314-6.04a1 1 0 0 1 1.395-.232Z" fill="#ff8f8f"></path></g></svg>
                    </a>
                </div>
                <div>
                    <a href=""  class="restaurantes relative border-stone-300 hover:border-stone-400  border rounded-xl flex h-32 w-72 p-3 border-solid gap-4 items-center ">
                        <img src="/src/img/cocobambu.webp" alt="" class="rounded-full w-16">
                        <div class="text">
                            <p id="fonte">Coco Bambu</p>
                            <p class="text-stone-500">Frutos do Mar</p>
                        </div>
                        <svg class="w-5 absolute left-64 bottom-24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path fill-rule="evenodd" clip-rule="evenodd" d="M21.007 8.27C22.194 9.125 23 10.45 23 12c0 1.55-.806 2.876-1.993 3.73.24 1.442-.134 2.958-1.227 4.05-1.095 1.095-2.61 1.459-4.046 1.225C14.883 22.196 13.546 23 12 23c-1.55 0-2.878-.807-3.731-1.996-1.438.235-2.954-.128-4.05-1.224-1.095-1.095-1.459-2.611-1.217-4.05C1.816 14.877 1 13.551 1 12s.816-2.878 2.002-3.73c-.242-1.439.122-2.955 1.218-4.05 1.093-1.094 2.61-1.467 4.057-1.227C9.125 1.804 10.453 1 12 1c1.545 0 2.88.803 3.732 1.993 1.442-.24 2.956.135 4.048 1.227 1.093 1.092 1.468 2.608 1.227 4.05Zm-4.426-.084a1 1 0 0 1 .233 1.395l-5 7a1 1 0 0 1-1.521.126l-3-3a1 1 0 0 1 1.414-1.414l2.165 2.165 4.314-6.04a1 1 0 0 1 1.395-.232Z" fill="#ff8f8f"></path></g></svg>
                    </a>
                </div>
                <div>
                    <a href=""  class="restaurantes relative border-stone-300 hover:border-stone-400  border rounded-xl flex h-32 w-72 p-3 border-solid gap-4 items-center ">
                        <img src="/src/img/chinainbox.webp" alt="" class="rounded-full w-16">
                        <div class="text">
                            <p id="fonte">China in Box</p>
                            <p class="text-stone-500">Chinesa</p>
                        </div>
                        <svg class="w-5 absolute left-64 bottom-24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path fill-rule="evenodd" clip-rule="evenodd" d="M21.007 8.27C22.194 9.125 23 10.45 23 12c0 1.55-.806 2.876-1.993 3.73.24 1.442-.134 2.958-1.227 4.05-1.095 1.095-2.61 1.459-4.046 1.225C14.883 22.196 13.546 23 12 23c-1.55 0-2.878-.807-3.731-1.996-1.438.235-2.954-.128-4.05-1.224-1.095-1.095-1.459-2.611-1.217-4.05C1.816 14.877 1 13.551 1 12s.816-2.878 2.002-3.73c-.242-1.439.122-2.955 1.218-4.05 1.093-1.094 2.61-1.467 4.057-1.227C9.125 1.804 10.453 1 12 1c1.545 0 2.88.803 3.732 1.993 1.442-.24 2.956.135 4.048 1.227 1.093 1.092 1.468 2.608 1.227 4.05Zm-4.426-.084a1 1 0 0 1 .233 1.395l-5 7a1 1 0 0 1-1.521.126l-3-3a1 1 0 0 1 1.414-1.414l2.165 2.165 4.314-6.04a1 1 0 0 1 1.395-.232Z" fill="#ff8f8f"></path></g></svg>
                    </a>
                </div>
                <div>
                    <a href=""  class="restaurantes relative border-stone-300 hover:border-stone-400  border rounded-xl flex h-32 w-72 p-3 border-solid gap-4 items-center ">
                        <img src="/src/img/habibs.webp" alt="" class="rounded-full">
                        <div class="text">
                            <p id="fonte">Habib's</p>
                            <p class="text-stone-500">Lanches</p>
                        </div>
                        <svg class="w-5 absolute left-64 bottom-24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path fill-rule="evenodd" clip-rule="evenodd" d="M21.007 8.27C22.194 9.125 23 10.45 23 12c0 1.55-.806 2.876-1.993 3.73.24 1.442-.134 2.958-1.227 4.05-1.095 1.095-2.61 1.459-4.046 1.225C14.883 22.196 13.546 23 12 23c-1.55 0-2.878-.807-3.731-1.996-1.438.235-2.954-.128-4.05-1.224-1.095-1.095-1.459-2.611-1.217-4.05C1.816 14.877 1 13.551 1 12s.816-2.878 2.002-3.73c-.242-1.439.122-2.955 1.218-4.05 1.093-1.094 2.61-1.467 4.057-1.227C9.125 1.804 10.453 1 12 1c1.545 0 2.88.803 3.732 1.993 1.442-.24 2.956.135 4.048 1.227 1.093 1.092 1.468 2.608 1.227 4.05Zm-4.426-.084a1 1 0 0 1 .233 1.395l-5 7a1 1 0 0 1-1.521.126l-3-3a1 1 0 0 1 1.414-1.414l2.165 2.165 4.314-6.04a1 1 0 0 1 1.395-.232Z" fill="#ff8f8f"></path></g></svg>
                    </a>
                </div>
                <div>
                    <a href=""  class="restaurantes relative border-stone-300 hover:border-stone-400  border rounded-xl flex h-32 w-72 p-3 border-solid gap-4 items-center ">
                        <img src="/src/img/outback.webp" alt="" class="rounded-full w-16">
                        <div class="text">
                            <p id="fonte">Outback Steakhouse</p>
                            <p class="text-stone-500">Lanches</p>
                        </div>
                        <svg class="w-5 absolute left-64 bottom-24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path fill-rule="evenodd" clip-rule="evenodd" d="M21.007 8.27C22.194 9.125 23 10.45 23 12c0 1.55-.806 2.876-1.993 3.73.24 1.442-.134 2.958-1.227 4.05-1.095 1.095-2.61 1.459-4.046 1.225C14.883 22.196 13.546 23 12 23c-1.55 0-2.878-.807-3.731-1.996-1.438.235-2.954-.128-4.05-1.224-1.095-1.095-1.459-2.611-1.217-4.05C1.816 14.877 1 13.551 1 12s.816-2.878 2.002-3.73c-.242-1.439.122-2.955 1.218-4.05 1.093-1.094 2.61-1.467 4.057-1.227C9.125 1.804 10.453 1 12 1c1.545 0 2.88.803 3.732 1.993 1.442-.24 2.956.135 4.048 1.227 1.093 1.092 1.468 2.608 1.227 4.05Zm-4.426-.084a1 1 0 0 1 .233 1.395l-5 7a1 1 0 0 1-1.521.126l-3-3a1 1 0 0 1 1.414-1.414l2.165 2.165 4.314-6.04a1 1 0 0 1 1.395-.232Z" fill="#ff8f8f"></path></g></svg>
                    </a>
                </div>
            </div>
        </div>


<!--BANNERS-->
        <div class="cardsbanners flex w-full justify-center items-center h-48 gap-2 mt-10 mb-10 max-[1024px]:w-auto max-[800px]:flex-col max-[800px]:h-auto">
            <a class=" max-[800px]:w-60 max-[500px]:w-44 " href="#"><img class="rounded-xl hover:scale-105" src="https://static.ifood-static.com.br/image/upload/t_high,q_100/webapp/landing/landing-banner-1.png" alt=""></a>
            <a class=" max-[800px]:w-60 max-[500px]:w-44" href="#"><img class="rounded-xl hover:scale-105" src="https://static.ifood-static.com.br/image/upload/t_high,q_100/webapp/landing/landing-banner-2.png" alt=""></a>
            <a class=" max-[800px]:w-60 max-[500px]:w-44" href="#"><img class="rounded-xl hover:scale-105" src="https://static.ifood-static.com.br/image/upload/t_high,q_100/webapp/landing/landing-banner-3.png" alt=""></a>
        </div>
        
        <hr class="w-10/12 flex self-center">

<!--MERCADOS-->
        <div class="cardbesrmarkets mb-10 flex flex-col">
            <h1 class="text-3xl mt-10 mb-10 max-[800px]:self-center">Os melhores mercados</h1>
            <div class="cardrestaurantes flex gap-2 flex-wrap justify-center">
                <div>
                    <a href=""  class="mercados border-stone-300 hover:border-stone-400  border rounded-xl flex h-32 w-72 p-3 border-solid gap-4 items-center ">
                        <img src="/src/img/diasuper.webp" alt="" class="rounded-full w-16">
                        <div class="text w-full">
                            <p id="fonte">Dia Supermercado</p>
                        </div>
                        <img src="" alt="">
                    </a>
                </div>
                <div>
                    <a href=""  class="mercados border-stone-300 hover:border-stone-400  border rounded-xl flex h-32 w-72 p-3 border-solid gap-4 items-center ">
                        <img src="/src/img/bigsuper.webp" alt="" class="rounded-full w-16">
                        <div class="text w-full">
                            <p id="fonte">Big</p>
                        </div>
                        <img src="" alt="">
                    </a>
                </div>
                <div>
                    <a href=""  class="mercados border-stone-300 hover:border-stone-400  border rounded-xl flex h-32 w-72 p-3 border-solid gap-4 items-center ">
                        <img src="/src/img/eataly.webp" alt="" class="rounded-full w-16">
                        <div class="text w-full">
                            <p id="fonte">Eataly</p>
                        </div>
                        <img src="" alt="">
                    </a>
                </div>
            </div>
        </div>

<hr class="w-10/12 flex self-center">


<!--PARCEIROS-->
        <div class="parceiros flex w-full justify-center flex-wrap items-center gap-5 mb-10 max-[800px]:flex-col max-[800px]:gap-0 max-[800px]:mb-0 max-[800px]:w-auto max-[800px]:h-2/4">
            <div class="leftentregador items-center justify-center relative flex flex-col w-2/6 h-96">
                <div class="entregador  absolute w-48 right-10 max-[800px]:w-auto max-[800px]:right-0">
                    <h1 class="text-2xl mb-5">Quer fazer entregas pelo Myfood?</h1>
                    <p class="text-xs text-stone-500 mb-3">Faça agora o seu cadastro e comece o quanto antes.</p>
                    <button  class="bg-red-600 text-white font-medium w-32 h-10 rounded-md">Saiba Mais</button>
                </div>
                <img class="w-48 max-[1560px]:hidden absolute left-0  bottom-0  " src="https://www.ifood.com.br/static/images/landing-v2/delivery-man.svg" alt="">
            </div>
            <div class="rightempresas items-center justify-center relative flex flex-col w-2/6 h-96 
            ">
                <div class="empresas absolute w-48 right-10 max-[800px]:w-auto max-[800px]:right-0">
                    <h1 class="text-2xl mb-5">A sua fome de crescer ta no Myfood</h1>
                    <p class="text-xs text-stone-500 mb-3">cadastre seu restaurante ou o seu mercado.</p>
                    <button  class="bg-red-600 text-white font-medium w-32 h-10 rounded-md">Saiba Mais</button>
                </div>
                <img class="w-48  max-[1560px]:hidden absolute  left-0 bottom-0 " src="https://www.ifood.com.br/static/images/landing-v2/store.svg" alt="">
            </div>
        </div>

<hr class="w-10/12 flex self-center">


<!--FOODLOVERS-->
        <div class="parceiros flex w-full justify-center items-center gap-5 mb-10 mt-10 ">
            <div class="foodlovers items-center justify-center relative flex w-full gap-5 max-[1024px]:flex-col">
                <div class="foodlovers">
                    <h1 class="text-3xl mb-5 w-36">Você tem fome de quê?</h1>
                    <p class=" text-stone-500 mb-3 w-80">Descubra como é ser um MyFoodLover e faça parte da nossa revolução!</p>
                    <button  class="bg-red-600 text-white font-medium w-32 h-10 rounded-md">Saiba Mais</button>
                </div>
                <img class="max-[1024px]:w-4/5 max-[1024px]:m-10" src="https://static.ifood-static.com.br/image/upload/t_high,q_100/webapp/landingV2/food-lover-banner.jpg" alt="">
            </div>
        </div>
        <div class="myfoodBenefits flex justify-center w-full mt-10 mb-10">
            <img class="w-4/5" src="/src/img/ifood-benefits-desktop.webp" alt="">
        </div>


        <hr class="w-10/12 flex self-center">
</section>
@stop
