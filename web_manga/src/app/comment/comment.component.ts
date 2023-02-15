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
  //comment: IComment;
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
        //if (data.length > 0)
          this.comments = data;
          //test get like number on comment
          // this.comments.forEach(cmt => {
          //   console.log(cmt.likes);
          // })
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
    //if () data.cmt
    this._manga.addComment(this.manga.ID_manga, this.user.ID_reader, data.cmt).subscribe(
      data =>{
        //this.comment = data;
        this.comments.push(data);
      }
    )
  }
}
