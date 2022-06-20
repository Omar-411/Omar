@extends('layouts.main')

@section('title', 'Edit Product')
@section('cssLinks')

@endsection


@section('mainContent')
    <div class="col-12">
        @include('partials.message')

        <form action="{{ route('dashboard.products.updateProduct', ['id' => $products->id]) }}" enctype="multipart/form-data" method="post">
            @method('PUT')
            @csrf
            <div class="card">
                <div class="card-header bg-info">
                    @yield('title')
                </div>
                <div class="card-body">
                    <div class="form-row my-1">

                        {{-- @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif --}}

                        <div class="col-6">
                            <label for="name_ar">Arabic Name</label>
                            <input type="text" name="name_ar" id="name_ar" class="form-control"
                                value="{{ $products->name_ar }}">
                            @error('name_ar')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-6">
                            <label for="name_en">English Name</label>
                            <input type="text" name="name_en" id="name_en" class="form-control"
                                value="{{ $products->name_en }}">
                            @error('name_en')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="form-row my-1">
                        <div class="col-4">
                            <label for="price">Price</label>
                            <input type="number" name="price" id="price" class="form-control"
                                value="{{ $products->price }}">
                            @error('price')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-4">
                            <label for="quantity">Quantity</label>
                            <input type="number" name="quantity" id="quantity" class="form-control"
                                value="{{ $products->quantity }}">

                        </div>
                        <div class="col-4">
                            <label for="name_en">Code</label>
                            <input type="number" name="code" id="code" class="form-control"
                                value="{{ $products->code }}">

                            @error('code')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="form-row my-1">
                        <div class="col-4">
                            <label for="name_en">Status</label>
                            <select name="status" id="Status" class="form-control">

                                @foreach ($status as $key => $value)
                                    <option @selected($products->status == $key) value="{{ $key }}">{{ $value }}
                                    </option>
                                @endforeach
                            </select>
                            @error('Status')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror

                        </div>
                        <div class="col-4">
                            <label for="brand_id">Brands</label>
                            <select name="brand_id" id="brand_id" class="form-control">

                                @foreach ($brands as $brand)
                                    <option @selected($products->brand_id == $brand->id) value="{{ $brand->id }}">
                                        {{ $brand->name_en . '-' . $brand->name_ar }}
                                    </option>
                                @endforeach
                            </select>
                            @error('brand_id')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror


                        </div>
                        <div class="col-4">

                            <label for="sub_category_id">Sub Categories</label>
                            <select name="sub_category_id" id="sub_category_id" class="form-control">

                                @foreach ($sub_categories as $sub_category)
                                    <option @selected($products->sub_category_id == $sub_category->id) value="{{ $sub_category->id }}">
                                        {{ $sub_category->name_en . '-' . $sub_category->name_ar }}
                                    </option>
                                @endforeach
                            </select>
                            @error('sub_category_id')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror

                        </div>
                    </div>

                    <div class="form-row mt-1">
                        <div class="col-6">
                            <label for="desc_ar">Arabic Details</label>
                            <textarea name="desc_ar" id="desc_ar" class="form-control" cols="30"
                                rows="10">{{ $products->desc_ar }}</textarea>
                            @error('desc_ar')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror

                        </div>
                        <div class="col-6">
                            <label for="desc_en">English Details</label>
                            <textarea name="desc_en" id="desc_en" class="form-control" cols="30"
                                rows="10">{{ $products->desc_en }}</textarea>
                            @error('desc_en')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror

                        </div>
                    </div>

                    <div class="form-row mt-1">
                        <div class="col-4">
                            <label for="image">
                                Upload Product Image
                                <img src="{{ asset('assets/images/products/'.$products->image )}}" id="img" style="cursor: pointer;"
                                    class="w-100" alt="Upload Image">
                            </label>
                            <input type="file" name="image" id="image" class="d-none" onchange="loadFile(event)">
                            @error('image')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="card-footer text-muted">
                    <button class="btn btn-outline-info btn-sm rounded" name="redirect" value="index"> Update </button>                </div>
            </div>
        </form>
    </div>
@endsection




@section('jsLinks')
    <script>
        var loadFile = function(event) {
            var output = document.getElementById('img');
            output.src = URL.createObjectURL(event.target.files[0]);
            output.onload = function() {
                URL.revokeObjectURL(output.src) // free memory
            }
        };
    </script>
@endsection
