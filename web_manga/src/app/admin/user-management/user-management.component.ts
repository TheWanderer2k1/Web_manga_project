import { Component, OnInit } from '@angular/core';
import { IUserControl } from 'src/app/manga';
import { MangaService } from 'src/app/manga.service';

@Component({
  selector: 'app-user-management',
  templateUrl: './user-management.component.html',
  styleUrls: ['./user-management.component.css']
})
export class UserManagementComponent implements OnInit {
  listUser: IUserControl[];

  constructor(
    private _mangaService: MangaService,

  ) { }

  ngOnInit(): void {
    this._mangaService.getUsers().subscribe((data) => {
      this.listUser = data;
    });
  }

  deleteUser(userId: any) {
    this._mangaService.deleteUsers(userId).subscribe((response) => {});
  }

}
