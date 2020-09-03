<?php
namespace controllers;

use Ubiquity\utils\http\URequest;
/**
 * Rest Controller UsersController
 * @route("/api/v1/users")
 * @rest("resource"=>"models\Users")
 */
class UsersController extends \Ubiquity\controllers\rest\RestController {

    /**
     * @route("/{userId}", "methods" => ["get"], "requirements"=>["userId"=>"\d+"])
     * @param int $userId
     */
    public function getUSer($userId) {
        parent::getOne($userId);
    }

    /**
     * @route("methods"=>["post"])
     */
    public function createUser() {
        parent::add();
    }

    /**
     * @route("methods"=>["patch"])
     */
    public function updateUser() {
        parent::update(URequest::getPost());
    }

    /**
     * @route("{userId}", "methods" => ["delete"], "requirements" => ["userId" => "\d+"])
     * @param int $userId
     */
    public function deleteUser($userId) {
        parent::delete($userId);
    }

    /**
     * @route("/connect", "methods" => ["post"])
     */
    public function loginUser() {
        parent::connect();
    }


}
