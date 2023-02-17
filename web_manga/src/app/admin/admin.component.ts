import { Component, OnInit } from '@angular/core';
import { Route, Router } from '@angular/router';
import { LoginService } from '../login.service';
import { IManga, IUserControl } from '../manga';
import { MangaService } from '../manga.service';

enum NavItem {
  Dashboard = 0,
  Manga = 1,
  User = 2,
  Exit = 3,
}
@Component({
  selector: 'app-admin',
  templateUrl: './admin.component.html',
  styleUrls: ['./admin.component.css'],
})
export class AdminComponent implements OnInit {
  //listManga: IManga[];
  listUser: IUserControl[];
  readonly NavItem = NavItem;
  choosingNav: any = NavItem.Dashboard;
  choosingNavStyle: any = {
    'background-color': '#FF5C40',
  };
  constructor(
    private _mangaService: MangaService,
    private _login: LoginService,
    private _route: Router
  ) {}

  ngOnInit(): void {
    let admin = this._login.getAdmin();
    if (admin == undefined || admin == null)
      this._route.navigate(['/login']).then(() => {
        window.location.reload();
      });

    this._mangaService.getUsers().subscribe((data) => {
      this.listUser = data;
      //console.log(this.listUser);
    });
  }

  onClickNav(nav: NavItem) {
    switch (nav) {
      case NavItem.Dashboard:
        this._route.navigate(['/admin/dashboard']);
        this.choosingNav = nav;
        break;
      case NavItem.User:
        this._route.navigate(['/admin/user-management']);
        this.choosingNav = nav;
        break;
      case NavItem.Exit:
        this._route.navigate(['/homepage']);
        break;
      default:
        this._route.navigate(['/admin/dashboard']);
        this.choosingNav = nav;
        break;
    }
    // if (nav == NavItem.Exit) {
    //   this._route.navigate(['/homepage']);
    // } else if (nav == NavItem.User) {
    //   this._route.navigate(['/admin/user-management']);
    //   this.choosingNav = nav;
    // } else this.choosingNav = nav;
  }
}
