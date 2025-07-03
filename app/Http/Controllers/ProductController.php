<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    private $products = [];

    public function __construct()
    {
        $basicProducts = [
            'industry-solutions' => [
                ['slug'=>'e-tourism','name'=>'E‑Tourism','image'=>'products/e-tourism.jpg','description'=>'A digital platform enabling tourists to explore, book, and manage tourism services with ease.','price'=>1000],
                ['slug'=>'fleet-management','name'=>'Fleet Management','image'=>'products/fleet-management.jpg','description'=>'Real‑time tracking and optimization of vehicle fleets to enhance logistics operations.','price'=>1500],
                ['slug'=>'project-management','name'=>'Project Management','image'=>'products/project-management.jpg','description'=>'Tools for planning, executing, and tracking projects to ensure timely delivery.','price'=>1400],
                ['slug'=>'real-estate-management','name'=>'Real Estate Management','image'=>'products/real-estate.jpg','description'=>'Manage property listings, tenants, and sales efficiently in one centralized platform.','price'=>1300],
                ['slug'=>'school-management','name'=>'School Management','image'=>'products/school-management.jpg','description'=>'Complete administration system for student records, grades, schedules, and more.','price'=>1200],
                ['slug'=>'lms','name'=>'Learning Management System (LMS)','image'=>'products/lms.jpg','description'=>'An online platform for managing educational courses and delivering digital learning.','price'=>1100],
                ['slug'=>'smart-e-ticketing','name'=>'Smart E‑ticketing','image'=>'products/e-ticketing.jpg','description'=>'A smart and secure system for ticket booking, issuing, and validation.','price'=>900],
            ],
            'business-tools' => [
                ['slug'=>'document-management','name'=>'Document Management','image'=>'products/document-management.jpg','description'=>'Secure storage, sharing, and collaboration of documents in the cloud.','price'=>950],
                ['slug'=>'traffic-penalty','name'=>'Traffic Penalty Management','image'=>'products/traffic-penalty.jpg','description'=>'Manage traffic violations and penalty payments through a centralized dashboard.','price'=>1000],
                ['slug'=>'erp','name'=>'ERP Full Module','image'=>'products/erp.jpg','description'=>'Integrated suite for managing business processes like HR, finance, sales, and inventory.','price'=>2500],
                ['slug'=>'appointment-booking','name'=>'Appointment Booking','image'=>'products/appointment.jpg','description'=>'Allow customers to book appointments online, receive reminders, and manage slots.','price'=>800],
                ['slug'=>'qms','name'=>'Queue Management System (QMS)','image'=>'products/qms.jpg','description'=>'Digitally manage customer queues and improve service efficiency.','price'=>850],
                ['slug'=>'building-management','name'=>'Building Management','image'=>'products/building-management.jpg','description'=>'Centralized platform for monitoring and managing building infrastructure and services.','price'=>1400],
                ['slug'=>'event-management','name'=>'Event Management','image'=>'products/event-management.jpg','description'=>'Plan, organize, and analyze events with real‑time tools and automation.','price'=>1200],
            ],
            'web-mobile-apps' => [
                ['slug'=>'skylink-system','name'=>'SkyLink Website & System','image'=>'products/skylink.jpg','description'=>'Complete business website with back‑office automation.','price'=>1800],
                ['slug'=>'besira-app','name'=>'Besira App','image'=>'products/besira.jpg','description'=>'Mobile application to connect communities through location‑based features.','price'=>1000],
                ['slug'=>'e-commerce','name'=>'E‑Commerce','image'=>'products/ecommerce.jpg','description'=>'Customizable online shop solution with product listing, checkout, and delivery tracking.','price'=>1700],
                ['slug'=>'website-design','name'=>'Website Design','image'=>'products/website-design.jpg','description'=>'Professional and responsive websites tailored to your brand.','price'=>700],
                ['slug'=>'entertainment-apps','name'=>'Entertainment Apps','image'=>'products/entertainment.jpg','description'=>'Interactive mobile apps focused on media, gaming, and user engagement.','price'=>900],
            ],
            'digital-services' => [
                ['slug'=>'e-service','name'=>'E‑Service','image'=>'products/e-service.jpg','description'=>'Digital transformation for public and private service delivery.','price'=>950],
                ['slug'=>'customer-support','name'=>'Customer Support Systems','image'=>'products/customer-support.jpg','description'=>'Multi-channel customer service system including chat, call, and ticketing.','price'=>850],
                ['slug'=>'system-maintenance','name'=>'System Maintenance','image'=>'products/maintenance.jpg','description'=>'Ensure systems run efficiently with proactive maintenance and monitoring.','price'=>1000],
                ['slug'=>'security-compliance','name'=>'Security & Compliance','image'=>'products/security.jpg','description'=>'Ensure your digital assets are secure and compliant with industry standards.','price'=>1300],
            ],
        ];

        $extraDetails = [
            'e-tourism' => [
                'features' => ['Easy booking system','Real-time notifications','Multi-language support','Secure payment gateway'],
                'additional_info' => 'Supports mobile app integration and 24/7 customer support.',
                'price' => 15000,
            ],
            'fleet-management' => [
                'features' => ['Vehicle tracking','Maintenance scheduling','Fuel consumption reports','Driver performance monitoring'],
                'additional_info' => 'Compatible with GPS and IoT devices.',
                'price' => 22000,
            ],
            'project-management' => [
                'features' => ['Task assignment and tracking','Team collaboration tools','Gantt charts and timelines','Resource management'],
                'additional_info' => 'Integrates with popular calendar apps.',
                'price' => 18000,
            ],
            // You can extend extra details for the rest of products...
        ];

        // Merge basic and extended
        foreach ($basicProducts as $category => $items) {
            foreach ($items as &$product) {
                $slug = $product['slug'];
                if (isset($extraDetails[$slug])) {
                    $product = array_merge($product, $extraDetails[$slug]);
                }
            }
            $this->products[$category] = $items;
        }
    }

    public function index()
    {
        return view('pages.products', ['products' => $this->products]);
    }

    public function show($category, $slug)
    {
        $product = $this->getProductBySlug($category, $slug);

        if (!$product) {
            abort(404, 'Product not found.');
        }

        return view('pages.product-detail', compact('product', 'category'));
    }

    private function getProductBySlug($category, $slug)
    {
        $categoryProducts = $this->products[$category] ?? [];
        return collect($categoryProducts)->firstWhere('slug', $slug);
    }

    public function getAllProductsAsFlatArray()
    {
        return collect($this->products)->flatten(1)->toArray();
    }
}
