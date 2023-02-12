import { HttpClient } from '@angular/common/http';
import { Injectable } from '@angular/core';
import { Observable } from 'rxjs';

@Injectable({
  providedIn: 'root',
})
export class OnlineUserService {
  onlineUserUrl = 'http://localhost:3000/onlineUsers';
  constructor(private http: HttpClient) {}

  getCurrentOnlineUser():Observable<any> {
    return this.http.get<any>(this.onlineUserUrl);
  }

  updateCurrentOnlineUser(data: any) {
    return this.http.post<any>(this.onlineUserUrl, data);
  }
}
