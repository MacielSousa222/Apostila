<?php	
namespace estoque\Http\Controllers;
namespace estoque\Http\Controllers;

use	Illuminate\Support\Facades\DB;
use	Request;

class	ProdutoController extends Controller {
	public function lista(){ 
		$produtos	=	DB::select('select	*	from	produtos');
		return view('listagem')->withProdutos($produtos);
	}	
	public	function	mostra($id){
		$resposta = DB::select('select	*	from	produtos	where	id	=	?',	[$id]);
			if(empty($resposta))	{
				return	"Esse produto não existe";
			}
			return	view('detalhes')->with('p',	$resposta[0]);
	}
}