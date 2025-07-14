<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\News;
use App\Models\Portfolio;
use Illuminate\Support\Facades\Log; // Optional: for logging



class HomeController extends Controller
{
     public function submitChatMessage(Request $request)
    {
        // 1. Validate the incoming data
        $validated = $request->validate([
            'name'    => 'required|string|max:100',
            'email'   => 'required|email|max:100',
            'phone'   => 'required|string|max:20',
            'message' => 'required|string|min:10|max:1000',
        ]);

        // 2. Process the data (e.g., save to DB or send an email)
        // For now, we will just log it. You can replace this with your own logic.
        // Example: Mail::to('admin@youremail.com')->send(new NewChatMessage($validated));
        Log::info('New chat message received:', $validated);

        // You could also save it to a new 'ChatMessages' model/table
        // \App\Models\ChatMessage::create($validated);

        // 3. Redirect back with a success message
        return redirect()->back()->with('chat_success', 'Thank you! Your message has been sent.');
    }
    public function index()

    {
        $latestNews = News::latest()->take(3)->get(); // or 4 if you want
        $latestPortfolios = Portfolio::latest()->take(6)->get();




        $data = [
            'heroTitle' => 'Helping businesses succeed with the best IT services in Ethiopia',
            'heroDescription' => 'Discover IT solutions that drive growth and innovation for your business. We provide comprehensive technology services tailored to your needs.',
            'companyDescription' => 'Sky Link is a leading IT services company in Ethiopia, dedicated to providing innovative technology solutions that help businesses thrive in the digital age. With years of experience and a team of skilled professionals, we deliver comprehensive IT services and solutions.',
            
            'stats' => [
                ['number' => '15+', 'label' => 'Years Experience'],
                ['number' => '84k', 'label' => 'Happy Clients'],
                ['number' => '600+', 'label' => 'Projects Completed']
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
            ]
            
            
        ];
        
return view('pages.index', array_merge($data, [
        'latestNews' => $latestNews,
        'latestPortfolios' => $latestPortfolios,
    ]));    }

    
}
