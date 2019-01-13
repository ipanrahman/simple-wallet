<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Models\Wallet;
use DB;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transactions = Transaction::paginate(10);
        return $this->ok('Get all transaction success', $transactions);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = $request->user();
        $input = $request->all();

        $this->validate($request, [
            'name' => 'required',
            'amount' => 'required',
            'type' => 'required',
        ]);

        try {
            DB::beginTransaction();
            $transaction = new Transaction();
            $transaction->name = $input['name'];
            $transaction->amount = $input['amount'];
            $wallet = Wallet::where('user_id', $user->id)->first();
            if ($input['type'] == 'DEBIT') {
                $wallet->ending_balance = $wallet->ending_balance + $transaction->amount;
                $wallet->debit = $wallet->debit + $transaction->amount;
            } else if ($input['type'] == 'CREDIT') {
                $wallet->ending_balance = $wallet->ending_balance - $transaction->amount;
                $wallet->credit = $wallet->credit + $transaction->amount;
            } else {
                return $this->badRequest('Transaction not available', $input);
            }
            $wallet->save();
            $user->balance = $wallet->ending_balance;
            $user->save();
            $transaction->user_id = $user->id;
            $transaction->wallet_id = $wallet->id;
            $transaction->type = $input['type'];
            $transaction->description = $transaction->name . ' with amount ' . $transaction->amount;
            $transaction->save();
            DB::commit();
            return $this->created('Create transaction success', $transaction);
        } catch (Exception $e) {
            DB::rollBack();
            return $this->internalServerError($e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $transaction = Transaction::find($id);
        if (!$transaction) {
            return $this->badRequest('Transaction id ' . $id . ' not found');
        }
        return $this->ok('Get transaction by id success', $transaction);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = $request->user();
        $input = $request->all();

        $this->validate($request, [
            'type' => 'required',
        ]);

        try {
            DB::beginTransaction();
            $transaction = Transaction::find($id);
            if (!$transaction) {
                return $this->badRequest('Transaction id ' . $id . ' not found');
            }
            $transaction->name = $input['name'];
            $transaction->amount = $input['amount'];
            $wallet = Wallet::where('user_id', $user->id)->first();
            if ($input['type'] == 'DEBIT') {
                $wallet->ending_balance = $wallet->ending_balance + $transaction->amount;
                $wallet->debit = $wallet->debit + $transaction->amount;
            } else if ($input['type'] == 'CREDIT') {
                $wallet->ending_balance = $wallet->ending_balance - $transaction->amount;
                $wallet->credit = $wallet->credit + $transaction->amount;
            } else {
                return $this->badRequest('Transaction not available', $input);
            }
            $wallet->save();
            $user->balance = $wallet->ending_balance;
            $user->save();
            $transaction->user_id = $user->id;
            $transaction->wallet_id = $wallet->id;
            $transaction->type = $input['type'];
            $transaction->description = $transaction->name . ' with amount ' . $transaction->amount;
            $transaction->save();
            DB::commit();
            return $this->created('Update transaction success', $transaction);
        } catch (Exception $e) {
            DB::rollBack();
            return $this->internalServerError('Error update transaction');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $transaction = Transaction::find($id);
        if (!$transaction) {
            return $this->badRequest('Transaction id ' . $id . ' not found');
        }
        $transaction->delete();
        return $this->ok('Delete transaction success');
    }
}
