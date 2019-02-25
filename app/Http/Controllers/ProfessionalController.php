<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\ProfessionalRepository;

class ProfessionalController extends Controller
{
    /**
     * @var ProfessionalRepository
     */
    protected $repository;

    public function __construct(ProfessionalRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $professionals = $this->repository->all();
        return view('professionals.index', compact('professionals'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('professionals.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $professional = $this->repository->create($request->all());
        return redirect('professionals');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('professionals.show', ['data' => $this->repository->find($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $professional = $this->repository->find($id);
        return view('professionals.edit', ['data' => $professional]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Professional  $professional
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $professional = $this->repository->update($request->all(), $id);
        return view('professionals.show', ['data' => $professional]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Professional  $professional
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->repository->delete($id);
        return redirect('professionals');
    }
}
