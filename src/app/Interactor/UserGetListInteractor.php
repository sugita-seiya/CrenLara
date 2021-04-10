<?php
declare(strict_types=1);

namespace App\Interactor;
use App\Repositories\User\UserDataAccessRepositoryInterface AS UserDataAccess;

class UserGetListInteractor
{
    protected $BookDataAccess;

    public function __construct(UserDataAccess $UserDataAccess)
    {
        $this->UserDataAccess = $UserDataAccess;
    }

    public function getAll()
    {
        return $this->UserDataAccess->getAll();
    }
}