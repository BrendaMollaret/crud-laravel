<?php

namespace App\Http\Controllers;

use App\Models\task;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse; //Laravel
use illuminate\View\View; //Laravel

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View //:View donde sea que devolvamos una vista hay que ponerlo, es de laravel.
    {
        $tasks = Task::latest()->paginate(3); //las trae de la base de datos y las guarda acá(get) //Luego puse paginate para que nos muestre 3 tareas nomas
        return view('index',['tasks'=>$tasks]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View 
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse //esto es de laravel RedirectReponse, cada vez que redirijamos debemos ponerlo.
    {
        //validación
        $request->validate([
            'title' => 'required',
            'description' => 'required'
        ]);

        Task::create(($request->all()));
        return redirect()->route('tasks.index')->with('success','Nueva tarea creada');
        // Mostrar los datos del formulario dd($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(task $task)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(task $task): View
    {   
        return view('edit',['task'=> $task]);
        //dd($task);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, task $task): RedirectResponse 
    {
        //validación
        $request->validate([
            'title' => 'required',
            'description' => 'required'
        ]);
        $task->update($request->all());
        return redirect()->route('tasks.index')->with('success','Tarea actualizada correctamente');
        //dd($request->all());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(task $task)
    {
        //
    }
}
