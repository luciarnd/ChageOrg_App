import { HttpClient, HttpHeaders } from '@angular/common/http';
import { Injectable } from '@angular/core';
import { catchError, Observable, throwError } from 'rxjs';
import { Peticion } from './peticion';

@Injectable({
  providedIn: 'root'
})
export class PeticionService {

  private apiURL = "http://127.0.0.1:8000/api";

  /*------------------------------------------
  --------------------------------------------
  Http Header Options
  --------------------------------------------
  --------------------------------------------*/
  httpOptions = {
    headers: new HttpHeaders({
      'Content-Type': 'application/json'
    })
  }



  constructor(private httpClient: HttpClient) { }

  /**
   * Write code on Method
   *
   * @return response()
   */
  getAll(): Observable<any> {

    return this.httpClient.get(this.apiURL + '/peticiones/listado')

    .pipe(
      catchError(this.errorHandler)
    )
  }

  getAllByUser(): Observable<any> {

    return this.httpClient.get(this.apiURL + '/mispeticiones')

    .pipe(
      catchError(this.errorHandler)
    )
  }

  /**
   * Write code on Method
   *
   * @return response()
   */
  create(peticion: FormData): Observable<any> {
    const headers = new HttpHeaders();
    headers.append('Content-Type', 'multipart/form-data');
    headers.append('Accept', 'application/json');

    return this.httpClient.post(this.apiURL + '/peticion/', peticion, {
      headers: headers})

    .pipe(
      catchError(this.errorHandler)
    )
  }

  /**
   * Write code on Method
   *
   * @return response()
   */
  find(id:number): Observable<any> {

    return this.httpClient.get(this.apiURL + '/peticion/' + id)

    .pipe(
      catchError(this.errorHandler)
    )
  }

  /**
   * Write code on Method
   *
   * @return response()
   */
  update(id:number, peticion:Peticion): Observable<any> {

    return this.httpClient.put(this.apiURL + '/peticiones/edit/' + id, JSON.stringify(peticion), this.httpOptions)

    .pipe(
      catchError(this.errorHandler)
    )
  }

  /**
   * Write code on Method
   *
   * @return response()
   */
  delete(id:number){
    return this.httpClient.delete(this.apiURL + '/peticiones/delete/' + id, this.httpOptions)

    .pipe(
      catchError(this.errorHandler)
    )
  }

  /**
   * Write code on Method
   *
   * @return response()
   */
  errorHandler(error:any) {
    let errorMessage = '';
    if(error.error instanceof ErrorEvent) {
      errorMessage = error.error.message;
    } else {
      errorMessage = `Error Code: ${error.status}\nMessage: ${error.message}`;
    }
    return throwError(errorMessage);
 }


}
