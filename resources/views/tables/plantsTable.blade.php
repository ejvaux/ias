<div class="row">
    <div class="col">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Scientific Name</th>
                    <th scope="col">Created by</th>
                    <th scope="col">Created at</th>
                </tr>
            </thead>
            <tbody class="text-center">
                @isset ($plants)
                    @if (count($plants)>0)
                        @foreach ($plants as $plant)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$plant->name}}</td>
                                <td>{{$plant->sname}}</td>
                                <td>{{$plant->user->name}}</td>
                                <td>{{$plant->created_at}}</td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="5"><h3>No Data</h3></td>
                        </tr>
                    @endif
                @else
                    <tr>
                        <td colspan="5"><h3>No Data</h3></td>
                    </tr>
                @endif
            </tbody>
        </table>
    </div>
</div>
<div class="row">
    <div class="col">
        @isset ($plants)
            @if (count($plants)>0)                
                {{ $plants->links() }}
            @endif
        @endif
    </div>
</div>

