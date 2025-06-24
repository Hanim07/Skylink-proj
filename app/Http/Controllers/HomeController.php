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
                    'image' => asset('assets/images/news1.jpg')
                ],
                [
                    'title' => 'Latest Technology Trends 2024',
                    'excerpt' => 'Discover the most important technology trends that will shape the future of business and innovation.',
                    'date' => 'Dec 12, 2024',
                    'image' => asset('assets/images/news2.jpg')
                ],
                [
                    'title' => 'Digital Transformation Guide',
                    'excerpt' => 'A comprehensive guide to digital transformation for businesses looking to modernize their operations.',
                    'date' => 'Dec 10, 2024',
                    'image' => asset('assets/images/news3.jpg')
                ]
            ],
            
            'portfolio' => [
                 asset('assets/images/portfolioafar.webp' ),
                        asset('assets/images/portfoliobilalul.webp' ),
                        asset('assets/images/portfolioelida.webp' ),
                        asset('assets/images/portfoliokirb.webp' ),
                        asset('assets/images/portfolio5.jpg' ),
                        asset('assets/images/portfolio6.jpg' )
            ],
            
            'products' => [
                [
                            'name' => 'iPhone 14 Pro Max 256GB',

                            'image' => asset('assets/images/products/software.jpg'),
                            'rating' => 5
                        ],
                        [
                            'name' => 'Apple AirPods',
                            'image' => asset('assets/images/products/cecurity.jpg'),
                            'rating' => 5
                        ],
                        [
                            'name' => 'iPhone 14 Pro 128GB',
                            'image' => asset('assets/images/products/erp.png'),
                            'rating' => 5
                        ]
            ],
            
            'testimonials' => [
                [
                    'name' => 'Abebe Kebede',
                    'position' => 'CEO, Tech Solutions Ethiopia',
                    'avatar' => asset('assets/images/clients/client1.jpg'),
                    'content' => 'Sky Link provided exceptional IT services that transformed our business operations. Their team is professional and delivers quality results on time.'
                ],
                [
                    'name' => 'Meron Tadesse',
                    'position' => 'CTO, Digital Innovations',
                    'avatar' => asset('assets/images/clients/client2.jpg'),
                    'content' => 'Outstanding service and support. Sky Link helped us implement modern solutions that improved our efficiency and productivity significantly.'
                ],
                [
                    'name' => 'Daniel Haile',
                    'position' => 'Manager, StartUp Ethiopia',
                    'avatar' => asset('assets/images/clients/client3.jpg'),
                    'content' => 'Reliable, innovative, and customer-focused. Sky Link is our go-to partner for all IT-related needs and digital transformation solutions.'
                ]
            ]
        ];
        
        return view('pages.index', $data);
    }
}
