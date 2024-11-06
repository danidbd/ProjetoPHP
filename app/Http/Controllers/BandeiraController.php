<?php
namespace App\Http\Controllers;
use App\Models\Bandeira;
use App\Models\GrupoEconomico;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class BandeiraController extends Controller
{
    public function index()
    {
        $bandeiras = Bandeira::with('grupoEconomico')->get();
        return view('bandeiras.index', compact('bandeiras'));
    }

    public function create()
    {
        $gruposEconomicos = GrupoEconomico::all();
        return view('bandeiras.create', compact('gruposEconomicos'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nome' => 'required|string|max:255',
            'grupo_economico_id' => 'required|exists:grupos_economicos,id',
        ]);

        Bandeira::create($validated);
        return redirect()->route('bandeiras.index')->with('success', 'Bandeira criada com sucesso!');
    }

    public function edit(Bandeira $bandeira)
    {
        $gruposEconomicos = GrupoEconomico::all();
        return view('bandeiras.edit', compact('bandeira', 'gruposEconomicos'));
    }

    public function update(Request $request, Bandeira $bandeira)
    {
        $validated = $request->validate([
            'nome' => 'required|string|max:255',
            'grupo_economico_id' => 'required|exists:grupos_economicos,id',
        ]);

        $bandeira->update($validated);
        return redirect()->route('bandeiras.index')->with('success', 'Bandeira atualizada com sucesso!');
    }

    public function destroy(Bandeira $bandeira)
    {
        $bandeira->delete();
        return redirect()->route('bandeiras.index')->with('success', 'Bandeira deletada com sucesso!');
    }
}
?>
