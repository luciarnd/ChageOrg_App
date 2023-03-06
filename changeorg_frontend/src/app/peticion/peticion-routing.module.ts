import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { CreateComponent } from './create/create.component';
import { EditComponent } from './edit/edit.component';
import { IndexComponent } from './index/index.component';
import { MispeticionesComponent } from './mispeticiones/mispeticiones.component';
import { ViewComponent } from './view/view.component';

const routes: Routes = [
  { path: 'peticion', redirectTo: 'peticion/index',pathMatch: 'full'},
  { path: 'peticion/index', component: IndexComponent },
  { path: 'peticion/:peticionId/view', component: ViewComponent },
  { path: 'peticion/create', component: CreateComponent },
  { path: 'peticion/:peticionId/edit', component: EditComponent },
  { path: 'mispeticiones', component: MispeticionesComponent }
];

@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule]
})
export class PeticionRoutingModule { }
