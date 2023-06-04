import { Component, OnInit } from '@angular/core';
import { FormBuilder, FormGroup } from '@angular/forms';
import { ActivatedRoute } from '@angular/router';
import { FirebaseService } from 'src/app/service/firebase.service';

@Component({
  selector: 'app-formupdate',
  templateUrl: './formupdate.component.html',
  styleUrls: ['./formupdate.component.css']
})
export class FormupdateComponent implements OnInit {

  updateForm: FormGroup;

  routeId = null;
  
  constructor
  (private actived: ActivatedRoute,
   private firebase: FirebaseService,
   private formBuilder: FormBuilder ){}

  ngOnInit(): void {
    this.createForm("");

    this.routeId = this.actived.snapshot.params['id'];

    if (this.routeId) {
      this.firebase.consultaUm(this.routeId).subscribe(result => this.createForm(result));
    }
  }

  createForm(dados) {
    this.updateForm = this.formBuilder.group({
          nome: [dados.nome],
          email: [dados.email],
          senha:  [dados.senha],
          cep: [dados.cep],
          endereco:[dados.endereco],
          num: [dados.num],
          bairro: [dados.bairro],
          cidade: [dados.cidade],
          estado: [dados.estado],
    })
  }

  atualizar(){
    this.firebase.editaDados(this.routeId, this.updateForm.value);
    alert('Dados atualizados')
  }
}
