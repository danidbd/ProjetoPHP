<?php
namespace App\Http\Controllers;
use App\Models\Unidade;
use App\Models\Bandeira;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class UnidadeController extends Controller
{
    public function index()
    {
        $unidades = Unidade::with('bandeira')->get();
        return view('unidades.index', compact('unidades'));
    }

    public function create()
    {
        $bandeiras = Bandeira::all();
        return view('unidades.create', compact('bandeiras'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nome_fantasia' => 'required|string|max:255',
            'razao_social' => 'required|string|max:255',
            'cnpj' => 'required|string|size:14|unique:unidades,cnpj',
            'bandeira_id' => 'required|exists:bandeiras,id',
        ]);

        Unidade::create($validated);
        return redirect()->route('unidades.index')->with('success', 'Unidade criada com sucesso!');
    }

    public function edit(Unidade $unidade)
    {
        $bandeiras = Bandeira::all();
        return view('unidades.edit', compact('unidade', 'bandeiras'));
    }

    public function update(Request $request, Unidade $unidade)
    {
        $validated = $request->validate([
            'nome_fantasia' => 'required|string|max:255',
            'razao_social' => 'required|string|max:255',
            'cnpj' => 'required|string|size:14|unique:unidades,cnpj,' . $unidade->id,
            'bandeira_id' => 'required|exists:bandeiras,id',
        ]);

        $unidade->update($validated);
        return redirect()->route('unidades.index')->with('success', 'Unidade atualizada com sucesso!');
    }

    public function destroy(Unidade $unidade)
    {
        $unidade->delete();
        return redirect()->route('unidades.index')->with('success', 'Unidade deletada com sucesso!');
    }
}
?>
