import { AuthService, User } from './../../shared/auth.service';
import { Component } from '@angular/core';
import { Peticion } from '../peticion';
import { PeticionService } from '../peticion.service';

@Component({
  selector: 'app-index',
  templateUrl: './index.component.html',
  styleUrls: ['./index.component.css']
})
export class IndexComponent {
  peticiones: Peticion[] = [];
  loggedUser!: User;

  /*------------------------------------------
  --------------------------------------------
  Created constructor
  --------------------------------------------
  --------------------------------------------*/
  constructor(public peticionService: PeticionService, private authService: AuthService) { }

  /**
   * Write code on Method
   *
   * @return response()
   */
  ngOnInit(): void {
    this.peticionService.getAll().subscribe((data: Peticion[])=>{
      this.peticiones = data;
      console.log(this.peticiones);
    })

    this.getUserLogged()
  }

  /**
   * Write code on Method
   *
   * @return response()
   */
  deletePost(id:number){
    this.peticionService.delete(id).subscribe(res => {
         this.peticiones = this.peticiones.filter(item => item.id !== id);
         console.log('Peticion borrada correctamente!');
    })
  }

  getUserLogged() {
    this.authService.profileUser().subscribe((data) => {
      this.loggedUser = data;
      console.log(this.loggedUser)
    })
    console.log(this.loggedUser)
  }

}
