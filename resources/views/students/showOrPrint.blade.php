@extends('layouts.app')

@section('js')

    <script>



        function printDiv()
        {

            var divToPrint=document.getElementById('DivIdToPrint');

            var newWin=window.open('','Print-Window');

            newWin.document.open();

            newWin.document.write('<html><body onload="window.print()">'+divToPrint.innerHTML+'</body></html>');

            newWin.document.close();

            setTimeout(function(){newWin.close();},10);

        }
    </script>


@endsection

@section('css')

@endsection


@section('content')










    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Student Receipt <input class="" type='button' id='btn' value='Print' onclick='printDiv();'></h4>
        </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            <ol class="breadcrumb">
                <li><a href="/">Dashboard</a></li>
                <li><a href="{{route('applicantList')}}" class="active btn btn-danger btn-sm"
                       style="color:#fff;font-weight:600">Applicant List</a></li>
            </ol>
        </div>
        <!-- /.col-lg-12 -->
    </div>

    <!-- .row -->
    <div id="DivIdToPrint">
    <div class="row">
        <div class="col-sm-12 text-center">
            <h3 style="color: #C9302C;">JAMIA SAIDIA KARIMIA</h3>
            Saidnagar, East Vatara, Dhaka-1212. Phone: 02-9857740
        </div>

    </div>
    <div class="row" style="margin: 20px 0;">

        <div class="col-sm-4 col-4"style="font-size: 16px;padding-top: 15px;">
            NO:
        </div>
        <div class="col-sm-4 col-4 text-center">
            <button type="button" class="btn btn-danger" style="border-radius: 20px;font-size: 16px;">Receipt</button>
        </div>
        <div class="col-sm-4 col-4 text-right" style="font-size: 16px;padding-top: 15px;">
            Date: .. / .. / ....
        </div>
    </div>

    <!-- .row -->
    <div class="row" style="background: #fb9678;color: #fff;padding: 10px 0;margin:10px 0">
        <div class="col-sm-12">

            Student's Name:

        </div>
    </div>
    <div class="row" style="background: #fb9678;color: #fff;padding: 10px 0;margin:10px 0">
        <div class="col-sm-4 col-4">Class:</div>
        <div class="col-sm-4 col-4 text-center">Roll: </div>
        <div class="col-sm-4 col-4 text-right">Reg: </div>
    </div>
    <div class="row">
        <div class="col-sm-12 table-responsive">
            <table class="table  table-bordered text-center">
                <thead>
                <tr style="background: #F2DEDE;">
                    <th class="text-center" style="border-right: 1px solid #FFF;width: 70px;">SL. NO.</th>
                    <th class="text-center" style="border-right: 1px solid #FFF;">Description</th>
                    <th class="text-center">Amount</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>1</td>
                    <td>Admission Form</td>
                    <td></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Admission Fee</td>
                    <td></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Session Fee</td>
                    <td></td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Tution Fee</td>
                    <td></td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>Meal Charge</td>
                    <td></td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>Library</td>
                    <td></td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>Lab/Research</td>
                    <td></td>
                </tr>
                <tr>
                    <td>8</td>
                    <td>Examination Fee</td>
                    <td></td>
                </tr>
                <tr>
                    <td>9</td>
                    <td>Certificate Fee</td>
                    <td></td>
                </tr>
                <tr>
                    <td>10</td>
                    <td>Mark Sheet</td>
                    <td></td>
                </tr>
                <tr>
                    <td>11</td>
                    <td>Computer</td>
                    <td></td>
                </tr>
                <tr>
                    <td>12</td>
                    <td>Hospital Fee</td>
                    <td></td>
                </tr>
                <tr>
                    <td>13</td>
                    <td>Education Tour</td>
                    <td></td>
                </tr>
                <tr>
                    <td>14</td>
                    <td>Welfare</td>
                    <td></td>
                </tr>
                <tr>
                    <td>15</td>
                    <td>Cultural Council</td>
                    <td></td>
                </tr>
                <tr>
                    <td>16</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>17</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>18</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>19</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>20</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td class="text-right" colspan="2">Total:</td>
                    <td></td>
                </tr>
                </tbody>
            </table>
        </div>
        <div class="col-sm-12" style="margin-top: 20px;">In Word: ..............................................................................</div>
        <div class="col-sm-12 text-right" style="margin: 60px 0; padding-right: 40px;font-size: 20px;">Signature    </div>



    </div>

    </div>



@endsection