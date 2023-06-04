import { Component, OnInit } from '@angular/core';
import { FirebaseService } from 'src/app/service/firebase.service';

@Component({
  selector: 'app-exibicao',
  templateUrl: './exibicao.component.html',
  styleUrls: []
})
export class ExibicaoComponent implements OnInit {
  clientes= [];

  constructor(private fs: FirebaseService){}  
  
  ngOnInit(): void {
    this.fs.consultaDados().subscribe(result => this.clientes = result);
  }

  excluir(id){
    this.fs.excluiDados(id);
    alert('Dado excluído!')
  }
}
