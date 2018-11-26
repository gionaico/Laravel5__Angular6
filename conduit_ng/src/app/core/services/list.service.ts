import { Injectable } from '@angular/core';
import { Observable } from 'rxjs/Observable';
import { ApiService } from './api.service';
import { map } from 'rxjs/operators/map';
import { listDispositivos } from "../models";

/* import { Profile } from '../models'; */

@Injectable()
export class ListService {
  constructor(private apiService: ApiService) {}

  getAll(): Observable<listDispositivos> {
    return this.apiService
      .get(`/dispositivos`)
      .pipe(map(data => data));
  }
}



