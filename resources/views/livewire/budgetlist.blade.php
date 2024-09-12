<div>
    <div class="card p-5">
        <div class="row">
            <div class="col">
                <input type="text" class="form-control" wire:model.live='searchAccount'>
            </div>
            <div class="col">
                <button type="button" class="btn btn-primary rounded" id="add-new-account">Add new Expenses</button>
            </div>
            <div class="row m-2">
                <table class="table table-bordered w-100 text-center">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Account Name </th>
                            <th>Account ID</th>
                            <th>Bank name</th>
                            <th>Current Balance</th>
                            <th>Date Opened</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $i = 1;
                        @endphp
                        @foreach ($accounts as $account)
                            <tr>
                                <td>{{ $i }}</td>
                                <td>{{ $account->accountname }}</td>
                                <td>{{ $account->accountid }}</td>
                                <td>{{ $account->bankname }}</td>
                                <td>{{ $account->currentBalance }}</td>
                                <td>{{ $account->dateopened }}</td>
                            </tr>
                            @php
                                $i++;
                            @endphp
                        @endforeach
                    </tbody>
                </table>

                {{ $accounts->links() }}
            </div>
        </div>
    </div>
    @include('modal.homelayoutmodals.addnewaccountmodal')
</div>
