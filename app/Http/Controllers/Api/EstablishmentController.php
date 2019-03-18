<?php

namespace App\Http\Controllers\Api;
use App\API\ApiError;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\EstablishmentRepository;

class EstablishmentController extends Controller
{
    /**
	 * @var EstablishmentRepository
	 */
	protected $repository;
	public function __construct(EstablishmentRepository $repository)
    {
        $this->repository = $repository;
    }
	public function index()
    {
    	return response()->json($this->repository->all());
    }
    public function show($id)
    {
    	$establishment = $this->repository->find($id);
    	if(! $establishment) return response()->json(ApiError::errorMessage('Establishment não encontrado!', 4040), 404);
    	$data = ['data' => $establishment];
	    return response()->json($data);
    }
    public function store(Request $request)
    {
		try {
			$establishmentData = $request->all();
			$this->repository->create($establishmentData);
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
			$establishmentData = $request->all();
			$establishment     = $this->repository->find($id);
			$establishment->update($establishmentData);
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
