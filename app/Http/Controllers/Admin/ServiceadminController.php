<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Models\ServiceCategory;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::with('category')->latest()->get();
        return view('admin.services.index', compact('services'));
    }

    public function create()
    {
        $categories = ServiceCategory::all();
        return view('admin.services.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'slug' => 'required|unique:services',
            'title' => 'required',
            'desc' => 'required',
            'image' => 'required|image|mimes:jpg,png,jpeg|max:2048',
            'price' => 'nullable',
            'features' => 'required|array',
            'category_id' => 'required|exists:service_categories,id'
        ]);

        $imagePath = $request->file('image')->store('services', 'public');

        $validated['image'] = 'storage/' . $imagePath;

        Service::create($validated);

        return redirect()->route('services.index')->with('success', 'Service created successfully.');
    }

    public function show(Service $service)
    {
        return view('admin.services.show', compact('service'));
    }

    public function edit(Service $service)
    {
        $categories = ServiceCategory::all();
        return view('admin.services.edit', compact('service', 'categories'));
    }

    public function update(Request $request, Service $service)
    {
        $validated = $request->validate([
            'slug' => 'required|unique:services,slug,' . $service->id,
            'title' => 'required',
            'desc' => 'required',
            'image' => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
            'price' => 'nullable',
            'features' => 'required|array',
            'category_id' => 'required|exists:service_categories,id'
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('services', 'public');
            $validated['image'] = 'storage/' . $imagePath;
        }

        $service->update($validated);

        return redirect()->route('services.index')->with('success', 'Service updated successfully.');
    }

    public function destroy(Service $service)
    {
        $service->delete();
        return redirect()->route('services.index')->with('success', 'Service deleted successfully.');
    }
}
