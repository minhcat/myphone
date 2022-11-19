<!-- Box Logs -->
<div class="box box-info mb-0">
    <div class="box-header with-border">
        <h4 class="box-title">Logs</h4>
        <div class="box-tools pull-right">
            <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i></button>
        </div>
    </div>
    <div class="box-body">
        <div class="row">
            <!-- Warning: $brand maybe undefined -->
            <form action="{{ route('brands.edit', $brand->id) }}" method="GET" autocomplete="off">
            <div class="col-xs-3">
                <div class="form-group">
                    <label for="accountInput">Account</label>
                    <select name="created_by" id="accountInput" class="form-control select2" style="width: 100%;">
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
                    <label for="startDateInput">Start Date</label>
                    <div class="input-group date">
                    <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                    </div>
                    <input type="text" class="form-control" id="startDateInput" alt="" name="created_at[0]" value="{{ optional($inputLogs)['created_at'][0] }}">
                    </div>
                </div>
            </div>
            <div class="col-xs-3">
                <div class="form-group">
                    <label for="startDateInput">End Date</label>
                    <div class="input-group date">
                    <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                    </div>
                    <input type="text" class="form-control" id="endDateInput" alt="" name="created_at[1]" value="{{ optional($inputLogs)['created_at'][1] }}">
                    </div>
                </div>
            </div>
            <div class="col-xs-3">
                <div class="form-group">
                    <label for="typeInput">Type</label>
                    <select name="type" id="typeInput" class="form-control select2-nosearch" style="width: 100%;">
                        @if (optional($inputLogs)['type'] === null)
                        <option value="" selected="selected">all</option>
                        @else
                        <option value="">all</option>
                        @endif

                        @foreach (ActionType::list() as $type => $label)
                            @if ($type == optional($inputLogs)['type'])
                            <option value="{{ $type }}" selected="selected">{{ $label }}</option>
                            @else
                            <option value="{{ $type }}">{{ $label }}</option>
                            @endif
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-xs-12">
                <button class="btn btn-info" type="submit"><i class="fa fa-search"></i> Search</button>
                <button class="btn btn-default reset" type="button"><i class="fa fa-undo"></i> Reset</button>
            </div>
            </form>
        </div>
        <table class="table table-bordered mt-5">
            <tbody>
                <tr>
                    <th>id</th>
                    <th>account</th>
                    <th>datetime</th>
                    <th>log</th>
                    <th>type</th>
                </tr>
                @foreach ($brandLogs as $key => $log)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <!-- todo -->
                    <td>Minh Cat</td>
                    <td>{{ $log->created_at->format(Helper::formatDate()) }}</td>
                    <td>{{ Helper::shortString($log->log, 90) }}</td>
                    <td>{{ ActionType::label($log->type) }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        @include('Adminlte.layout.paginate', ['paginator' => $brandLogs])
    </div>
</div>
<!-- /Box Logs -->