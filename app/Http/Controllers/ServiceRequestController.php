<?php


// app/Http/Controllers/ServiceRequestController.php

namespace App\Http\Controllers;

use App\Models\ServiceRequest;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule; // <-- Import the Rule class for validation

class ServiceRequestController extends Controller
{
    /**
     * Store a newly created service request in storage.
     */
    public function store(Request $request)
    {

        // Define the list of valid services
        $validServices = [
            'software-service',
            'smart-city',
            'safety-security',
            'enterprise-network',
            'consulting-training',
            'ict-support',
            'gps-tracking',
            'datacenter-facility',
        ];

        // 1. Validate the incoming data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'service' => ['required', Rule::in($validServices)], // Ensures the service is from your list
            'message' => 'required|string',
        ]);

        // 2. If validation passes, create the record in the database
        ServiceRequest::create($validatedData);
        
        // 3. Redirect the user back to the form with a success message
        return redirect()->back()->with('success', 'Thank you! Your request has been submitted successfully.');
    }
}