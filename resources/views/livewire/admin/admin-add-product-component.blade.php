<div>
  <style>
    .label {
      min-width: 200px !important;
      display: inline-block !important
    }
  </style>
  <div>
    <div class="container" style="padding: 30px 0;">
      <div class="row">
        <div class="col-md-12">
          <div class="panel panel-default">
            <div class="panel-heading">
              <div class="row">
                <div class="col-md-6">
                  Add New Product
                </div>
                <div class="col-md-6">
                  <a href="{{ route('admin.products') }}" class="btn btn-success pull-right">All Products</a>
                </div>
              </div>
            </div>
            <div class="panel-body">
              @if (Session::has('message'))
                <div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
              @endif
              <form class="form-horizontal" enctype="multipart/form-data" wire:submit.prevent="addProduct">

                <div class="form-group">
                  <label class="col-md-3 control-label">Product Name</label>
                  <div class="col-md-6">
                    <input type="text" placeholder="Product Name" class="form-control " wire:model="name"
                      wire:keyup="generateSlug" />
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-md-3 control-label">Product Slug</label>
                  <div class="col-md-6">
                    <input type="text" placeholder="Product Slug" class="form-control " wire:model="slug" />
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-md-3 control-label">Short Description</label>
                  <div class="col-md-6">
                    <textarea placeholder="Short Description" class="form-control " wire:model="short_description"></textarea>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-md-3 control-label">Description</label>
                  <div class="col-md-6">
                    <textarea placeholder="Description" class="form-control " wire:model="description"></textarea>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-md-3 control-label">Regular price</label>
                  <div class="col-md-6">
                    <input type="text" placeholder="Regular price" class="form-control" wire:model="regular_price" />
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-md-3 control-label">Sale price</label>
                  <div class="col-md-6">
                    <input type="text" placeholder="Sale price" class="form-control " wire:model="sale_price" />
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-md-3 control-label">SKU</label>
                  <div class="col-md-6">
                    <input type="text" placeholder="SKU" class="form-control " wire:model="SKU" />
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-md-3 control-label">Stock</label>
                  <div class="col-md-6">
                    <select class="form-control" wire:model="stock_status">
                      <option value="instock">InStock</option>
                      <option value="outofstock">Out Of Stock</option>
                    </select>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-md-3 control-label">Featured</label>
                  <div class="col-md-6">
                    <select class="form-control" wire:model="featured">
                      <option value="0">No</option>
                      <option value="1">Yes</option>
                    </select>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-md-3 control-label">Quantity</label>
                  <div class="col-md-6">
                    <input type="text" placeholder="Quantity" class="form-control " wire:model="quantity" />
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-md-3 control-label">Product Image</label>
                  <div class="col-md-6">
                    <input type="file" placeholder="Product Image" class="input-file" wire:model="image" />
                    @if ($image)
                      <img src="{{ $image->temporaryUrl() }}" width="120">
                    @endif
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-md-3 control-label">Category</label>
                  <div class="col-md-6">
                    <select class="form-control" wire:model="category_id">
                      <option value="" disabled selected>Select Category</option>
                      @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                      @endforeach
                    </select>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-md-3 control-label"></label>
                  <div class="col-md-6">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>
