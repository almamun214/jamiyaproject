<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\general;

class PaymentVoucherController extends Controller {

    public function index() {
        $paymentList = DB::table('generals')->get();

//      echo "<pre>";
//     print_r($paymentList);
//     die;

        return view('pages.paymentVoucher.paymentVoucherList', compact('paymentList'));
    }

    public function create() {

        return view('pages.paymentVoucher.paymentVoucherAdd');
    }

    public function store(Request $request) {
//        echo "<pre>";
//        print_r($request->all());
//        DIE;
        
        
//      $data =  general::create(['date'=>date('Y-m-d',strtotime($request->date))],
//                ['pay_type'=>(int)$request->supplier],
//                ['pay_type_id'=>(int)$request->supplier],
//                ['form_id'=>1]
//                );
        
      
//      echo "<pre>";
//      print_r($data->generals_id);
//      die;
      
        $general = new general();
        $general->date = date('Y-m-d',strtotime($request->date));
        $general->pay_type_id = (int)$request->supplier;
        $general->pay_type =1;//integer
        $general->form_id = 1;
        
//        echo "<pre>";
//        print_r($general);
//        die;
        
     
      if( $general->save()){
          
             $insertArr = array();
       
        foreach ($request->accountDr as $key => $value) {
            $inputNumber =   $value->number;
           
            $insertArr[] = [
                'number' => $inputNumber,
                ];
        }

        DB::table('')->insert($insertArr);
          
          
          echo $general->generals_id;
      }else{
          $data = array(
    array('user_id'=>'Coder 1', 'subject_id'=> 4096),
    array('user_id'=>'Coder 2', 'subject_id'=> 2048),
    //...
);

general::insert($data); // Eloquent approach
DB::table('general')->insert($data); // Query Builder approach
      }
        
       
    
     
        
        
        
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
