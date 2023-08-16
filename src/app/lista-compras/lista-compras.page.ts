import { Component } from '@angular/core';
import { ModalController } from '@ionic/angular';
import { AdicionarItemModalPage } from '../adicionar-item-modal/adicionar-item-modal.page';


@Component({
  selector: 'app-lista-compras',
  templateUrl: 'lista-compras.page.html',
  styleUrls: ['lista-compras.page.scss'],
})

export class ListaComprasPage {
  items: { nome: string; preco: number; qtd: number }[] = [];
  novoItemNome: string = '';
  novoItemPreco: number = null as any; 
  novaQtdItem: number = null as any;


  constructor() {
    this.items = [ //Defini alguns itens para apresentar ao iniciar
      { nome: 'Maçã', qtd: 3, preco: 2.50, },
      { nome: 'Banana', qtd: 5, preco: 0.99 },
      { nome: 'Leite', qtd: 1, preco: 4.99 },
      { nome: 'Maçã', qtd: 3, preco: 2.50, },
      { nome: 'Banana', qtd: 5, preco: 1.0 },
      { nome: 'Leite', qtd: 1, preco: 4.99 },
      { nome: 'Maçã', qtd: 3, preco: 2.5, },
      { nome: 'Banana', qtd: 5, preco: 1.0 },
      { nome: 'Leite', qtd: 1, preco: 4.99 },
      { nome: 'Maçã', qtd: 3, preco: 2.5, },
      { nome: 'Banana', qtd: 5, preco: 1.0 },
      { nome: 'Leite', qtd: 1, preco: 4.99 },
      { nome: 'Maçã', qtd: 3, preco: 2.5, },
      { nome: 'Banana', qtd: 5, preco: 1.0 },
      { nome: 'Leite', qtd: 1, preco: 4.99 },
      { nome: 'Maçã', qtd: 3, preco: 2.5, },
      { nome: 'Banana', qtd: 5, preco: 1.0 },
      { nome: 'Leite', qtd: 1, preco: 4.99 },
      { nome: 'Maçã', qtd: 3, preco: 2.5, },
      { nome: 'Banana', qtd: 5, preco: 1.0 },
      { nome: 'Leite', qtd: 1, preco: 4.99 },
    ];
  }

  //Realizar calculo total
  calculandoTotal(): number {
    return parseFloat(this.items.reduce((total, item) => total + (item.preco * item.qtd), 0).toFixed(2));
  }

  //Realizando calculo médio (Vltotal / Qtd itens)
  // calculandoMedia(): number {
  //   const total = this.calculandoTotal();
  //   return  parseFloat((total / this.items.length).toFixed(2));
  // }

  //Adicionando um novo item
  addItem() {
    if (this.novoItemNome && this.novoItemPreco && this.novaQtdItem !== null) {
      this.items.push({
        nome: this.novoItemNome,
        preco: this.novoItemPreco,
        qtd: this.novaQtdItem,
      });
      this.novoItemNome = '';
      this.novoItemPreco = null as any;
      this.novaQtdItem = null as any;
    }
  }
  edtItem() {
    if (this.novoItemNome && this.novoItemPreco && this.novaQtdItem !== null) {
      this.items.push({
        nome: this.novoItemNome,
        preco: this.novoItemPreco,
        qtd: this.novaQtdItem,
      });
      this.novoItemNome = '';
      this.novoItemPreco = null as any;
      this.novaQtdItem = null as any;
    }
  }

  //Limpar a lista existente
  limparLista() {
    this.items = []; // Limpa a lista existente
  }
}
