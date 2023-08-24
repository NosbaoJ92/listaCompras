import { ComponentFixture, TestBed } from '@angular/core/testing';
import { AdicionarItemModalPage } from './adicionar-item-modal.page';

describe('AdicionarItemModalPage', () => {
  let component: AdicionarItemModalPage;
  let fixture: ComponentFixture<AdicionarItemModalPage>;

  beforeEach(async(() => {
    fixture = TestBed.createComponent(AdicionarItemModalPage);
    component = fixture.componentInstance;
    fixture.detectChanges();
  }));

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
