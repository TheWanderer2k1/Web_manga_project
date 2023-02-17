import { HttpClient, HttpHeaders, HttpParams } from '@angular/common/http';
import { Injectable } from '@angular/core';
import { Observable } from 'rxjs/internal/Observable';
import { IChapter, IComment, IManga, IUserControl } from './manga';

@Injectable({
  providedIn: 'root'
})
export class MangaService {
  // private _urlPrefix: string = "http://localhost/server/"; //change here if you place in a different folder
  private _urlPrefix: string = "http://localhost/LTW/webmanga/"; //Duc Huy

  private _urlListManga: string = this._urlPrefix + "getListManga.php";

  private _urlManga: string = this._urlPrefix + "getManga.php";

  private _urlChapter: string = this._urlPrefix + "getListChapter.php";

  private _urlSearch: string = this._urlPrefix + "searchManga.php";

  private _urlAuthen: string = this._urlPrefix + "login.php";

  private _urlGetCmt: string = this._urlPrefix + "getListComments.php";

  private _urlAddCmt: string = this._urlPrefix + "addComment.php";

  private _urlSignin: string = this._urlPrefix + "signin.php";

  private _urlGetUsers: string = this._urlPrefix + "getUsers.php";

  private _urlUpdateLikeCmt: string = this._urlPrefix + "updateLikeCmt.php";

  private _urlLogin: string = this._urlPrefix + "login.php";

  private _urlAdminLogin: string = this._urlPrefix + "adminLogin.php";

  constructor(private http: HttpClient) { }

  getUrlLogin(): string{
    return this._urlLogin;
  }

  getUrlAdminLogin(): string{
    return this._urlAdminLogin;
  }

  getListManga(): Observable<IManga[]>{
    return this.http.get<IManga[]>(this._urlListManga);
  }

  getManga(name: string): Observable<IManga>{
    let queryParam = new HttpParams().append("name", name);

    return this.http.get<IManga>(this._urlManga, {params: queryParam});
  }

  getListChapter(name: string): Observable<IChapter[]>{
    let queryParam = new HttpParams();
    queryParam = queryParam.append("name", name);

    return this.http.get<IChapter[]>(this._urlChapter, {params: queryParam});
  }

  searchManga(searchBy: string, str: string): Observable<IManga[]>{
    let queryParam = new HttpParams();
    queryParam = queryParam.append("searchBy", searchBy);
    queryParam = queryParam.append("str", str);

    return this.http.get<IManga[]>(this._urlSearch, {params: queryParam});
  }

  getGenres(){
    let genres = ["action", "comedy", "drama", "fantasy", "historical", "horror", "martial art", "mecha", "romance", "slice of life",
                  "sport", "supernatural"];
    return genres;
  }

  getListComments(ID_manga: number): Observable<IComment[]>{
    let queryParam = new HttpParams();
    queryParam = queryParam.append("ID_manga", ID_manga);

    return this.http.get<IComment[]>(this._urlGetCmt, {params: queryParam});
  }

  addComment(ID_manga: number, ID_reader: number, cmt: string, date: string): Observable<IComment>{
    const myHeaders = new HttpHeaders().set('Content-Type', 'application/x-www-form-urlencoded');
    let body = new HttpParams();
    body = body.set('ID_manga', ID_manga);
    body = body.set('ID_reader', ID_reader);
    body = body.set('cmt', cmt);
    body = body.set('date', date);
    return this.http.post<IComment>(this._urlAddCmt, body, {headers: myHeaders});
  }

  signin(username: string, pwd: string):Observable<number>{
    const myHeaders = new HttpHeaders().set('Content-Type', 'application/x-www-form-urlencoded');
    let body = new HttpParams();
    body = body.set('username', username);
    body = body.set('pwd', pwd);
    return this.http.post<number>(this._urlSignin, body, {headers: myHeaders});
  }

  getUsers(): Observable<IUserControl[]>{
    return this.http.get<IUserControl[]>(this._urlGetUsers);
  }

  deleteUsers(id: any){
    return this.http.delete(`${this._urlGetUsers}/${id}`);
  }

  updateLikeComment(id: number, likes: number): Observable<String>{
    const myHeaders = new HttpHeaders().set('Content-Type', 'application/x-www-form-urlencoded');
    let body = new HttpParams();
    body = body.set('id_cmt', id);
    body = body.set('likes', likes);
    return this.http.post<String>(this._urlUpdateLikeCmt, body, {headers: myHeaders});
  }
}
