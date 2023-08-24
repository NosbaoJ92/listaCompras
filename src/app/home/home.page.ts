import { Component } from '@angular/core';

@Component({
  selector: 'app-home',
  templateUrl: 'home.page.html',
  styleUrls: ['home.page.scss'],
})
export class HomePage {
//Comentário
escola='Etec Dra. Ruth Cardoso'
aluno=''
n1:number=0
n2:number=0
res:number=0

  constructor() {}

mostrarNome() {
  let nome='Joabson' //Coloca o seu nome nesta variável
  this.aluno=nome
}
somar(){
  this.res=this.n1+this.n2
}
}
