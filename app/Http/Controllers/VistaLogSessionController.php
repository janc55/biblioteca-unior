<?php

namespace App\Http\Controllers;

use App\Models\VistaLogSession;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
/**
 * Class VistaLogSessionController
 * @package App\Http\Controllers
 */
class VistaLogSessionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
  /*  public function index()
    {
        $vistaLogSessions = VistaLogSession::paginate();

        return view('vista-log-session.index', compact('vistaLogSessions'))
            ->with('i', (request()->input('page', 1) - 1) * $vistaLogSessions->perPage());
    }*/


    
public function statistics()
{
    $data = VistaLogSession::select(
        DB::raw('DATE(fecha_hora) as date'),
        DB::raw('COUNT(*) as count')
    )
    ->groupBy('date')
    ->orderBy('date')
    ->get();

    $labels = $data->pluck('date');
    $counts = $data->pluck('count');

    return view('vista-log-session.statistics', compact('labels', 'counts'));
}


    public function index(Request $request)
{
    $start_date = $request->input('start_date');
    $end_date = $request->input('end_date');

    $query = VistaLogSession::query();

    if ($start_date && $end_date) {
        // If both start and end dates are provided, apply date range filter
        $query->whereBetween(DB::raw('DATE(fecha_hora)'), [$start_date, $end_date]);
    }

    $vistaLogSessions = $query->paginate();

    return view('vista-log-session.index', compact('vistaLogSessions'))
        ->with('i', ($vistaLogSessions->currentPage() - 1) * $vistaLogSessions->perPage());
}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $vistaLogSession = new VistaLogSession();
        return view('vista-log-session.create', compact('vistaLogSession'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(VistaLogSession::$rules);

        $vistaLogSession = VistaLogSession::create($request->all());

        return redirect()->route('vista-log-sessions.index')
            ->with('success', 'VistaLogSession created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $vistaLogSession = VistaLogSession::find($id);

        return view('vista-log-session.show', compact('vistaLogSession'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $vistaLogSession = VistaLogSession::find($id);

        return view('vista-log-session.edit', compact('vistaLogSession'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  VistaLogSession $vistaLogSession
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, VistaLogSession $vistaLogSession)
    {
        request()->validate(VistaLogSession::$rules);

        $vistaLogSession->update($request->all());

        return redirect()->route('vista-log-sessions.index')
            ->with('success', 'VistaLogSession updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $vistaLogSession = VistaLogSession::find($id)->delete();

        return redirect()->route('vista-log-sessions.index')
            ->with('success', 'VistaLogSession deleted successfully');
    }
}
