import { Component, OnInit } from '@angular/core';
import { Route, Router } from '@angular/router';
import { LoginService } from '../login.service';
import { IManga, IUserControl } from '../manga';
import { MangaService } from '../manga.service';

@Component({
  selector: 'app-admin',
  templateUrl: './admin.component.html',
  styleUrls: ['./admin.component.css']
})
export class AdminComponent implements OnInit {
  //listManga: IManga[];
  listUser: IUserControl[];

  constructor(private _mangaService: MangaService, private _login: LoginService, private _route: Router) { }

  ngOnInit(): void {
    let admin = this._login.getAdmin();
    if (admin == undefined || admin == null)
      this._route.navigate(['/login']).then(()=>{
      window.location.reload();
    });

    this._mangaService.getUsers().subscribe(data => {
      this.listUser = data;
      console.log(this.listUser);
    });

    
  }

  deleteUser(){

  }
}
