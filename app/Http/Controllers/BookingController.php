<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;

class BookingController extends Controller
{
    public function store(Request $request)
    {
        // Validate the incoming data
        $request->validate([
            'doctor_id' => 'required|exists:doctors,id',
            'company_name' => 'required',
            'patient_name' => 'required',
            'patient_email' => 'required',
            'patient_phone_no' => 'required',
            'selected_date' => 'required|date',
            'start_time' => 'required|date_format:H:i',
            'end_time' => 'required|date_format:H:i',
            'opt_service' => 'required|string',
            'notes' => 'nullable|string',
        ]);
    
        $user = auth()->user();

        // Create a new booking
        $booking = Booking::create([
            'user_id' => $user->id,
            'doctor_id' => $request->doctor_id,
            'company_name' => $request->company_name,
            'patient_name' => $request->patient_name,
            'patient_email' => $request->patient_email,
            'patient_phone_no' => $request->patient_phone_no,
            'selected_date' => $request->selected_date,
            'start_time' => $request->start_time,
            'end_time' => $request->end_time,
            'opt_service' => $request->opt_service,
            'notes' => $request->notes,
        ]);
    
        return response()->json(['message' => 'Booking created successfully', 'booking' => $booking]);
    }    
}
