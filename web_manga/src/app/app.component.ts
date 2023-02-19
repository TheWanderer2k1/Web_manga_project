import { Component } from '@angular/core';
import { CurrentDeviceService, Device } from './current-device.service';
import { WebsocketService } from './websocket.service';

@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.css'],
})
export class AppComponent {
  title = 'web_manga';
  socket: any;
  onlineUsers: string[] = [];

  constructor(
    private websocketService: WebsocketService,
    private currentDeviceService: CurrentDeviceService
  ) {
  }

  ngOnInit() {
    this.websocketService.connectToServer();

    if(window.innerWidth <= 800) {
      this.currentDeviceService.setCurrentDevice(Device.Mobile)
    } else if(window.innerWidth <= 1200) {
      this.currentDeviceService.setCurrentDevice(Device.Tablet)
    } else {
      this.currentDeviceService.setCurrentDevice(Device.Pc)
    }
  }
}
