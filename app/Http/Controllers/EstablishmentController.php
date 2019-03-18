<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\EstablishmentRepository;

class EstablishmentController extends Controller
{
    /**
     * @var EstablishmentRepository
     */
    protected $repository;

    public function __construct(EstablishmentRepository $repository)
    {
        $this->middleware('auth');
        $this->repository = $repository;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $establishments = $this->repository->all();
        return view('establishments.index', compact('establishments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('establishments.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $establishment = $this->repository->create($request->all());
        return redirect('establishments');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Establishment  $establishment
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('establishments.show', ['data' => $this->repository->find($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Establishment  $establishment
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $establishment = $this->repository->find($id);
        return view('establishments.edit', ['data' => $establishment]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Establishment  $establishment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $establishment = $this->repository->update($request->all(), $id);
        return view('establishments.show', ['data' => $establishment]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Establishment  $establishment
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->repository->delete($id);
        return redirect('establishments');
    }
}
