import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import { ContactComponent } from './contact.component';
import { ContactAuthResolver } from './contact-resolver.service';

const routes: Routes = [
  {
    path: 'contact',
    component: ContactComponent,
    resolve: {
      isAuthenticated: ContactAuthResolver
    }
  }
];

@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule]
})
export class ContactRoutingModule {}
