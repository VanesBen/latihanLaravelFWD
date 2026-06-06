<?php

namespace App\Http\Controllers;

use App\Http\Resources\FoodResource;
use App\Http\Traits\ApiResponse;
use App\Models\Food;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FoodController extends Controller
{
    //
    use ApiResponse;

    public function index(): JsonResponse 
    {
        $foods = Food::all();

        return $this->successResponse(FoodResource::collection($foods));
    }

    public function store(Request $request): JsonResponse
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'description' => ['nullable', 'string'],
            'price' => ['required', 'numeric', 'min:0'],
            'stock' => ['required', 'integer', 'min:0'],
        ]);

        $food = Food::create($validated);

        return $this->createdResponse(new FoodResource($food));
    }
}
