import { Component } from '@angular/core';
import { Router } from '@angular/router';
import { AuthStateService } from 'src/app/shared/auth-state.service';
import { TokenService } from 'src/app/shared/token.service';
import { Peticion } from '../peticion';
import { PeticionService } from '../peticion.service';

@Component({
  selector: 'app-mispeticiones',
  templateUrl: './mispeticiones.component.html',
  styleUrls: ['./mispeticiones.component.css']
})
export class MispeticionesComponent {
  peticiones: Peticion[] = [];
  isSignedIn!: boolean;

  /*------------------------------------------
  --------------------------------------------
  Created constructor
  --------------------------------------------
  --------------------------------------------*/
  constructor(public peticionService: PeticionService,
    private auth: AuthStateService,
      public router: Router,
      public token: TokenService) {

  }

  /**
   * Write code on Method
   *
   * @return response()
   */
  ngOnInit(): void {
    this.peticionService.getAllByUser().subscribe((data: Peticion[])=>{
      this.peticiones = data;
      console.log(this.peticiones);
    });

    this.auth.userAuthState.subscribe((val) => {
      this.isSignedIn = val;
    });
  }

  deletePost(id:number){
    this.peticionService.delete(id).subscribe(res => {
         this.peticiones = this.peticiones.filter(item => item.id !== id);
         console.log('Peticion borrada correctamente!');
    })
  }

}
