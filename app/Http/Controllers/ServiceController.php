<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    

    public function category($category)
    {
        return view('services.servicecategory', compact('category'));
    }

    public function detail($subcategory)
{
    $details = [
        'web-apps' => [
            'title' => 'Web Application Development',
            'desc' => 'We build modern, scalable, and secure web applications tailored to your business needs.',
            'price' => '$1,500+',
            'features' => ['Custom UI/UX design', 'Responsive design', 'Scalable backend', 'Admin dashboards']
        ],
        'mobile-apps' => [
            'title' => 'Mobile App Development',
            'desc' => 'Native and cross-platform mobile apps with excellent performance and modern design.',
            'price' => '$1,800+',
            'features' => ['iOS & Android', 'Offline support', 'Push notifications', 'App Store publishing']
        ],
        'vpn-solutions' => [
            'title' => 'VPN Solutions',
            'desc' => 'Enterprise VPN services to ensure secure and private remote access.',
            'price' => '$700/year',
            'features' => ['Encrypted tunnels', 'Multi-platform support', 'Unlimited bandwidth', '24/7 monitoring']
        ],
        // ... add more subcategories here
    ];

    $service = [
    'title' => 'Web Application Development',
    'desc' => 'Build secure, scalable and modern web platforms tailored for business.',
    'price' => '$1,500+',
    'features' => [
        'Custom UI/UX',
        'Mobile responsive',
        'RESTful APIs',
        'Admin dashboard',
    ],
];
return view('services.servicedetail', compact('service'));

}


    public function index()
    {
        $data = [
            'pageTitle' => 'Our Services',
            'heroTitle' => 'Our Services',
            'heroDescription' => 'Explore our comprehensive range of IT services designed to help your business succeed in the digital world.',
            
            'techServices' => [
                'title' => 'Our Top Tech Services',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Facilisi ultricies habitant eget volutpat ut semper in dolor. Praesent mi velit ut id hac placerat leo vulputate.',
                'technologies' => [
                    ['name' => 'Laravel', 'icon' => 'fab fa-laravel', 'color' => '#ff2d20'],
                    ['name' => 'Angular', 'icon' => 'fab fa-angular', 'color' => '#dd0031'],
                    ['name' => 'Node.js', 'icon' => 'fab fa-node-js', 'color' => '#339933'],
                    ['name' => 'Vue.js', 'icon' => 'fab fa-vuejs', 'color' => '#4fc08d'],
                    ['name' => '.NET', 'icon' => 'fas fa-code', 'color' => '#512bd4']
                ]
            ],
            
            'serviceCategories' => [
                'All Categories',
                'HTML Design',
                'WP Themes',
                'CMS Themes',
                'eCommerce',
                'Blogging',
                'UI Templates'
            ],
            
            'portfolioItems' => [
                [
                    'title' => 'MasterD2 - Multipurpose Medical Website',
                    'description' => 'Complete medical website solution with appointment booking and patient management system.',
                    'image' => 'https://via.placeholder.com/280x200/6366f1/FFFFFF?text=Medical+Website',
                    'category' => 'html-design',
                    'link' => '#'
                ],
                [
                    'title' => 'Hazel - Clean Minimalist Multi-Purpose',
                    'description' => 'Modern minimalist design perfect for various business needs and professional services.',
                    'image' => 'https://via.placeholder.com/280x200/0891b2/FFFFFF?text=Minimalist+Design',
                    'category' => 'wp-themes',
                    'link' => '#'
                ],
                [
                    'title' => 'Techno - IT Solutions & Business Services',
                    'description' => 'Professional IT services website template with modern design and functionality.',
                    'image' => 'https://via.placeholder.com/280x200/10b981/FFFFFF?text=IT+Solutions',
                    'category' => 'cms-themes',
                    'link' => '#'
                ],
                [
                    'title' => 'ParkSoft - IT Solutions for Your Business',
                    'description' => 'Comprehensive IT solutions and consulting services for enterprise clients.',
                    'image' => 'https://via.placeholder.com/280x200/f59e0b/FFFFFF?text=Business+IT',
                    'category' => 'ecommerce',
                    'link' => '#'
                ],
                [
                    'title' => 'Brave Theme Multipurpose HTML Template',
                    'description' => 'Versatile HTML template suitable for multiple industries and use cases.',
                    'image' => 'https://via.placeholder.com/280x200/8b5cf6/FFFFFF?text=Multipurpose',
                    'category' => 'html-design',
                    'link' => '#'
                ],
                [
                    'title' => 'Technology & IT Solution Services',
                    'description' => 'Complete technology solutions designed for modern business requirements.',
                    'image' => 'https://via.placeholder.com/280x200/ef4444/FFFFFF?text=Tech+Solutions',
                    'category' => 'blogging',
                    'link' => '#'
                ],
                [
                    'title' => 'Advanced IT Consulting Services',
                    'description' => 'Professional IT consulting and development services for enterprise solutions.',
                    'image' => 'https://via.placeholder.com/280x200/06b6d4/FFFFFF?text=IT+Consulting',
                    'category' => 'ui-templates',
                    'link' => '#'
                ],
                [
                    'title' => 'Enterprise IT Solutions Package',
                    'description' => 'Comprehensive enterprise-level IT solutions with ongoing support and maintenance.',
                    'image' => 'https://via.placeholder.com/280x200/3b82f6/FFFFFF?text=Enterprise+IT',
                    'category' => 'all-categories',
                    'link' => '#'
                ]
            ],
            
            'testimonials' => [
                [
                    'name' => 'Michael Anderson',
                    'position' => 'IT Professional',
                    'avatar' => 'https://via.placeholder.com/50x50/2563EB/FFFFFF?text=MA',
                    'content' => 'Sky Link has provided exceptional service with a wide range of professional and career opportunities. Their IT professionals work with advanced technology systems and software including servers, networks, databases, and comprehensive information systems.'
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
                'description' => 'Let us know specifically what you need a free quote for and we will get back to you as soon as possible. Please provide details about the product or service you\'re interested in, any specific requirements, and any other relevant information.',
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
        return view('services.index');

    }

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