@extends('principal')
@section('titulo', 'O Pastelão')
@section('conteudo')
<div class="flex flex-col w-full mt-36">
    <img src="/src/img/opastelaocard.png" alt="" class="rounded">
    <div class="sup flex  items-center justify-between mt-5 max-[1300px]:justify-around">
        <div class="card_nome flex items-center gap-3 ">
            <img src="/src/img/opastelao.png" alt="" class="rounded-full w-20">
            <h1 class="text-4xl font-medium max-[768px]:text-xl max-[850px]:text-2xl ">O Pastelão</h1>
            <div class="flex gap-1 items-center justify-center">
                <svg class="star w-3" version="1.0" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 64 64" enable-background="new 0 0 64 64" xml:space="preserve" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path fill="#d6ae57" d="M62.799,23.737c-0.47-1.399-1.681-2.419-3.139-2.642l-16.969-2.593L35.069,2.265 C34.419,0.881,33.03,0,31.504,0c-1.527,0-2.915,0.881-3.565,2.265l-7.623,16.238L3.347,21.096c-1.458,0.223-2.669,1.242-3.138,2.642 c-0.469,1.4-0.115,2.942,0.916,4l12.392,12.707l-2.935,17.977c-0.242,1.488,0.389,2.984,1.62,3.854 c1.23,0.87,2.854,0.958,4.177,0.228l15.126-8.365l15.126,8.365c0.597,0.33,1.254,0.492,1.908,0.492c0.796,0,1.592-0.242,2.269-0.72 c1.231-0.869,1.861-2.365,1.619-3.854l-2.935-17.977l12.393-12.707C62.914,26.68,63.268,25.138,62.799,23.737z"></path> </g></svg>
                <p class="text-yellow-500 font-bold">5.0</p>
            </div>
        </div>
        <div class="vermais flex items-center gap-8">
            <a href="#" class="text-rose-600 font-bold text-medium hover:text-red-500">Ver mais</a>
            <p class="text-stone-500">|</p>
            <div class="flex gap-2 items-center">
                <svg fill="#c7c7c7" height="15px" width="15px" version="1.2" baseProfile="tiny" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 256 256" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M252,128c0,68.4-55.6,124-124,124S4,196.4,4,128S59.6,4,128,4S252,59.6,252,128z M174.3,155.6c0-26-27.8-33.4-39.8-36.8 c-22.7-6.3-24.6-14.5-24.3-18.7c0.8-10.2,12-12.7,22.4-10.5c8.2,1.8,16.6,6.6,21.3,10.3l14.9-17.4c-7.3-5-16.7-11.5-30.4-14.1V51.5 h-21.7v16.3c-21,1.6-35,14.8-35,32.9c0,17.7,12.8,26,25.6,32.2c10.7,5.1,40.5,10.4,38.8,23.9c-0.9,7.3-8.7,12.7-21.6,11.1 c-11.2-1.4-23.2-10.8-23.2-10.8l-16.4,16.3c9.9,8,20.4,13,31.8,15.3v15.9h21.7v-15.1C159.1,187.2,174.3,173.1,174.3,155.6z"></path> </g></svg>
            <p class="text-stone-500 text-xs">Pedido mínimo R$ 15,00</p>
            </div>
        </div>
    </div>
    <div class="buscar flex justify-center items-center gap-8 pt-5">
        <input type="text" placeholder="Endereço de entrega e número" class="w-full h-16 border rounded-md pl-9 max-[1502px]:w-11/12">
    </div>
    <div class="pastelao w-12/12 flex flex-col">
        <h1 class="text-2xl font-medium mb-4 mt-6 max-[1301px]:self-center">Pastelão</h1>

        <div class="opcoes flex w-full justify-evenly flex-wrap mb-5 gap-3 ">
            <a href="#" class="cardspastelao border-stone-300 hover:border-stone-400 border rounded-xl flex h-44 border-solid shadow-md">
                <div class="flex w-full justify-evenly p-4">
                    <div class="detalhes flex flex-col justify-between w-8/12 h-full">
                        <div class="tituloDescricao">
                            <h2 class="font-semibold ">Pastelão Calabresa com Catupiry</h2>
                            <p class="text-stone-500 text-xs">Calabresa moída, cebola, tomate e Catupiry. Salgado de massa mais encorpada e fermentada, levemen...</p>
                        </div>
                        <div class="preco">
                            <p class="text-gray-600">R$ 11,50</p>
                        </div>
                    </div>
                    <div class="img w-4/12 h-auto flex relative">
                        <img src="/src/img/opc1-pastelao.png" alt="" class=" absolute self-center right-0 rounded-xl">
                    </div>
                </div>
            </a>           
            <a href="#" class="cardspastelao border-stone-300 hover:border-stone-400 border rounded-xl flex h-44 border-solid shadow-md">
                <div class="flex w-full justify-evenly p-4">
                    <div class="detalhes flex flex-col justify-between w-8/12 h-full">
                        <div class="tituloDescricao">
                            <h2 class="font-semibold ">Patelão Camarão</h2>
                            <p class="text-stone-500 text-xs">Salgado de massa mais encorpada e fermentada, levemente adocicada; recheado e frito.
                                não fazermos alteração no recheio!</p>
                        </div>
                        <div class="preco">
                            <p class="text-gray-600">R$ 11,50</p>
                        </div>
                    </div>
                    <div class="img w-4/12 h-auto flex relative">
                        <img src="/src/img/opc2-pastelao.png" alt="" class=" absolute self-center right-0 rounded-xl">
                    </div>
                </div>
            </a>           
        </div>
        <div class="opcoes flex w-full justify-evenly flex-wrap mb-5 gap-3 ">
            <a href="#" class="cardspastelao border-stone-300 hover:border-stone-400 border rounded-xl flex h-44 border-solid shadow-md">
                <div class="flex w-full justify-evenly p-4">
                    <div class="detalhes flex flex-col justify-between w-8/12 h-full">
                        <div class="tituloDescricao">
                            <h2 class="font-semibold ">Pastelão Carne com Ovo</h2>
                            <p class="text-stone-500 text-xs">Salgado de massa mais encorpada e fermentada, levemente adocicada; recheado e frito. Não alteramos recheios!!</p>
                        </div>
                        <div class="preco">
                            <p class="text-gray-600">R$ 11,00</p>
                        </div>
                    </div>
                    <div class="img w-4/12 h-auto flex relative">
                        <img src="/src/img/opc3-pastelao.png" alt="" class=" absolute self-center right-0 rounded-xl">
                    </div>
                </div>
            </a>           
            <a href="#" class="cardspastelao border-stone-300 hover:border-stone-400 border rounded-xl flex h-44 border-solid shadow-md">
                <div class="flex w-full justify-evenly p-4">
                    <div class="detalhes flex flex-col justify-between w-8/12 h-full">
                        <div class="tituloDescricao">
                            <h2 class="font-semibold ">Pastelão Dois Queijos</h2>
                            <p class="text-stone-500 text-xs">Mussarela e Catupiry. Salgado de massa mais encorpada e fermentada, levemente adocicada; recheado e frito. Não...</p>
                        </div>
                        <div class="preco">
                            <p class="text-gray-600">R$ 11,50</p>
                        </div>
                    </div>
                    <div class="img w-4/12 h-auto flex relative">
                        <img src="/src/img/opc4-pastelao.png" alt="" class=" absolute self-center right-0 rounded-xl">
                    </div>
                </div>
            </a>           
        </div>
    </div>
    <div class="pastelao w-12/12 flex flex-col">
        <h1 class="text-2xl font-medium mb-4 mt-6 max-[1301px]:self-center">Pastéis</h1>

        <div class="opcoes flex w-full justify-evenly flex-wrap mb-5 gap-3 ">
            <a href="#" class="cardspastelao border-stone-300 hover:border-stone-400 border rounded-xl flex h-44 border-solid shadow-md">
                <div class="flex w-full justify-evenly p-4">
                    <div class="detalhes flex flex-col justify-between w-8/12 h-full">
                        <div class="tituloDescricao">
                            <h2 class="font-semibold ">Pastel Calabresa com Catupiry</h2>
                            <p class="text-stone-500 text-xs">Calabresa moída, cebola, tomate e Catupiry. Não alteramos recheio!!</p>
                        </div>
                        <div class="preco">
                            <p class="text-gray-600">R$ 11,50</p>
                        </div>
                    </div>
                    <div class="img w-4/12 h-auto flex relative">
                        <img src="/src/img/opc5-pastelao.png" alt="" class=" absolute self-center right-0 rounded-xl">
                    </div>
                </div>
            </a>           
            <a href="#" class="cardspastelao border-stone-300 hover:border-stone-400 border rounded-xl flex h-44 border-solid shadow-md">
                <div class="flex w-full justify-evenly p-4">
                    <div class="detalhes flex flex-col justify-between w-8/12 h-full">
                        <div class="tituloDescricao">
                            <h2 class="font-semibold ">Pastel Calabresa com Queijo</h2>
                            <p class="text-stone-500 text-xs">Calabresa moída, cebola, tomate e Mussarela. Não alteramos recheio!!</p>
                        </div>
                        <div class="preco">
                            <p class="text-gray-600">R$ 11,50</p>
                        </div>
                    </div>
                    <div class="img w-4/12 h-auto flex relative">
                        <img src="/src/img/opc6-pastelao.png" alt="" class=" absolute self-center right-0 rounded-xl">
                    </div>
                </div>
            </a>           
        </div>
        <div class="opcoes flex w-full justify-evenly flex-wrap mb-5 gap-3 ">
            <a href="#" class="cardspastelao border-stone-300 hover:border-stone-400 border rounded-xl flex h-44 border-solid shadow-md ">
                <div class="flex w-full justify-evenly p-4">
                    <div class="detalhes flex flex-col justify-between w-8/12 h-full">
                        <div class="tituloDescricao">
                            <h2 class="font-semibold ">Pastel Camarão</h2>
                            <p class="text-stone-500 text-xs">Não alteramos recheio!!</p>
                        </div>
                        <div class="preco">
                            <p class="text-gray-600">R$ 11,00</p>
                        </div>
                    </div>
                    <div class="img w-4/12 h-auto flex relative">
                        <img src="/src/img/opc7-pastelao.png" alt="" class=" absolute self-center right-0 rounded-xl">
                    </div>
                </div>
            </a>           
            <a href="#" class="cardspastelao border-stone-300 hover:border-stone-400 border rounded-xl flex h-44 border-solid shadow-md ">
                <div class="flex w-full justify-evenly p-4">
                    <div class="detalhes flex flex-col justify-between w-8/12 h-full">
                        <div class="tituloDescricao">
                            <h2 class="font-semibold ">Pastel Carne</h2>
                            <p class="text-stone-500 text-xs">Não alteramos recheio!!</p>
                        </div>
                        <div class="preco">
                            <p class="text-gray-600">R$ 11,00</p>
                        </div>
                    </div>
                    <div class="img w-4/12 h-auto flex relative">
                        <img src="/src/img/opc8-pastelao.png" alt="" class=" absolute self-center right-0 rounded-xl">
                    </div>
                </div>
            </a>           
        </div>
    </div>
</div>

@stop