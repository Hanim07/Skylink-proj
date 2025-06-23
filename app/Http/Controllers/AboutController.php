<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $data = [
            'pageTitle' => 'About Us',
            'heroTitle' => 'About Sky Link',
            'heroDescription' => 'We are Ethiopia\'s leading IT services company, dedicated to transforming businesses through innovative technology solutions.',
            
            'companyStats' => [
                ['number' => '15+', 'label' => 'Years of Excellence'],
                ['number' => '500+', 'label' => 'Projects Delivered'],
                ['number' => '200+', 'label' => 'Happy Clients'],
                ['number' => '50+', 'label' => 'Expert Team']
            ],
            
            'story' => [
                'title' => 'Our Story',
                'content' => [
                    'Founded in 2009, Sky Link began as a small technology startup with a big vision: to bridge the digital divide in Ethiopia and empower businesses with world-class IT solutions.',
                    'What started as a team of passionate developers has grown into Ethiopia\'s most trusted IT services company. We\'ve witnessed and contributed to the country\'s digital transformation, helping businesses of all sizes leverage technology to achieve unprecedented growth.',
                    'Today, we continue to innovate and lead the industry with our comprehensive suite of services, from web development and mobile applications to cloud solutions and digital transformation consulting.'
                ],
                'image' => 'https://via.placeholder.com/500x400/3b82f6/FFFFFF?text=Sky+Link+Office'
            ],
            
            'mission' => 'To empower Ethiopian businesses with innovative technology solutions that drive growth, efficiency, and digital transformation. We are committed to delivering exceptional value through cutting-edge technology, expert consultation, and unwavering support.',
            
            'vision' => 'To be the leading technology partner in Ethiopia and East Africa, recognized for our innovation, excellence, and contribution to the region\'s digital economy. We envision a future where every business has access to world-class technology solutions.',
            
            'values' => [
                [
                    'icon' => 'fas fa-lightbulb',
                    'title' => 'Innovation',
                    'description' => 'We constantly explore new technologies and methodologies to provide cutting-edge solutions that keep our clients ahead of the competition.'
                ],
                [
                    'icon' => 'fas fa-award',
                    'title' => 'Excellence',
                    'description' => 'We are committed to delivering the highest quality in everything we do, from code quality to customer service and project delivery.'
                ],
                [
                    'icon' => 'fas fa-handshake',
                    'title' => 'Integrity',
                    'description' => 'We build trust through transparency, honesty, and ethical business practices in all our client relationships and partnerships.'
                ],
                [
                    'icon' => 'fas fa-users',
                    'title' => 'Collaboration',
                    'description' => 'We believe in the power of teamwork and work closely with our clients to understand their needs and deliver tailored solutions.'
                ],
                [
                    'icon' => 'fas fa-rocket',
                    'title' => 'Growth',
                    'description' => 'We are dedicated to continuous learning and improvement, both for our team and our clients\' businesses.'
                ],
                [
                    'icon' => 'fas fa-heart',
                    'title' => 'Passion',
                    'description' => 'We are passionate about technology and its potential to transform businesses and improve lives in our community.'
                ]
            ],
            
            'team' => [
                [
                    'name' => 'Dawit Mekonnen',
                    'position' => 'Chief Executive Officer',
                    'image' => 'https://via.placeholder.com/280x250/1e40af/FFFFFF?text=DM',
                    'bio' => 'Visionary leader with 15+ years in technology and business development.',
                    'social' => [
                        'linkedin' => '#',
                        'twitter' => '#',
                        'email' => 'dawit@skylink.et'
                    ]
                ],
                [
                    'name' => 'Sara Tadesse',
                    'position' => 'Chief Technology Officer',
                    'image' => 'https://via.placeholder.com/280x250/10b981/FFFFFF?text=ST',
                    'bio' => 'Technology expert specializing in cloud architecture and digital transformation.',
                    'social' => [
                        'linkedin' => '#',
                        'twitter' => '#',
                        'email' => 'sara@skylink.et'
                    ]
                ],
                [
                    'name' => 'Michael Haile',
                    'position' => 'Head of Development',
                    'image' => 'https://via.placeholder.com/280x250/8b5cf6/FFFFFF?text=MH',
                    'bio' => 'Full-stack developer with expertise in modern web and mobile technologies.',
                    'social' => [
                        'linkedin' => '#',
                        'twitter' => '#',
                        'email' => 'michael@skylink.et'
                    ]
                ],
                [
                    'name' => 'Hanan Ahmed',
                    'position' => 'Head of Design',
                    'image' => 'https://via.placeholder.com/280x250/ef4444/FFFFFF?text=HA',
                    'bio' => 'Creative designer focused on user experience and interface design.',
                    'social' => [
                        'linkedin' => '#',
                        'twitter' => '#',
                        'email' => 'hanan@skylink.et'
                    ]
                ]
            ]
        ];
        
        return view('pages.about', $data);
    }
}
