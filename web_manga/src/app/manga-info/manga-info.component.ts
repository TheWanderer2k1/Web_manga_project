import { Component, OnInit } from '@angular/core';
import { ActivatedRoute, Router } from '@angular/router';
import { CurrentDeviceService, Device } from '../current-device.service';
import { IChapter, IManga } from '../manga';
import { MangaService } from '../manga.service';
import { SearchService } from '../search.service';

@Component({
  selector: 'app-manga-info',
  templateUrl: './manga-info.component.html',
  styleUrls: ['./manga-info.component.css'],
})
export class MangaInfoComponent implements OnInit {
  public manga: IManga;
  noChapter: boolean;
  currentDevice: Device;
  readonly Device = Device;

  constructor(
    private activateRoute: ActivatedRoute,
    private _mangaService: MangaService,
    private route: Router,
    private _search: SearchService,
    private currentDeviceService: CurrentDeviceService
  ) {}

  ngOnInit(): void {
    this._mangaService
      .getManga(this.activateRoute.snapshot.paramMap.get('name')!)
      .subscribe((data) => {
        this.manga = data;
        if (this.manga.listChapter.length > 0) this.noChapter = false;
        else this.noChapter = true;
      });
    this.currentDevice = this.currentDeviceService.getCurrentDevice();
  }

  selectChapter(name: string, index: number) {
    this.route.navigate(['/read', name, index]);
    //console.log(index);
  }

  searchByAuthor(author: string) {
    this._search.searchByAuthor(author);
  }
}
