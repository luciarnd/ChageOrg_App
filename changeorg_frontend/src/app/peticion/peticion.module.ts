import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { PeticionRoutingModule } from './peticion-routing.module';
import { CreateComponent } from './create/create.component';
import { ViewComponent } from './view/view.component';
import { EditComponent } from './edit/edit.component';
import { IndexComponent } from './index/index.component';
import { BrowserModule } from '@angular/platform-browser';
import { ReactiveFormsModule, FormsModule } from
'@angular/forms';
import { MispeticionesComponent } from './mispeticiones/mispeticiones.component';


@NgModule({
  declarations: [
    CreateComponent,
    ViewComponent,
    EditComponent,
    IndexComponent,
    MispeticionesComponent
  ],
  imports: [
    CommonModule,
    BrowserModule,
    PeticionRoutingModule,
    ReactiveFormsModule,
    FormsModule
    
  ]
})
export class PeticionModule { }
