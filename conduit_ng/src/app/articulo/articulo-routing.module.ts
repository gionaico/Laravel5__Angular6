import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { ArticuloDetallesComponent } from "./articulo-detalles.component";

const routes: Routes = [
  {
    path: ":slug",
    component: ArticuloDetallesComponent,
  }
];

@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule]
})
export class ArticuloRoutingModule {}
