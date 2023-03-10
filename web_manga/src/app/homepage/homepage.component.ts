import { Component, OnInit } from '@angular/core';
import { Router } from '@angular/router';
import { CurrentDeviceService, Device } from '../current-device.service';
import { IManga } from '../manga';
import { MangaService } from '../manga.service';
import { SearchService } from '../search.service';


@Component({
  selector: 'app-homepage',
  templateUrl: './homepage.component.html',
  styleUrls: ['./homepage.component.css']
})
export class HomepageComponent implements OnInit {
  public listManga: IManga[] = [];
  public listGenre: string[];
  totalChapter: number;
  p: number =1;
  currentDevice: Device;
  readonly Device = Device;

  constructor(private _mangaService: MangaService, private route: Router, private _search: SearchService, private currentDeviceService: CurrentDeviceService) { }

  ngOnInit(): void {
    this._mangaService.getListManga()
        .subscribe(data => {
          this.listManga = data
    });

    this.listGenre = this._mangaService.getGenres();
    this.currentDevice = this.currentDeviceService.getCurrentDevice();
  }

  selectManga(name: string){
    //this._transferManga.setManga(manga)
    this.route.navigate(['/read', name]);
    console.log("select " + name + " successful!");
  }

  searchByGenre(genre: string){
    //console.log(genre);
    this._search.searchByGenre(genre);
  }

  searchByAuthor(author: string){
    this._search.searchByAuthor(author);
  }
}
