<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookingController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'booking_date' => 'required|date',
        ]);

        Auth::user()->bookings()->create([
            'title' => $request->title,
            'description' => $request->description,
            'booking_date' => $request->booking_date,
            'status' => 'pending',
        ]);

        return redirect()->route('dashboard')->with('success', 'Booking created successfully!');
    }

    public function destroy(Booking $booking)
    {
        // Check if booking belongs to user
        if ($booking->user_id !== Auth::id()) {
            return redirect()->route('dashboard')->with('error', 'Unauthorized action.');
        }

        $booking->delete();

        return redirect()->route('dashboard')->with('success', 'Booking deleted successfully!');
    }
} 