import { ModuleWithProviders, NgModule } from "@angular/core";
import { RouterModule } from "@angular/router";
import { SharedModule } from "../shared";

import { ContactComponent } from "./contact.component";
import { ContactAuthResolver } from "./contact-resolver.service";
import { ContactRoutingModule } from "./contact-routing.module";

@NgModule({
  imports: [SharedModule, ContactRoutingModule],
  declarations: [ContactComponent],
  providers: [ContactAuthResolver]
})
export class ContactModule {}
