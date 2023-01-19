import { Injectable } from '@angular/core';
import { HttpClient, HttpHeaders } from '@angular/common/http';

import {  Observable, throwError } from 'rxjs';
import { catchError } from 'rxjs/operators';

import { Municipio } from '../interface/municipio';

@Injectable({
  providedIn: 'root'
})
export class MunicipioService {

  private apiURL = "http://localhost:8000/api/municipio/";

  httpOptions = {
     headers: new HttpHeaders({
       'Content-Type': 'application/json'
     })
  }

    constructor(private httpClient: HttpClient) { }

    find(id: string): Observable<Municipio> {
      return this.httpClient.get<Municipio>(this.apiURL + id)
      .pipe(
        catchError(this.errorHandler)
      )
    }

    errorHandler(error: { error: { message: string; }; status: any; message: any; }) {
        let errorMessage = '';
        if(error.error instanceof ErrorEvent) {
          errorMessage = error.error.message;
        } else {
          errorMessage = `Error Code: ${error.status}\nMessage: ${error.message}`;
        }
        return throwError(errorMessage);
    }

}
