<?php

use \Codeception\Util\Locator;

class ApartmentTestCest
{
    public function _before(AcceptanceTester $I)
    {
        $I->amOnPage('/');
    }

    // tests
    public function AddApartmentTest(AcceptanceTester $I)
    {
        $I->amOnPage('/admin');
        $I->see('Добавить');
        $I->click('Добавить');
        $I->attachFile('photo[]', '013-4-1024x683.jpg');
        $I->fillField('address', 'Пушкина, дом колотушкина');
        $I->fillField('town', 'Dogestan');
        $I->fillField('price1_2', '2000');
        $I->fillField('price3_9', '1500');
        $I->fillField('price3_9', '1500');
        $I->fillField('rooms', '3');
        $I->fillField('places', '2+2+1');
        $I->fillField('description', 'А как какать');
        $I->checkOption('elevator');
        $I->checkOption('balcony');
        $I->fillField('floor', '3');
        $I->checkOption('parking');
        $I->checkOption('tv');
        $I->click('сохранить');
        $I->seeInCurrentUrl('/admin');
        $I->see('Пушкина, дом колотушкина');
    }
    public function UpdateApartmentTest(AcceptanceTester $I){
        $I->amOnPage('/admin');
        $I->see('Пушкина, дом колотушкина', Locator::lastElement('.main_content_col_box'));
        $I->see('Редактировать', Locator::lastElement('.main_content_col_box'));
        $I->click('Редактировать', Locator::lastElement('.main_content_col_box'));
        $I->seeInCurrentUrl('/admin/edit-apartment');
        $I->see('Удалить фото');
        $I->click('Удалить фото');
        $I->attachFile('photo[]', '014-3-683x1024.jpg');
        $I->fillField('address', 'не Пушкина, дом да');
        $I->fillField('town', '');
        $I->uncheckOption('elevator');
        $I->click('сохранить');
        $I->seeInCurrentUrl('/admin');
        $I->dontSee('Пушкина, дом колотушкина');
        $I->see('не Пушкина, дом да');
    }
}
