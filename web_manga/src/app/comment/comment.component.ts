import { Component, Input, OnInit } from '@angular/core';
import { LoginService } from '../login.service';
import { IComment, IManga, IUser } from '../manga';
import { MangaService } from '../manga.service';

@Component({
  selector: 'app-comment',
  templateUrl: './comment.component.html',
  styleUrls: ['./comment.component.css']
})
export class CommentComponent implements OnInit {
  @Input() manga: IManga;
  comments: IComment[];
  user: IUser;
  isLogin: boolean;

  constructor(private _login: LoginService, private _manga: MangaService) { }

  ngOnInit(): void {
    if (this._login.getUser() != null){
      this.user = this._login.getUser();
      this.isLogin = true;
    }else{
      this.isLogin = false;
    }

    this._manga.getListComments(this.manga.ID_manga).subscribe(
      data => {
        this.comments = data;
      }
    );

    //bug khong lay duoc msg plain text
    // this._manga.updateLikeComment(10, 10).subscribe(
    //   data => {
    //     console.log(data);
    //   }
    // );
  }

  onSubmit(data: any){
    let date = new Date();
    let today = [date.getFullYear(), date.getMonth() + 1, date.getDate()].join('-');
    this._manga.addComment(this.manga.ID_manga, this.user.ID_reader, data.cmt, today).subscribe(
      data =>{
        this.comments.push(data);
      }
    )
  }
}
