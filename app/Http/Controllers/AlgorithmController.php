<?php

namespace App\Http\Controllers;

use App\Models\DesignCategory;
use App\Models\AddDesigns;

use Illuminate\Http\Request;

class AlgorithmController extends Controller
{
    public function page(Request $request)
    {
        $height = $request->height;
        $width = $request->width;
        $color = $request->color;
        $budget = $request->budget;
        $pattern = $request->pattern;
        $description = $request->description;
        $designId = $request->category_id;
        $cat = DesignCategory::where('id', $designId)->first();
        $category = DesignCategory::all();
        $recommendedId = $this->algorithm($designId, $height, $width, $color, $budget, $pattern, $description);
        $recommendedData = AddDesigns::whereIn('id', $recommendedId)->get();
        $cat = DesignCategory::where('id', $designId)->first();

        return view('client.page', ['recommedDetail' => $recommendedData], compact('cat', 'category'));
        // return $recommendedId;

    }

    public function cleanText($text) {
        $stopWords = [
            "a", "about", "above", "after", "again", "against", "all", "am", "an", "and", "any", "are", "aren't", "as", "at",
    "be", "because", "been", "before", "being", "below", "between", "both", "but", "by",
    "can't", "cannot", "could", "couldn't", "did", "didn't", "do", "does", "doesn't", "doing", "don't", "down", "during",
    "each", "few", "for", "from", "further",
    "had", "hadn't", "has", "hasn't", "have", "haven't", "having", "he", "he'd", "he'll", "he's", "her", "here", "here's", "hers", "herself", "him", "himself", "his", "how", "how's",
    "i", "i'd", "i'll", "i'm", "i've", "if", "in", "into", "is", "isn't", "it", "it's", "its", "itself",
    "let's",
    "me", "more", "most", "mustn't", "my", "myself",
    "no", "nor", "not",
    "of", "off", "on", "once", "only", "or", "other", "ought", "our", "ours", "ourselves", "out", "over", "own",
    "same", "shan't", "she", "she'd", "she'll", "she's", "should", "shouldn't", "so", "some", "such",
    "than", "that", "that's", "the", "their", "theirs", "them", "themselves", "then", "there", "there's", "these", "they", "they'd", "they'll", "they're", "they've", "this", "those", "through", "to", "too",
    "under", "until", "up",
    "very",
    "was", "wasn't", "we", "we'd", "we'll", "we're", "we've", "were", "weren't", "what", "what's", "when", "when's", "where", "where's", "which", "while", "who", "who's", "whom", "why", "why's", "with", "won't", "would", "wouldn't",
    "you", "you'd", "you'll", "you're", "you've", "your", "yours", "yourself", "yourselves"
];
        $text = preg_replace("/[^a-zA-Z0-9\s]/", "",$text);
        $words = explode(' ', $text);
        $filteredWords = array_filter($words, function($word) use ($stopWords) {
            return !in_array(strtolower($word), $stopWords);
        });
        $cleanText = implode(' ', $filteredWords);
        return $cleanText;
    }

    public function algorithm($designId, $height, $width, $color, $budget, $pattern, $description) {
        $exactOutput = AddDesigns::where('category_id', $designId)
        ->where('height', 'LIKE', "%{$height}%")
        ->where('width', 'LIKE', "%{$width}%")
        ->where('color', 'LIKE', "%{$color}%")->pluck('id')->all();
        $output = [];
        $designDescription = AddDesigns::where('category_id', $designId)
        ->select('id', 'description')->get();

        $userCleanDescription = $this->cleanText($description);
        foreach($designDescription as  $desc){
            $designCleanDescription = $this->cleanText($desc->description);
            $designdesc = collect(explode(' ', $designCleanDescription))->unique();
            $userdesc = collect(explode(' ', $userCleanDescription))->unique();

            $intersection = $userdesc->intersect($designdesc)->count();
            $union = $userdesc->merge($designdesc)->count();

            $similarity = ($union > 0) ? ($intersection / $union) : 0;

            if($similarity >= 0){
                array_push($output,$desc->id);
            }
        }
        $finalOutput = array_merge($exactOutput, $output);
        return array_unique($finalOutput);

    }
}
