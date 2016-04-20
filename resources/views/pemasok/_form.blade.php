<div class="form-group">
    <label class="col-md-2 control-label" for="CompanyName">Company Name</label>
    <div class="col-md-4">
        <input type="text" class="form-control" id="CompanyName" name="CompanyName" value="{{ isset($supplier->CompanyName) ? $supplier->CompanyName : '' }}">
    </div>
</div>
<div class="form-group">
    <label class="col-md-2 control-label" for="ContactName">Contact Person</label>
    <div class="col-md-4">
        <input type="text" class="form-control" id="ContactName" name="ContactName" value="{{ isset($supplier->ContactName) ? $supplier->ContactName : '' }}">
    </div>
</div>
<div class="form-group">
    <label class="col-md-2 control-label" for="ContactTitle">Title</label>
    <div class="col-md-4">
        <input type="text" class="form-control" id="ContactTitle" name="ContactTitle" value="{{ isset($supplier->ContactTitle) ? $supplier->ContactTitle : '' }}">
    </div>
</div>
<div class="form-group">
    <label class="col-md-2 control-label" for="Address">Address</label>
    <div class="col-md-4">
        <input type="text" class="form-control" id="Address" name="Address" value="{{ isset($supplier->Address) ? $supplier->Address : '' }}">
    </div>
</div>
<div class="form-group">
    <label class="col-md-2 control-label" for="City">City</label>
    <div class="col-md-2">
      <input type="text" class="form-control" id="City" name="City" value="{{ isset($supplier->City) ? $supplier->City : '' }}">
    </div>
</div>
<div class="form-group">
    <label class="col-md-2 control-label" for="Region">Region</label>
    <div class="col-md-2">
      <input type="text" class="form-control" id="Region" name="Region" value="{{ isset($supplier->Region) ? $supplier->Region : '' }}">
    </div>
</div>
<div class="form-group">
    <label class="col-md-2 control-label" for="PostalCode">Postal Code</label>
    <div class="col-md-2">
        <input type="text" class="form-control" id="PostalCode" name="PostalCode" value="{{ isset($supplier->PostalCode) ? $supplier->PostalCode : '' }}">
    </div>
</div>
<div class="form-group">
    <label class="col-md-2 control-label" for="Country">Country</label>
    <div class="col-md-2">
        <input type="text" class="form-control" id="Country" name="Country" value="{{ isset($supplier->Country) ? $supplier->Country : '' }}">
    </div>
</div>
<div class="form-group">
    <label class="col-md-2 control-label" for="Phone">Phone</label>
    <div class="col-md-3">
        <input type="text" class="form-control" id="Phone" name="Phone" value="{{ isset($supplier->Phone) ? $supplier->Phone : '' }}">
    </div>
</div>
<div class="form-group">
    <label class="col-md-2 control-label" for="Fax">Fax</label>
    <div class="col-md-3">
        <input type="text" class="form-control" id="Fax" name="Fax" value="{{ isset($supplier->Fax) ? $supplier->Fax : '' }}">
    </div>
</div>
<div class="form-group">
    <label class="col-md-2 control-label" for="HomePage">HomePage</label>
    <div class="col-md-4">
        <input type="text" class="form-control" id="HomePage" name="HomePage" value="{{ isset($supplier->HomePage) ? $supplier->HomePage : '' }}">
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-1 col-md-6">
        @if (strpos(URL::current(), 'supplier/create') !== false)
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
