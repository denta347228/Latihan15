<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Todo;

class TodoController extends Controller
{

    public function index()
    {
        $todos = Todo::all();
        return response()->json($todos, 200);
    }

    public function shot ($id)
    {
        $todo = Todo::find($id);
        if(! $todo)
        {
            return response()->json(["message"=> ""],404);

        }
        return response()->json($todo, 200);
    }

    public function store(Request $request)
    {
        $todo = Todo::create($request->all());
        return response()->json($todo, 200);
    }

    public function update(Request $request, $id)
    {
        $todo = Todo::find($id);
        if(! $todo)
        {
            return response()->json(["message"=> "Todo Not Found"],404);
        }
        $todo->update($request->all());
        return response()->json($todo, 200);
    }
    public function destroy($id)
    {
        $todo = Todo::find($id);
        if(! $todo)
        {
            return response()->json(["message"=> "Todo Not Found"],404);
        }
        $todo->delete();
        return response()->json($todo, 200);
}
}



?>
