import { Injectable } from '@angular/core';
import { CanActivate, Router } from '@angular/router';



@Injectable({
  providedIn: 'root'
})
export class RouterGuard
{
  
  //Promise: objeto em javascript que permite o processamentos de forma assíncrona(simultanea) dentro o seu código
  

  // constructor(private autenticar: AutenticarService, private routerControl: Router) {}

  // canActivate():Promise<boolean>{ 
  //   return new Promise( results => {
  //     this.autenticar.detalesUser().onAuthStateChanged(user => {
  //       if (!user) this.routerControl.navigate(['']);
  //       results(user ? true : false);
  //     })
  //   })
  // }
  
}
