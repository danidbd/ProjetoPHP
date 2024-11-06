<?php
namespace App\Http\Controllers;
use App\Models\GrupoEconomico;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class GrupoEconomicoController extends Controller
{
    public function index()
    {
        $grupos = GrupoEconomico::all();
        return view('grupos.index', compact('grupos'));
    }

    public function create()
    {
        return view('grupos.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nome' => 'required|string|max:255',
        ]);

        GrupoEconomico::create($validated);
        return redirect()->route('grupos.index')->with('success', 'Grupo Econômico criado com sucesso!');
    }

    public function edit(GrupoEconomico $grupoEconomico)
    {
        return view('grupos.edit', compact('grupoEconomico'));
    }

    public function update(Request $request, GrupoEconomico $grupoEconomico)
    {
        $validated = $request->validate([
            'nome' => 'required|string|max:255',
        ]);

        $grupoEconomico->update($validated);
        return redirect()->route('grupos.index')->with('success', 'Grupo Econômico atualizado com sucesso!');
    }

    public function destroy(GrupoEconomico $grupoEconomico)
    {
        $grupoEconomico->delete();
        return redirect()->route('grupos.index')->with('success', 'Grupo Econômico deletado com sucesso!');
    }
}
?>
