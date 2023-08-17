@extends('principal')
@section('titulo', 'Restaurantes')
@section('conteudo')


    <section class="container w-full flex flex-col mt-36 mb-24">
        <!--MELHORES RESTAURANTES-->
        <div class="restaurantes relative flex flex-col w-full mt-5">
            <h1 class="text-2xl mb-10 max-[665px]:self-center">Lojas</h1>
            <div class="cardrestaurante w-full flex flex-wrap max-[1274px]:">
                <a href="mcdonalds"  class="restaurante relative flex h-42 w-1/4 p-3 gap-4 items-center justify-center mb-5 hover:shadow-lg hover:rounded-xl  max-[1300px]:w-6/12 max-[665px]:flex-col h-auto">
                    <img src="/src/img/mcdonalds.webp" alt="" class="rounded-full w-24">
                    <div class="text max-[665px]:flex flex-col justify-center items-center">
                        <p id="fonte">Mcdonald's</p>
                        <div class="rating flex w-full h-full gap-1 items-center">
                            <svg class="star w-3" version="1.0" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 64 64" enable-background="new 0 0 64 64" xml:space="preserve" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path fill="#d6ae57" d="M62.799,23.737c-0.47-1.399-1.681-2.419-3.139-2.642l-16.969-2.593L35.069,2.265 C34.419,0.881,33.03,0,31.504,0c-1.527,0-2.915,0.881-3.565,2.265l-7.623,16.238L3.347,21.096c-1.458,0.223-2.669,1.242-3.138,2.642 c-0.469,1.4-0.115,2.942,0.916,4l12.392,12.707l-2.935,17.977c-0.242,1.488,0.389,2.984,1.62,3.854 c1.23,0.87,2.854,0.958,4.177,0.228l15.126-8.365l15.126,8.365c0.597,0.33,1.254,0.492,1.908,0.492c0.796,0,1.592-0.242,2.269-0.72 c1.231-0.869,1.861-2.365,1.619-3.854l-2.935-17.977l12.393-12.707C62.914,26.68,63.268,25.138,62.799,23.737z"></path> </g></svg><p class="text-yellow-500 font-medium text-sm">4.4</p>
                            <p class="text-stone-500">° Lanches ° 1.4 km</p>
                        </div>
                        <div class="time">
                            <p class="text-stone-500">29-39 min ° R$ 6,99</p>
                        </div> 
                    </div>
                </a>
                <a href="habibs"  class="restaurante relative flex h-42 w-1/4 p-3 gap-4 items-center justify-center mb-5 hover:shadow-lg hover:rounded-xl  max-[1300px]:w-6/12 max-[665px]:flex-col h-auto">
                    <img src="/src/img/habibs.webp" alt="" class="rounded-full w-24">
                    <div class="text max-[665px]:flex flex-col justify-center items-center">
                        <p id="fonte">Habib's</p>
                        <div class="rating flex w-full h-full gap-1 items-center">
                            <svg class="star w-3" version="1.0" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 64 64" enable-background="new 0 0 64 64" xml:space="preserve" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path fill="#d6ae57" d="M62.799,23.737c-0.47-1.399-1.681-2.419-3.139-2.642l-16.969-2.593L35.069,2.265 C34.419,0.881,33.03,0,31.504,0c-1.527,0-2.915,0.881-3.565,2.265l-7.623,16.238L3.347,21.096c-1.458,0.223-2.669,1.242-3.138,2.642 c-0.469,1.4-0.115,2.942,0.916,4l12.392,12.707l-2.935,17.977c-0.242,1.488,0.389,2.984,1.62,3.854 c1.23,0.87,2.854,0.958,4.177,0.228l15.126-8.365l15.126,8.365c0.597,0.33,1.254,0.492,1.908,0.492c0.796,0,1.592-0.242,2.269-0.72 c1.231-0.869,1.861-2.365,1.619-3.854l-2.935-17.977l12.393-12.707C62.914,26.68,63.268,25.138,62.799,23.737z"></path> </g></svg><p class="text-yellow-500 font-medium text-sm">4.6</p>
                            <p class="text-stone-500">° Lanches ° 2.4 km</p>
                        </div>
                        <div class="time">
                            <p class="text-stone-500">30-40 min ° R$ 7,99</p>
                        </div> 
                    </div>
                </a>
                <a href="opastelao"  class="restaurante relative flex h-42 w-1/4 p-3 gap-4 items-center justify-center mb-5 hover:shadow-lg hover:rounded-xl  max-[1300px]:w-6/12 max-[665px]:flex-col h-auto">
                    <img src="/src/img/opastelao.png" alt="" class="rounded-full w-24">
                    <div class="text max-[665px]:flex flex-col justify-center items-center">
                        <p id="fonte">O Pastelão</p>
                        <div class="rating flex w-full h-full gap-1 items-center">
                            <svg class="star w-3" version="1.0" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 64 64" enable-background="new 0 0 64 64" xml:space="preserve" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path fill="#d6ae57" d="M62.799,23.737c-0.47-1.399-1.681-2.419-3.139-2.642l-16.969-2.593L35.069,2.265 C34.419,0.881,33.03,0,31.504,0c-1.527,0-2.915,0.881-3.565,2.265l-7.623,16.238L3.347,21.096c-1.458,0.223-2.669,1.242-3.138,2.642 c-0.469,1.4-0.115,2.942,0.916,4l12.392,12.707l-2.935,17.977c-0.242,1.488,0.389,2.984,1.62,3.854 c1.23,0.87,2.854,0.958,4.177,0.228l15.126-8.365l15.126,8.365c0.597,0.33,1.254,0.492,1.908,0.492c0.796,0,1.592-0.242,2.269-0.72 c1.231-0.869,1.861-2.365,1.619-3.854l-2.935-17.977l12.393-12.707C62.914,26.68,63.268,25.138,62.799,23.737z"></path> </g></svg><p class="text-yellow-500 font-medium text-sm">5.0</p>
                            <p class="text-stone-500">° Lanches ° 3.4 km</p>
                        </div>
                        <div class="time">
                            <p class="text-stone-500">80-90 min ° R$ 6,00</p>
                        </div> 
                    </div>
                </a>
                <a href="tiosamjapa"  class="restaurante relative flex h-42 w-1/4 p-3 gap-4 items-center justify-center mb-5 hover:shadow-lg hover:rounded-xl  max-[1300px]:w-6/12 max-[665px]:flex-col h-auto">
                    <img src="/src/img/tiosamjapa.png" alt="" class="rounded-full w-24">
                    <div class="text max-[665px]:flex flex-col justify-center items-center">
                        <p id="fonte">Tio Sam Japa</p>
                        <div class="rating flex w-full h-full gap-1 items-center">
                            <svg class="star w-3" version="1.0" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 64 64" enable-background="new 0 0 64 64" xml:space="preserve" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path fill="#d6ae57" d="M62.799,23.737c-0.47-1.399-1.681-2.419-3.139-2.642l-16.969-2.593L35.069,2.265 C34.419,0.881,33.03,0,31.504,0c-1.527,0-2.915,0.881-3.565,2.265l-7.623,16.238L3.347,21.096c-1.458,0.223-2.669,1.242-3.138,2.642 c-0.469,1.4-0.115,2.942,0.916,4l12.392,12.707l-2.935,17.977c-0.242,1.488,0.389,2.984,1.62,3.854 c1.23,0.87,2.854,0.958,4.177,0.228l15.126-8.365l15.126,8.365c0.597,0.33,1.254,0.492,1.908,0.492c0.796,0,1.592-0.242,2.269-0.72 c1.231-0.869,1.861-2.365,1.619-3.854l-2.935-17.977l12.393-12.707C62.914,26.68,63.268,25.138,62.799,23.737z"></path> </g></svg><p class="text-yellow-500 font-medium text-sm">4.8</p>
                            <p class="text-stone-500">° Lanches ° 5.2 km</p>
                        </div>
                        <div class="time">
                            <p class="text-stone-500">34-44 min ° Grátis</p>
                        </div> 
                    </div>
                </a>               
            </div>
            <button id="VerMaisRestaurantes" class="btnExpand text-red-500  font-medium w-full h-12 border rounded hover:bg-red-600 hover:text-white" onclick="ExpandirLista()">Ver mais</button>

             <!--MAIS RESTAURANTES-->
            
            <div id="MaisRestaurantes" class="cardrestaurante hidden w-full flex max-[1274px]:">
                <div class="cardrestaurante w-full flex flex-wrap max-[1274px]:">
                    <a href="mcdonalds"  class="restaurante relative flex h-42 w-1/4 p-3 gap-4 items-center justify-center mb-5 hover:shadow-lg hover:rounded-xl  max-[1300px]:w-6/12 max-[665px]:flex-col h-auto">
                        <img src="/src/img/mcdonalds.webp" alt="" class="rounded-full w-24">
                        <div class="text max-[665px]:flex flex-col justify-center items-center">
                            <p id="fonte">Mcdonald's</p>
                            <div class="rating flex w-full h-full gap-1 items-center">
                                <svg class="star w-3" version="1.0" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 64 64" enable-background="new 0 0 64 64" xml:space="preserve" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path fill="#d6ae57" d="M62.799,23.737c-0.47-1.399-1.681-2.419-3.139-2.642l-16.969-2.593L35.069,2.265 C34.419,0.881,33.03,0,31.504,0c-1.527,0-2.915,0.881-3.565,2.265l-7.623,16.238L3.347,21.096c-1.458,0.223-2.669,1.242-3.138,2.642 c-0.469,1.4-0.115,2.942,0.916,4l12.392,12.707l-2.935,17.977c-0.242,1.488,0.389,2.984,1.62,3.854 c1.23,0.87,2.854,0.958,4.177,0.228l15.126-8.365l15.126,8.365c0.597,0.33,1.254,0.492,1.908,0.492c0.796,0,1.592-0.242,2.269-0.72 c1.231-0.869,1.861-2.365,1.619-3.854l-2.935-17.977l12.393-12.707C62.914,26.68,63.268,25.138,62.799,23.737z"></path> </g></svg><p class="text-yellow-500 font-medium text-sm">4.4</p>
                                <p class="text-stone-500">° Lanches ° 1.4 km</p>
                            </div>
                            <div class="time">
                                <p class="text-stone-500">29-39 min ° R$ 6,99</p>
                            </div> 
                        </div>
                    </a>
                    <a href="habibs"  class="restaurante relative flex h-42 w-1/4 p-3 gap-4 items-center justify-center mb-5 hover:shadow-lg hover:rounded-xl  max-[1300px]:w-6/12 max-[665px]:flex-col h-auto">
                        <img src="/src/img/habibs.webp" alt="" class="rounded-full w-24">
                        <div class="text max-[665px]:flex flex-col justify-center items-center">
                            <p id="fonte">Habib's</p>
                            <div class="rating flex w-full h-full gap-1 items-center">
                                <svg class="star w-3" version="1.0" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 64 64" enable-background="new 0 0 64 64" xml:space="preserve" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path fill="#d6ae57" d="M62.799,23.737c-0.47-1.399-1.681-2.419-3.139-2.642l-16.969-2.593L35.069,2.265 C34.419,0.881,33.03,0,31.504,0c-1.527,0-2.915,0.881-3.565,2.265l-7.623,16.238L3.347,21.096c-1.458,0.223-2.669,1.242-3.138,2.642 c-0.469,1.4-0.115,2.942,0.916,4l12.392,12.707l-2.935,17.977c-0.242,1.488,0.389,2.984,1.62,3.854 c1.23,0.87,2.854,0.958,4.177,0.228l15.126-8.365l15.126,8.365c0.597,0.33,1.254,0.492,1.908,0.492c0.796,0,1.592-0.242,2.269-0.72 c1.231-0.869,1.861-2.365,1.619-3.854l-2.935-17.977l12.393-12.707C62.914,26.68,63.268,25.138,62.799,23.737z"></path> </g></svg><p class="text-yellow-500 font-medium text-sm">4.6</p>
                                <p class="text-stone-500">° Lanches ° 2.4 km</p>
                            </div>
                            <div class="time">
                                <p class="text-stone-500">30-40 min ° R$ 7,99</p>
                            </div> 
                        </div>
                    </a>
                    <a href="opastelao"  class="restaurante relative flex h-42 w-1/4 p-3 gap-4 items-center justify-center mb-5 hover:shadow-lg hover:rounded-xl  max-[1300px]:w-6/12 max-[665px]:flex-col h-auto">
                        <img src="/src/img/opastelao.png" alt="" class="rounded-full w-24">
                        <div class="text max-[665px]:flex flex-col justify-center items-center">
                            <p id="fonte">O Pastelão</p>
                            <div class="rating flex w-full h-full gap-1 items-center">
                                <svg class="star w-3" version="1.0" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 64 64" enable-background="new 0 0 64 64" xml:space="preserve" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path fill="#d6ae57" d="M62.799,23.737c-0.47-1.399-1.681-2.419-3.139-2.642l-16.969-2.593L35.069,2.265 C34.419,0.881,33.03,0,31.504,0c-1.527,0-2.915,0.881-3.565,2.265l-7.623,16.238L3.347,21.096c-1.458,0.223-2.669,1.242-3.138,2.642 c-0.469,1.4-0.115,2.942,0.916,4l12.392,12.707l-2.935,17.977c-0.242,1.488,0.389,2.984,1.62,3.854 c1.23,0.87,2.854,0.958,4.177,0.228l15.126-8.365l15.126,8.365c0.597,0.33,1.254,0.492,1.908,0.492c0.796,0,1.592-0.242,2.269-0.72 c1.231-0.869,1.861-2.365,1.619-3.854l-2.935-17.977l12.393-12.707C62.914,26.68,63.268,25.138,62.799,23.737z"></path> </g></svg><p class="text-yellow-500 font-medium text-sm">5.0</p>
                                <p class="text-stone-500">° Lanches ° 3.4 km</p>
                            </div>
                            <div class="time">
                                <p class="text-stone-500">80-90 min ° R$ 6,00</p>
                            </div> 
                        </div>
                    </a>
                    <a href="tiosamjapa"  class="restaurante relative flex h-42 w-1/4 p-3 gap-4 items-center justify-center mb-5 hover:shadow-lg hover:rounded-xl  max-[1300px]:w-6/12 max-[665px]:flex-col h-auto">
                        <img src="/src/img/tiosamjapa.png" alt="" class="rounded-full w-24">
                        <div class="text max-[665px]:flex flex-col justify-center items-center">
                            <p id="fonte">Tio Sam Japa</p>
                            <div class="rating flex w-full h-full gap-1 items-center">
                                <svg class="star w-3" version="1.0" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 64 64" enable-background="new 0 0 64 64" xml:space="preserve" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path fill="#d6ae57" d="M62.799,23.737c-0.47-1.399-1.681-2.419-3.139-2.642l-16.969-2.593L35.069,2.265 C34.419,0.881,33.03,0,31.504,0c-1.527,0-2.915,0.881-3.565,2.265l-7.623,16.238L3.347,21.096c-1.458,0.223-2.669,1.242-3.138,2.642 c-0.469,1.4-0.115,2.942,0.916,4l12.392,12.707l-2.935,17.977c-0.242,1.488,0.389,2.984,1.62,3.854 c1.23,0.87,2.854,0.958,4.177,0.228l15.126-8.365l15.126,8.365c0.597,0.33,1.254,0.492,1.908,0.492c0.796,0,1.592-0.242,2.269-0.72 c1.231-0.869,1.861-2.365,1.619-3.854l-2.935-17.977l12.393-12.707C62.914,26.68,63.268,25.138,62.799,23.737z"></path> </g></svg><p class="text-yellow-500 font-medium text-sm">4.8</p>
                                <p class="text-stone-500">° Lanches ° 5.2 km</p>
                            </div>
                            <div class="time">
                                <p class="text-stone-500">34-44 min ° Grátis</p>
                            </div> 
                        </div>
                    </a>               
                </div>
                <button id="VerMenosRestaurantes" class="btnExpand text-red-500  font-medium w-full h-12 border rounded hover:bg-red-600 hover:text-white" onclick="FecharLista()">Ver menos</button> 
            </div>
</section>
@stop

