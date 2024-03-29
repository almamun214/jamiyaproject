<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\general;

class PaymentVoucherController extends Controller {

    public function index() {
        $paymentVoucherList = DB::table('generals')->where('form_id', 2)->get();        
        return view('pages.paymentVoucher.index', compact('paymentVoucherList'));
    }

    public function create() {

        $user = DB::table('generals')->where('form_id', '2')->count();
        $invoiceNo = 'PV' . date('y') . date('m') . '-' . str_pad($user + 1, 6, "0", STR_PAD_LEFT);
        return view('pages.paymentVoucher.create', compact('invoiceNo'));
    }

    public function store(Request $request) {

        $general = new general();
        $general->date = date('Y-m-d', strtotime($request->date));
        $general->voucher_no = $request->voucherId;
        $general->pay_type = $request->payType; //integer
        $general->pay_type_id = 1;
        $general->form_id = 2;
        $general->debit = array_sum($request->amountDr);
        $general->narration = $request->narration;
        if ($general->save()) {
            $generalLedger1 = array();
            $generalLedger1[] = [
                'form_id' => 2,
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
                    'form_id' => 2,
                    'generals_id' => $general->generals_id,
                    'date' => date('Y-m-d', strtotime($request->date)),
                    'account_id' => $request->accountDr[$key],
                    'debit' => $request->amountDr[$key],
                    'note' => $request->memoDr[$key],
                ];
            }
            DB::table('generalladgers')->insert($generalLedger2);
            return redirect()->route('paymentVoucer')->with('success', 'created successfully And Prints !');
        }
        return back()->with('success', 'Please check values and submit again!');
    }

    public function show($id) {
        //
    }

    public function edit($id) {
        //
    }

    public function update(Request $request, $id) {
        //
    }

    public function destroy($id) {
        //
    }

}
