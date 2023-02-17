import { HttpClient } from '@angular/common/http';
import { Component, HostListener, OnDestroy, OnInit } from '@angular/core';
import { LoginService } from './login.service';
import { OnlineUserService } from './online-user.service';
import * as io from 'socket.io-client';
import { ActivatedRoute, Router } from '@angular/router';


class OnlineUser {
  currentUser: number;
}
@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.css'],
})
export class AppComponent{
  title = 'web_manga';
  socket: any;
  onlineUsers: string[] = [];
  isAdmin: boolean = false;

  @HostListener('window:beforeunload', ['$event'])
  // async unloadHandler(event: BeforeUnloadEvent) {
  //   // Perform any actions before the user closes the web page
  //   debugger;
  //   await this.updateOnlineUser('down');
  //   debugger;
  // }
  async unloadHandler(event: Event) {
    // Call your API here
    // this.http.get('https://example.com/api').subscribe();
    // await this.updateOnlineUser('down');
    alert('haha');
    // this.http.get('http://localhost:3000/onlineUsers').subscribe(response => {
    //   debugger;
    // });
    this.onlineUserService.getCurrentOnlineUser().subscribe(async (response) => {
      this.currentOnlineUser = response;
      this.currentOnlineUser!.currentUser--;
      await this.onlineUserService
        .updateCurrentOnlineUser(this.currentOnlineUser)
        .subscribe((response) => {
        });
    });
  }

  constructor(
    private onlineUserService: OnlineUserService,
    private http: HttpClient,
    private router: Router
  ) {
    this.updateOnlineUser('up');

  }
  currentOnlineUser: OnlineUser;
  async updateOnlineUser(action: string) {
    // await this.onlineUserService
    //   .getCurrentOnlineUser()
    //   .toPromise()
    //   .then((response) => {
    //     this.currentOnlineUser = response;
    //   });
    await this.onlineUserService
      .getCurrentOnlineUser()
      .subscribe((response) => {
        this.currentOnlineUser = response;
        if (action == 'up') {
          this.currentOnlineUser!.currentUser++;
        } else if (action == 'down') {
          this.currentOnlineUser!.currentUser--;
        }
        this.onlineUserService
          .updateCurrentOnlineUser(this.currentOnlineUser)
          .subscribe((response) => {
          });
      });
  }

  ngOnInit() {
    // this.socket = io('http://localhost:3000');
    // this.socket.on('connect', () => {
    //   console.log('Connected to server');
    // });
    if(window.location.pathname.includes("/admin")) this.isAdmin = true;

  }
}
