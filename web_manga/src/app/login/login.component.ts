import { Component, OnInit } from '@angular/core';
import { Router } from '@angular/router';
import { LoginService } from '../login.service';
import { MangaService } from '../manga.service';

@Component({
  selector: 'app-login',
  templateUrl: './login.component.html',
  styleUrls: ['./login.component.css']
})
export class LoginComponent implements OnInit {
  ID_reader: number;
  username: string;

  constructor(private route: Router, private _login: LoginService, private _manga: MangaService) { }

  ngOnInit(): void {
  }

  onClickSubmit(data: any){
    if (data.admin == 1){
      //console.log('login as admin!');
      //do something
      fetch(this._manga.getUrlAdminLogin() + '?admin=' + data.username + '&pwd=' + data.pwd).then((res) => res.json()).then(
      response =>{
        console.log(response);
        if (response != null || response != undefined){
          this._login.adminLogin(response.ID_admin ,response.admin);

          this.route.navigate(['/admin']).then(()=>{
            window.location.reload();
          });
        }else
          alert('this admin does not exist!');

      }
      );
    }else{
      //console.log('login as user!');
      fetch(this._manga.getUrlLogin() + '?username=' + data.username + '&pwd=' + data.pwd).then((res) => res.json()).then(
      response =>{
        console.log(response);
        if (response != null || response != undefined){
          this._login.userLogin(response.ID_reader ,response.username);

          this.route.navigate(['/homepage']).then(()=>{
            window.location.reload();
          });
        }else
          alert('wrong password or account not exist!');

      }
      );
    }
  }
}
