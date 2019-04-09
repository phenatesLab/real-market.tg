<?php

namespace App\Http\Controllers;

use App\Repositories\PropertyRepository;
use App\Repositories\TypeRepository;
use Illuminate\Http\Request;

class PropertyController extends Controller
{
    /**
     * @var TypeRepository
     */
    private $typeRepository;
    /**
     * @var PropertyRepository
     */
    private $propertyRepository;

    /**
     * PropertyController constructor.
     * @param TypeRepository $typeRepository
     * @param PropertyRepository $propertyRepository
     */
    public function __construct(TypeRepository $typeRepository, PropertyRepository $propertyRepository)
    {
        $this->typeRepository = $typeRepository;
        $this->propertyRepository = $propertyRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $properties = $this->propertyRepository->getAllVisiblePaginated(9);
        $links = $properties->render();
        return view('home.index', compact('properties', 'links'));
    }

    public function search()
    {
        return view('properties.search', $this->getTypes());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('joinUs.confide', $this->getTypes());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    private function getTypes()
    {
        $types = $this->typeRepository->getAll();
        return compact('types');
    }
}
