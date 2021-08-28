<?php

namespace App\Http\Controllers;

use App\Models\Investor;
use Illuminate\Http\Request;


class InvestorController extends Controller
{
    // ..função responsável pelo armazenamento dos dados
    public function store(Request $request){
        // ..verifica a existencia do item, se não redireciona o usuário
        if($request->name == '' || $request->name == null)
            return view('index');
        
        // ..salva os dados
        Investor::create($request->all());
        // ..realiza o redirecionamento por meio da rota
        return redirect()->route('investors.showall');
    }

    // ..função responsável pela listagem dos dados
    public function showall(){
        // ..busca os dados
        $investors = Investor::get();
        // ..direciona para a view junto a um atributo
        return view('table',compact('investors'));
    }

    // ..função responsável pela exibição de um dado específico
    public function show($id){
        // ..verifica a existencia do item, se não redireciona o usuário
        if(!$investor = Investor::find($id))
            return view('index');
        
        // ..direciona o usuário junto a uma variavel
        return view('show', compact('investor'));
    }

    // ..função responsável pela edição dos dados
    public function update(Request $request,$id){
        // ..verifica a existencia do item, se não redireciona o usuário
        if(!$investor = Investor::find($id)){
            return redirect()->route('investors.showall')
                ->with('message', 'Edição deu zebra!');
        }
        
        $investor->update($request->all());
        return redirect()->route('investors.showall')
            ->with('message', 'Editado com sucesso!');
    }

    // ..função responsável pela exclusão de um dado específico
    public function destroy($id){
        // ..verifica a existencia do item, se não redireciona o usuário
        if(!$investor = Investor::find($id)){
            return redirect()->back()
            ->with('message', 'Deu ruim, o cara ta aqui ainda!');
        }
        
        // ..faz a exclusão dos dados
        $investor->delete();
        // ..redireciona por meio de uma rota
        return redirect()->route('investors.showall')
            ->with('message', 'Apagou, some doidão!');
    }
}
