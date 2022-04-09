<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class SetDataController extends Controller
{

    private $modelPath;
    private $modelRepo;

    public function __construct(Request $request)
    {

        if (isset($request->module_name)) {
            $this->modelPath = 'App\\Interface\\Modules\\' . $request->module_name . 'RepositoryInterface';
            $this->modelRepo = App::make($this->modelPath);
        }
    }

    public function index()
    {

        // dd($this->modelRepo);
        return $this->modelRepo->all();
    }


    public function create(Request $request)
    {

        // dd($this->modelRepo);
        $input = $request->input_request;
        $data = $this->modelRepo->create($input);

        $data1 = ['id' => $data->id, 'module_name' => $request->module_name, 'data' => $input];

        return json_encode([$data1, "Record created successfully"]);
    }

    public function show(Request $request)
    {
        // dd($request->id);
        $data =  $this->modelRepo->find($request->id);
        // $dataInput = ["Name : " . $data->name, "Phone : " . $data->phone, "Email : " . $data->email];
        // $data1 = ["id : " . $request->id, "module_name : " . $request->module_name, $dataInput];
        // return json_encode([$data1, "Record updated successfully"]);

        return response()->json(['module_name' => $request->module_name, 'id' => $request->id, 'data' => $data]);
    }

    public function update(Request $request)
    {
        $id = $request->id;
        $input = $request->input_request;
        $this->modelRepo->updateApi($id, $input);

        $data1 = ['id' => $request->id, 'module_name' => $request->module_name, 'data' => $input];
        $data = [$input];

        // return response($data . "akmlks");
        return json_encode([$data1, "Record updated successfully"]);
    }

    public function destroy(Request $request)
    {
        $this->modelRepo->delete($request->id);

        $data = ['module_name' => $request->module_name, 'id' => $request->id];

        return json_encode([$data, "Record deleted successfully"]);
    }
}