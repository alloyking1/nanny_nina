<?php

namespace App\Traits;

use App\Models\User;
use Exception;
use Spatie\QueryBuilder\QueryBuilder;
use Spatie\QueryBuilder\AllowedFilter;
use App\Http\Resources\UserResource;


trait FilterTrait
{

    /**
     * @param Request $request Model
     * @return Response
     */

    public function filterRequest()
    {
        try {
            //implement filtering
            $users = QueryBuilder::for(User::class)
                ->allowedFilters([
                    'name',
                    AllowedFilter::exact('age'),
                    'sate', 'email',
                    'country',
                    AllowedFilter::exact('code'),
                    AllowedFilter::callback('has_posts', fn (Builder $query) => $query->whereHas('posts')),

                ])
                ->get();

            return response()->json([
                'message' => new UserResource($users)
            ], 200);
        } catch (Exception $e) {

            return response()->json([
                "error" => "Internal server error",
                "status" => 500
            ]);
        }
    }
}
