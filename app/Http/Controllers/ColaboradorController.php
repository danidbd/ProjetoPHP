<?php
namespace App\Http\Controllers;
use App\Models\Colaborador;
use App\Models\Unidade;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class ColaboradorController extends Controller
{
    public function index()
    {
        $colaboradores = Colaborador::with('unidade')->get();
        return view('colaboradores.index', compact('colaboradores'));
    }

    public function create()
    {
        $unidades = Unidade::all();
        return view('colaboradores.create', compact('unidades'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nome' => 'required|string|max:255',
            'email' => 'required|email|unique:colaboradores,email',
            'cpf' => 'required|string|size:11|unique:colaboradores,cpf',
            'unidade_id' => 'required|exists:unidades,id',
        ]);

        Colaborador::create($validated);
        return redirect()->route('colaboradores.index')->with('success', 'Colaborador criado com sucesso!');
    }

    public function edit(Colaborador $colaborador)
    {
        $unidades = Unidade::all();
        return view('colaboradores.edit', compact('colaborador', 'unidades'));
    }

    public function update(Request $request, Colaborador $colaborador)
    {
        $validated = $request->validate([
            'nome' => 'required|string|max:255',
            'email' => 'required|email|unique:colaboradores,email,' . $colaborador->id,
            'cpf' => 'required|string|size:11|unique:colaboradores,cpf,' . $colaborador->id,
            'unidade_id' => 'required|exists:unidades,id',
        ]);

        $colaborador->update($validated);
        return redirect()->route('colaboradores.index')->with('success', 'Colaborador atualizado com sucesso!');
    }

    public function destroy(Colaborador $colaborador)
    {
        $colaborador->delete();
        return redirect()->route('colaboradores.index')->with('success', 'Colaborador deletado com sucesso!');
    }
}
?>
