import { Component, OnInit } from '@angular/core';
import { ListService } from "../core";
import { Router } from "@angular/router";


@Component({
    selector: "app-articulo-detelles",
    templateUrl: "./articulo-detalles.component.html",
})
export class ArticuloDetallesComponent implements OnInit {
    constructor(
        private listDispositivosService: ListService,
        private router: Router
    ) { }

    ngOnInit() {

    }
}
