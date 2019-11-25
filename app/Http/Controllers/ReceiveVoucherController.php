<?php

namespace App\Http\Controllers;

use App\ReceiveVoucher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\general;
class ReceiveVoucherController extends Controller
{
   public function index() {
        $receiveVoucherList = DB::table('generals')->where('form_id', 3)->get();
        return view('pages.receiveVoucher.index', compact('receiveVoucherList'));
    }

    public function create() {

        $user = DB::table('generals')->where('form_id', '3')->count();
        $invoiceNo = 'RV' . date('y') . date('m') . '-' . str_pad($user + 1, 6, "0", STR_PAD_LEFT);
        return view('pages.receiveVoucher.create', compact('invoiceNo'));
    }

    public function store(Request $request) {

        $general = new general();
        $general->date = date('Y-m-d', strtotime($request->date));
        $general->voucher_no = $request->voucherId;
        $general->pay_type = $request->payType; //integer
        $general->pay_type_id = 1;
        $general->form_id = 3;
        $general->debit = array_sum($request->amountDr);
        $general->narration = $request->narration;
        if ($general->save()) {
            $generalLedger1 = array();
            $generalLedger1[] = [
                'form_id' => 3,
                'generals_id' => $general->generals_id,
                'date' => date('Y-m-d', strtotime($request->date)),
                'account_id' => 1,
                'credit' => array_sum($request->amountDr),
                'note' => 'Payment',
            ];
            DB::table('generalladgers')->insert($generalLedger1);
            $generalLedger2 = array();
            foreach ($request->accountDr as $key => $value) {
                $generalLedger2[] = [
                    'form_id' => 3,
                    'generals_id' => $general->generals_id,
                    'date' => date('Y-m-d', strtotime($request->date)),
                    'account_id' => $request->accountDr[$key],
                    'debit' => $request->amountDr[$key],
                    'note' => $request->memoDr[$key],
                ];
            }
            DB::table('generalladgers')->insert($generalLedger2);
            return redirect()->route('receiveVoucer')->with('success', 'created successfully And Prints !');
        }
        return back()->with('success', 'Please check values and submit again!');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\ReceiveVoucher  $receiveVoucher
     * @return \Illuminate\Http\Response
     */
    public function show(ReceiveVoucher $receiveVoucher)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ReceiveVoucher  $receiveVoucher
     * @return \Illuminate\Http\Response
     */
    public function edit(ReceiveVoucher $receiveVoucher)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ReceiveVoucher  $receiveVoucher
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ReceiveVoucher $receiveVoucher)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ReceiveVoucher  $receiveVoucher
     * @return \Illuminate\Http\Response
     */
    public function destroy(ReceiveVoucher $receiveVoucher)
    {
        //
    }
}
