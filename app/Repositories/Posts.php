<?php
/**
 * Created by PhpStorm.
 * User: OpenUser
 * Date: 12.07.2018
 * Time: 17:48
 */

namespace App\Repositories;


use App\Post;
use Illuminate\Database\Eloquent\Builder;

class Posts
{
    public function __construct()
    {

    }

    public function latest()
    {
        /** @var Builder $posts */
        return Post::latest()
            ->filter(request(['month', 'year']))
            ->get();
    }
}
