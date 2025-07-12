<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ServiceCategory;
use App\Models\Service;
use Illuminate\Support\Facades\Log;


class ServiceController extends Controller
{
    

   

public function category(string $categorySlug)
{
    // Find category with services
    $category = ServiceCategory::where('slug', $categorySlug)->with('services')->first();

    if (!$category) {
        abort(404, 'Category not found.');
    }

    // Transform services for display (you can use accessors in the model for cleaner code if preferred)
    $items = Service::where('category_id', $category->id)->where('category_id', $category->id)->paginate(9);

$items->getCollection()->transform(function ($service) {
    if (is_numeric($service->price)) {
        $service->price_formatted = '$' . number_format($service->price, 2);
    } else {
        $service->price_formatted = $service->price; // Use the string as-is (e.g., "Custom Quote")
    }

    return $service;
});





    return view('services.servicecategory', [
        'category' => $category->name,
        'items' => $items
    ]);
}
public function getPriceFormattedAttribute()
{
    return is_numeric($this->price) ? '$' . number_format($this->price, 2) : $this->price;
}





    public function detail($subcategory)
{
    $service = Service::where('slug', $subcategory)->firstOrFail();

    return view('services.servicedetail', [
        'service' => $service
    ]);
}


public function index()
{
    try {
        $serviceCategories = ServiceCategory::withCount('services')->get();
        $portfolioItems = Service::with('category')->get()->map(function ($service) {
            return [
                'title' => $service->title,
                'description' => $service->desc,
                'image' => asset('assets/images/services/' . $service->image),
                'category' => $service->category?->slug ?? 'uncategorized',
                'link' => route('services.detail', ['subcategory' => $service->slug])
            ];
        });
    } catch (\Exception $e) {
        // Log the exception for debugging
Log::error('Error loading services: ' . $e->getMessage());

        // Fallback to default data
        return view('services.index', [
            'pageTitle' => 'Our Services',
            'heroTitle' => 'Our Services',
            'heroDescription' => 'We are currently updating our service listings. Please check back soon!',
            'portfolioItems' => [],
            'techServices' => null,
            'testimonials' => [],
            'quoteSection' => []
        ]);
    }

    // Full data returned only if no error
    $data = [
        'pageTitle' => 'Our Services',
        'heroTitle' => 'Our Services',
        'heroDescription' => 'Explore our comprehensive range of IT services designed to help your business succeed in the digital world.',
        'techServices' => [
            'title' => 'Our Top Tech Services',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit...',
            'technologies' => [
                ['name' => 'Laravel', 'icon' => 'fab fa-laravel', 'color' => '#ff2d20'],
                ['name' => 'Angular', 'icon' => 'fab fa-angular', 'color' => '#dd0031'],
                ['name' => 'Node.js', 'icon' => 'fab fa-node-js', 'color' => '#339933'],
                ['name' => 'Vue.js', 'icon' => 'fab fa-vuejs', 'color' => '#4fc08d'],
                ['name' => '.NET', 'icon' => 'fas fa-code', 'color' => '#512bd4']
            ]
        ],
        'portfolioItems' => $portfolioItems,
        'testimonials' => [
            [
                'name' => 'Michael Anderson',
                'position' => 'IT Professional',
                'avatar' => 'https://via.placeholder.com/50x50/2563EB/FFFFFF?text=MA',
                'content' => 'Sky Link has provided exceptional service...'
            ],
            [
                    'name' => 'Emily Davis',
                    'position' => 'Business Executive',
                    'avatar' => 'https://via.placeholder.com/50x50/0891B2/FFFFFF?text=ED',
                    'content' => 'As a business owner, I have been thoroughly impressed with Sky Link\'s understanding of various aspects of the business world. They excel in supporting entrepreneurs, executives, managers, and professionals across various industries.'
                ],
                [
                    'name' => 'James Wilson',
                    'position' => 'Application Developer',
                    'avatar' => 'https://via.placeholder.com/50x50/10B981/FFFFFF?text=JW',
                    'content' => 'The application development services have been outstanding. Sky Link creates innovative software applications for various platforms including mobile phones, desktop computers, web browsers, and enterprise systems.'
                ]

        ],
        'quoteSection' => [
            'title' => 'Need A Free Quote? Please Feel Free to Contact Us',
            'subtitle' => 'REQUEST A QUOTE',
            'description' => 'Let us know specifically what you need...',
            'features' => [
                ['icon' => 'fas fa-clock', 'text' => 'Reply within 24 hours'],
                ['icon' => 'fas fa-phone', 'text' => '12 hrs telephone support']
            ],
            'phone' => '+251 123 456 789',
            'services' => [
                'web-development' => 'Web Development',
                'mobile-development' => 'Mobile Development',
                'cloud-solutions' => 'Cloud Solutions',
                'it-consulting' => 'IT Consulting',
                'digital-marketing' => 'Digital Marketing',
                'custom-software' => 'Custom Software Development'
            ]
        ]
    ];

    return view('services.index', $data);
}

//     public function index()
//     {
//  $serviceCategories = ServiceCategory::withCount('services')->get();
//     $portfolioItems = Service::with('category')->get()->map(function ($service) {
//         return [
//             'title' => $service->title,
//             'description' => $service->desc,
//             'image' => asset('assets/images/services/' . $service->image),
//             'category' => $service->category?->slug ?? 'uncategorized',
//             'link' => route('services.detail', ['subcategory' => $service->slug])
//         ];
//     });
//         $data = [
//             'pageTitle' => 'Our Services',
//             'heroTitle' => 'Our Services',
//             'heroDescription' => 'Explore our comprehensive range of IT services designed to help your business succeed in the digital world.',
            
//             'techServices' => [
//                 'title' => 'Our Top Tech Services',
//                 'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Facilisi ultricies habitant eget volutpat ut semper in dolor. Praesent mi velit ut id hac placerat leo vulputate.',
//                 'technologies' => [
//                     ['name' => 'Laravel', 'icon' => 'fab fa-laravel', 'color' => '#ff2d20'],
//                     ['name' => 'Angular', 'icon' => 'fab fa-angular', 'color' => '#dd0031'],
//                     ['name' => 'Node.js', 'icon' => 'fab fa-node-js', 'color' => '#339933'],
//                     ['name' => 'Vue.js', 'icon' => 'fab fa-vuejs', 'color' => '#4fc08d'],
//                     ['name' => '.NET', 'icon' => 'fas fa-code', 'color' => '#512bd4']
//                 ]
//             ],
            

            
//             'portfolioItems' => [
//                 [
//                     'title' => 'MasterD2 - Multipurpose Medical Website',
//                     'description' => 'Complete medical website solution with appointment booking and patient management system.',
//                     'image' => 'https://via.placeholder.com/280x200/6366f1/FFFFFF?text=Medical+Website',
//                     'category' => 'html-design',
//                     'link' => '#'
//                 ],
//                 [
//                     'title' => 'Hazel - Clean Minimalist Multi-Purpose',
//                     'description' => 'Modern minimalist design perfect for various business needs and professional services.',
//                     'image' => 'https://via.placeholder.com/280x200/0891b2/FFFFFF?text=Minimalist+Design',
//                     'category' => 'wp-themes',
//                     'link' => '#'
//                 ],
//                 [
//                     'title' => 'Techno - IT Solutions & Business Services',
//                     'description' => 'Professional IT services website template with modern design and functionality.',
//                     'image' => 'https://via.placeholder.com/280x200/10b981/FFFFFF?text=IT+Solutions',
//                     'category' => 'cms-themes',
//                     'link' => '#'
//                 ],
//                 [
//                     'title' => 'ParkSoft - IT Solutions for Your Business',
//                     'description' => 'Comprehensive IT solutions and consulting services for enterprise clients.',
//                     'image' => 'https://via.placeholder.com/280x200/f59e0b/FFFFFF?text=Business+IT',
//                     'category' => 'ecommerce',
//                     'link' => '#'
//                 ],
//                 [
//                     'title' => 'Brave Theme Multipurpose HTML Template',
//                     'description' => 'Versatile HTML template suitable for multiple industries and use cases.',
//                     'image' => 'https://via.placeholder.com/280x200/8b5cf6/FFFFFF?text=Multipurpose',
//                     'category' => 'html-design',
//                     'link' => '#'
//                 ],
//                 [
//                     'title' => 'Technology & IT Solution Services',
//                     'description' => 'Complete technology solutions designed for modern business requirements.',
//                     'image' => 'https://via.placeholder.com/280x200/ef4444/FFFFFF?text=Tech+Solutions',
//                     'category' => 'blogging',
//                     'link' => '#'
//                 ],
//                 [
//                     'title' => 'Advanced IT Consulting Services',
//                     'description' => 'Professional IT consulting and development services for enterprise solutions.',
//                     'image' => 'https://via.placeholder.com/280x200/06b6d4/FFFFFF?text=IT+Consulting',
//                     'category' => 'ui-templates',
//                     'link' => '#'
//                 ],
//                 [
//                     'title' => 'Enterprise IT Solutions Package',
//                     'description' => 'Comprehensive enterprise-level IT solutions with ongoing support and maintenance.',
//                     'image' => 'https://via.placeholder.com/280x200/3b82f6/FFFFFF?text=Enterprise+IT',
//                     'category' => 'all-categories',
//                     'link' => '#'
//                 ]
//             ],
            
//             'testimonials' => [
//                 [
//                     'name' => 'Michael Anderson',
//                     'position' => 'IT Professional',
//                     'avatar' => 'https://via.placeholder.com/50x50/2563EB/FFFFFF?text=MA',
//                     'content' => 'Sky Link has provided exceptional service with a wide range of professional and career opportunities. Their IT professionals work with advanced technology systems and software including servers, networks, databases, and comprehensive information systems.'
//                 ],
//                 [
//                     'name' => 'Emily Davis',
//                     'position' => 'Business Executive',
//                     'avatar' => 'https://via.placeholder.com/50x50/0891B2/FFFFFF?text=ED',
//                     'content' => 'As a business owner, I have been thoroughly impressed with Sky Link\'s understanding of various aspects of the business world. They excel in supporting entrepreneurs, executives, managers, and professionals across various industries.'
//                 ],
//                 [
//                     'name' => 'James Wilson',
//                     'position' => 'Application Developer',
//                     'avatar' => 'https://via.placeholder.com/50x50/10B981/FFFFFF?text=JW',
//                     'content' => 'The application development services have been outstanding. Sky Link creates innovative software applications for various platforms including mobile phones, desktop computers, web browsers, and enterprise systems.'
//                 ]
//             ],
            
//             'quoteSection' => [
//                 'title' => 'Need A Free Quote? Please Feel Free to Contact Us',
//                 'subtitle' => 'REQUEST A QUOTE',
//                 'description' => 'Let us know specifically what you need a free quote for and we will get back to you as soon as possible. Please provide details about the product or service you\'re interested in, any specific requirements, and any other relevant information.',
//                 'features' => [
//                     ['icon' => 'fas fa-clock', 'text' => 'Reply within 24 hours'],
//                     ['icon' => 'fas fa-phone', 'text' => '12 hrs telephone support']
//                 ],
//                 'phone' => '+251 123 456 789',
//                 'services' => [
//                     'web-development' => 'Web Development',
//                     'mobile-development' => 'Mobile Development',
//                     'cloud-solutions' => 'Cloud Solutions',
//                     'it-consulting' => 'IT Consulting',
//                     'digital-marketing' => 'Digital Marketing',
//                     'custom-software' => 'Custom Software Development'
//                 ]
//             ]
//         ];
        
//         return view('services.index', $data);
//         return view('services.index');

//     }

    public function requestQuote(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'service' => 'required|string',
            'message' => 'required|string|max:1000'
        ]);

        // Here you would typically save to database or send email
        // For now, we'll just redirect back with success message
        
        return back()->with('success', 'Thank you for your quote request! We will get back to you within 24 hours.');
    }
}