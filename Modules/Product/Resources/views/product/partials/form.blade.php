<!-- <form action="{{ $type == 'create' ? route('products.store') : route('products.update', optional($product)->id) }}" method="POST"> -->
<form action="{{ $action }}" method="{{ $method }}">
    @if ($method !== 'GET')
        <!-- todo -->
        @csrf
    @endif

    @if ($type == 'update')
        @method('PUT')
    @endif

    @php
        $disabled = $disabled ?? false;
    @endphp
    <div class="box-body p-5">
        <!-- Box Create/Edit -->
        <div class="form-group">
            <label for="nameInput">Name*</label>
            <input type="text" class="form-control" id="nameInput" name="name" value="{{ optional($product)->name }}" {{ $disabled ? 'disabled' : '' }}>
        </div>
        <div class="form-group">
            <label for="brandInput">Brand*</label>
            <select class="form-control select2" name="brand_id" id="brandSelect" style="width: 100%;" {{ $disabled ? 'disabled' : '' }}>
                @foreach ($brands as $brand)
                    @if (optional($product)->brand_id == $brand->id)
                        <option value="{{ $brand->id }}" selected="selected">{{ $brand->name }}</option>
                    @else
                        <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                    @endif
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="skuInput">SKU*</label>
            <input type="text" class="form-control" id="skuInput" name="sku" value="{{ optional($product)->sku ?: 'APX-22001' }}">
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="form-group">
                    <label for="regularPriceInput">Regular Price*</label>
                    <input type="text" class="form-control" id="regularPriceInput" name="price" value="{{ optional($product)->regular_price }}" {{ $disabled ? 'disabled' : '' }}>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group">
                    <label for="salePriceInput">Sale Price</label>
                    <input type="text" class="form-control" id="salePriceInput" name="price" value="{{ optional($product)->sale_price }}" {{ $disabled ? 'disabled' : '' }}>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="stockQuantity">Stock Quantity</label>
            <input type="number" class="form-control" id="stockQuantity" name="price" {{ $disabled ? 'disabled' : '' }} value="{{ optional($product)->stock_quantity }}">
        </div>
        <div class="form-group">
            <label for="descriptionInput">Description</label>
            <textarea class="form-control" id="{{ $disabled ? 'descriptionInputDisabled' : 'descriptionInput' }}" rows="5" cols="80" name="description" {{ $disabled ? 'disabled' : '' }}>
            {!! optional($product)->description !!}
            </textarea>
        </div>
    </div>
    <div class="box-footer">
        <!-- <button class="btn btn-info"><i class="fa fa-save"></i> {{ $type == 'create' ? 'Create' : 'Edit' }}</button> -->
        @if ($primaryButton['show'])
            @if ($primaryButton['type'] == 'button')
                <button class="btn {{ $primaryButton['class'] }}"><i class="fa {{ $primaryButton['icon'] }}"></i> {{ $primaryButton['label'] }}</button>
            @else
                <a href="{{ $primaryButton['link'] }}" class="btn {{ $primaryButton['class'] }}"><i class="fa {{ $primaryButton['icon'] }}"></i> {{ $primaryButton['label'] }}</a>
            @endif
        @endif
        @if ($secondaryButton['show'])
            @if ($secondaryButton['type'] == 'button')
                <button type="button" class="btn {{ $secondaryButton['class'] }}"><i class="fa {{ $secondaryButton['icon'] }}"></i> {{ $secondaryButton['label'] }}</a>
            @else
                <a href="{{ route('products.index') }}" class="btn {{ $secondaryButton['class'] }}"><i class="fa {{ $secondaryButton['icon'] }}"></i> {{ $secondaryButton['label'] }}</a>
            @endif
        @endif
    </div>
</form>
