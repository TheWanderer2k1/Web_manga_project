import { Component, OnInit } from '@angular/core';
import { WebsocketService } from 'src/app/websocket.service';

@Component({
  selector: 'app-dashboard',
  templateUrl: './dashboard.component.html',
  styleUrls: ['./dashboard.component.css']
})
export class DashboardComponent implements OnInit {
  currentOnlineUser: any;
  totalUsers: any;
  isLoading: boolean = false;
  constructor(
    private websocketService: WebsocketService
  ) { }

  ngOnInit(): void {
    setTimeout(() => {
      this.currentOnlineUser = this.websocketService.getCurrentOnlineUser();
      this.totalUsers = 150;
      this.isLoading = false;
    }, 1000);
    this.isLoading = true;
    // this.currentOnlineUser = this.websocketService.getCurrentOnlineUser();
  }

}
