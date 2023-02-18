import { Component, OnInit } from '@angular/core';
import { WebsocketService } from 'src/app/websocket.service';

@Component({
  selector: 'app-dashboard',
  templateUrl: './dashboard.component.html',
  styleUrls: ['./dashboard.component.css']
})
export class DashboardComponent implements OnInit {
  currentOnlineUser: any;
  constructor(
    private websocketService: WebsocketService
  ) { }

  ngOnInit(): void {
    setTimeout(() => {
      this.currentOnlineUser = this.websocketService.getCurrentOnlineUser();
    }, 1000);
    // this.currentOnlineUser = this.websocketService.getCurrentOnlineUser();
  }

}
