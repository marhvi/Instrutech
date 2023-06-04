import { Injectable } from "@angular/core";
import { AngularFirestore, AngularFirestoreCollection } from "@angular/fire/compat/firestore";
import { map } from 'rxjs/operators';

@Injectable({
    providedIn: 'root'
})
export class FirebaseService {
    minhaColecao: AngularFirestoreCollection<any>;

    constructor(private afs: AngularFirestore) {
        this.minhaColecao = this.afs.collection<any>('clientes');
    }

    consultaDados() {
        return this.minhaColecao.snapshotChanges().pipe(
            map(actions => {
                return actions.map(a => {
                    const data = a.payload.doc.data() as any;
                    const id = a.payload.doc.id;
                    return { id, ...data };
                });
            })
        );
    }

    consultaUm(id: string) {
        return this.minhaColecao.doc<any>(id).valueChanges();
    }

    cadastraDados(dados: any) {
        return this.minhaColecao.add(dados);
    }

    editaDados(id: string, dados: any) {
        return this.minhaColecao.doc(id).update(dados);
    }

    excluiDados(id: string) {
        return this.minhaColecao.doc(id).delete();
    }
}
