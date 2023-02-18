import { Injectable } from '@angular/core';
import {io} from 'socket.io-client';
import { Observable } from 'rxjs';
// import * as Rx from 'rxjs/Rx'


@Injectable({
  providedIn: 'root'
})
export class WebsocketService {
  numberOfClients: number;
  ngOnInit() {
    // const ws = new WebSocket('ws://localhost:8080');
    // ws.onopen = function() {
    //   console.log("connected to server");
    //   ws.send("hello!");
    // }
    // ws.onmessage = (event) => {
    //   this.numberOfClients = event.data;
    //   console.log(`Number of clients: ${this.numberOfClients}`);
    // };
  }

  async connectToServer() {
    const ws = new WebSocket('ws://localhost:8080');
    ws.onopen = function() {
      console.log("connected to server");
      ws.send("hello!");
    }
     ws.onmessage = async (event) => {
      this.numberOfClients = await event.data;
      console.log(`Number of clients: ${this.numberOfClients}`);
    };
  }

  getCurrentOnlineUser(): any {
    return this.numberOfClients;
  }

}
