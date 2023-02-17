import { Component, OnInit } from '@angular/core';
import { Router } from '@angular/router';

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
  readonly NavItem = NavItem;
  choosingNav: any = NavItem.Dashboard;
  choosingNavStyle: any = {
    'background-color': '#FF5C40',
  };
  constructor(private router: Router) {}

  ngOnInit(): void {
  }
  deleteUser() {}

  deleteManga() {}

  onClickNav(nav: NavItem) {
    switch (nav) {
      case NavItem.Dashboard:
        this.router.navigate(['/admin/dashboard']);
        this.choosingNav = nav;
        break;
      case NavItem.User:
        this.router.navigate(['/admin/user-management']);
        this.choosingNav = nav;
        break;
      default:
        this.router.navigate(['/admin/dashboard']);
        this.choosingNav = nav;
        break;
    }
    if (nav == NavItem.Exit) {
      this.router.navigate(['/homepage']);
    } else if (nav == NavItem.User) {
      this.router.navigate(['/admin/user-management']);
      this.choosingNav = nav;
    } else this.choosingNav = nav;
  }
}
