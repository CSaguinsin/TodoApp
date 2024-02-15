<?php

namespace App\Http\Livewire;

use App\Models\Image;
use Livewire\Component;
use Livewire\WithFileUploads;

class ImageIndex extends Component
{
    use WithFileUploads;

    public $photo;

    public function save()
    {
        $this->validate([
            'photo' => 'image|max:1024', // Adjust validation rules as needed
        ]);

        // Store the image in the 'public' disk and get the path
        $path = $this->photo->store('public');

        // Save the image path to the database
        Image::create(['path' => $path]);

        // Reset the file input field
        $this->reset('photo');
    }

    public function render()
    {
        // Retrieve images from the database
        $images = Image::all();

        return view('livewire.image-index')->layout('layouts.app');

    }
}
