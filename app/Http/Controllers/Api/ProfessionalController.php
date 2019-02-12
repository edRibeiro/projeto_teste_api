<?php

namespace App\Http\Controllers\Api;

use App\API\ApiError;
use App\Professional;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProfessionalController extends Controller
{
    /**
	 * @var Professional
	 */
	private $professional;
	public function __construct(Professional $professional)
	{
		$this->professional = $professional;
	}
	public function index()
    {
    	return response()->json($this->professional->paginate(10));
    }
    public function show($id)
    {
    	$professional = $this->professional->find($id);
    	if(! $professional) return response()->json(ApiError::errorMessage('Professional não encontrado!', 4040), 404);
    	$data = ['data' => $professional];
	    return response()->json($data);
    }
    public function store(Request $request)
    {
		try {
			$professionalData = $request->all();
			$this->professional->create($professionalData);
			$return = ['data' => ['msg' => 'Professional criado com sucesso!']];
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
			$professional     = $this->professional->find($id);
			$professional->update($professionalData);
			$return = ['data' => ['msg' => 'Professional atualizado com sucesso!']];
			return response()->json($return, 201);
		} catch (\Exception $e) {
			if(config('app.debug')) {
				return response()->json(ApiError::errorMessage($e->getMessage(), 1011),  500);
			}
			return response()->json(ApiError::errorMessage('Houve um erro ao realizar operação de atualizar', 1011), 500);
		}
	}
	public function delete(Professional $id)
	{
		try {
			$id->delete();
			return response()->json(['data' => ['msg' => 'Professional: ' . $id->name . ' removido com sucesso!']], 200);
		}catch (\Exception $e) {
			if(config('app.debug')) {
				return response()->json(ApiError::errorMessage($e->getMessage(), 1012),  500);
			}
			return response()->json(ApiError::errorMessage('Houve um erro ao realizar operação de remover', 1012),  500);
		}
	}
}
