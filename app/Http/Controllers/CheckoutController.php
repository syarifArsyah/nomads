<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

use App\Models\Admin\Transaction;
use App\Models\Admin\Transactiondetail;
use App\Models\Admin\Travelpackages;

class CheckoutController extends Controller
{
    //Tampilkan data pada halaman checkout
    public function index(Request $request,$id)
    {
        $item = Transaction::with([
            'details','travel_package','user'
        ])->findOrFail($id);

        return view('pages.checkout',[
            'item' => $item
        ]);
    }

    //Proses transaksi insert data to table transaction & transaction details btn JOIN NOW
    public function process(Request $request,$id)
    {
        $travel_package = Travelpackages::findOrfail($id);
        // dd($travel_package);
        
        $transaction = Transaction::create([
            'travel_packages_id'     => $id,
            'user_id'              => Auth::user()->id,
            'additional_visa'       => 0,
            'transaction_total'     => $travel_package->price,
            'transaction_status'    => 'IN_CART' 
        ]);

        TransactionDetail::create([
            'transaction_id'        => $transaction->id,
            'username'              => Auth::user()->username,
            'nationality'           => 'ID',
            'is_visa'               => 0,
            'doe_passport'          => Carbon::now()->addYear(5)
        ]);

        return redirect()->route('checkout',$transaction->id);
    }

    //Tambah data member Who is going & update data transaction (additional visa & transaction total)
    public function create(Request $request,$id)
    {
        $request->validate([
            'username'  => 'required|string|exists:users,username',
            'is_visa'   => 'required|boolean',
            'doe_passport' => 'required'
        ]);

        $data = $request->all();
        $data['transaction_id'] = $id;

        Transactiondetail::create($data);

        $transaction = Transaction::with(['travel_package'])->find($id);

        if ($request->is_visa) 
        {
            $transaction->transaction_total += 190;
            $transaction->additional_visa   += 190;
        }

        $transaction->transaction_total += $transaction->travel_package->price;
        $transaction->save();

        return redirect()->route('checkout',$id);

    }
    //Hapus data member who is going
    public function remove(Request $request,$detail_id)
    {
        $item = Transactiondetail::findOrFail($detail_id);
        $transaction = Transaction::with([
            'details','travel_package'
        ])->findOrFail($item->transaction_id);
        
        if ($request->is_visa) 
        {
            $transaction->transaction_total -= 190;
            $transaction->additional_visa   -= 190;
        }

        $transaction->transaction_total -= $transaction->travel_package->price;
        $transaction->delete();

        return redirect()->route('checkout',$item->transaction_id);
    }

    //Update data status dari in chart ke pending
    public function success(Request $request,$id)
    {
        $transaction = Transaction::findOrfail($id);
        $transaction->transaction_status = 'PENDING';

        $transaction->save();

        return view('pages.checkout-success');
    }
}
