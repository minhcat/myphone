<div class="box box-info collapsed-box">
    <div class="box-header with-border">
        <h4 class="box-title text-4">Search</h4>
        <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
        </div>
    </div>
    <div class="box-body">
        <form action="{{ route('brands.index') }}" method="GET" autocomplete="off">
        <div class="row">
            <div class="col-xs-3">
                <div class="form-group">
                    <label for="nameInput">Name</label>
                    <input type="text" class="form-control" id="nameInput" name="name" value="{{ request('name') }}">
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
                        <option value="">All</option>
                        <option value="">Admin1</option>
                        <option value="">Admin2</option>
                        <option value="">Admin3</option>
                    </select>
                </div>
            </div>
            <div class="col-xs-3">
                <div class="form-group">
                    <label for="startDateInput">Start Date</label>
                    <div class="input-group date">
                        <div class="input-group-addon">
                            <i class="fa fa-calendar"></i>
                        </div>
                        <!-- Todo: old input to start date -->
                        <input type="text" class="form-control" id="startDateInput" name="created_at[]" value="{{ request('created_at')[0] }}">
                    </div>
                </div>
            </div>
            <div class="col-xs-3">
                <div class="form-group">
                    <label for="EndDateInput">End Date</label>
                    <div class="input-group date">
                        <div class="input-group-addon">
                            <i class="fa fa-calendar"></i>
                        </div>
                        <!-- Todo: old input to end date -->
                        <input type="text" class="form-control" id="endDateInput" name="created_at[]" value="{{ request('created_at')[1] }}">
                    </div>
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