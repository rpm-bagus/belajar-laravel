<div class="form-group {{$errors->has('CompanyName') ? 'has-error has-feedback' : '' }}">
    <label class="col-md-2 control-label" for="CompanyName">Company Name</label>
    <div class="col-md-4">
        <input type="text" class="form-control" id="CompanyName" name="CompanyName" value="{{ old('CompanyName') ? old('CompanyName') : (isset($shipper->CompanyName) ? $shipper->CompanyName : '') }}">
        <?php echo $errors->first('CompanyName', '<span class="glyphicon glyphion-remove form-control-feedback"></span><span class="help-block">:message</span>');?>
    </div>
</div>
<div class="form-group {{$errors->has('Phone') ? 'has-error has-feedback' : '' }}">
    <label class="col-md-2 control-label" for="Phone">Phone</label>
    <div class="col-md-3">
        <input type="text" class="form-control" id="Phone" name="Phone" value="{{ old('Phone') ? old('Phone') : (isset($shipper->Phone) ? $shipper->Phone : '') }}">
        <?php echo $errors->first('Phone', '<span class="glyphicon glyphion-remove form-control-feedback"></span><span class="help-block">:message</span>');?>
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
