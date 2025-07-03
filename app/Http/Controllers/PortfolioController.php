<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    
public function index() 
    
{
        
$projects = Portfolio::latest()->get();

    $categories = [
        'all' => 'All Projects',
        'web' => 'Web Development',
        'mobile' => 'Mobile Apps',
        'ecommerce' => 'E-commerce',
        'management' => 'Management Systems'
    ];

    $stats = [
        'total_projects' => $projects->count(),
        'completed_projects' => $projects->where('status', 'completed')->count(),
        'happy_clients' => 35, // optional: replace with dynamic if you track it
        'years_experience' => 15
    ];

    return view('pages.portfolio', [
        'pageTitle' => 'Portfolio',
        'heroTitle' => 'Portfolio',
        'heroDescription' => 'Explore our portfolio of successful IT projects and digital solutions delivered to clients across Ethiopia.',
        'projects' => $projects,
        'categories' => $categories,
        'stats' => $stats,
    ]);


    }




    public function show($id)
    {
        // This would typically fetch a specific project from database
        $project = Portfolio::findOrFail($id);

    return view('pages.portfolio.show', compact('project'));

    }


    public function search(Request $request)

    {

    $$query = $request->get('q', '');

    $category = $request->get('category', null);

    $results = Portfolio::query()
        ->when($query, fn($q) => $q->where('title', 'like', '%' . $query . '%'))
        ->when($category && $category != 'all', fn($q) => $q->where('category', $category))
        ->get();

    return response()->json([
        'success' => true,
        'results' => $results,
        'total' => $results->count(),

    ]);
    }
}