@include('pages.companies.includes.header')

<div class="container m-3">
    <h3 class="text-white">{{ trans('company.yourOrders') }}</h3>
    <table class="table table-dark">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">{{ trans('company.name') }}</th>
                <th scope="col">{{ trans('company.address') }}</th>
                <th scope="col">{{ trans('company.mobile') }}</th>
                <th scope="col">{{ trans('company.email') }}</th>
                <th scope="col">{{ trans('company.description') }}</th>
                <th scope="col">{{ trans('company.service') }}</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($orders as $order)
            <tr>
                <th scope="row">{{$order->id}}</th>
                <th>{{$order->name}}</th>
                <th>{{$order->address}}</th>
                <th>{{$order->mobile}}</th>
                <th>{{$order->email}}</th>
                <th>{{$order->description}}</th>
                <th>{{ trans('services.'.$order->service->first()->name) }}</th>
            </tr>
            @endforeach

        </tbody>
    </table>

</div>



</body>

</html>