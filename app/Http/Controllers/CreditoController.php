<?php

namespace App\Http\Controllers;

use App\Models\Credito;
use Illuminate\Http\Request;

/**
 * Class CreditoController
 * @package App\Http\Controllers
 */
class CreditoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $creditos = Credito::paginate();

        return view('credito.index', compact('creditos'))
            ->with('i', (request()->input('page', 1) - 1) * $creditos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $credito = new Credito();
        return view('credito.create', compact('credito'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Credito::$rules);

        $credito = Credito::create($request->all());

        return redirect()->route('creditos.index')
            ->with('success', 'Credito created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $credito = Credito::find($id);

        return view('credito.show', compact('credito'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $credito = Credito::find($id);

        return view('credito.edit', compact('credito'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Credito $credito
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Credito $credito)
    {
        request()->validate(Credito::$rules);

        $credito->update($request->all());

        return redirect()->route('creditos.index')
            ->with('success', 'Credito updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $credito = Credito::find($id)->delete();

        return redirect()->route('creditos.index')
            ->with('success', 'Credito deleted successfully');
    }
}
