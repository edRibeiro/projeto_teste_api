<?php

namespace App\Http\Controllers\Api;
use App\API\ApiError;
use App\Establishment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EstablishmentController extends Controller
{
    /**
	 * @var Establishment
	 */
	private $establishment;
	public function __construct(Establishment $establishment)
	{
		$this->establishment = $establishment;
	}
	public function index()
    {
    	return response()->json($this->establishment->paginate(10));
    }
    public function show($id)
    {
    	$establishment = $this->establishment->find($id);
    	if(! $establishment) return response()->json(ApiError::errorMessage('Establishment não encontrado!', 4040), 404);
    	$data = ['data' => $establishment];
	    return response()->json($data);
    }
    public function store(Request $request)
    {
		try {
			$professionalData = $request->all();
			$this->establishment->create($professionalData);
			$return = ['data' => ['msg' => 'Establishment criado com sucesso!']];
			return response()->json($return, 201);
		} catch (\Exception $e) {
			if(config('app.debug')) {
				return response()->json(ApiError::errorMessage($e->getMessage(), 1010), 500);
			}
			return response()->json(ApiError::errorMessage('Houve um erro ao realizar operação de salvar', 1010),  500);
		}
    }
	public function update(Request $request, $id)
	{
		try {
			$professionalData = $request->all();
			$establishment     = $this->establishment->find($id);
			$establishment->update($professionalData);
			$return = ['data' => ['msg' => 'Establishment atualizado com sucesso!']];
			return response()->json($return, 201);
		} catch (\Exception $e) {
			if(config('app.debug')) {
				return response()->json(ApiError::errorMessage($e->getMessage(), 1011),  500);
			}
			return response()->json(ApiError::errorMessage('Houve um erro ao realizar operação de atualizar', 1011), 500);
		}
	}
	public function delete(Establishment $id)
	{
		try {
			$id->delete();
			return response()->json(['data' => ['msg' => 'Establishment: ' . $id->name . ' removido com sucesso!']], 200);
		}catch (\Exception $e) {
			if(config('app.debug')) {
				return response()->json(ApiError::errorMessage($e->getMessage(), 1012),  500);
			}
			return response()->json(ApiError::errorMessage('Houve um erro ao realizar operação de remover', 1012),  500);
		}
	}
}
