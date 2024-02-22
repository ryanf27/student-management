<div style="margin:20px; padding:20px;">
    <h1 align="center">Payment Receipt</h1>
    <hr/>
    <p>Receipt No: <b>{{ $id }}</b></p>
    <p>Date: <b>{{ $payment->paid_date }}</b></p>
    <p>Enrollment No: <b>{{ $payment->enroll_no }}</b></p>
    <p>Student Name: <b>{{ optional($payment->enrollment->student)->name ?? 'Unknown Student' }}</b></p>
    <hr/>
    <table style="width:100%;">
        <tr>
            <td>Description</td>
            <td>Amount</td>
        </tr>
        <tr>
            <td><h3>{{ optional($payment->enrollment->batch)->name ?? 'Unknown Batch' }}</h3></td>
            <td><h3>{{ $payment->amount }}</h3></td>
        </tr>
    </table>
    <hr/>

    <span>Printed Date: <b>{{ date('Y-m-d') }}</b></span>
</div>
