<?php
/**
 * Created by PhpStorm.
 * User: OpenUser
 * Date: 12.07.2018
 * Time: 17:48
 */

namespace App\Repositories;


use App\Post;
use App\Redis;
use Illuminate\Database\Eloquent\Builder;

class Posts
{
    /**
     * @var Redis
     */
    private $redis;

    public function __construct(Redis $redis)
    {

        $this->redis = $redis;
    }

    public function latest()
    {
        /** @var Builder $posts */
        return Post::latest()
            ->filter(request(['month', 'year']))
            ->get();
    }
}
