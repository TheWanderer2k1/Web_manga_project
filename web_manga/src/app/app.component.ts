import { Component, HostListener, OnDestroy } from '@angular/core';
import { LoginService } from './login.service';
import { OnlineUserService } from './online-user.service';

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

  @HostListener('window:beforeunload', ['$event'])
  async unloadHandler(event: BeforeUnloadEvent) {
    // Perform any actions before the user closes the web page
    debugger;
    await this.updateOnlineUser('down');
    debugger;
  }

  constructor(private onlineUserService: OnlineUserService) {
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
    await this.onlineUserService.getCurrentOnlineUser().subscribe((response) => {
      this.currentOnlineUser = response;
      if (action == 'up') {
        this.currentOnlineUser!.currentUser++;
      } else if (action == 'down') {
        this.currentOnlineUser!.currentUser--;
      }
      debugger;
      this.onlineUserService
        .updateCurrentOnlineUser(this.currentOnlineUser)
        .subscribe((response) => {});
    });
  }
}
