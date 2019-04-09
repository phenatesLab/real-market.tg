<?php

namespace App\Http\Controllers;

use App\Repositories\PropertyRepository;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    /**
     * @var PropertyRepository
     */
    private $propertyRepository;

    public function __construct(PropertyRepository $propertyRepository
    )
    {
        $this->propertyRepository = $propertyRepository;
    }

    public function index()
    {
        $properties = $this->propertyRepository->getAllVisiblePaginated(9);
        $links = $properties->render();
        return view('home.index', compact('properties', 'links'));
    }
}
