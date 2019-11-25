<?php

namespace App\Http\Controllers;

use App\JournalVoucher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\general;
class JournalVoucherController extends Controller {

    public function index() {
        $journalVoucherList = DB::table('generals')->where('form_id', 1)->get();
        return view('pages.journalVoucher.index', compact('journalVoucherList'));
    }

    public function create() {

        $user = DB::table('generals')->where('form_id', '1')->count();
        $invoiceNo = 'JV' . date('y') . date('m') . '-' . str_pad($user + 1, 6, "0", STR_PAD_LEFT);
        return view('pages.journalVoucher.create', compact('invoiceNo'));
    }

    public function store(Request $request) {

        
//        echo "<pre>";
//        print_r($request->all());
//        die;
        $general = new general();
        $general->date = date('Y-m-d', strtotime($request->date));
        $general->voucher_no = $request->voucherId;
        $general->form_id = 1;
        $general->debit = array_sum($request->amountDr);
        $general->narration = $request->narration;
        if ($general->save()) {
            $generalLedger1 = array();
            $generalLedger2 = array();
            foreach ($request->accountDr as $key => $value) {
                if (!empty($request->accountDr[$key])):
                    $generalLedger2[] = [
                        'form_id' => 1,
                        'generals_id' => $general->generals_id,
                        'date' => date('Y-m-d', strtotime($request->date)),
                        'account_id' => $request->accountDr[$key],
                        'debit' => $request->amountDr[$key],
                        'note' => $request->memoDr[$key],
                    ];
                  DB::table('generalladgers')->insert($generalLedger2);
                endif;
                if (!empty($request->accountDr[$key])):
                    $generalLedger1[] = [
                        'form_id' => 1,
                        'generals_id' => $general->generals_id,
                        'date' => date('Y-m-d', strtotime($request->date)),
                        'account_id' => $request->accountDr[$key],
                        'credit' => array_sum($request->amountCr),
                        'note' => $request->memoDr[$key],
                    ];
                    DB::table('generalladgers')->insert($generalLedger1);
                endif;
            }
          
            return redirect()->route('journalVoucher')->with('success', 'created successfully And Prints !');
        }
        return back()->with('success', 'Please check values and submit again!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\JournalVoucher  $journalVoucher
     * @return \Illuminate\Http\Response
     */
    public function show(JournalVoucher $journalVoucher) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\JournalVoucher  $journalVoucher
     * @return \Illuminate\Http\Response
     */
    public function edit(JournalVoucher $journalVoucher) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\JournalVoucher  $journalVoucher
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, JournalVoucher $journalVoucher) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\JournalVoucher  $journalVoucher
     * @return \Illuminate\Http\Response
     */
    public function destroy(JournalVoucher $journalVoucher) {
        //
    }

}
