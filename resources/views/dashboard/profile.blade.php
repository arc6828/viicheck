<!-- Profile -->
<div class="card">
    <div class="card-header">Profile {{ $profile->id }}</div>
    <div class="card-body">

        <a href="{{ url('/profile') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
        <a href="{{ url('/profile/' . $profile->id . '/edit') }}" title="Edit Profile"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

        <form method="POST" action="{{ url('profile' . '/' . $profile->id) }}" accept-charset="UTF-8" style="display:inline">
            {{ method_field('DELETE') }}
            {{ csrf_field() }}
            <button type="submit" class="btn btn-danger btn-sm" title="Delete Profile" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
        </form>
        <br/>
        <br/>

        <div class="table-responsive">
            <table class="table">
                <tbody>
                    <tr>
                        <th>ID</th><td>{{ $profile->id }}</td>
                    </tr>
                    <tr><th> Name </th><td> {{ $profile->name }} </td></tr><tr><th> Address </th><td> {{ $profile->address }} </td></tr><tr><th> Email </th><td> {{ $profile->email }} </td></tr>
                </tbody>
            </table>
        </div>

    </div>
</div>