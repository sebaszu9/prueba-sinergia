import { Component, OnInit } from '@angular/core';
import { PacienteService } from '../paciente.service';
import { DepartamentoService } from '../../services/departamento.service';
import { MunicipioService } from '../../services/municipio.service';
import { GeneroService } from '../../services/genero.service';

import { ActivatedRoute, Router } from '@angular/router';
import { FormGroup, FormControl, Validators } from '@angular/forms';
import { Paciente } from '../../interface/paciente';
import Swal from 'sweetalert2';

interface Documents {
  value: number;
  description: string;
}

@Component({
  selector: 'app-edit',
  templateUrl: './edit.component.html',
  styleUrls: ['./edit.component.css']
})
export class EditComponent implements OnInit {

  id: number | any;
  paciente: Paciente;
  form: FormGroup;

  departamentos = [];
  municipios = [];
  listGenero = [];

  constructor(
    public pacienteService: PacienteService,
    public departamentoService: DepartamentoService,
    public municipioService: MunicipioService,
    public generoService: GeneroService,
    private route: ActivatedRoute,
    private router: Router
  ) { }

  listDocument: Documents[] = [
    {value: 1, description: 'Tarjeta de identidad'},
    {value: 2, description: 'Cédula de ciudadanía'},
    {value: 3, description: 'Cédula de extranjería'},
    {value: 4, description: 'Pasaporte'}
  ];

  ngOnInit(): void {
    this.id = this.route.snapshot.params['idPaciente'];
    this.pacienteService.find(this.id).subscribe((data: Paciente)=>{
      this.paciente = data;
      console.log("Aqui data", data)
    });

    this.form = new FormGroup({
      tipo_documento_id: new FormControl('', [ Validators.required ]),
      numero_documento: new FormControl('', [ Validators.required, Validators.pattern("^[0-9]*$") ]),
      nombre1: new FormControl('', [ Validators.required, Validators.pattern('^[a-zA-ZÁáÀàÉéÈèÍíÌìÓóÒòÚúÙùÑñüÜ \-\']+') ]),
      nombre2: new FormControl('', [ Validators.required, Validators.pattern('^[a-zA-ZÁáÀàÉéÈèÍíÌìÓóÒòÚúÙùÑñüÜ \-\']+') ]),
      apellido1: new FormControl('', [ Validators.required, Validators.pattern('^[a-zA-ZÁáÀàÉéÈèÍíÌìÓóÒòÚúÙùÑñüÜ \-\']+') ]),
      apellido2: new FormControl('', [ Validators.required, Validators.pattern('^[a-zA-ZÁáÀàÉéÈèÍíÌìÓóÒòÚúÙùÑñüÜ \-\']+') ]),
      genero_id: new FormControl('', [ Validators.required ]),
      departamento_id: new FormControl('', [ Validators.required ]),
      municipio_id: new FormControl('', [ Validators.required ])
    });

    this.listDepartament();
    this.getGenero();

  }

  get f(){
    return this.form.controls;
  }

  listDepartament() {
      this.departamentoService.getAll().subscribe((data: any) => {
        this.departamentos = data;
        //console.log("Aqui data", data);
      }
    );
  }

  listMunicipio(dato: any){
    this.municipioService.find(dato).subscribe((data: any) => {
      this.municipios = data;
      //console.log("Aqui data", data);
    })
  }

  getGenero(){
    this.generoService.getAll().subscribe((data: any) => {
      this.listGenero = data;
      //console.log("Aqui data", data);
    })
  }

  submit(){
    console.log(this.form.value);
    this.pacienteService.update(this.id, this.form.value).subscribe(res => {
        console.log('Paciente updated successfully!');
        Swal.fire({
          icon: 'success',
          title: 'Paciente editado exitosamente!',
          showConfirmButton: false,
          timer: 1500
        })
        this.router.navigateByUrl('paciente/index');
    })
  }
}
