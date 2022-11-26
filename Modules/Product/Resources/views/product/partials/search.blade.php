<div class="box box-info {{ $isSearch ? '' : 'collapsed-box' }}">
    <div class="box-header with-border">
        <h4 class="box-title text-4">Search</h4>
        <div class="box-tools pull-right">
            <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i></button>
        </div>
    </div>
    <div class="box-body">
        <form action="{{ route('products.index') }}" method="GET" autocomplete="off">
            <div class="row">
                <div class="col-xs-3">
                    <div class="form-group">
                        <label for="nameInput">Name</label>
                        <input type="text" class="form-control" id="nameInput" name="name" value="{{ request('name') }}">
                    </div>
                </div>
                <div class="col-xs-3">
                    <div class="form-group">
                        <label for="brandInput">Brand</label>
                        <select name="brand_id" id="brandInput" class="form-control select2-nosearch" style="width: 100%;">
                            @if (request('brand_id') == null)
                            <option value="" selected="selected">All</option>
                            @else
                            <option value="">All</option>
                            @endif

                            @foreach ($brands as $brand)
                                @if (request('brand_id') !== null && request('brand_id') == $brand->id)
                                <option value="{{ $brand->id }}" selected="selected">{{ $brand->name }}</option>
                                @else
                                <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-xs-3">
                    <div class="form-group">
                        <label for="categoryInput">Category</label>
                        <select name="category_id" id="categoryInput" class="form-control select2-nosearch" style="width: 100%;">
                            @if (request('category_id') == null)
                            <option value="" selected="selected">All</option>
                            @else
                            <option value="">All</option>
                            @endif

                            @foreach ($categories as $category)
                                @if (request('category_id') !== null && request('category_id') == $category->id)
                                <option value="{{ $category->id }}" selected="selected">{{ $category->name }}</option>
                                @else
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-xs-3">
                    <div class="form-group">
                        <label for="showInput">Show</label>
                        <select name="is_show" id="showInput" class="form-control select2-nosearch" style="width: 100%;">
                            @if (request('is_show') == null)
                            <option value="" selected="selected">All</option>
                            @else
                            <option value="">All</option>
                            @endif

                            @foreach (ShowState::list() as $state => $label)
                                @if (request('is_show') !== null && request('is_show') == $state)
                                <option value="{{ $state }}" selected="selected">{{ $label }}</option>
                                @else
                                <option value="{{ $state }}">{{ $label }}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-xs-3">
                    <div class="form-group">
                        <label for="lockInput">Lock</label>
                        <select name="is_lock" id="lockInput" class="form-control select2-nosearch" style="width: 100%;">
                            @if (request('is_lock') == null)
                            <option value="" selected="selected">All</option>
                            @else
                            <option value="">All</option>
                            @endif

                            @foreach (LockState::list() as $state => $label)
                                @if (request('is_lock') !== null && request('is_lock') == $state)
                                <option value="{{ $state }}" selected="selected">{{ $label }}</option>
                                @else
                                <option value="{{ $state }}">{{ $label }}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-xs-3">
                    <div class="form-group">
                        <label for="createdByInput">Created by</label>
                        <select name="created_by" id="createdByInput" class="form-control select2-nosearch" style="width: 100%;">
                            @if (request('created_by') == null)
                            <option value="" selected="selected">All</option>
                            @else
                            <option value="">All</option>
                            @endif

                            @foreach ($users as $user)
                                @if (request('created_by') !== null && request('created_by') == $user->id)
                                <option value="{{ $user->id }}" selected="selected">{{ $user->name }}</option>
                                @else
                                <option value="{{ $user->id }}">{{ $user->name }}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-xs-3">
                    <div class="form-group">
                        <label for="startDateInput">Date Range</label>
                        <div class="input-group date">
                            <div class="input-group-addon">
                                <i class="fa fa-calendar"></i>
                            </div>
                            <!-- Todo: old input to start date -->
                            <input type="text" class="form-control" id="reservation" name="created_at" value="{{ request('created_at') }}">
                        </div>
                    </div>
                </div>
                <div class="col-xs-3">
                    <div class="form-group">
                        <label for="trashSelect">Deleted</label>
                        <!-- todo: name to use list config -->
                        <select name="trashed" id="trashSelect" class="form-control select2-nosearch" style="width: 100%;">
                            <option value="false">Untrash</option>
                            <option value="true" {{ request('trashed') && request('trashed') == 'true' ? 'selected' : '' }}>Trash Only</option>
                        </select>
                    </div>
                </div>
                <div class="col-xs-12">
                    <button class="btn btn-info"><i class="fa fa-search"></i> Search</button>
                    <button class="btn btn-default reset" type="button"><i class="fa fa-undo"></i> Reset</button>
                </div>
            </div>
        </form>
    </div>
</div>