<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DestinationController extends Controller
{
    private $destinations = [
        [
        
            'id' => 1,
            'name' => 'Nusa Penida',
            'category' => 'Pulau',
            'description' => 'Nusa Penida is a beautiful island in Bali, famous for its towering cliffs, white-sand beaches, crystal-clear waters, and vibrant marine life that make it a true tropical paradise.',
            'location' => 'Bali, Klungkung',
            'image' => 'nusa_penida.jpg'
        ],
        [
            'id' => 2,
            'name' => 'Gunung Bromo',
            'category' => 'Pegunungan',
            'description' => 'Gunung Bromo, an active volcano in East Java, is famous for its vast sea of sand, stunning sunrise views, and the cultural heritage of the Tenggerese people who call this mystical landscape home.',
            'location' => 'Probolinggo, Jawa Timur',
            'image' => 'bromo.jpg'
        ],
        [
            'id' => 3,
            'name' => 'Pulau Komodo',
            'category' => 'Alam',
            'description' => 'Komodo Island, part of Indonesia’s Komodo National Park, is home to the legendary Komodo dragons, stunning pink beaches, and vibrant marine life that make it a world-class adventure destination',
            'location' => 'NTT, Labuan Bajo',
            'image' => 'pulau_komodo.jpg'
        ],
        [
            'id' => 4,
            'name' => 'Raja Ampat',
            'category' => 'Bahari',
            'description' => 'Raja Ampat, located in West Papua, is a breathtaking paradise of emerald islands, crystal-clear waters, vibrant coral reefs, and incredible marine biodiversity — often called one of the best diving spots in the world..',
            'location' => 'Papua Barat',
            'image' => 'rajaampat.jpg'
        ],
        [
            'id' => 5,
            'name' => 'Gunung Rinjani',
            'category' => 'Pegunungan',
            'description' => 'Mount Rinjani offers beautiful views from its summit overlooking Segara Anak Lake. Hikers love this place because the trails are exciting and the scenery is truly stunning.',
            'location' => 'Lombok, NTB',
            'image' => 'rinjani.jpg'
        ],
        [
            'id' => 6,
            'name' => 'Pulau Padar',
            'category' => 'Bahari',
            'description' => 'Pulau Padar features an iconic viewpoint overlooking three bays with different sand colors. Its unique island contours and dramatic scenery make it one of the most stunning photo spots in Indonesia.',
            'location' => 'NTT, Labuan Bajo',
            'image' => 'padar.jpg'
        ],

    ];

    public function home() {
        return view('home');
    }

    public function index() {
        $destinations = $this->destinations;
        return view('destinations.index', compact('destinations'));
    }

    public function show($id) {
        $destination = collect($this->destinations)->firstWhere('id', $id);
        if (!$destination) abort(404);
        return view('destinations.show', compact('destination'));
    }

    public function booking() {
        return view('booking');
    }
    
    public function recommendations() {
        $recommendations = array_slice($this->destinations, 0, 2);
        return view('recommendations', compact('recommendations'));
    }
}
