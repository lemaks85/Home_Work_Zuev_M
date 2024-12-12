<?php

namespace Geekbrains\Application1\Domain\Models;

use Geekbrains\Application1\Application\Application;
use Geekbrains\Application1\Infrastructure\Storage;
use Geekbrains\Application1\Application\Auth;

class User {

    private ?int $userId;

    private ?string $userName;

    private ?string $userLastName;
    private ?int $userBirthday;

    private ?string $userLogin;
    private ?string $userPassword;

    private static string $storageAddress = '/storage/birthdays.txt';

    public function __construct(int $id = null, string $name = null, string $lastName = null, int $birthday = null){
        $this->userId = $id;
        $this->userName = $name;
        $this->userLastName = $lastName;
        $this->userBirthday = $birthday;
    }

    public function setName(string $userName) : void {
        $this->userName = $userName;
    }

    public function setLastName(string $userLastName) : void {
        $this->userLastName = $userLastName;
    }

    public function getUserName(): ?string {
        return $this->userName;
    }

    public function getUserLastName(): ?string {
        return $this->userLastName;
    }

    public function getUserBirthday(): ?int {
        return $this->userBirthday;
    }

    public function getUserId(): ?int {
        return $this->userId;
    }

    public function setBirthdayFromString(string $birthdayString) : void {
        $this->userBirthday = strtotime($birthdayString);
    }

    public static function getAllUsersFromStorage(?int $limit = null): array {
        $sql = "SELECT * FROM users";

        if(isset($limit) && $limit > 0) {
            $sql .= " WHERE id_user > " .(int)$limit;
        }

        $handler = Application::$storage->get()->prepare($sql);
        $handler->execute();
        $result = $handler->fetchAll();

        $users = [];

        foreach($result as $item){
            $user = new User($item['id_user'], $item['user_name'], $item['user_lastname'], $item['user_birthday_timestamp']);
            $users[] = $user;
        }
        
        return $users;
    }

    public static function validateRequestData(): bool{
        $result = true;
        
        if(!(
            isset($_POST['name']) && !empty($_POST['name']) &&
            isset($_POST['lastname']) && !empty($_POST['lastname']) &&
            isset($_POST['birthday']) && !empty($_POST['birthday']) &&
            isset($_POST['login']) && !empty($_POST['login']) &&
            isset($_POST['password']) && !empty($_POST['password'])
        )){
            $result = false;
        }

        if(!preg_match('/^(\d{2}-\d{2}-\d{4})$/', $_POST['birthday'])){
            $result =  false;
        }

        if(!isset($_SESSION['csrf_token']) || $_SESSION['csrf_token'] != $_POST['csrf_token']){
            $result = false;
        }

        return $result;
    }

    public function setParamsFromRequestData(): void {
        $this->userName = htmlspecialchars($_POST['name']);
        $this->userLastName = htmlspecialchars($_POST['lastname']);
        $this->setBirthdayFromString($_POST['birthday']); 
        $this->userLogin = htmlspecialchars($_POST['login']); 
        $this->userPassword = Auth::getPasswordHash($_POST['password']);
    }

    public function saveToStorage(){
        $sql = "INSERT INTO users(user_name, user_lastname, user_birthday_timestamp, `login`, password_hash) VALUES (:user_name, :user_lastname, :user_birthday, :user_login, :user_password)";

        $handler = Application::$storage->get()->prepare($sql);
        $handler->execute([
            'user_name' => $this->userName,
            'user_lastname' => $this->userLastName,
            'user_birthday' => $this->userBirthday,
            'user_login' => $this->userLogin,
            'user_password' => $this->userPassword
        ]);
    }

    public function getUserDataAsArray(): array {
        $userArray = [
            'id' => $this->userId,
            'username' => $this->userName, 
            'userlastname' => $this->userLastName,
            'userbirthday' => date('d.m.Y', $this->userBirthday)
        ];

        return $userArray;
    }
}