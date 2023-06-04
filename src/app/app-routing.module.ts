import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';

import { ExibicaoComponent } from './page/exibicao/exibicao.component';
import { FormularioComponent } from './page/formulario/formulario.component';
import { FormupdateComponent } from './page/formupdate/formupdate.component';
import { RouterGuard } from './guardRouters/router.guard';


const routes: Routes = [

  {path: 'exibicao', component: ExibicaoComponent},
  {path: '', component: FormularioComponent},
  {path: 'form', component: FormularioComponent},
  {path: 'update/:id', component: FormupdateComponent},

];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
