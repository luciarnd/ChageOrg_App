import { Component } from '@angular/core';
import { FormControl, FormGroup, Validators } from '@angular/forms';
import { ActivatedRoute, Router } from '@angular/router';
import { Peticion } from '../peticion';
import { PeticionService } from '../peticion.service';

@Component({
  selector: 'app-edit',
  templateUrl: './edit.component.html',
  styleUrls: ['./edit.component.css']
})
export class EditComponent {
  id!: number;
  peticion!: Peticion;
  formEdit!: FormGroup;

  /*------------------------------------------
  --------------------------------------------
  Created constructor
  --------------------------------------------
  --------------------------------------------*/
  constructor(
    public peticionService: PeticionService,
    private route: ActivatedRoute,
    private router: Router
  ) { }

  /**
   * Write code on Method
   *
   * @return response()
   */
  ngOnInit(): void {
    this.id = this.route.snapshot.params['peticionId'];
    this.peticionService.find(this.id).subscribe((data: Peticion)=>{
      this.peticion = data;
    });

    this.formEdit = new FormGroup({
      titulo: new FormControl('', [Validators.required]),
      descripcion: new FormControl('', Validators.required)
    });
  }

  /**
   * Write code on Method
   *
   * @return response()
   */
  get f(){
    return this.formEdit.controls;
  }

  /**
   * Write code on Method
   *
   * @return response()
   */
  submit(){
    console.log(this.formEdit.value);
    this.peticionService.update(this.id, this.formEdit.value).subscribe((res:any) => {
         console.log('Peticion actualizada correctamente!');
         this.router.navigateByUrl('peticion/index');
    })
  }
}
