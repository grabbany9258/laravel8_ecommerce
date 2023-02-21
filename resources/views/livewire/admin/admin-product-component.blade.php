<div>
  <div class="container" style="padding: 30px 0;">
    <div class="row">
      <div class="col-md-12">
        <div class="panel panel-default">
          <div class="panel-heading">
            All Products

          </div>
          <div class="panel-body">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>Id</th>
                  <th>Image</th>
                  <th>Name</th>
                  <th>Stock</th>
                  <th>Price</th>
                  <th>category</th>
                  <th>Date</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($products as $product)
                  <tr>
                    <td>{{ $product->id }}</td>
                    <td> <img src="{{ asset('assets/images/products') }}/{{ $product->image }}" width="60"> </td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->stock_status }}</td>
                    <td>{{ $product->regular_price }}</td>
                    <td>{{ $product->category->name }}</td>
                    <td>{{ $product->category->name }}</td>
                    <td>{{ $product->created_at }}</td>
                  </tr>
                @endforeach
              </tbody>
            </table>
            {{ $products->links() }}
            {{ $products->links('vendor.pagination.bootstrap-4') }}

          </div>
        </div>
      </div>
    </div>
  </div>
</div>