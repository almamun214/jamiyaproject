<?php

namespace App\Http\Controllers;

use App\chartOfAccount;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Auth;

class ChartOfAccountController extends Controller {

    public function paymentVoucherAdd() {

        return view('pages/paymentVoucher/paymentVoucherAdd');
    }

    public function paymentVoucherSave(Request $request) {
        
        
        echo "<pre>";
        print_r($_POST);
        DIE("1");
        
    }
    public function receivedVoucherSave(Request $request) {
        
        echo "<pre>";
        print_r($_POST);
        DIE;
        
    }

    public function receiveVoucher() {
        return view('pages/receiveVoucher/receiveVoucher');
    }

    public function getHeadListAndCode($childId) {
        $data['headAccount'] = DB::table('chart_of_accounts')->select('chart_id', 'title')->where('parentId', $childId)->get();
        $data['Code'] = $this->getAccountHeadCode($childId);


        // $test = $this->getAccountHeadTree($childId);


        return json_encode($data);
    }

    public function getChildListAndCode($parentId) {


        $data['childAccount'] = DB::table('chart_of_accounts')->select('chart_id', 'title')->where('parentId', $parentId)->get();

        $data['Code'] = $this->getChildCode($parentId);


        return json_encode($data);
    }

    public function getParentListAndCode($rootId) {
        //$cities = DB::table('users')->where('leaderId', $id)->pluck("name", "id")->all();
        $data['ParentAccount'] = DB::table('chart_of_accounts')->select('chart_id', 'title')->where('parentId', $rootId)->get();


        $data['Code'] = $this->getParentCode($rootId);

        return json_encode($data);
    }

    public function getChildListTree($parentId) {

        $whereData = array(
            ['parent_account.chart_id', $parentId],
            ['root_account.status', 1],
        );

        $parentList = DB::table('chart_of_accounts as parent_account')
                ->select('root_account.title as rootAccountName', 'parent_account.title as parentAccountName', 'child_account.title as childAccountName')
                ->leftJoin('chart_of_accounts as child_account', 'parent_account.chart_id', '=', 'child_account.parentId')
                ->leftJoin('chart_of_accounts as root_account', 'parent_account.parentId', '=', 'root_account.chart_id')
                ->where($whereData)
                ->get();


        $parentOnly = '';

        return view('pages/setup/chartOfAccountParentList', compact('parentList', 'parentOnly'));
    }

    public function getParentListTree($rootId) {

        $whereData = array(
            ['chart_of_accounts.parentId', $rootId],
            ['chart_of_accounts.status', 1],
        );

        $parentList = chartOfAccount::join('chart_of_accounts as rootAccount', 'rootAccount.chart_id', '=', 'chart_of_accounts.parentId')
                ->select('chart_of_accounts.title as parentAccountName', 'rootAccount.title as rootAccountName')
                ->where($whereData)
                ->get();

        $parentOnly = 'accountHeadName';

        return view('pages/setup/chartOfAccountParentList', compact('parentList', 'parentOnly'));
    }

    public function getAccountHeadTree($childId) {


        $whereData = array(
            ['chart_of_accounts.parentId', $childId],
            ['chart_of_accounts.status', 1],
        );

        $parentList = DB::table('chart_of_accounts')
                ->select('root_account.title as rootAccountName', 'parent_account.title as parentAccountName', 'child_account.title as childAccountName', 'chart_of_accounts.title as accountHeadName')
                ->leftJoin('chart_of_accounts as child_account', 'chart_of_accounts.parentId', '=', 'child_account.chart_id')
                ->leftJoin('chart_of_accounts as parent_account', 'child_account.parentId', '=', 'parent_account.chart_id')
                ->leftJoin('chart_of_accounts as root_account', 'parent_account.parentId', '=', 'root_account.chart_id')
                ->where($whereData)
                ->get();


        return view('pages/setup/chartOfAccountHeadList', compact('parentList'));
    }

    public function getAccountHeadCode($childId) {

        $ParentIdCount = DB::table('chart_of_accounts')->select('chart_id')->where('parentId', $childId)->get();

        $ParentIdCount = count($ParentIdCount);

        $childRootCode = DB::table('chart_of_accounts')->where('chart_id', $childId)->get()->first();


        return $newCode = $childRootCode->accountCode . ' - ' . str_pad($ParentIdCount + 1, 4, "0", STR_PAD_LEFT);
    }

    public function getParentCode($rootId) {
        $ParentIdCount = DB::table('chart_of_accounts')->select('chart_id')->where('parentId', $rootId)->get();

        $ParentIdCount = count($ParentIdCount);


        return $ParentnewCode = $rootId . ' - ' . str_pad($ParentIdCount + 1, 2, "0", STR_PAD_LEFT);
    }

    public function getChildCode($parentId) {

        $ParentIdCount = DB::table('chart_of_accounts')->select('chart_id')->where('parentId', $parentId)->get();

        $ParentIdCount = count($ParentIdCount);

        $childParentCode = DB::table('chart_of_accounts')->where('chart_id', $parentId)->get()->first();


        return $childNewCode = $childParentCode->accountCode . ' - ' . str_pad($ParentIdCount + 1, 3, "0", STR_PAD_LEFT);
    }

    public function index() {
        //$chartAccountList = DB::table('chart_of_accounts')->select('title')->where('parentId', 0)->get();
        $chartAccountList = chartOfAccount::where('parentId', 0)->get();


        return view('pages/setup/index', compact('chartAccountList'));
    }

    public function create() {
        $whereData = array(
            ['status', 1],
            ['parentId', 0],
        );
        $chartOfAccountActiveList = chartOfAccount::where($whereData)->get();


        return view('pages/setup/createChartOfAccount', compact('chartOfAccountActiveList'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {


        request()->validate([
            'root_account' => 'required',
        ]);
        $requestData = new chartOfAccount();


        if ($request->parent_account == 0 and $request->child_account == 0) {
            $requestData['accountCode'] = $request->input('account_code');
            $requestData['parentId'] = $request->input('root_account');
        }

        if ($request->parent_account != 0 and $request->child_account == 0) {

            $requestData['accountCode'] = $request->input('account_code');
            $requestData['parentId'] = $request->input('parent_account');
        }
        if ($request->parent_account != 0 and $request->child_account != 0) {

            $requestData['accountCode'] = $request->input('account_code');
            $requestData['parentId'] = $request->input('child_account');
        }

        $requestData['title'] = $request->input('account_head');
        $requestData['posted'] = 0;
        $requestData['status'] = 1;
        $requestData['created_by'] = Auth::id();


        if ($requestData->save()) {
            return redirect()->route('chartOfAccountStore')->with('success', 'Successfully Add');
        }
        return back()->with('failed', 'Something went wrong. Try again');

        /**
         * [root_account] => 1
         * [parent_account] => 6
         * [child_account] => 0
         * [account_code] => 1 - 04
         * [account_head] => test
         */
        /**
         * @1st step
         *  [_token] => 4tucPcJjwm8y5pE6YfEdEZzlNfgIcAje5LzQTU7D
         * [root_account] => 1
         * [parent_account] => 0
         * [child_account] => 0
         * [account_code] => 1 - 01
         * [account_head] => 1212
         */
        /**
         * chart_id
         * accountCode
         * title
         * parentId
         * posted
         * status
         * 1=Active,2=Inactive
         * created_by
         * updated_by
         * created_at
         * updated_at
         */
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\chartOfAccount $chartOfAccount
     * @return \Illuminate\Http\Response
     */
    public function show(chartOfAccount $chartOfAccount) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\chartOfAccount $chartOfAccount
     * @return \Illuminate\Http\Response
     */
    public function edit(chartOfAccount $chartOfAccount) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\chartOfAccount $chartOfAccount
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, chartOfAccount $chartOfAccount) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\chartOfAccount $chartOfAccount
     * @return \Illuminate\Http\Response
     */
    public function destroy(chartOfAccount $chartOfAccount) {
        //
    }

}
