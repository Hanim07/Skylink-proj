<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function showProducts()
{
    $string = Str::of('Example')->upper();
    return view('pages.productt', compact('string'));
}
    private $products = [];

    public function __construct()
{
    $basicProducts = [
        'industry-solutions' => [
            ['slug'=>'e-tourism','name'=>'E‑Tourism','image'=>'https://images.unsplash.com/photo-1582719478171-72c9c50c1a06','description'=>'A digital platform enabling tourists to explore, book, and manage tourism services with ease.','price'=>1000],
            ['slug'=>'fleet-management','name'=>'Fleet Management','image'=>'https://images.unsplash.com/photo-1570129477492-45c003edd2be','description'=>'Real‑time tracking and optimization of vehicle fleets to enhance logistics operations.','price'=>1500],
            ['slug'=>'project-management','name'=>'Project Management','image'=>'https://images.unsplash.com/photo-1551836022-4c4c79ecde16','description'=>'Tools for planning, executing, and tracking projects to ensure timely delivery.','price'=>1400],
            ['slug'=>'real-estate-management','name'=>'Real Estate Management','image'=>'https://images.unsplash.com/photo-1599423300746-b62533397364','description'=>'Manage property listings, tenants, and sales efficiently in one centralized platform.','price'=>1300],
            ['slug'=>'school-management','name'=>'School Management','image'=>'https://images.unsplash.com/photo-1606326608694-e720f9f15148','description'=>'Complete administration system for student records, grades, schedules, and more.','price'=>1200],
            ['slug'=>'lms','name'=>'Learning Management System (LMS)','image'=>'https://images.unsplash.com/photo-1603575448820-6cbb925f6b7b','description'=>'An online platform for managing educational courses and delivering digital learning.','price'=>1100],
            ['slug'=>'smart-e-ticketing','name'=>'Smart E‑ticketing','image'=>'https://images.unsplash.com/photo-1549921296-3a6b1a96f7c0','description'=>'A smart and secure system for ticket booking, issuing, and validation.','price'=>900],
        ],
        'business-tools' => [
            ['slug'=>'document-management','name'=>'Document Management','image'=>'https://images.unsplash.com/photo-1581093458411-cb8f14b908d3','description'=>'Secure storage, sharing, and collaboration of documents in the cloud.','price'=>950],
            ['slug'=>'traffic-penalty','name'=>'Traffic Penalty Management','image'=>'https://images.unsplash.com/photo-1612810806783-4c6c6bbcb9a9','description'=>'Manage traffic violations and penalty payments through a centralized dashboard.','price'=>1000],
            ['slug'=>'erp','name'=>'ERP Full Module','image'=>'https://images.unsplash.com/photo-1634942537653-2a8ec0d40363','description'=>'Integrated suite for managing business processes like HR, finance, sales, and inventory.','price'=>2500],
            ['slug'=>'appointment-booking','name'=>'Appointment Booking','image'=>'https://images.unsplash.com/photo-1635776061376-54c15f0861ef','description'=>'Allow customers to book appointments online, receive reminders, and manage slots.','price'=>800],
            ['slug'=>'qms','name'=>'Queue Management System (QMS)','image'=>'https://images.unsplash.com/photo-1531746790731-6c087fecd65a','description'=>'Digitally manage customer queues and improve service efficiency.','price'=>850],
            ['slug'=>'building-management','name'=>'Building Management','image'=>'https://images.unsplash.com/photo-1503387762-592deb58ef4e','description'=>'Centralized platform for monitoring and managing building infrastructure and services.','price'=>1400],
            ['slug'=>'event-management','name'=>'Event Management','image'=>'https://images.unsplash.com/photo-1551836022-d5d88e9218df','description'=>'Plan, organize, and analyze events with real‑time tools and automation.','price'=>1200],
        ],
        'web-mobile-apps' => [
            ['slug'=>'e-commerce','name'=>'E‑Commerce','image'=>'https://images.unsplash.com/photo-1515169067865-5387ec356754','description'=>'Customizable online shop solution with product listing, checkout, and delivery tracking.','price'=>1700],
            ['slug'=>'website-design','name'=>'Website Design','image'=>'https://images.unsplash.com/photo-1611874791261-4f71d04f69db','description'=>'Professional and responsive websites tailored to your brand.','price'=>700],
            ['slug'=>'entertainment-apps','name'=>'Entertainment Apps','image'=>'https://images.unsplash.com/photo-1580894894513-c9590b4a87d6','description'=>'Interactive mobile apps focused on media, gaming, and user engagement.','price'=>900],
        ],
        'digital-services' => [
            ['slug'=>'e-service','name'=>'E‑Service','image'=>'https://images.unsplash.com/photo-1504384308090-c894fdcc538d','description'=>'Digital transformation for public and private service delivery.','price'=>950],
            ['slug'=>'customer-support','name'=>'Customer Support Systems','image'=>'https://images.unsplash.com/photo-1551836022-d5d88e9218df','description'=>'Multi-channel customer service system including chat, call, and ticketing.','price'=>850],
            ['slug'=>'system-maintenance','name'=>'System Maintenance','image'=>'https://images.unsplash.com/photo-1581091870620-8ab6b3d9f751','description'=>'Ensure systems run efficiently with proactive maintenance and monitoring.','price'=>1000],
            ['slug'=>'security-compliance','name'=>'Security & Compliance','image'=>'https://images.unsplash.com/photo-1623058520381-f9438c829592','description'=>'Ensure your digital assets are secure and compliant with industry standards.','price'=>1300],
        ],
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
    public function newindex()
    {
        return view('pages.productt', ['products' => $this->products]);
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
