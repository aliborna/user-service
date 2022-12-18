<?php
namespace Aliborna\UserService;

class UserService extends ApiService {

    public function __construct() {
        $this->endpoint = 'http://users_backend:8000/api';
    }
}