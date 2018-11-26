import { Component, OnInit } from '@angular/core';
import { ListService } from "../../core";
import { Router } from "@angular/router";
import { timingSafeEqual } from 'crypto';


@Component({
  selector: "app-list",
  templateUrl: "./list.component.html",
  styleUrls: ["./list.component.css"]
})
export class ListComponent implements OnInit {
  articulosList:any;
  constructor(
    private listDispositivosService: ListService,
    private router: Router
    ) {
    }
    
    ngOnInit() {
      this.listDispositivosService.getAll().subscribe(data => {
        this.articulosList = data.dispositivos;
        console.log("----------list dispo", this.articulosList);
        });
    }
}
