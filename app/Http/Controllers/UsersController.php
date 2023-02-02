namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function edit()
    {
        return view('users.edit')->with('user', auth()->user());
    }
}
