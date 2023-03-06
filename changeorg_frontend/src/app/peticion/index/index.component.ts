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

  /*------------------------------------------
  --------------------------------------------
  Created constructor
  --------------------------------------------
  --------------------------------------------*/
  constructor(public peticionService: PeticionService) { }

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

}
