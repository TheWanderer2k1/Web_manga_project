import { Component, OnInit } from '@angular/core';
import { IUserControl } from 'src/app/manga';
import { MangaService } from 'src/app/manga.service';

@Component({
  selector: 'app-user-management',
  templateUrl: './user-management.component.html',
  styleUrls: ['./user-management.component.css'],
})
export class UserManagementComponent implements OnInit {
  listUser: IUserControl[];

  constructor(private _mangaService: MangaService) {}

  ngOnInit(): void {
    this.getListUser();
  }

  getListUser() {
    this._mangaService.getUsers().subscribe((data) => {
      this.listUser = data;
      console.log(this.listUser);
    });
  }

  deleteUser(userId: any) {
    //delete ok, need update on html
    //console.log(userId);
    this._mangaService.deleteUsers(userId).subscribe((response) => {
      alert(response.msg);
      window.location.reload();
    });
  }

  lockUser(userId: any) {
    //console.log(userId);
    this._mangaService.lockAccManage(userId, 1).subscribe((res) => {
      alert(res.msg);
      this.getListUser();
    });
  }

  unlockUser(userId: any) {
    this._mangaService.lockAccManage(userId, 0).subscribe((res) => {
      alert(res.msg);
      this.getListUser();
    });
  }
}
