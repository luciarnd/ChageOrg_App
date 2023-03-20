import { Component } from '@angular/core';
import { FormControl, FormGroup, Validators } from '@angular/forms';
import { Router } from '@angular/router';
import { PeticionService } from '../peticion.service';

@Component({
  selector: 'app-create',
  templateUrl: './create.component.html',
  styleUrls: ['./create.component.css']
})
export class CreateComponent {
  form!: FormGroup;
  selectedImage!: any;

  /*------------------------------------------
  --------------------------------------------
  Created constructor
  --------------------------------------------
  --------------------------------------------*/
  constructor(
    public peticionService: PeticionService,
    private router: Router
  ) { }

  /**
   * Write code on Method
   *
   * @return response()
   */
  ngOnInit(): void {
    this.form = new FormGroup({
      titulo: new FormControl('', [Validators.required]),
      destinatario: new FormControl('', Validators.required),
      descripcion: new FormControl('', Validators.required),
      categoria_id: new FormControl(1),
      image: new FormControl('')
    });
  }

  /**
   * Write code on Method
   *
   * @return response()
   */
  get f(){
    return this.form.controls;
  }

  /**
   * Write code on Method
   *
   * @return response()
   */
  submit(form: FormGroup){
     const formData = new FormData();
     formData.append('image', this.selectedImage);
     formData.append('titulo', form.value.titulo);
     formData.append('destinatario', form.value.destinatario);
     formData.append('descripcion', form.value.descripcion);
     formData.append('categoria_id', form.value.categoria_id);
     console.log(formData);

    this.peticionService.create(formData).subscribe((res:any) => {
         console.log('Post created successfully!');
         this.router.navigateByUrl('peticion/index');
    })
  }

  onSelectImage(event: any) {
    this.selectedImage = event.target.files[0];
 }
}
