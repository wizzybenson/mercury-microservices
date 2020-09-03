<?php 

class UserServiceCest
{
    public function _before(ApiTester $I)
    {
    }

    // tests
    public function getUserByIdThroughAPI(ApiTester $I)
    {
        $I->sendGet('/5');
        $I->seeResponseCodeIs(\Codeception\Util\HttpCode::OK);
        $I->seeResponseIsJson();
        /*$I->seeResponseContainsJson([
            [
                'data' => [
                    'user_id' => '5',
                    'email' => 'grady.cindy@gmail.com',
                    'password' => '$2y$10$49OOzwNAuCZp5uJkPpSz.ei598.dyZOsJRN.rkSiZBMt/KnbLpUpa',
                    'first_name' => 'Arvilla',
                    'last_name' => 'Hessel',
                    'created_at' => '2020-05-31 23:48:03',
                    'updated_at' => null
                ]
            ]
        ]);
        */
        $email = $I->grabDataFromResponseByJsonPath('$.data.email');
        $I->assertSame($email[0], 'grady.cindy@gmail.com', 'Emails are the same');
    }
}
