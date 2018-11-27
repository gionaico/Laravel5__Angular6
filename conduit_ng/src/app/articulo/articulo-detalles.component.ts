import { Component, OnInit } from '@angular/core';
import { ListService } from "../core";
import { ActivatedRoute, Router } from "@angular/router";


@Component({
    selector: "app-articulo-detelles",
    templateUrl: "./articulo-detalles.component.html",
})
export class ArticuloDetallesComponent implements OnInit {
    art:object
    constructor(
        private listDispositivosService: ListService,
        private router: Router,
        private route: ActivatedRoute,
    ) { }

    ngOnInit() {
        this.route.params.subscribe(
            (data) => {
                console.log(data);
                this.art = data
                alert(this.art);
            }
        );

    }
}
