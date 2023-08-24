import { NgModule } from '@angular/core';
import { PreloadAllModules, RouterModule, Routes } from '@angular/router';

const routes: Routes = [
  {
    path: 'lista-compras',
    loadChildren: () => import('./lista-compras/lista-compras.module').then( m => m.ListaComprasPageModule)
  },
  {
    path: '',
    redirectTo: 'lista-compras',
    pathMatch: 'full'
  },
  {
    path: 'adicionar-item-modal',
    loadChildren: () => import('./adicionar-item-modal/adicionar-item-modal.module').then( m => m.AdicionarItemModalPageModule)
  },
];

@NgModule({
  imports: [
    RouterModule.forRoot(routes, { preloadingStrategy: PreloadAllModules })
  ],
  exports: [RouterModule]
})
export class AppRoutingModule { }
