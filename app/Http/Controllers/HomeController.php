<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data = [
            'heroTitle' => 'Helping businesses succeed with the best IT services in Ethiopia',
            'heroDescription' => 'Discover IT solutions that drive growth and innovation for your business. We provide comprehensive technology services tailored to your needs.',
            'companyDescription' => 'Sky Link is a leading IT services company in Ethiopia, dedicated to providing innovative technology solutions that help businesses thrive in the digital age. With years of experience and a team of skilled professionals, we deliver comprehensive IT services and solutions.',
            
            'stats' => [
                ['number' => '15+', 'label' => 'Years Experience'],
                ['number' => '84k', 'label' => 'Happy Clients'],
                ['number' => '600+', 'label' => 'Projects Completed']
            ],
            
            'partners' => [
                ['name' => 'Microsoft', 'logo' => 'https://via.placeholder.com/120x40/0078D4/FFFFFF?text=Microsoft'],
                ['name' => 'Google Meet', 'logo' => 'https://via.placeholder.com/120x40/4285F4/FFFFFF?text=Google'],
                ['name' => 'Zoom', 'logo' => 'https://via.placeholder.com/120x40/2D8CFF/FFFFFF?text=Zoom']
            ],
            
            'services' => [
                [
                    'title' => 'Web Development',
                    'description' => 'Professional web development services using modern technologies and frameworks to create responsive, user-friendly websites.',
                    'icon' => 'fas fa-laptop-code',
                    'featured' => false
                ],
                [
                    'title' => 'Mobile Development',
                    'description' => 'Comprehensive mobile application development for iOS and Android platforms with cutting-edge features and seamless user experience.',
                    'icon' => 'fas fa-mobile-alt',
                    'featured' => true
                ],
                [
                    'title' => 'Cloud Solutions',
                    'description' => 'Scalable cloud infrastructure and migration services to help your business leverage the power of cloud computing.',
                    'icon' => 'fas fa-cloud',
                    'featured' => false
                ]
            ],
            
            'news' => [
                [
                    'title' => 'How to Start a Career in Tech',
                    'excerpt' => 'Essential tips and guidance for starting your journey in the technology industry and building a successful career.',
                    'date' => 'Dec 15, 2024',
                    'image' => 'https://via.placeholder.com/300x200/2563EB/FFFFFF?text=Tech+Career'
                ],
                [
                    'title' => 'Latest Technology Trends 2024',
                    'excerpt' => 'Discover the most important technology trends that will shape the future of business and innovation.',
                    'date' => 'Dec 12, 2024',
                    'image' => 'https://via.placeholder.com/300x200/0891B2/FFFFFF?text=Tech+Trends'
                ],
                [
                    'title' => 'Digital Transformation Guide',
                    'excerpt' => 'A comprehensive guide to digital transformation for businesses looking to modernize their operations.',
                    'date' => 'Dec 10, 2024',
                    'image' => 'https://via.placeholder.com/300x200/06B6D4/FFFFFF?text=Digital+Transform'
                ]
            ],
            
            'portfolio' => [
                'https://via.placeholder.com/350x250/10B981/FFFFFF?text=E-commerce+Platform',
                'https://via.placeholder.com/350x250/8B5CF6/FFFFFF?text=Mobile+Banking+App',
                'https://via.placeholder.com/350x250/F59E0B/FFFFFF?text=Cloud+Migration',
                'https://via.placeholder.com/350x250/EF4444/FFFFFF?text=Healthcare+System',
                'https://via.placeholder.com/350x250/3B82F6/FFFFFF?text=Analytics+Dashboard',
                'https://via.placeholder.com/350x250/06B6D4/FFFFFF?text=IoT+Solution'
            ],
            
            'products' => [
                [
                    'name' => 'iPhone 14 Pro Max 256GB',
                    'image' => 'https://via.placeholder.com/150x200/000000/FFFFFF?text=iPhone+14+Pro+Max',
                    'rating' => 5
                ],
                [
                    'name' => 'Apple AirPods Pro',
                    'image' => 'https://via.placeholder.com/150x200/FFFFFF/000000?text=AirPods+Pro',
                    'rating' => 5
                ],
                [
                    'name' => 'iPhone 14 Pro 128GB',
                    'image' => 'https://via.placeholder.com/150x200/1D1D1F/FFFFFF?text=iPhone+14+Pro',
                    'rating' => 5
                ]
            ],
            
            'testimonials' => [
                [
                    'name' => 'Abebe Kebede',
                    'position' => 'CEO, Tech Solutions Ethiopia',
                    'avatar' => 'https://via.placeholder.com/50x50/2563EB/FFFFFF?text=AK',
                    'content' => 'Sky Link provided exceptional IT services that transformed our business operations. Their team is professional and delivers quality results on time.'
                ],
                [
                    'name' => 'Meron Tadesse',
                    'position' => 'CTO, Digital Innovations',
                    'avatar' => 'https://via.placeholder.com/50x50/0891B2/FFFFFF?text=MT',
                    'content' => 'Outstanding service and support. Sky Link helped us implement modern solutions that improved our efficiency and productivity significantly.'
                ],
                [
                    'name' => 'Daniel Haile',
                    'position' => 'Manager, StartUp Ethiopia',
                    'avatar' => 'https://via.placeholder.com/50x50/10B981/FFFFFF?text=DH',
                    'content' => 'Reliable, innovative, and customer-focused. Sky Link is our go-to partner for all IT-related needs and digital transformation solutions.'
                ]
            ]
        ];
        
        return view('pages.index', $data);
    }
}