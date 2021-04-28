<?php 
$I = new AcceptanceTester($scenario);
$I->wantTo('perform actions and see result');
$I->amOnPage('/admin');
// $I->seeResponseCodeIs(\Codeception\Util\HttpCode::OK);
$I->see('Квартиры на сутки в Черногорске');
$I->see('Добавить');
$I->see('Редактировать');
$I->click('Редактировать');
$I->seeInCurrentUrl('/admin/edit-apartment');
