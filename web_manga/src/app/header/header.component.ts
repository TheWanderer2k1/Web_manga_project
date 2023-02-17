import { Component, OnInit } from '@angular/core';
import { Router } from '@angular/router';
import { LoginService } from '../login.service';
import { IAdmin, IManga, IUser } from '../manga';
import { MangaService } from '../manga.service';
import { SearchResultScreenComponent } from '../search-result-screen/search-result-screen.component';
import { SearchService } from '../search.service';

@Component({
  selector: 'app-header',
  templateUrl: './header.component.html',
  styleUrls: ['./header.component.css']
})
export class HeaderComponent implements OnInit {
  username: string;
  user: IUser;
  admin: IAdmin;
  hide: boolean;
  hide_admin: boolean;

  constructor(private router: Router, private _login: LoginService) { }

  ngOnInit(): void {
    this.admin = this._login.getAdmin();
    //do something
    if (this.admin != null){
      this._login.userLogout();
      this.hide_admin = true;
      this.hide = true;
      this.username = this.admin.admin;
    }else{
      this.hide_admin = false;
      this.user = this._login.getUser();
      //do something
      if (this.user != null){
        this.hide = true;
        this.username = this.user.username;
      }else{
        this.hide = false;
    }
    }

    //let elements = document.getElementsByName("loginOrSignup");
    
  }

  onClickSubmit(data: any){
    //console.log(data.select);
    let searchBy = data.select;
    if (searchBy == "" || searchBy == undefined)
      searchBy = 'byName';
    this.router.navigate(['/search', searchBy, data.str.trim()]).then(()=>{
      window.location.reload();
    });
  }

  onClickLogout(){
    this._login.adminLogout();
    this._login.userLogout();
    this.router.navigate(['/homepage']).then(()=>{
      window.location.reload();
    });
  }
}
