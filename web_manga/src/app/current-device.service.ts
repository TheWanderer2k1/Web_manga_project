import { Injectable } from '@angular/core';

export enum  Device {
  Pc = 0,
  Tablet = 1,
  Mobile = 2,
}

@Injectable({
  providedIn: 'root'
})

export class CurrentDeviceService {
  currentDevice: Device
  constructor() { }
  setCurrentDevice(device: Device) {
    this.currentDevice = device;
  }

  getCurrentDevice() {
    return this.currentDevice;
  }
}
