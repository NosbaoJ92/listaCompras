import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';

import { AdicionarItemModalPage } from './adicionar-item-modal.page';

const routes: Routes = [
  {
    path: '',
    component: AdicionarItemModalPage
  }
];

@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule],
})
export class AdicionarItemModalPageRoutingModule {}
