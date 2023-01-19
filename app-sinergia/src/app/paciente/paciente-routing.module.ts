import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import { CreateComponent } from './create/create.component';
import { EditComponent } from './edit/edit.component';
import { IndexComponent } from './index/index.component';

const routes: Routes = [
  { path: 'paciente', redirectTo: 'paciente/index', pathMatch: 'full'},
  { path: 'paciente/index', component: IndexComponent },
  { path: 'paciente/create', component: CreateComponent },
  { path: 'paciente/edit/:idPaciente', component: EditComponent } ,
  { path: '**', redirectTo: 'paciente/index'}
];

@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule]
})
export class PacienteRoutingModule { }
