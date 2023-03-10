import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { AdminComponent } from './admin/admin.component';
import { DashboardComponent } from './admin/dashboard/dashboard.component';
import { UserManagementComponent } from './admin/user-management/user-management.component';
import { HomepageComponent } from './homepage/homepage.component';
import { LoginComponent } from './login/login.component';
import { MangaInfoComponent } from './manga-info/manga-info.component';
import { PageNotFoundComponent } from './page-not-found/page-not-found.component';
import { ReadpageComponent } from './readpage/readpage.component';
import { SearchResultScreenComponent } from './search-result-screen/search-result-screen.component';
import { SigninComponent } from './signin/signin.component';

const routes: Routes = [
  { path: '', redirectTo: '/homepage', pathMatch: 'full' },
  { path: 'homepage', component: HomepageComponent },
  { path: 'read/:name', component: MangaInfoComponent },
  { path: 'read/:name/:chapter', component: ReadpageComponent },
  { path: 'search/:searchBy/:str', component: SearchResultScreenComponent },
  { path: 'login', component: LoginComponent },
  { path: 'signin', component: SigninComponent },
  {
    path: 'admin',
    component: AdminComponent,
    children: [
      { path: 'dashboard', component: DashboardComponent },
      { path: 'user-management', component: UserManagementComponent },
    ],
  },
  { path: '**', component: PageNotFoundComponent },
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule],
})
export class AppRoutingModule {}
export const routingComponents = [
  HomepageComponent,
  MangaInfoComponent,
  ReadpageComponent,
  SearchResultScreenComponent,
  PageNotFoundComponent,
  LoginComponent,
  SigninComponent,
  AdminComponent,
];
