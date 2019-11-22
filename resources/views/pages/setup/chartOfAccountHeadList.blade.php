<div class="table-header"
     style="background-color:#307ECC;color:#FFF;font-size: 13px;line-height: 20px;padding-left: 6px;margin-bottom: 1px;">
    Chart of account tree
</div>

<table class="table table-bordered">
    <thead>
    <tr>
        <th>SL</th>
        <th>Root Account</th>
        <th>Parent Account</th>

        <th>Child Account</th>
        <th> Account Head</th>
    </tr>
    </thead>
    <tbody>

    @foreach($parentList as $item)

        <tr>
            <td>{{ $loop->iteration }}</td>

            <td>{{$item->rootAccountName}}</td>
            <td>{{$item->parentAccountName}}</td>
            <td>{{$item->childAccountName}}</td>
            <td>{{$item->accountHeadName}}</td>
        </tr>
    @endforeach

    </tbody>
</table>