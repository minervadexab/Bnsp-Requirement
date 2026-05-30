<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = $request->search;
        $totalEvents = Event::count();

        $events = Event::when($search, function ($query) use ($search) {

                $query->where('title', 'like', '%' . $search . '%')
                    ->orWhere('location', 'like', '%' . $search . '%')
                    ->orWhere('status', 'like', '%' . $search . '%');

            })
            ->latest()
            ->paginate(10);

        return view('admin.events.index', compact('events, totalEvents'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.events.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required',
            'location' => 'required|string|max:255',
            'event_date' => 'required|date',
            'status' => 'required',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        $imagePath = null;

        if ($request->hasFile('image')) {

            $imagePath = $request->file('image')
                ->store('events', 'public');
        }

        Event::create([
            'title' => $request->title,
            'slug' => Str::slug($request->title) . '-' . time(),

            'description' => $request->description,

            'location' => $request->location,

            'event_date' => $request->event_date,

            'status' => $request->status,

            'image' => $imagePath,
        ]);

        return redirect()
            ->route('events-admin.index')
            ->with('success', 'Event berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Event $event)
    {
        return view('events-admin.show', compact('event'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Event $event)
    {
        return view('admin.events.edit', compact('event'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Event $event)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required',
            'location' => 'required|string|max:255',
            'event_date' => 'required|date',
            'status' => 'required',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        $imagePath = $event->image;

        if ($request->hasFile('image')) {

            if ($event->image && Storage::disk('public')->exists($event->image)) {

                Storage::disk('public')->delete($event->image);
            }

            $imagePath = $request->file('image')
                ->store('events', 'public');
        }

        $event->update([
            'title' => $request->title,

            'slug' => Str::slug($request->title) . '-' . time(),

            'description' => $request->description,

            'location' => $request->location,

            'event_date' => $request->event_date,

            'status' => $request->status,

            'image' => $imagePath,
        ]);

        return redirect()
            ->route('admin.events.index')
            ->with('success', 'Event berhasil diupdate.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Event $event)
    {
        if ($event->image && Storage::disk('public')->exists($event->image)) {

            Storage::disk('public')->delete($event->image);
        }

        $event->delete();

        return redirect()
            ->route('events-admin.index')
            ->with('success', 'Event berhasil dihapus.');
    }
}
