import { Injectable } from '@angular/core';
import { Observable } from 'rxjs/Observable';

import { ApiService } from './api.service';
import { ContactData } from '../models';
import { map } from 'rxjs/operators/map';


@Injectable()
export class ContactService {
  constructor(private apiService: ApiService) {}

    sendEmail(payload): Observable<ContactData> {
        console.log("------------", payload)
        return this.apiService
            .post('/contacto', 
              payload 
              
            )
            .pipe(map(data => {
                console.log("res data", data);
                return data;
            }));
    }
    /* save(article): Observable<string> {
        return this.apiService
            .post('/articles', { article: article })
            .pipe(map(data => {
                console.log(data);
                return data;
            }));
    } */
}
