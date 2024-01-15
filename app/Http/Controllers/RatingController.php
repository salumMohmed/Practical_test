<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rating;
use DB;
class RatingController extends Controller
{
    public function Implement_Rating(Request $request)
{
    $validatedData = $request->validate([
        'product_id' => 'required|exists:products,id', 
        'user_id' => 'required|exists:users,id', 
        'rating' => ['required', Rule::in([1, 2, 3, 4, 5])],
    ]);

    $product_id = $validatedData['product_id'];
    $user_id = $validatedData['user_id'];
    $rating = $validatedData['rating'];

    $ex_rating = Rating::where('product_id', $product_id)
                            ->where('user_id', $user_id)
                            ->first();

    if ($ex_rating) {
        $ex_rating->rating = $rating;
        $ex_rating->save();
    } else {
        Rating::create([
            'product_id' => $product_id,
            'user_id' => $user_id,
            'rating' => $rating,
            'rating_date' => now(),
        ]);
    }

    return new RatingResource(['message' => 'Rating submitted successfully']);

}

public function Remove_Rating($rating_id)
{
    $rating = Rating::find($rating_id);

    if (!$rating) {
        return response()->json(['error' => 'Rating not found'], 404);
    }

    $rating->delete();

    return response()->json(['message' => 'Rating removed successfully']);
}


public function changing_Rating($rating_id, $newRating)
{
    $rating = Rating::find($rating_id);

    if (!$rating) {
        return response()->json(['error' => 'Rating not found'], 404);
    }

    $rating->rating = $newRating;
    $rating->save();

    return response()->json(['message' => 'Rating updated successfully']);
}

public function index()
{
    $product_rating = Rating::join('product', 'user_ratings.product_id', '=', 'product.id')
                    ->join('users', 'user_ratings.user_id', '=', 'users.id')
                    ->get();

return response()->json(['product_rating' => $product_rating]);
}

}