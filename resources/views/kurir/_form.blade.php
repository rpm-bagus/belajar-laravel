<div class="form-group">
    <label class="col-md-2 control-label" for="CompanyName">Company Name</label>
    <div class="col-md-4">
        <input type="text" class="form-control" id="CompanyName" name="CompanyName" value="{{ isset($shipper->CompanyName) ? $shipper->CompanyName : '' }}">
    </div>
</div>
<div class="form-group">
    <label class="col-md-2 control-label" for="Phone">Phone</label>
    <div class="col-md-3">
        <input type="text" class="form-control" id="Phone" name="Phone" value="{{ isset($shipper->Phone) ? $shipper->Phone : '' }}">
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-1 col-md-6">
        @if (strpos(URL::current(), 'shipper/create') !== false)
            <button type="submit" class="btn btn-primary">
                <span class="glyphicon glyphicon-floppy-disk"></span> Tambah Baru
            </button>
        @else
            <button type="submit" class="btn btn-primary">
                <span class="glyphicon glyphicon-floppy-disk"></span> Simpan Perubahan
            </button>
        @endif

        <button class="btn btn-danger" onclick="goBack()">
            <span class="glyphicon glyphicon-trash"></span> Batal
        </button>
    </div>
</div>
