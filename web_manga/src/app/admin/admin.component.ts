import { Component, OnInit } from '@angular/core';
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

  constructor(private _mangaService: MangaService) { }

  ngOnInit(): void {
    // this._mangaService.getListManga().subscribe(
    //   data => {
    //     this.listManga = data;
    //   }
    // );
    this._mangaService.getUsers().subscribe(data => {
      this.listUser = data;
      console.log(this.listUser);
    });

    
  }

  deleteUser(){

  }

  // deleteManga(){
    
  // }

}
