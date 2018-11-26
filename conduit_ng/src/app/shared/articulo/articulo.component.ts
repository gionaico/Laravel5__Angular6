import { Component, OnInit, Input } from '@angular/core';
import { ListService } from "../../core";
import { Router } from "@angular/router";


@Component({
    selector: "app-articulo",
    templateUrl: "./articulo.component.html",
})

export class ArticuloComponent implements OnInit {
    @Input() articulo: any;
    constructor(
        private listDispositivosService: ListService,
        private router: Router
    ) { }

    ngOnInit() {
        
        console.log(this.articulo);
    }
}
    