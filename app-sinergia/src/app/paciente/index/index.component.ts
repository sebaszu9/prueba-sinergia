import { Component, OnInit } from '@angular/core';

import { PacienteService } from '../paciente.service';
import { Paciente } from '../../interface/paciente';
import Swal from 'sweetalert2';

@Component({
  selector: 'app-index',
  templateUrl: './index.component.html',
  styleUrls: ['./index.component.css']
})
export class IndexComponent implements OnInit {

  pacientes: Paciente[] = [];

  // constructor() { }
  constructor(public pacienteService: PacienteService) { }

  ngOnInit(): void {
    this.pacienteService.getAll().subscribe((data: Paciente[])=>{
      this.pacientes = data;
      console.log(this.pacientes);
    })
  }

  deletePaciente(id){
    Swal.fire({
      title: 'Estas seguro de eliminar a este paciente?',
      text: "No podrás revertir esto.!",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: '¡Sí, bórralo!'
    }).then((result) => {
      if (result.isConfirmed) {
        this.pacienteService.delete(id).subscribe(res => {
          this.pacientes = this.pacientes.filter(item => item.id !== id);
          console.log('Paciente deleted successfully!');
        })
        Swal.fire(
          'Eliminado!',
          'Paciente eliminado exitosamente.',
          'success'
        )
      }
    })
  }

}
