import { Injectable } from '@angular/core';
import { HttpClient, HttpHeaders } from '@angular/common/http';

import {  Observable, throwError } from 'rxjs';
import { catchError } from 'rxjs/operators';

import { Paciente } from '../interface/paciente';

@Injectable({
  providedIn: 'root'
})
export class PacienteService {

  private apiURL = "http://127.0.0.1:8000/api/paciente/";

  httpOptions = {
     headers: new HttpHeaders({
       'Content-Type': 'application/json'
     })
  }

  constructor(private httpClient: HttpClient) { }

  getAll(): Observable<Paciente[]> {
    return this.httpClient.get<Paciente[]>(this.apiURL)
    .pipe(
      catchError(this.errorHandler)
    )
  }

  create(paciente: any): Observable<Paciente> {
    return this.httpClient.post<Paciente>(this.apiURL, JSON.stringify(paciente), this.httpOptions)
    .pipe(
      catchError(this.errorHandler)
    )
  }

  find(id: string): Observable<Paciente> {
    return this.httpClient.get<Paciente>(this.apiURL + id)
    .pipe(
      catchError(this.errorHandler)
    )
  }

  update(id: string, paciente: any): Observable<Paciente> {
    return this.httpClient.put<Paciente>(this.apiURL + id, JSON.stringify(paciente), this.httpOptions)
    .pipe(
      catchError(this.errorHandler)
    )
  }

  delete(id: string){
    return this.httpClient.delete<Paciente>(this.apiURL + id, this.httpOptions)
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
