<?php

namespace App\Repositories\User;
use App\Article;
use DB;
// use App\Entities\User;
// use App\User;
// use App\Entities\Article;

class UserDataAccessQBRepository implements UserDataAccessRepositoryInterface
{
    // protected $User;
    // protected $Article;

    public function __construct(Article $Article)
    {
        // dd($Article);
        $this->Article  = $Article;
    }

    public function getAll()
    {
        $ArticlArr = $this->Article::with('user')->select('*')->get();
        return $ArticlArr;
    }
}