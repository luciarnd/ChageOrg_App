import { Component } from '@angular/core';
import { ActivatedRoute, Router } from '@angular/router';
import { Peticion } from '../peticion';
import { PeticionService } from '../peticion.service';

@Component({
  selector: 'app-view',
  templateUrl: './view.component.html',
  styleUrls: ['./view.component.css']
})
export class ViewComponent {
  id!: number;
  peticion!: Peticion;

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
  }
}
