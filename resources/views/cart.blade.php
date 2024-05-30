<style>
    /* CSS for the Cart Table */
#cart {
    width: 100%;
    border-collapse: collapse;
    margin: 20px 0;
    font-size: 18px;
    text-align: left;
}

#cart thead th {
    background-color: #f4f4f4;
    border: 1px solid #ddd;
    padding: 10px;
}

#cart tbody td {
    border: 1px solid #ddd;
    padding: 10px;
    vertical-align: middle;
}

#cart tbody tr:nth-child(even) {
    background-color: #f9f9f9;
}

#cart tbody tr:nth-child(odd) {
    background-color: #fff;
}

#cart .row {
    display: flex;
    align-items: center;
}

#cart .col-sm-3 {
    flex: 0 0 25%;
    max-width: 25%;
}

#cart .col-sm-9 {
    flex: 0 0 75%;
    max-width: 75%;
}

#cart img.card-img-top {
    max-width: 100%;
    height: auto;
    display: block;
    margin: auto;
}

#cart h4.nomargin {
    margin: 0;
    padding: 0;
}

#cart input[type="number"] {
    width: 70px;
    margin: 0 auto;
    text-align: center;
    border: 1px solid #ccc;
    border-radius: 4px;
    padding: 5px;
    font-size: 16px;
    -moz-appearance: textfield;
}

#cart input[type="number"]::-webkit-outer-spin-button,
#cart input[type="number"]::-webkit-inner-spin-button {
    -webkit-appearance: none;
    margin: 0;
}

#cart .actions {
    text-align: center;
}

#cart .btn {
    padding: 5px 10px;
    font-size: 16px;
}

</style>
@extends('layouts.base')
@section('content')
<table id="cart" class="table table-bordered">
    <thead>
        <tr>
            <th>Product</th>
            <th>Price</th>
            <th>Quantity</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @if (session('cart'))
            @foreach (session('cart') as $id => $details)
                <tr rowId="{{ $id }}">
                    <td data-th="Product">
                        <div class="row">
                            <div class="col-sm-3 hidden-xs">
                                <img src="{{ asset('images') }}/{{ $details['image'] }}" class="card-img-top"/>
                            </div>
                            <div class="col-sm-9">
                                <h4 class="nomargin">{{ $details['name'] }}</h4>
                            </div>
                        </div>
                    </td>
                    <td data-th="Price">${{ $details['price'] }}</td>
                    <td data-th="Quantity" class="text-center">
                        <input type="number" class="form-control text-center quantity" value="{{ $details['quantity'] }}" min="1"/>
                    </td>
                    <td class="actions">
                        <button class="btn btn-outline-danger btn-sm delete-product">DELETE</button>
                    </td>
                </tr>
            @endforeach
        @endif
    </tbody>
</table>
@endsection

@section('scripts')
<script type="text/javascript">
  $(document).ready(function() {
    $(".delete-product").click(function(e) {
        e.preventDefault();

        var ele = $(this); 

        if (confirm("Do you really want to delete?")) {
            $.ajax({
                url: '{{ route('delete.cart.product') }}',
                type: 'DELETE',
                data: {
                    _token: '{{ csrf_token() }}',
                    id: ele.parents("tr").attr("rowId")
                },
                success: function(response) {
                    window.location.reload();
                },
                error: function(xhr) {
                    console.log(xhr.responseText); // For debugging
                }
            });
        }
    });
  });
</script>
@endsection
