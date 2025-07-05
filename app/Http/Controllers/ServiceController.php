<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    

    private array $services = [
    'software-service' => [
        'category' => 'Software Service',
        'items' => [
            [
                'slug' => 'web-apps',
                'title' => 'Web Applications',
                'desc' => 'Custom web-based platforms for your business.',
                'image' => 'web-app.jpg',
                'price' => '$199/mo',
                'features' => [
                    'Responsive Design',
                    'Custom Functionality',
                    'Backend Integration'
                ]
            ],
            [
                'slug' => 'mobile-apps',
                'title' => 'Mobile Applications',
                'desc' => 'iOS & Android applications tailored to your needs.',
                'image' => 'mobile-app.jpg',
                'price' => '$299/mo',
                'features' => [
                    'Cross-platform Support',
                    'Push Notifications',
                    'App Store Submission'
                ]
            ],
            [
                'slug' => 'custom-software',
                'title' => 'Custom Software',
                'desc' => 'Bespoke software solutions for enterprises.',
                'image' => 'custom-software.jpg',
                'price' => 'Custom Quote',
                'features' => [
                    'Tailored Requirements',
                    'Dedicated Support',
                    'Scalable Architecture'
                ]
            ]
        ]
    ],

    'smart-city' => [
        'category' => 'Smart City & Infrastructure',
        'items' => [
            [
                'slug' => 'physical-safety',
                'title' => 'Physical Safety & Security',
                'desc' => 'Smart solutions for urban safety monitoring.',
                'image' => 'physical-safety.jpg',
                'price' => 'Starting at $499',
                'features' => [
                    'Integrated CCTV',
                    'Emergency Alert System',
                    'AI Incident Detection'
                ]
            ],
            [
                'slug' => 'structured-cabling',
                'title' => 'Structured Cabling System',
                'desc' => 'Efficient data & power cabling infrastructure.',
                'image' => 'cabling.jpg',
                'price' => 'Project Based',
                'features' => [
                    'High-Speed Cabling',
                    'Future-Proof Layout',
                    'Certified Installations'
                ]
            ],
            [
                'slug' => 'smart-mobility',
                'title' => 'Smart Mobility & Transportation',
                'desc' => 'Modern traffic and mobility solutions.',
                'image' => 'smart-mobility.jpg',
                'price' => 'Project Based',
                'features' => [
                    'IoT Sensors',
                    'Traffic Automation',
                    'Fleet Integration'
                ]
            ],
            [
                'slug' => 'smart-infrastructure',
                'title' => 'Integrated Smart Infrastructure',
                'desc' => 'Holistic infrastructure planning & implementation.',
                'image' => 'smart-infra.jpg',
                'price' => 'Custom Quote',
                'features' => [
                    'Unified Systems',
                    'Sustainable Design',
                    'Scalable Platforms'
                ]
            ],
            [
                'slug' => 'datacenter-infra',
                'title' => 'Data Center Infrastructure',
                'desc' => 'Core components for modern data operations.',
                'image' => 'dc-infra.jpg',
                'price' => 'Quote on Request',
                'features' => [
                    'Network Racks',
                    'Power Cabling',
                    'Server Enclosures'
                ]
            ]
        ]
    ],

    'safety-security' => [
        'category' => 'Safety & Security',
        'items' => [
            [
                'slug' => 'network-security',
                'title' => 'Network & Application Security',
                'desc' => 'Protect your systems from cyber threats.',
                'image' => 'network-security.jpg',
                'price' => '$129/mo',
                'features' => [
                    'Firewall Setup',
                    'Malware Protection',
                    'Regular Audits'
                ]
            ],
            [
                'slug' => 'endpoint-security',
                'title' => 'Endpoint Security',
                'desc' => 'Secure your devices and endpoints.',
                'image' => 'endpoint.jpg',
                'price' => '$99/device',
                'features' => [
                    'Antivirus Protection',
                    'Access Controls',
                    'Device Monitoring'
                ]
            ],
            [
                'slug' => 'data-protection',
                'title' => 'Data Protection',
                'desc' => 'Keep sensitive data encrypted and secure.',
                'image' => 'data-protection.jpg',
                'price' => 'Based on Data Size',
                'features' => [
                    'Data Encryption',
                    'Backup & Recovery',
                    'DLP Policies'
                ]
            ],
            [
                'slug' => 'access-management',
                'title' => 'Access Management',
                'desc' => 'Manage identity and system access securely.',
                'image' => 'access.jpg',
                'price' => '$149/mo',
                'features' => [
                    'SSO Integration',
                    'Role-Based Access',
                    'MFA Solutions'
                ]
            ]
        ]
    ],

    'enterprise-network' => [
        'category' => 'Enterprise Network Solution',
        'items' => [
            [
                'slug' => 'network-overview',
                'title' => 'Enterprise Network Overview',
                'desc' => 'Blueprint and assessment of enterprise networks.',
                'image' => 'network-overview.jpg',
                'price' => '$399/project',
                'features' => [
                    'Architecture Design',
                    'Infrastructure Analysis'
                ]
            ],
            [
                'slug' => 'wlan-solution',
                'title' => 'Network & WLAN Solution',
                'desc' => 'Secure and high-speed wireless connectivity.',
                'image' => 'wlan.jpg',
                'price' => 'Custom Quote',
                'features' => [
                    'Access Point Setup',
                    'Bandwidth Optimization',
                    'Coverage Planning'
                ]
            ]
        ]
    ],

    'consulting-training' => [
        'category' => 'Consulting & Training',
        'items' => [
            [
                'slug' => 'smart-city-consulting',
                'title' => 'Smart City Projects',
                'desc' => 'Expert guidance for smart city initiatives.',
                'image' => 'smart-city-consulting.jpg',
                'price' => 'Per Engagement',
                'features' => [
                    'Feasibility Study',
                    'Project Management',
                    'Vendor Coordination'
                ]
            ],
            [
                'slug' => 'product-development',
                'title' => 'Product Development',
                'desc' => 'Bringing your tech product ideas to life.',
                'image' => 'product-dev.jpg',
                'price' => 'Custom Quote',
                'features' => [
                    'MVP Creation',
                    'Agile Development',
                    'UI/UX Design'
                ]
            ],
            [
                'slug' => 'business-strategy',
                'title' => 'Business Strategy',
                'desc' => 'Technology-driven business innovation plans.',
                'image' => 'biz-strategy.jpg',
                'price' => '$250/hr',
                'features' => [
                    'Digital Transformation',
                    'Market Analysis',
                    'IT Alignment'
                ]
            ],
            [
                'slug' => 'erp-consultancy',
                'title' => 'ERP Consultancy',
                'desc' => 'Guidance on ERP software selection & integration.',
                'image' => 'erp-consulting.jpg',
                'price' => '$199/hr',
                'features' => [
                    'ERP Customization',
                    'Data Migration',
                    'Workflow Optimization'
                ]
            ]
        ]
    ],

    'ict-support' => [
        'category' => 'ICT Support',
        'items' => [
            [
                'slug' => 'tech-assistance',
                'title' => 'Technical Assistance',
                'desc' => 'Hands-on help for your IT operations.',
                'image' => 'technical-assist.jpg',
                'price' => '$49/hr',
                'features' => [
                    'Remote Support',
                    'On-site Visits',
                    'Issue Resolution'
                ]
            ],
            [
                'slug' => 'system-maintenance',
                'title' => 'System Maintenance',
                'desc' => 'Ongoing IT systems and software upkeep.',
                'image' => 'system-maintenance.jpg',
                'price' => '$99/mo',
                'features' => [
                    'System Monitoring',
                    'Performance Optimization'
                ]
            ],
            [
                'slug' => 'security-privacy',
                'title' => 'Security & Privacy',
                'desc' => 'Ensuring your systems remain private and secure.',
                'image' => 'privacy.jpg',
                'price' => '$149/mo',
                'features' => [
                    'Vulnerability Patching',
                    'Audit Reports',
                    'Compliance Management'
                ]
            ]
        ]
    ],

    'gps-tracking' => [
        'category' => 'GPS Tracking System',
        'items' => [
            [
                'slug' => 'fleet-management',
                'title' => 'Fleet Management',
                'desc' => 'Real-time fleet tracking and reporting.',
                'image' => 'fleet.jpg',
                'price' => '$199/device',
                'features' => [
                    'Live GPS Tracking',
                    'Driver Analytics',
                    'Fuel Efficiency Reports'
                ]
            ],
            [
                'slug' => 'asset-tracking',
                'title' => 'Asset Tracking',
                'desc' => 'Monitor the location of assets in real time.',
                'image' => 'asset-tracking.jpg',
                'price' => 'Starting at $99',
                'features' => [
                    'Location History',
                    'Theft Recovery',
                    'Usage Logs'
                ]
            ],
            [
                'slug' => 'vehicle-tracking',
                'title' => 'Vehicle Monitoring',
                'desc' => 'Keep tabs on vehicle movement and health.',
                'image' => 'vehicle-monitoring.jpg',
                'price' => 'Per Device License',
                'features' => [
                    'Speed Alerts',
                    'Engine Diagnostics',
                    'Route Optimization'
                ]
            ]
        ]
    ],

    'datacenter-facility' => [
        'category' => 'Datacenter Facility & Power',
        'items' => [
            [
                'slug' => 'server-rooms',
                'title' => 'Server Rooms',
                'desc' => 'Design and setup of reliable server rooms.',
                'image' => 'server-room.jpg',
                'price' => 'Based on Requirements',
                'features' => [
                    'Rack Installation',
                    'Cable Management',
                    'Access Control'
                ]
            ],
            [
                'slug' => 'ups-power',
                'title' => 'UPS & Power Backup',
                'desc' => 'Reliable power systems for uninterrupted uptime.',
                'image' => 'ups.jpg',
                'price' => 'Based on Setup',
                'features' => [
                    'Redundant UPS Systems',
                    'Battery Monitoring',
                    'Power Analytics'
                ]
            ],
            [
                'slug' => 'cooling-system',
                'title' => 'Cooling Systems',
                'desc' => 'Precision cooling for critical IT infrastructure.',
                'image' => 'cooling.jpg',
                'price' => 'Quote on Request',
                'features' => [
                    'Climate Control',
                    'Energy Efficiency',
                    'Redundant Cooling Units'
                ]
            ]
        ]
    ]
];

    public function category(string $categorySlug)
{
    $data = $this->services[$categorySlug] ?? null;
    if (!$data) abort(404);

    return view('services.servicecategory', [
        'category' => $data['category'], // Display name
        'items' => $data['items']        // Array of subcategories
    ]);
}


    public function detail($subcategory)
    {
        foreach ($this->services as $cat) {
            foreach ($cat['items'] as $item) {
                if ($item['slug'] === $subcategory) {
                    return view('services.servicedetail', [
                        'service' => $item
                    ]);
                }
            }
        }
        abort(404);
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