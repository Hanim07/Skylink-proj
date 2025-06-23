<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index()
    {
        $data = [
            'pageTitle' => 'Portfolio',
            'heroTitle' => 'Portfolio',
            'heroDescription' => 'Explore our portfolio of successful IT projects and digital solutions delivered to clients across Ethiopia.',
            
            'projects' => [
                [
                    'id' => 1,
                    'title' => 'Bijlalul Habeshi Virtual Tutor',
                    'description' => 'An innovative virtual tutoring platform designed to provide personalized learning experiences for Ethiopian students. The platform features interactive lessons, progress tracking, and AI-powered recommendations to enhance the learning process.',
                    'image' => 'https://via.placeholder.com/280x200/1f2937/FFFFFF?text=Virtual+Tutor',
                    'category' => 'web',
                    'tags' => ['education', 'virtual tutor', 'web development', 'AI'],
                    'technologies' => ['Laravel', 'Vue.js', 'MySQL', 'AI/ML'],
                    'client' => 'Bijlalul Habeshi Education',
                    'year' => '2024',
                    'status' => 'completed',
                    'link' => '#',
                    'featured' => true
                ],
                [
                    'id' => 2,
                    'title' => 'Elida Ethiopia',
                    'description' => 'A comprehensive e-commerce platform tailored for the Ethiopian market, featuring local payment integration, multi-language support, and mobile-first design to serve the growing online shopping community in Ethiopia.',
                    'image' => 'https://via.placeholder.com/280x200/10b981/FFFFFF?text=Elida+Ethiopia',
                    'category' => 'ecommerce',
                    'tags' => ['e-commerce', 'ethiopia', 'online store', 'mobile'],
                    'technologies' => ['React', 'Node.js', 'MongoDB', 'Payment Gateway'],
                    'client' => 'Elida Trading',
                    'year' => '2023',
                    'status' => 'completed',
                    'link' => '#',
                    'featured' => true
                ],
                [
                    'id' => 3,
                    'title' => 'Kirb Gebeya',
                    'description' => 'A modern marketplace platform connecting buyers and sellers across Ethiopia. Features include vendor management, secure payment processing, order tracking, and a comprehensive admin dashboard for marketplace operations.',
                    'image' => 'https://via.placeholder.com/280x200/ef4444/FFFFFF?text=Kirb+Gebeya',
                    'category' => 'ecommerce',
                    'tags' => ['marketplace', 'gebeya', 'e-commerce', 'multi-vendor'],
                    'technologies' => ['PHP', 'Laravel', 'MySQL', 'Redis'],
                    'client' => 'Kirb Technologies',
                    'year' => '2023',
                    'status' => 'completed',
                    'link' => '#',
                    'featured' => false
                ],
                [
                    'id' => 4,
                    'title' => 'Afar Website',
                    'description' => 'A tourism and cultural website showcasing the beauty and heritage of the Afar region. Features interactive maps, cultural information, tourism guides, and booking capabilities for local tour operators.',
                    'image' => 'https://via.placeholder.com/280x200/8b5cf6/FFFFFF?text=Afar+Website',
                    'category' => 'web',
                    'tags' => ['tourism', 'afar', 'website', 'cultural'],
                    'technologies' => ['WordPress', 'Custom Theme', 'JavaScript', 'Maps API'],
                    'client' => 'Afar Tourism Board',
                    'year' => '2024',
                    'status' => 'completed',
                    'link' => '#',
                    'featured' => false
                ],
                [
                    'id' => 5,
                    'title' => 'Real Estate Management System',
                    'description' => 'A comprehensive property management system designed for real estate companies in Ethiopia. Features property listings, client management, contract handling, payment tracking, and detailed reporting capabilities.',
                    'image' => 'https://via.placeholder.com/280x200/06b6d4/FFFFFF?text=Real+Estate',
                    'category' => 'management',
                    'tags' => ['real estate', 'management', 'system', 'CRM'],
                    'technologies' => ['Laravel', 'Vue.js', 'PostgreSQL', 'Docker'],
                    'client' => 'Ethiopian Real Estate Group',
                    'year' => '2024',
                    'status' => 'in-progress',
                    'link' => '#',
                    'featured' => true
                ]
            ],
            
            'categories' => [
                'all' => 'All Projects',
                'web' => 'Web Development',
                'mobile' => 'Mobile Apps',
                'ecommerce' => 'E-commerce',
                'management' => 'Management Systems'
            ],
            
            'stats' => [
                'total_projects' => 50,
                'completed_projects' => 45,
                'happy_clients' => 35,
                'years_experience' => 15
            ]
        ];
        
        return view('portfolio', $data);
    }

    public function show($id)
    {
        // This would typically fetch a specific project from database
        $project = [
            'id' => $id,
            'title' => 'Project Details',
            'description' => 'Detailed project information...',
            // ... more project details
        ];
        
        return view('pages.portfolio.show', compact('project'));
    }

    public function search(Request $request)
    {
        $query = $request->get('q', '');
        $category = $request->get('category', 'all');
        
        // This would typically search in database
        // For now, return mock data
        
        return response()->json([
            'success' => true,
            'results' => [],
            'total' => 0,
            'query' => $query,
            'category' => $category
        ]);
    }
}