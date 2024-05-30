<?php
use Illuminate\Http\Request;
use App\Models\Product;

class SuggestionController extends Controller
{
    public function suggestions(Request $request)
    {
        $searchTerm = $request->input('search');

        // Example: Query products table for suggestions
        $suggestions = Product::where('title', 'like', '%' . $searchTerm . '%')->limit(5)->get();

        return response()->json($suggestions);
    }

}
