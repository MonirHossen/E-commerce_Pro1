@component('mail::message')
# Dear {{ $order->client->name }}

Your order has been placed successfully. Your invoice id - {{ $order->invoice_id }}

Your order details is as bellow.
<table>
    <tr>
        <th>Id</th>
        <th>Item</th>
        <th>Quantity</th>
        <th>Price</th>
        <th>Subtotal</th>
    </tr>
    @foreach($order->orderDetails as $id=>$orderDetails)
        <tr>
            <td>{{ ++$id }}</td>
            <td>{{ $orderDetails->product_name }}</td>
            <td>{{ $orderDetails->quantity }}</td>
            <td>{{ $orderDetails->unit_price }}</td>
            <td>{{ $orderDetails->sub_total }}</td>
        </tr>
    @endforeach
    <tr>
        <td></td>
        <td></td>
        <th>Total</th>
        <td>=</td>
        <td>{{ $order->total_amount }}</td>
    </tr>
</table>

NB: Please payment for order confirmation.
@component('mail::button', ['url' => '#'])
Make Payment
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
