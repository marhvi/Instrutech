import { Component, OnInit } from '@angular/core';
import { FormBuilder, FormGroup, Validators } from '@angular/forms';
import { FirebaseService } from 'src/app/service/firebase.service';

@Component({
  selector: 'app-formulario',
  templateUrl: './formulario.component.html',
  styleUrls: []
})
export class FormularioComponent  implements OnInit {

  formDataDriven!: FormGroup;
 
  constructor(private formBuilder: FormBuilder, private fs: FirebaseService){}

  ngOnInit(): void {

    this.validarForm();
  }

  validarForm() {
    this.formDataDriven = this.formBuilder.group({
      nome: ['', [Validators.required, Validators.minLength(3)]],
      email: ['', [Validators.required, Validators.email]],
      senha: ['', [Validators.required, Validators.minLength(6)]],
      cep: ['', [Validators.required, Validators.minLength(8)]],
      endereco: ['', Validators.required],
      num: ['', Validators.required],
      bairro: ['', Validators.required],
      cidade: ['', Validators.required],
      estado: ['', Validators.required]
    });
  }

  cadastrar(){
    try{
    this.fs.cadastraDados(this.formDataDriven.value);
    alert("Formulario Enviado");
    }catch(err){
      console.log(err);
    }
  }
}
