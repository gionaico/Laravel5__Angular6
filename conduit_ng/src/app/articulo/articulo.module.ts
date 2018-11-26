import { ModuleWithProviders, NgModule } from '@angular/core';
import { RouterModule } from '@angular/router';

import { ArticuloDetallesComponent } from './articulo-detalles.component';

import { SharedModule } from '../shared';
import { ArticuloRoutingModule } from './articulo-routing.module';

@NgModule({
  imports: [SharedModule, ArticuloRoutingModule],
  declarations: [ArticuloDetallesComponent]
})
export class ArticuloModule {}
