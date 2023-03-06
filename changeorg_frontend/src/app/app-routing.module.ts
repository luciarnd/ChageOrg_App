import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import { SigninComponent } from './components/signin/signin.component';
import { SignupComponent } from './components/signup/signup.component';
import { UserProfileComponent } from './components/user-profile/user-profile.component';
import { InicioComponent } from './inicio/inicio.component';


const routes: Routes = [
{path: '', component: InicioComponent},
{ path: 'login', component: SigninComponent },
{ path: 'register', component: SignupComponent },
{ path: 'profile', component: UserProfileComponent },
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule],
})
export class AppRoutingModule {}