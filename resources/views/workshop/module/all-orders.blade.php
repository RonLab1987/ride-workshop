<section>
    <div class="container">
        <div class="row">
            <table class="table table-striped">
                @foreach($orders as $order)
                    <tr>
                        <td>{{ $order->id }}</td> <td>{{ $order->phone }}</td> <td >{{ $order->name }}</td>
                        <td style="max-width: 350px;">{{ $order->comment }}</td> <td>{{ $order->order_type }}</td> <td>{{ $order->created_at }}</td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
</section>
    
