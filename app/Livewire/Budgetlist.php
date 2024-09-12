<?php

namespace App\Livewire;

use App\Models\Account;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithPagination;

class Budgetlist extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    protected $listeners = ['refreshBudgetlist' => '$refresh'];

    public $searchAccount = '';

    public function saveAccount(Request $request)
    {
        //dd($request->all()); // to check only at network

        // Account::create($request->objectAccount);// for the audit tray

        // other way

        // DB::table('accounts')->insert($request)

        // error handling
        $save = Account::create($request->objectAccount);
        return response()->json([
            'success' => $save ? true : false,
            'msg' => $save ? 'Successfully Saved' : 'Failed!',
        ]);
    }
    public function render()
    {
        $accounts = DB::table('accounts')
            ->where('accountid', 'like', '%' . $this->searchAccount . '%')
            ->orwhere('accountname', 'like', '%' . $this->searchAccount . '%')
            ->orwhere('bankname', 'like', '%' . $this->searchAccount . '%')
            ->orwhere('dateopened', 'like', '%' . $this->searchAccount . '%')
            ->paginate(5);

        //dd($accounts); // to check if may laman
        return view('livewire.budgetlist', ['accounts' => $accounts]);
    }
}
