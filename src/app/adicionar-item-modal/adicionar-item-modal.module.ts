import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { FormsModule } from '@angular/forms';

import { IonicModule } from '@ionic/angular';

import { AdicionarItemModalPageRoutingModule } from './adicionar-item-modal-routing.module';

import { AdicionarItemModalPage } from './adicionar-item-modal.page';

@NgModule({
  imports: [
    CommonModule,
    FormsModule,
    IonicModule,
    AdicionarItemModalPageRoutingModule
  ],
  declarations: [AdicionarItemModalPage]
})
export class AdicionarItemModalPageModule {}
