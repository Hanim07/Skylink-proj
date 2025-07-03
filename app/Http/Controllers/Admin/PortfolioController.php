<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Portfolio;


class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
   public function adminIndex() {
    $projects = Portfolio::latest()->paginate(10);
    return view('admin.portfolio.index', compact('projects'));
}

public function create() {
    return view('admin.portfolio.create');
}

public function store(Request $request) {
    $validated = $request->validate([
        'title' => 'required|string|max:255',
        'description' => 'required',
        'image' => 'required|image|mimes:jpg,jpeg,png,webp|max:2048',
    ]);

    // Save image
    $imagePath = $request->file('image')->store('portfolio_images', 'public');

    Portfolio::create([
        'title' => $validated['title'],
        'description' => $validated['description'],
        'image' => $imagePath,
    ]);

    return redirect()->route('admin.portfolio.index')->with('success', 'Project added!');
}

public function edit($id) {
    $project = Portfolio::findOrFail($id);
    return view('admin.portfolio.edit', compact('project'));
}

public function update(Request $request, $id) {
    $project = Portfolio::findOrFail($id);

    $validated = $request->validate([
        'title' => 'required|string|max:255',
        'description' => 'required',
        'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
    ]);

    if ($request->hasFile('image')) {
        $imagePath = $request->file('image')->store('portfolio_images', 'public');
        $project->image = $imagePath;
    }

    $project->update([
        'title' => $validated['title'],
        'description' => $validated['description'],
        'image' => $project->image,
    ]);

    return redirect()->route('admin.portfolio.index')->with('success', 'Project updated!');
}

public function destroy($id) {
    $project = Portfolio::findOrFail($id);
    $project->delete();
    return back()->with('success', 'Project deleted!');
}



}
