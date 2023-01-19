import { Component, OnInit } from '@angular/core';
import { PacienteService } from '../paciente.service';
import { DepartamentoService } from '../../services/departamento.service';
import { MunicipioService } from 'src/app/services/municipio.service';
import { GeneroService } from 'src/app/services/genero.service';
import { TipoDocumentoService } from 'src/app/services/tipoDocumento.service';

import { Router } from '@angular/router';
import { FormGroup, FormControl, Validators } from '@angular/forms';
import Swal from 'sweetalert2';

@Component({
  selector: 'app-create',
  templateUrl: './create.component.html',
  styleUrls: ['./create.component.css']
})
export class CreateComponent implements OnInit {

  form: FormGroup;

  departamentos = [];
  municipios    = [];
  listGenero    = [];
  listDocument  = [];

  constructor(
    public pacienteService: PacienteService,
    public departamentoService: DepartamentoService,
    public municipioService: MunicipioService,
    public generoService: GeneroService,
    public tipoDocumentoService: TipoDocumentoService,
    private router: Router
  ) { }

  ngOnInit(): void {

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
    this.getDocument();

  }

  get f(){
    return this.form.controls;
  }

  getDocument() {
    this.tipoDocumentoService.getAll().subscribe((data: any) => {
      this.listDocument = data;
      //console.log("Aqui data", data);
    }
  );
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
    this.pacienteService.create(this.form.value).subscribe(res => {
      console.log('Paciente creado exitosamente!');
      Swal.fire({
        icon: 'success',
        title: 'Paciente creado exitosamente!',
        showConfirmButton: false,
        timer: 1500
      })
      this.router.navigateByUrl('paciente/index');
    })
  }

}
