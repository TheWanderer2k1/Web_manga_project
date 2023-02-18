import { HttpClient } from '@angular/common/http';
import { Component, HostListener, OnDestroy, OnInit } from '@angular/core';
import { LoginService } from './login.service';
import { OnlineUserService } from './online-user.service';
import io from 'socket.io-client';
import { ActivatedRoute, Router } from '@angular/router';
import { WebsocketService } from './websocket.service';

class OnlineUser {
  currentUser: number;
}
@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.css'],
})
export class AppComponent {
  title = 'web_manga';
  socket: any;
  onlineUsers: string[] = [];

  // @HostListener('window:beforeunload', ['$event'])
  // adHandler(event: Event) {
  //   this.onlineUserService
  //     .getCurrentOnlineUser()
  //     .subscribe(async (response) => {
  //       this.currentOnlineUser = response;
  //       this.currentOnlineUser!.currentUser--;
  //       await this.onlineUserService
  //         .updateCurrentOnlineUser(this.currentOnlineUser)
  //         .subscribe((response) => {});
  //     });
  // }

  constructor(
    private onlineUserService: OnlineUserService,
    private http: HttpClient,
    private router: Router,
    private websocketService: WebsocketService
  ) {
    // this.updateOnlineUser('up');
  }
  // currentOnlineUser: OnlineUser;
  // async updateOnlineUser(action: string) {
  //   await this.onlineUserService
  //     .getCurrentOnlineUser()
  //     .subscribe((response) => {
  //       this.currentOnlineUser = response;
  //       if (action == 'up') {
  //         this.currentOnlineUser!.currentUser++;
  //       } else if (action == 'down') {
  //         this.currentOnlineUser!.currentUser--;
  //       }
  //       this.onlineUserService
  //         .updateCurrentOnlineUser(this.currentOnlineUser)
  //         .subscribe((response) => {});
  //     });
  // }

  ngOnInit() {
    this.websocketService.connectToServer();
    // setTimeout(() => {
    //   this.websocketService.connectToServer();
    // }, 3000);
  }
}
